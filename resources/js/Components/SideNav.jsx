import React from "react";
import { Button, Accordion, AccordionItem } from "@nextui-org/react";
import { Link } from "@inertiajs/react";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

export default function SideNav({item, active=false}){
    const isSubmenuActive = item.submenus?.some(submenu => route().current(submenu.href));

    const itemClasses = {
        trigger:"z-0 relative group px-4 rounded-xl flex justify-start h-10 data-[hover=true]:bg-default/40 data-[pressed=true]:scale-[0.97] motion-reduce:transition-none  transition-transform-colors-opacity" + (isSubmenuActive ? " bg-default/40" : ""),
        title: "text-medium text-textGray group-hover:text-white group-focus:text-white" + (isSubmenuActive ? " text-white" : ""),
        indicator: "text-medium text-textGray group-hover:text-white group-focus:text-white" + (isSubmenuActive ? " text-white" : ""),
        heading:"text-medium text-textGray group-hover:text-white group-focus:text-white"  + (isSubmenuActive ? " text-white" : ""),
        startContent:"text-textGray group-hover:text-white group-focus:text-white"  + (isSubmenuActive ? " text-white" : ""),
    }

    return (item.submenus && item.submenus.length > 0 ? (
                    <Accordion
                        className="px-0"    
                        itemClasses={itemClasses}
                    >
                        <AccordionItem
                            title={item.title}
                            startContent={<FontAwesomeIcon icon={item.icon} />}
                        >
                        {
                            item.submenus.map((submenu) => {
                                const isSubmenuItemActive = route().current(submenu.href);
                                return (
                                    <Button
                                        key={submenu.id}
                                        href={route(submenu.href)}
                                        as={Link}
                                        variant="light"
                                        className={`w-full text-medium text-textGray flex justify-start hover:text-white mb-1${isSubmenuItemActive ? "bg-default/40 text-white" : "text-textGray hover:text-white"}`}
                                        startContent={<FontAwesomeIcon icon={submenu.icon} />}
                                    >
                                        {submenu.title}
                                    </Button>
                                )
                            })
                        }

                        </AccordionItem>

                    </Accordion>
                ) : (
                    <Button href={route(item.href)} as={Link} variant='light' className={`w-full text-medium flex justify-start ${active ? 'bg-default/40 text-white' : 'text-textGray hover:text-white'}`} startContent={<FontAwesomeIcon icon={item.icon} className='mr-1'/>}>{item.title}</Button>
                )        
    )
    
}
