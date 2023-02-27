<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\UsersGroup;
use App\Models\Transaction;

use Inertia\Inertia; 

class GroupController extends Controller 
{
    public function showGroups() {
        $groups = Group::all();

        return Inertia::render('Groups', ['groups' => $groups]);
    }

    public function showGroup($id) {
        $group = Group::with('adminUser')->where('id', $id)->first();

        if (!$group) return Inertia::render('Group', ['group' => null, 'users' => null]);

        $users = $group->users;

        $processedAmount = Transaction::where('group_id', $id)
        ->where('status', 'PROCESSED')
        ->sum('amount');

        $pendingAmount = Transaction::where('group_id', $id)
        ->where('status', 'PENDING')
        ->sum('amount');

        $transactions = Transaction::join('users as from_user', 'transactions.from', '=', 'from_user.id')
        ->join('users as to_user', 'transactions.to', '=', 'to_user.id')
        ->select('transactions.amount', 'transactions.status', 'transactions.created_at',
        'from_user.name as from_name', 'to_user.name as to_name')
        ->where('group_id', $id)
        ->get();

        $group->processedAmount = $processedAmount;
        $group->pendingAmount = $pendingAmount;
        $group->transactions = $transactions;

        return Inertia::render('Group', [
            'group' => $group, 
            'users' => $users, 
        ]);
    }
}
