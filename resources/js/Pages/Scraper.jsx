import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faGears, faPlus, faTrashCan, faPenToSquare, faMagnifyingGlass, faEye } from '@fortawesome/free-solid-svg-icons';
import PrimaryButton from '@/Components/PrimaryButton';
import SidebarLayout from '@/Components/SidebarLayout';
import {Tab, Card, CardBody, Chip, Link, Tooltip } from "@nextui-org/react";
import TableComp from '@/Components/TableComp';

export default function Scraper() {

    // scapred dummy datas
    const scrapedDataTableHeader = [
        // change the field values, it needs to be identical with the column name from DB
        { label: 'Product Code', field: 'code' },
        { label: 'Product Name', field: 'name' },
        { 
            label: 'Url', 
            field: 'url',
            render: (td) => (
                <div className='text-center'>
                    <Tooltip color="primary" content="View Site">
                        <span className="text-lg text-primary cursor-pointer active:opacity-50" onClick={() => alert(`View ${td.name} specs`)}>
                            <FontAwesomeIcon icon={faEye} />
                        </span>
                    </Tooltip>
                </div>
            )
        },
        { label: 'Terms Url', field: 'terms_url' },
        { label: 'Scraped Title', field: 'title' },
        { label: 'Scraped Price', field: 'price' },
        { 
            label: 'Specifications', 
            field: 'specifications',
            render: (td) => (
                <div className='text-center'>
                    <Tooltip color="primary" content="View Specifications">
                        <span className="text-lg text-primary cursor-pointer active:opacity-50" onClick={() => alert(`View ${td.name} specs`)}>
                            <FontAwesomeIcon icon={faEye} />
                        </span>
                    </Tooltip>
                </div>
            )
        },
        { label: 'Date Scraped', field: 'date_scraped' },
        { 
            label: 'Action', 
            field: 'action',
            render: (td) => (
                <div className='flex gap-1'>
                    <Tooltip color="success" content="Scrape">
                        <span className="text-lg text-success cursor-pointer active:opacity-50" onClick={() => alert(`Editing ${td.name}`)}>
                            <FontAwesomeIcon icon={faPenToSquare} />
                        </span>
                    </Tooltip>
                    
                    <Tooltip color="danger" content="Delete">
                        <span className="text-lg text-danger cursor-pointer active:opacity-50" onClick={() => alert(`Deleting ${td.name}`)}>
                            <FontAwesomeIcon icon={faTrashCan} />
                        </span>
                    </Tooltip>
                </div>
            )
        },
    ];

    const scrapedDataTableData = [
        // must always gave id prop, it is used as key
        { id: 1, code: 1, name: 'John Doe', url: 28, terms_url: 'john.example.com', title: 'title', price: 'price', specifications: 'specifications', date_scraped: 'date_scraped' },
        { id: 2, code: 2, name: 'Jane Smith', url: 34, terms_url: 'jane.example.com', title: 'title', price: 'price', specifications: 'specifications', date_scraped: 'date_scraped' },
        { id: 3, code: 3, name: 'Sam Green', url: 25, terms_url: 'sam.example.com', title: 'title', price: 'price', specifications: 'specifications', date_scraped: 'date_scraped' },
    ];

    // registered dummy datas
    const registeredTableHeader = [
        // change the field values, it needs to be identical with the column name from DB
        { label: 'Product Code', field: 'code' },
        { label: 'Product Name', field: 'name' },
        { label: 'Url', field: 'url' },
        { label: 'Terms Url', field: 'terms_url' },
        { label: 'Title', field: 'title' },
        { label: 'Price', field: 'price' },
        { label: 'Outlet', field: 'outlet' },
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
        { label: 'Registered Date', field: 'registered' },
        { 
            label: 'Action', 
            field: 'action',
            render: (td) => (
                <div className='flex gap-1'>
                    <Tooltip color="success" content="Update">
                        <span className="text-lg text-success cursor-pointer active:opacity-50" onClick={() => alert(`Editing ${td.name}`)}>
                            <FontAwesomeIcon icon={faPenToSquare} />
                        </span>
                    </Tooltip>
                    
                    <Tooltip color="danger" content="Delete">
                        <span className="text-lg text-danger cursor-pointer active:opacity-50" onClick={() => alert(`Deleting ${td.name}`)}>
                            <FontAwesomeIcon icon={faTrashCan} />
                        </span>
                    </Tooltip>
                </div>
            )
        },
    ];

    const registeredTableData = [
        // must always gave id prop, it is used as key
        { id: 1, code: 1, name: 'John Doe', url: 28, terms_url: 'john.example.com', title: 'title', price: 'price', outlet: 'outlet', status: 'active', registered: 'registered' },
        { id: 2, code: 2, name: 'Jane Smith', url: 34, terms_url: 'jane.example.com', title: 'title', price: 'price', outlet: 'outlet', status: 'inactive', registered: 'registered' },
        { id: 3, code: 3, name: 'Sam Green', url: 25, terms_url: 'sam.example.com', title: 'title', price: 'price', outlet: 'outlet', status: 'pending', registered: 'registered' },
    ];

    return (
        <AuthenticatedLayout
            header={
                <div className='flex gap-x-8 justify-between relative'>
                    <h2 className="text-xl font-semibold float-start leading-tight text-gray-800">
                    <FontAwesomeIcon icon={faGears} className="text-primary-500 mr-2" />    Data Collected 
                    </h2>

                    <Link
                        href={route('register.website')}
                       
                    >
                    {/* <PlusButton classname="flex items-center justify-center w-5 h-5 "/>
                    Register */}
                    <PrimaryButton className='lower-case' startContent={<FontAwesomeIcon icon={faPlus}/>}>Register</PrimaryButton>
                    </Link>
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
                                <TableComp tableHeader={scrapedDataTableHeader} tableData={scrapedDataTableData}/>
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
                                <TableComp tableHeader={registeredTableHeader} tableData={registeredTableData}/>
                            </Tab>
                        </SidebarLayout>
                        
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
