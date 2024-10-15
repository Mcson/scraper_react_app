import { forwardRef, useEffect, useRef } from 'react';
import {Autocomplete, AutocompleteItem} from "@nextui-org/react";

export default forwardRef(function SelectAutocomplete({ setValue, inputValue, items, classNames = '' , label, options = [], ...props}, ref){
    const selectRef = ref ? ref : useRef();

    return(
        <>
            <Autocomplete 
                // items={items}
                variant='bordered'
                defaultItems={items}
                {...props}
                size='sm'
                label={label}
                ref={selectRef}
                inputProps={{
                    classNames: {
                        inputWrapper: [
                        "group-data-[focus=true]:border-primary-400",
                        "data-[focus-visible=true]:border-primary-400",
                        "data-[open=true]:border-primary-400", classNames
                        ]
                    }
                }}
                onSelectionChange={(e)=>setValue(e)}
                inputValue={inputValue}
            >
                {(item) => <AutocompleteItem key={item.value}>{item.label}</AutocompleteItem>}
            </Autocomplete>
        </>
    );
});

