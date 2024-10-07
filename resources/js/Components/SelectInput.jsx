import { forwardRef, useEffect, useRef } from 'react';
import { Select, SelectItem } from "@nextui-org/react";

export default forwardRef(function SelectInput({ value, classNames = '' , label, options = [], ...props}, ref){
    const selectRef = ref ? ref : useRef();
    return(
        <Select
            {...props}
            size='sm'
            value={value}
            classNames={classNames}
            variant='bordered'
            label={label}
            ref={selectRef}
        >
        {options.map((option) => (
                <SelectItem key={option.key}>
                    {option.label}
                </SelectItem>
            ))}
        </Select>
    );
});

