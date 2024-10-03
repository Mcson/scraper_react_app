import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import NavLink from '@/Components/NavLink';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faGears } from '@fortawesome/free-solid-svg-icons';
import PlusButton from '@/Components/PlusButton';
import SidebarLayout from '@/Components/SidebarLayout';
import {Tab, Card, CardBody} from "@nextui-org/react";
import TableComp from '@/Components/TableComp';

export default function Scraper() {

    // dummy datas
    const tableHeader = [
        { label: 'Name', field: 'name' },
        { label: 'Age', field: 'age' },
        { label: 'Email', field: 'email' },
    ];

    const tableData = [
        { id: 1, name: 'John Doe', age: 28, email: 'john@example.com' },
        { id: 2, name: 'Jane Smith', age: 34, email: 'jane@example.com' },
        { id: 3, name: 'Sam Green', age: 25, email: 'sam@example.com' },
    ];

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
                    <div className="overflow-hidden shadow-sm sm:rounded-lg">

                        <SidebarLayout>
                            <Tab 
                                key="photos" 
                                title={
                                    <>
                                        <FontAwesomeIcon icon={faGears} className="mr-2" /> View Data
                                    </>
                                }
                            >
                                <TableComp tableHeader={tableHeader} tableData={tableData}/>
                            </Tab>
                            <Tab 
                                key="music"
                                title={
                                    <>
                                        <FontAwesomeIcon icon={faGears} className="mr-2" /> Scrape
                                    </>
                                }
                            >
                                <Card>
                                <CardBody>
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </CardBody>
                                </Card>  
                            </Tab>
                            <Tab 
                                key="videos"
                                title={
                                    <>
                                        <FontAwesomeIcon icon={faGears} className="mr-2" /> Register
                                    </>
                                }
                            >
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
