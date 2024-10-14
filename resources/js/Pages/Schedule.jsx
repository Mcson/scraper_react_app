import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, router } from '@inertiajs/react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faCalendarDays, faPlus } from '@fortawesome/free-solid-svg-icons';
import PrimaryButton from '@/Components/PrimaryButton';
import SidebarLayout from '@/Components/SidebarLayout';
import {Tab, Card, CardBody} from "@nextui-org/react";
import { useState, useEffect } from 'react';
import CreateScheduleModal from '@/Components/Schedule/CreateScheduleModal';
import ScheduledProductsTable from '@/Components/Schedule/ScheduledProductsTable';


export default function Schedule({data, productsData}) {
    const [isAddSheduleModalOpen, setAddSheduleModalOpen] = useState(false);
    const [selectedSchedule, setSelectedSchedule] = useState(null); // State for selected schedule
    const [isEditing, setIsEditing] = useState(false); // State to track if it's in edit mode

    const handleAddScheduleToggle = (e) => {
        if (isAddSheduleModalOpen) {
            // Reset editing state and selected schedule when closing the modal
            setIsEditing(false);
            setSelectedSchedule(null);
        }
        setAddSheduleModalOpen(!isAddSheduleModalOpen)
    }

    const handleEditSchedule = (schedule) => {
        setSelectedSchedule(schedule); // Set the selected schedule to be edited
        setIsEditing(true); // Set editing mode to true
        setAddSheduleModalOpen(true); // Open the modal

    }

    // useEffect(() => {
    //     console.log(data)
    // })

   

    const [title, setTitle] = useState("Schedules");

    const handlePageChange = (page) => {
        router.visit(route('schedule', {page}), {
            preserveScroll: true,
            preserveState: true
        })
    }

   
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
                                    <Card className="min-h-[70vh] p-3">

                                    <ScheduledProductsTable data={data} onPageChange={handlePageChange} onEditProduct={handleEditSchedule}/>

                                    
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
                productsData={productsData}
                isAddSheduleModalOpen={isAddSheduleModalOpen} 
                handleAddScheduleToggle={handleAddScheduleToggle} 
                scheduleData={selectedSchedule}  // Pass selected schedule data for editing
                isEditing={isEditing}  // Pass editing mode flag
            />
        </AuthenticatedLayout>
    );
}
