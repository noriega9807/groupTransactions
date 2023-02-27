import React from 'react';
import { formatDuration, formatDate } from '../utils/time';
export default function Groups({ groups }) {
    return (
        <div className='grid grid-cols-1 md:grid-cols-4 gap-4'>
            {groups && groups.map((group) => (
                <a href={`/groups/${group.id}`}>
                    <div className='py-2 px-4 border rounded-lg border-stone-400 bg-white'>
                        <p className='text-2xl pb-4'>{group?.name}</p>
                        <p className='text-base font-bold'>Amount: {group?.amount}</p>
                        <p className='text-base'>Status: {group?.status}</p>
                        <p className='text-base'>Starts at: {formatDate(group?.startingAt)}</p>
                        <p className='text-base'>Ends at: {formatDate(group?.endingAt)}</p>
                        <p className='text-xs pt-4'>Frequency: {formatDuration(group.frequency)}</p>
                    </div>
                </a>
            ))}
        </div>
    )
} 
