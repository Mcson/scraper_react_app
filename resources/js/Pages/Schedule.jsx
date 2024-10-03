import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import NavLink from '@/Components/NavLink';
import PlusButton from '@/Components/PlusButton';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faCalendarDays, faPlus } from '@fortawesome/free-solid-svg-icons';
import PrimaryButton from '@/Components/PrimaryButton';

export default function Schedule() {
    return (
        <AuthenticatedLayout
            header={
                <div className='flex gap-x-8 justify-between'>
                    <h2 className="text-xl font-semibold float-start leading-tight text-gray-800">
                    <FontAwesomeIcon icon={faCalendarDays} className="text-primary-500 mr-2" /> Schedule
                    </h2>

                    {/* <PlusButton classname="flex items-center justify-center w-8 h-8 bg-primary-600 text-white aspect-square hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-300 absolute right-0"/> */}
                    <PrimaryButton isIconOnly><FontAwesomeIcon icon={faPlus}/></PrimaryButton>
                </div>
            }
        >
            <Head title="Collected Data" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
