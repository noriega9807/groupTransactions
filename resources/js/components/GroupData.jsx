import React from 'react';
import { formatDate } from '../utils/time';

const statusColor = {
    PROCESSED: 'text-green-400',
    PENDING: 'text-yellow-300'
}
export default function GroupData({ group, users }) {
    return (
        <>
            <div className='flex justify-center gap-4 mt-12'> 
                <div className='py-2 px-4 h-fit border rounded-lg border-stone-400 bg-white'>
                    <h2 className='text-2xl text-center'>Group data</h2>
                    <p>Admin: {group?.admin_user?.name}</p>
                    <p>Processed amount : {group?.processedAmount}</p>
                    <p>Pending amount : {group?.pendingAmount}</p>
                    <p>Processed amount : {group?.processedAmount}</p>

                    <div className='mt-8'>
                        <p className='font-bold'>Members:</p> 
                        <ul>
                            { users.map((user) => (
                                <li key={user?.id}>{user.name}</li>
                            ))}
                        </ul>
                    </div>
                </div>
                <div className='py-2 px-4 h-fit border rounded-lg border-stone-400 bg-white'>
                    <h2 className='text-2xl text-center'>Group Transactions</h2>
                    <ul>
                    {group?.transactions.map((tansaction) => (
                        <li className='my-6'>
                            <p>Transaction</p>
                            <p>{`From ${tansaction.from_name} to ${tansaction.to_name}`}</p>
                            <p>Status: <span className={`${statusColor[tansaction.status]}`}> {tansaction.status} </span></p>
                            <p>Date: {formatDate(tansaction.created_at, true)}</p>
                        </li>
                    ))}
                    </ul>
                </div>
            </div>
        </>
    )
} 
