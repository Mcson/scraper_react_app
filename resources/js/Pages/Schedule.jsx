import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import PlusButton from '@/Components/PlusButton';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faCalendarDays } from '@fortawesome/free-solid-svg-icons';
import SidebarLayout from '@/Components/SidebarLayout';
import {Tab, Card, CardBody} from "@nextui-org/react";
import TableComp from '@/Components/TableComp';

export default function Schedule() {
    return (
        <AuthenticatedLayout
            header={
                <div className='flex gap-x-8 relative'>
                    <h2 className="text-xl font-semibold float-start leading-tight text-gray-800">
                    <FontAwesomeIcon icon={faCalendarDays} className="text-blue-500 mr-2" /> Schedule
                    </h2>

                    <PlusButton classname="flex items-center justify-center w-8 h-8 bg-blue-600 text-white aspect-square hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300 absolute right-0"/>
                </div>
            }
        >
            <Head title="Collected Data" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden shadow-sm sm:rounded-lg">

                            <SidebarLayout>
                                <Tab 
                                    key="photos" 
                                    title={
                                        <>
                                            <FontAwesomeIcon icon={faCalendarDays} className="mr-2" /> Schedule
                                        </>
                                    }
                                >
                                    <TableComp/>
                                </Tab>
                                <Tab key="music" title="Another Tab">
                                    <Card>
                                    <CardBody>
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </CardBody>
                                    </Card>  
                                </Tab>
                                <Tab key="videos" title="Another Tab1">
                                    <Card>
                                    <CardBody>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </CardBody>
                                    </Card>  
                                </Tab>
                            </SidebarLayout>

                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
