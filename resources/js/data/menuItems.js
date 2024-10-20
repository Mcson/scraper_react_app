
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faGaugeHigh, faGlobe, faFolderOpen, faFolderClosed, faCalendarDays, faListCheck } from '@fortawesome/free-solid-svg-icons';


export const menuItems = [
    {
        id: 1,
        title: "Dashboard",
        icon: faGaugeHigh,
        href: "dashboard",
        submenus: []
    },
    {
        id: 2,
        title: "Register",
        icon: faGlobe,
        submenus: [
            {
                id: 21,
                title: "Register Product",
                href: "register.product",
                icon: faFolderOpen
            }
        ], 
    },
    {
        id: 3,
        title: "View Data",
        icon: faFolderClosed,
        submenus: [
            {
                id: 31,
                title: "ICP",
                href: "icp",
                icon: faListCheck,
            },
            {
                id: 32,
                title: "Non-ICP",
                href: "non-icp",
                icon: faListCheck,
            }
        ], 
    },
    {
        id: 4,
        title: "Schedule Products",
        icon: faCalendarDays,
        href: "schedule",
        submenus: [], 
    },

]