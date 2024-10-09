import React from "react";
import {Tabs} from "@nextui-org/react";

export default function SidebarLayout({ children, titleState }) {
  
  return (
    // <div className="flex flex-col">
    //   <div className="flex flex-col">
        <Tabs 
          aria-label="Options" 
          isVertical='true'
          classNames={{
            base: "min-h-[70vh]",
            tabList: "shadow-md bg-white w-[15em] min-h-[70vh] gap-2 relative rounded-lg p-3 border-b border-divider",
            cursor: "w-full bg-[#22d3ee]",
            tab: "",
            tabContent: "group-data-[selected=true]:text-gray-900",
            panel: "min-h-[70vh]"
          }}
          onSelectionChange={(key) => titleState(key)}
        >
          {children}
         
        </Tabs>
    //   </div>
    // </div>
  );
}
        