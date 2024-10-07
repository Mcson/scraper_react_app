import { TimeInput } from "@nextui-org/react";



export default function TimeNextUi({value, label, classNames = "", ...props}){
   
  
    return (
        <TimeInput 
            label={label}
            variant="bordered"
            size="sm"
            classNames={classNames}
            value={value}
            hourCycle={24}
            {...props}
        />
    )
}