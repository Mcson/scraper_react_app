import { Head, router } from '@inertiajs/react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faCalendarDays, faPlus } from '@fortawesome/free-solid-svg-icons';
import PrimaryButton from '@/Components/PrimaryButton';
import {Tab, Card, CardBody} from "@nextui-org/react";
import { useState } from 'react';
import CreateScheduleModal from '@/Components/Schedule/CreateScheduleModal';
import ScheduledProductsTable from '@/Components/Schedule/ScheduledProductsTable';

import PrimaryLayout from '@/Layouts/PrimaryLayout';


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

    const handlePageChange = (page) => {
        router.visit(route('schedule', {page}), {
            preserveScroll: true,
            preserveState: true
        })
    }

   
    return (
        <PrimaryLayout
            header={
                <div className='flex gap-x-8 justify-between'>
                    <h2 className="text-xl font-semibold float-start leading-tight text-gray-800">
                    <FontAwesomeIcon icon={faCalendarDays} className="text-primary-500 mr-2" /> 
                    Schedule Products
                    </h2>


                    <PrimaryButton className='lower-case' startContent={<FontAwesomeIcon icon={faPlus}/>} onPress={handleAddScheduleToggle}>Create Schedule</PrimaryButton>
                </div>
            }
        >
            <Head title="Collected Data" />

            <div className="py-12 min-h-[75vh]">
                <div className="h-full mx-auto max-w-7xl sm:px-6 lg:px-8">   
                
                <Card className="min-h-[75vh] p-3">
                <ScheduledProductsTable data={data} onPageChange={handlePageChange} onEditProduct={handleEditSchedule}/>
                </Card>

                </div>
                
            </div>
            <CreateScheduleModal 
                productsData={productsData}
                isAddSheduleModalOpen={isAddSheduleModalOpen} 
                handleAddScheduleToggle={handleAddScheduleToggle} 
                scheduleData={selectedSchedule}  // Pass selected schedule data for editing
                isEditing={isEditing}  // Pass editing mode flag
            />
        </PrimaryLayout>
    );
}
