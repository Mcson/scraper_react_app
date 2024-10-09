import { forwardRef, useEffect, useRef } from 'react';
import {Autocomplete, AutocompleteItem} from "@nextui-org/react";

export default forwardRef(function SelectAutocomplete({ setProductKey, items, classNames = '' , label, options = [], ...props}, ref){
    const selectRef = ref ? ref : useRef();

    const defaultItems = [
        {label: "Option 1", value: "1"},
        {label: "Option 2", value: "2"},
        {label: "Option 3", value: "3"},
    ]

    return(
        <>
            <Autocomplete 
                // items={items}
                variant='bordered'
                defaultItems={items}
                {...props}
                size='sm'
                classNames={classNames}
                label={label}
                ref={selectRef}
                inputProps={{
                    classNames: {
                        inputWrapper: [
                        "group-data-[focus=true]:border-primary-400",
                        "data-[focus-visible=true]:border-primary-400",
                        "data-[open=true]:border-primary-400"
                        ]
                    }
                }}
                onSelectionChange={(e)=>setProductKey(e)}
            >
                {(item) => <AutocompleteItem key={item.value}>{item.label}</AutocompleteItem>}
            </Autocomplete>
        </>
    );
});

