import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faGears, faGlobe, faListCheck, faFolderOpen, faDownload, faFolderClosed } from '@fortawesome/free-solid-svg-icons';
import { CardBody, Card, } from "@nextui-org/react";
import { useState, useEffect } from "react";
import Scrape from './Scrape';
import RegisteredProductWebsite from './RegisteredProductWebsite';
import RegisterProductWebsite from './RegisterProductWebsite';

import Downloads from './Downloads';
import SideNav from '@/Components/SideNav';

export default function Scraper({ products }) {

    // console.log(products);    

    const [active, setActive] = useState("register_product_web");
    const [title, setTitle] = useState("Register Product");

    const navItem = [
        { id: 1, icon: faGlobe, title: "Register", subMenu:
            [
                { value: "register_product_web", title: "Register Product", icon: faFolderOpen },
                { value: "registered_product_web", title: "Registered Product", icon: faGlobe }
            ]
        },
        { id: 2, value: "scrape", title: "Scrape", icon: faGears },
        { id: 3, icon: faFolderClosed, title: "View Data", subMenu:
            [
                { value: "icp", title: "ICP", icon: faListCheck },
                { value: "non_icp", title: "Non-ICP", icon: faListCheck }
            ]
        },
        { id: 4, value: "downloads", title: "Downloads", icon: faDownload },
    ];

    // handle dynamic component rendering
    const handleDynamicComponent = (value) => {
            
        switch (value) {
            case 'register_product_web':
                return <RegisterProductWebsite products={products} />;
            case 'registered_product_web':
                return <RegisteredProductWebsite />;
            case 'scrape':
                return <Scrape />;
            case 'downloads':
                return <Downloads />;
            default:
                return <Card className="py-12"><CardBody>Component Not Found!</CardBody></Card>;
        }

    }

    useEffect(() => {
        handleDynamicComponent(active);
    }, [active]);

    return (
        <AuthenticatedLayout
            header={
                <div className='flex gap-x-8 justify-between relative'>
                    <h2 className="text-xl font-semibold float-start leading-tight text-gray-800">
                        <FontAwesomeIcon icon={faGears} className="text-primary-500 mr-2" /> {title} 
                    </h2>

                    {/* <Link
                        href={route('register.website')}
                       
                    >
                        <PrimaryButton className='lower-case' startContent={<FontAwesomeIcon icon={faPlus}/>}>Register</PrimaryButton>
                    </Link> */}
                </div>
            }
        >
            <Head title="Collected Data" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden shadow-sm sm:rounded-lg">

                        <SideNav setTitle={setTitle} setActive={setActive} active={active} navItem={navItem} handleDynamicComponent={handleDynamicComponent} />
                        
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
