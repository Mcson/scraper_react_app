import { DatePicker } from "@nextui-org/react";
import { getLocalTimeZone, today } from "@internationalized/date";
import { useState } from "react";

export default function DatePickerComponent({label, onDateChange,...props }){
    const [isInvalid, setIsInvalid] = useState(false);

    const stylesDatePicker = {
        selectorButton: ["hover:text-primary-400"],
        
        };
    const stylesDateInput = {
        inputWrapper: [
        "focus-within:border-primary-400",
        "focus-within:hover:border-primary-400",
        ],
    };

    const handleDateChange = (date) => {
        // Example validation logic: Set invalid if date is null or earlier than today
        const dateIsValid = date && date.compare(today('America/New_York')) >= 0;
        setIsInvalid(!dateIsValid);
    
        if (onDateChange) {
          onDateChange(date, !dateIsValid); // Pass date and invalid state to parent
        }
      };
  
    return (
        <DatePicker 
        size="sm"
        radius="sm"
        label={label} 
        variant='bordered' 
        classNames={stylesDatePicker}
        dateInputClassNames={stylesDateInput}
        showMonthAndYearPickers
        
        // minValue={today(getLocalTimeZone())} // this is local date
        minValue={today('America/New_York')}
        onChange={handleDateChange}
        isInvalid={isInvalid}
        errorMessage="Value must be today or later."
        {...props}
        />

    )
}