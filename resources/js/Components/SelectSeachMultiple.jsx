import { useEffect, useState } from 'react'
import { Autocomplete, AutocompleteItem, Chip } from "@nextui-org/react";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faCheck, faX } from '@fortawesome/free-solid-svg-icons';


const SelectSearchMultiple = ({array, label, onSelectChange, defaultSelectedItems = [], ...props }) => {

    const [selectedItems, setSelectedItems] = useState([]);

    useEffect(() => {
        if(defaultSelectedItems.length > 0){
            setSelectedItems(defaultSelectedItems);
        }
    }, [defaultSelectedItems]);

    const isItemSelected = (item) => {
        return selectedItems.some(selectedItem => selectedItem.pcode === item.pcode);
    };
      
    const handleSelect = (item) => {
        if (isItemSelected(item)) {
            // If the item is already selected, remove it
            const newSelectedItems = selectedItems.filter(selection => selection.pcode !== item.pcode);
            setSelectedItems(newSelectedItems);
            onSelectChange(newSelectedItems);
        } else {
            // If the item is not selected, add it
            const newSelectedItems = [...selectedItems, item];
            setSelectedItems(newSelectedItems);
            onSelectChange(newSelectedItems);
        }
    }

    const handleDeleteSelection = (item) => {
        const newSelectedItems = selectedItems.filter(selection => selection !== item);
        setSelectedItems(newSelectedItems);
        onSelectChange(newSelectedItems);
    }


    return (
        <div>
        <Autocomplete
            {...props}
            variant="bordered"
            label={label}
            size="sm"
            selectedKey={''}
            inputProps={{
                classNames: {
                    inputWrapper: [
                    "group-data-[focus=true]:border-primary-400",
                    "data-[focus-visible=true]:border-primary-400",
                    "data-[open=true]:border-primary-400"
                    ]
                }
            }}
            aria-label="Select a product"
            >
            {array.map((item, index) => (
                <AutocompleteItem 
                    key={item.pcode} 
                    value={item.pcode} 
                    onClick={() => handleSelect(item)}
                    endContent={
                        isItemSelected(item) && (
                            <FontAwesomeIcon icon={faCheck} className="mr-2 " />
                        )
                    }
                    >
                    {item.pname}
                </AutocompleteItem>
            ))}
        </Autocomplete>
        <div className="flex mt-2 flex-wrap gap-2">
            {selectedItems.map((item) => (
                <Chip 
                    key={item.pcode}
                    color="primary" 
                    onClose={() => handleDeleteSelection(item)} 

                   >
                {item.pname}
                </Chip>
            ))} 
        </div> 
    </div>
    )
}

export default SelectSearchMultiple