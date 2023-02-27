import React from 'react';
import { Head } from '@inertiajs/inertia-react';
import GroupsList from '../components/GroupsList';

export default function Groups({ groups }) {
    return (
        <>
            <h1 className='text-2xl text-center py-4'>This is the list of groups</h1>
            <GroupsList groups={groups} />

        </>
    )
} 
