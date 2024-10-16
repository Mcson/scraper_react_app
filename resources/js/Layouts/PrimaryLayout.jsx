
import ApplicationLogo from '@/Components/ApplicationLogo';
import { Dropdown, DropdownTrigger, DropdownMenu, DropdownItem, User } from "@nextui-org/react";
import { Link, router, useForm, usePage } from "@inertiajs/react";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faRightFromBracket } from '@fortawesome/free-solid-svg-icons';
import { menuItems } from '../data/menuItems';
import SideNav from '@/Components/SideNav';


export default function PrimaryLayout({header, children}){
    const { post } = useForm();
    const user = usePage().props.auth.user;
    const handleLogout = () => {
        post(route("logout"));
      };
    return (
        <div className="min-h-screen bg-gray-100">
            <div className="flex flex-row">
                <div className="w-72 p-4 flex-shrink-0 bg-primary-700 h-screen overflow-auto">
                    <div className="flex justify-between shrink-0 items-center overflow-auto">
                        <Link href={route('dashboard')}>
                                    <ApplicationLogo className="block h-9 w-auto fill-current text-white" />
                        </Link>
                        <div className="p-2 fixed right-8 flex items-center gap-4">
                    
                    <Dropdown>
                        <DropdownTrigger>
                        
                            <User
                                as="button"
                                avatarProps={{
                                    isBordered: true,
                                    size: "sm"
                                }}
                                className="transition-transform flex flex-row-reverse gap-3"
                                description={user.email}
                                name={user.name}
                                classNames={{
                                    name: "font-semibold",
                                    wrapper: "items-end"
                                }}
                            />

                            

                        </DropdownTrigger>
                        <DropdownMenu>
                                <DropdownItem key="logout" startContent={<FontAwesomeIcon icon={faRightFromBracket} />} color="danger" onPress={handleLogout}>
                                    Logout
                                </DropdownItem>
                            
                        </DropdownMenu>
                    </Dropdown>
                    </div>
                    </div>
                    <div className="mt-3 gap-4 flex flex-col">
                        <h6 className="text-white font-semibold mb-b">
                            Web Scrapper
                        </h6>
                        {menuItems.map((item) => (
                            <SideNav key={item.id} item={item} active={route().current(item.href)}/>
                        ))}
                    </div>

                </div>
                <div className="h-screen w-screen" >
                        
                        {header && (
                            <header className="bg-white shadow">
                                <div className="max-w-full px-4 h-16 flex items-center sm:px-6 lg:px-8">
                                    {header}
                                </div>
                            </header>
                        )}
                        <main className="" style={{height: "calc(100% - 73px)"}}>
                                {children}
                        </main>
                </div>
            
            </div>

        </div>
    )
}