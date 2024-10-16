import PrimaryLayout from "@/Layouts/PrimaryLayout";
import { Head, router } from '@inertiajs/react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faListCheck } from '@fortawesome/free-solid-svg-icons';
import {Card} from "@nextui-org/react";
import ViewIcpTable from "@/Components/ICP/ViewIcpTable";

export default function ICP({icp}) {
    
    const handlePageChange = (page) => {
        router.visit(route('icp', {page}), {
            preserveScroll: true,
            preserveState: true
        })
    }
    return (
        <PrimaryLayout
            header={
                <div className='flex gap-x-8 justify-between'>
                    <h2 className="text-xl font-semibold float-start leading-tight text-gray-800">
                    <FontAwesomeIcon icon={faListCheck} className="text-primary-500 mr-2" /> ICP Data
                    </h2>
                </div>
            }
        >
        <Head title="ICP Data" />
        <div className="py-12 min-h-[75vh]">
                <div className="h-full mx-auto max-w-7xl sm:px-6 lg:px-8">   
                
                <Card className="min-h-[75vh] p-3">
                <ViewIcpTable data={icp} onPageChange={handlePageChange}/>
                </Card>

                </div>
                
            </div>
        </PrimaryLayout>
    )
}