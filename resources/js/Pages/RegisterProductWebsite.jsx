import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faPlus } from '@fortawesome/free-solid-svg-icons';
import PrimaryButton from '@/Components/PrimaryButton';

export default function RegisterProductWebsite() {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Register Product Website
                </h2>

                
            }
        >
            <Head title="Register Product Website" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {/* <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg"> */}


                        <div className="flex items-center mb-8 container max-auto px-48 content-center">
                            <input id="checkbox" type="checkbox" className="form-checkbox h-5 w-5 text-blue-600" />
                            <label for="checkbox" className="ml-2 text-gray-700">I confirm that I have reviewed the <b>Terms and Condition</b> of the website I am about to register and Have found that web scraping is legally allowed. I hold all responsibility for the web scraping activity about the be performed.</label>
                        </div>
                        <div className="flex items-center mb-8 container max-auto">
                            <PrimaryButton isIconOnly><FontAwesomeIcon icon={faPlus}/></PrimaryButton>
                        </div>

                        <form action="" method="POST" id='registerWebsiteForm'>
                            <input type="hidden" name="_token" value={csrfToken} />



                            <div className="sm:col-span-3">
                                <label for="country" className="block text-sm font-medium leading-6 text-gray-900">Register Product</label>
                                <div className="mt-2">
                                    <select id="country" name="country" autocomplete="country-name" className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    {/* </div> */}
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
