// export default function PrimaryButton({
//     className = '',
//     disabled,
//     children,
//     ...props
// }) {
//     return (
//         <button
//             {...props}
//             className={
//                 `inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900 ${
//                     disabled && 'opacity-25'
//                 } ` + className
//             }
//             disabled={disabled}
//         >
//             {children}
//         </button>
//     );

// }
import { Button } from "@nextui-org/react";
export default function PrimaryButton({ className = '', isLoading, isDisabled, children, ...props }) {
    return (
        <Button color="primary" size="sm" radius="sm" isLoading={isLoading} isDisabled={isDisabled} className={`font-semibold tracking-wide uppercase ` + className} {...props}>
            {children}
        </Button>
    );
}
