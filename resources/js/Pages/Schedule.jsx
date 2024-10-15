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
import SideNav from '@/Components/SideNav';


export default function Schedule({data, productsData}) {
    const [isAddSheduleModalOpen, setAddSheduleModalOpen] = useState(false);
    const [selectedSchedule, setSelectedSchedule] = useState(null); // State for selected schedule
    const [isEditing, setIsEditing] = useState(false); // State to track if it's in edit mode
    const [active, setActive] = useState("schedule_products");
    const [title, setTitle] = useState("Schedule Products");

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

    const navItem = [
        {id: 1, icon: faCalendarDays, title: "Schedule Products", value:"schedule_products"}
    ];

    const handleDynamicComponent = (value) => {
        switch (value) {
            case 'schedule_products':
                return <div className="h-full">
                <Card className="min-h-[70vh] p-3">
                <ScheduledProductsTable data={data} onPageChange={handlePageChange} onEditProduct={handleEditSchedule}/>
                </Card>

            </div>;
            default:
                return <Card className="py-12"><CardBody>Component Not Found!</CardBody></Card>;
        }
    }

    useEffect(() => {
        handleDynamicComponent(active);
    }, [active]);



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
                        <SideNav setTitle={setTitle} setActive={setActive} active={active} navItem={navItem} handleDynamicComponent={handleDynamicComponent}/>
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
