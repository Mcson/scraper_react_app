import TableComp from "@/Components/TableComp";
import PrimaryLayout from "@/Layouts/PrimaryLayout";
import { faGlobe, faPenToSquare, faTrashCan } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { Card, Chip, Tooltip } from "@nextui-org/react";
import { Head, router } from '@inertiajs/react';

export default function RegisteredProductWebsite({ registered_products }) { // add props and pass data here

    // registered dummy datas
    const registeredTableHeader = [
        // change the field values, it needs to be identical with the column name from DB
        { label: 'Product Code', field: 'pcode' },
        { label: 'Product Name', field: 'pname' },
        { label: 'Url', field: 'url' },
        { label: 'Terms Url', field: 'terms_condition_url' },
        { label: 'Title', field: 'title' },
        { label: 'Price', field: 'price' },
        { label: 'Outlet', field: 'outlet_id' },
        {
          label: 'Status',
          key: 'status',
          render: (td) => {
            const statusStyles = {
                active: "success",
                inactive: "danger",
                pending: "warning",
            };
      
            return (
              <Chip className="capitalize" color={statusStyles[td.status]} size="sm" variant="flat">
                  {td.status}
              </Chip>
            );
          }
        },
        { label: 'Registered Date', field: 'created_at' },
        { 
            label: 'Action', 
            field: 'action',
            render: (td) => (
                <div className='flex gap-1'>
                    <Tooltip color="success" content="Update">
                        <span className="text-lg text-success cursor-pointer active:opacity-50" onClick={() => alert(`Editing ${td.pname}`)}>
                            <FontAwesomeIcon icon={faPenToSquare} />
                        </span>
                    </Tooltip>
                    
                    <Tooltip color="danger" content="Delete">
                        <span className="text-lg text-danger cursor-pointer active:opacity-50" onClick={() => alert(`Deleting ${td.pname}`)}>
                            <FontAwesomeIcon icon={faTrashCan} />
                        </span>
                    </Tooltip>
                </div>
            )
        },
    ];

    const handlePageChange = (page) => {
        router.visit(route('registered.product.website', {page}), {
            preserveScroll: true,
            preserveState: true
        })
    }

    return (
        <PrimaryLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                  <FontAwesomeIcon icon={faGlobe} className="text-primary-500 mr-2" />   Registered Product Website
                </h2>
            }
        >
            <Head title="Registered Product Website" />

            <div className="py-12 min-h-[75vh]">
                <div className="h-full mx-auto max-w-7xl sm:px-6 lg:px-8 overflow-y-auto">   
                    <Card className="max-h-[85vh] overflow-y-auto p-3">
                        <TableComp tableHeader={registeredTableHeader} tableData={registered_products} onPageChange={handlePageChange}/>
                    </Card>
                </div>
            </div>

        </PrimaryLayout>
    );
}
