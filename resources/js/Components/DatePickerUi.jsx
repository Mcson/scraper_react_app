import { DatePicker } from "@nextui-org/react";


export default function DatePickerComponent({...props}){
    
    const stylesDatePicker = {
        selectorButton: ["hover:text-primary-400"],
        
        };
    const stylesDateInput = {
        inputWrapper: [
        "focus-within:border-primary-400",
        "focus-within:hover:border-primary-400",
        ],
    };
    return (
        <DatePicker 
        size="sm"
        radius="sm"
        label='Date' 
        variant='bordered' 
        classNames={stylesDatePicker}
        dateInputClassNames={stylesDateInput}
        showMonthAndYearPickers
        {...props}
        />

    )
}