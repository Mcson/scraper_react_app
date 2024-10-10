import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import PlusButton from '@/Components/PlusButton';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faCalendarDays, faPlus, faPenToSquare, faTrashCan } from '@fortawesome/free-solid-svg-icons';
import PrimaryButton from '@/Components/PrimaryButton';
import SidebarLayout from '@/Components/SidebarLayout';
import {Tab, Card, CardBody} from "@nextui-org/react";
import TableComp from '@/Components/TableComp';
import { useState, useEffect } from 'react';
import CreateScheduleModal from '@/Components/Schedule/CreateScheduleModal';
import { Tooltip } from '@nextui-org/react';


export default function Schedule({data}) {
    const [isAddSheduleModalOpen, setAddSheduleModalOpen] = useState(false);

    const handleAddScheduleToggle = (e) => {
        setAddSheduleModalOpen(!isAddSheduleModalOpen)
    }

    useEffect(() => {
        console.log('data:', data);
    },[data])

    const [title, setTitle] = useState("Schedules");

    // dummy datas with test actions
    const tableHeader = [
        // { label: 'ID', field: 'id' },
        { label: 'TITLE', field: 'title' },
        { label: 'DATE', field: 'date' },
        { label: 'TIME(24 hours format)', field: 'time' },
        { label: 'FREQUENCY', field: 'frequency' },
        { label: 'PCODE', field: 'pcode' },
        {
            label: 'Actions', 
            field: 'actions',
            render: (td) => (
                <div className='flex gap-1'>
                    <Tooltip color="success" content="Edit">
                        <span className="text-lg text-success cursor-pointer active:opacity-50">
                            <FontAwesomeIcon icon={faPenToSquare} />
                        </span>
                    </Tooltip>
                    
                    <Tooltip color="danger" content="Delete">
                        <span className="text-lg text-danger cursor-pointer active:opacity-50">
                            <FontAwesomeIcon icon={faTrashCan} />
                        </span>
                    </Tooltip>
                </div>
            )
        }
    ];

   
    return (
        <AuthenticatedLayout
            header={
                <div className='flex gap-x-8 justify-between'>
                    <h2 className="text-xl font-semibold float-start leading-tight text-gray-800">
                    <FontAwesomeIcon icon={faCalendarDays} className="text-primary-500 mr-2" /> {title}
                    </h2>

                    {/* <PlusButton classname="flex items-center justify-center w-8 h-8 bg-primary-600 text-white aspect-square hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-300 absolute right-0"/> */}
                    <PrimaryButton className='lower-case' startContent={<FontAwesomeIcon icon={faPlus}/>} onPress={handleAddScheduleToggle}>Create Schedule</PrimaryButton>
                </div>
            }
        >
            <Head title="Collected Data" />

            <div className="py-12 min-h-[70vh]">
                <div className="h-full mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {/* <div className="overflow-hidden shadow-sm sm:rounded-lg"> */}

                            <SidebarLayout
                                titleState={setTitle}
                            >
                                <Tab 
                                    key="Schedules" 
                                    title={
                                        <>
                                            <FontAwesomeIcon icon={faCalendarDays} className="mr-2" /> Scheduled Products
                                        </>
                                    }
                                >
                                <div className="h-full">
                                    <Card className="max-h-[70vh] p-3">

                                    <TableComp removeWrapper tableHeader={tableHeader} tableData={data}/>
                                    </Card>

                                </div>
                                </Tab>
                                <Tab key="Another Tab" title="Another Tab">
                                    <Card className="h-full p-3">
                                    <CardBody>
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </CardBody>
                                    </Card>  
                                </Tab>
                                <Tab key="Another Tab1" title="Another Tab1">
                                    <Card className="h-full p-3">
                                    <CardBody>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </CardBody>
                                    </Card>  
                                </Tab>
                            </SidebarLayout>

                    {/* </div> */}
                </div>
            </div>
            <CreateScheduleModal 
                isAddSheduleModalOpen={isAddSheduleModalOpen} 
                handleAddScheduleToggle={handleAddScheduleToggle} 
            />
        </AuthenticatedLayout>
    );
}
