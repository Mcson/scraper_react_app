import React from "react";
import {Accordion, AccordionItem} from "@nextui-org/react";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

export default function SideNav({ setTitle, setActive, active, navItem, handleDynamicComponent }) {

  
  return (
    <div className="flex gap-2 min-h-[70vh]">
        {/* sms navigation */}
        <div className="p-4 sm:rounded-lg bg-white min-w-[14rem] shadow-md">
            <ul className="flex flex-col gap-1">
                {
                    navItem.map((item, index)=> {
                       // Check if any submenu item is active
                    const isSubItemActive = item.subMenu && item.subMenu.some(subItem => active === subItem.value);

                    // Define itemClasses inside the loop where isSubItemActive is available
                    const itemClasses = {
                      trigger: "px-2 data-[hover=true]:bg-default/40 rounded-xl h-10 " + (isSubItemActive ? "bg-default/40" : ""),
                      title: "text-default-500 text-sm" + (isSubItemActive ? "text-default-900 text-sm" : ""),
                      indicator: "text-sm text-default-500 " + (isSubItemActive ? "text-default-900 text-sm" : ""),
                      content: "text-default-500 text-sm px-2 text-nowrap" + (isSubItemActive ? "text-default-900 text-sm" : ""),
                      startContent: "text-sm text-nowrap " + (isSubItemActive ? " text-default-900 text-sm" : " text-default-500 "),
                    };
                       return item.subMenu ?
                        <li key={index}>
                          <Accordion 
                            className="px-0" 
                            isCompact="true" 
                            itemClasses={itemClasses}
                          >
                            <AccordionItem
                              title={item.title}
                              aria-label={item.title}
                              startContent={<FontAwesomeIcon icon={item.icon} className="text-sm  mr-[-4px]" />}
                            >
                              {
                                item.subMenu.map((subItem, subIndex)=>(
                                    <div 
                                      key={subIndex}
                                      className={`px-2 flex items-center rounded-xl h-10 text-default-500 mb-1 hover:bg-default/40 hover:cursor-pointer ${ active === subItem.value ? "bg-gray-100 text-default-900" : "" }`}
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
                            className={`px-2 rounded-xl flex items-center h-10 text-sm text-default-500 hover:bg-default/40 hover:cursor-pointer ${ active === item.value ? "bg-gray-100 text-default-900" : "" }`}
                            onClick={()=>{setActive(item.value); setTitle(item.title)}}
                        ><FontAwesomeIcon icon={item.icon} className={`text-sm text-default-500 mr-2 ${ active === item.value ? "text-default-900" : "" }` } />{ item.title }</li>
                })
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
       