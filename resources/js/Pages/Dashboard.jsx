import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Dashboard() {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Tasks List
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900 flex gap-4">
                            <a href="/tasks" className="inline-block rounded bg-blue-600 px-4 py-2 text-white">
                                View Tasks
                            </a>
                            
                            <a href="/tasks/create" className="inline-block rounded bg-green-600 px-4 py-2 text-white ml-4">
                                Create Tasks
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}

