import React from 'react';
import GroupData from '../components/GroupData';

export default function Group({ group, users }) {
    return (
        <>
            <h1 className='text-3xl text-center'>{group?.name}</h1>
            {group ? (
                <GroupData group={group} users={users}/>
            ) : <p className='flex justify-center align-middle text-4xl'>A group with that id doesn't exist</p>}
        </>
    )
} 
