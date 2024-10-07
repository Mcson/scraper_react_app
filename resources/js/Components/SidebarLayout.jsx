import React from "react";
import {Tabs} from "@nextui-org/react";

export default function SidebarLayout({ children, titleState }) {
  
  return (
    <div className="flex flex-col">
      <div className="flex flex-col">
        <Tabs 
          aria-label="Options" 
          isVertical='true'
          classNames={{
            tabList: "shadow-md bg-white w-[15em] h-[100vh] gap-2 relative rounded-lg p-3 border-b border-divider",
            cursor: "w-full bg-[#22d3ee]",
            tab: "",
            tabContent: "group-data-[selected=true]:text-[#06b6d4] data-slot-[panel]:flex-auto"
          }}
          onSelectionChange={(key) => titleState(key)}
        >

          {children}

        </Tabs>
      </div>
    </div>
  );
}
        