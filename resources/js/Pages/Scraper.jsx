import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import NavLink from '@/Components/NavLink';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faGears } from '@fortawesome/free-solid-svg-icons';
import PlusButton from '@/Components/PlusButton';

export default function Scraper() {
    return (
        <AuthenticatedLayout
            header={
                <div className='flex gap-x-8 relative'>
                    <h2 className="text-xl font-semibold float-start leading-tight text-gray-800">
                    <FontAwesomeIcon icon={faGears} className="text-primary-500 mr-2" />    Data Collected 
                    </h2>

                    <NavLink
                        href={route('register.website')}
                        active={route().current('register.website')}
                        className='float-right absolute right-0'
                    >
                    <PlusButton classname="flex items-center justify-center w-5 h-5 "/>
                    Register
                    </NavLink>
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
