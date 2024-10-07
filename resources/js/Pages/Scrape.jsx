import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faDownload, faMinus, faPlus } from '@fortawesome/free-solid-svg-icons';
import PrimaryButton from '@/Components/PrimaryButton';
import { Card, DateRangePicker, Switch, Tooltip } from '@nextui-org/react';
import TextInput from '@/Components/TextInput';
import { useForm } from '@inertiajs/react';
import { useState } from 'react';

export default function Scrape() {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const { data, setData, post, processing, errors, reset } = useForm({
        terms_url: '',
        btn_xpath: '',
        product_url: '',
        product_title_xpath: '',
        product_price_xpath: '',
        password: '',
        password: '',
        password: '',
    });

    const [products, setProducts] = useState(false); // Initially hidden - product specs
    const handleProductChange = (value) => {        
        console.log(value);
        
        // fetch product details and scrape
    };

    // handle product switch
    const [isICP, setIsICP] = useState(false);

    return (
        <>

            <Card className="py-12">
                <div className="sm:px-6 lg:px-8">

                    <div>
                        <div>
                            Product Switch:

                            <div>

                                <Switch isSelected={isICP} onValueChange={setIsICP} size="sm">
                                    ICP Products
                                </Switch>  
                                <p className="text-small text-default-500">Selected: {isICP ? "true" : "false"}</p>

                            </div>
                        </div>

                        <div className="">
                            <label for="country" className="block text-sm font-medium leading-6 text-gray-900">Register Product</label>
                            <div className="mt-2">
                                <select onChange={(e)=>handleProductChange(e.target.value)} id="country" name="country" autoComplete="country-name" className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="">Select</option>
                                    <option value="1">United States</option>
                                    <option value="2">Canada</option>
                                    <option value="3">Mexico</option>
                                </select>
                            </div>
                        </div>

                        <div className="flex items-center mt-3">
                            <PrimaryButton >Add New Product<FontAwesomeIcon icon={faPlus}/></PrimaryButton>
                        </div>
                    </div>

                    <div className="mt-4">
                        <div>
                            Download Scraped Data
                        </div>
                        
                        <DateRangePicker 
                        label="Stay duration" 
                        className="max-w-xs" 
                        />

                        <div className="flex items-center mt-3">
                            <PrimaryButton >Download<FontAwesomeIcon icon={faDownload}/></PrimaryButton>
                        </div>
                    </div>

                </div>

            </Card>

        </>
    );
}
