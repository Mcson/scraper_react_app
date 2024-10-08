import React from "react";
import {Accordion, AccordionItem} from "@nextui-org/react";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

export default function SideNav1({ setTitle, setActive, active, navItem, handleDynamicComponent }) {
  const itemClasses = {
    title: "text-default-500 text-sm",
    indicator: "text-sm",
    content: "text-default-500 text-sm px-2 text-nowrap",
  };
  
  return (
    <div className="flex gap-2 min-h-[70vh]">
        {/* sms navigation */}
        <div className="p-4 sm:rounded-lg bg-white min-w-[14rem] shadow-md">
            <ul className="flex flex-col gap-1">
                {
                    navItem.map((item, index)=>(
                        item.subMenu ?
                        <li key={index}>
                          <Accordion 
                            className="rounded hover:bg-gray-200 text-default-500" 
                            isCompact="true" 
                            itemClasses={itemClasses}
                          >
                            <AccordionItem
                              title={item.title}
                              aria-label={item.title}
                              startContent={<FontAwesomeIcon icon={item.icon} className="text-sm text-default-500 mr-[-4px]" />}
                            >
                              {
                                item.subMenu.map((subItem, subIndex)=>(
                                    <div 
                                      key={subIndex}
                                      className={`p-2 rounded hover:opacity-50 hover:cursor-pointer ${ active === subItem.value ? "bg-gray-100" : "" }`}
                                      onClick={()=>{setActive(subItem.value); setTitle(subItem.title)}}
                                    >
                                      <FontAwesomeIcon icon={subItem.icon} className=" mr-2" />{subItem.title}
                                    </div>
                                ))
                              }
                            </AccordionItem>
                          </Accordion>
                        </li> :
                        <li 
                            key={index}
                            className={`p-2 rounded text-sm text-default-500 hover:bg-gray-200 hover:cursor-pointer ${ active === item.value ? "bg-gray-100" : "" }`}
                            onClick={()=>{setActive(item.value); setTitle(item.title)}}
                        ><FontAwesomeIcon icon={item.icon} className="text-sm text-default-500 mr-2" />{ item.title }</li>
                    ))
                }
            </ul>
        </div>

        {/* dynamic content/component */}
        <div className="flex-1">
            { handleDynamicComponent(active) }
        </div>
    </div>
  );
}
       