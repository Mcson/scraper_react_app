
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faGaugeHigh, faGlobe, faFolderOpen, faFolderClosed, faCalendarDays, faListCheck, faGears, faMagnifyingGlassChart, faSquarePlus } from '@fortawesome/free-solid-svg-icons';


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
        icon: faFolderOpen,
        submenus: [
            {
                id: 21,
                title: "Register Product",
                href: "register.product",
                icon: faSquarePlus
            },
            {
                id: 22,
                title: "Registered Product Website",
                href: "registered.product.website",
                icon: faGlobe
            }
        ], 
    },
    {
        id: 3,
        title: "Scrape",
        icon: faMagnifyingGlassChart,
        href: "scrape",
        submenus: [], 
    },
    {
        id: 4,
        title: "View Data",
        icon: faFolderClosed,
        submenus: [
            {
                id: 41,
                title: "ICP",
                href: "icp",
                icon: faListCheck,
            },
            {
                id: 42,
                title: "Non-ICP",
                href: "non-icp",
                icon: faListCheck,
            }
        ], 
    },
    {
        id: 5,
        title: "Schedule Products",
        icon: faCalendarDays,
        href: "schedule",
        submenus: [], 
    },

]