import { forwardRef, useEffect, useRef } from 'react';
import {Input} from "@nextui-org/react";

export default forwardRef(function TextInput({ type = 'text', classNames = '', label, ...props }, ref) {
    const input = ref ? ref : useRef();

    // useEffect(() => {
    //     if (isFocused) {
    //         input.current.focus();
    //     }
    // }, []);

    return (
        <Input
            {...props}
            // size = "lg"
            fullWidth
            variant="bordered"
            label = {label}
            type = {type}
            classNames={classNames}
            ref={input}
        />
    );
});
