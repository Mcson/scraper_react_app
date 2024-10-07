import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faMinus, faPlus } from '@fortawesome/free-solid-svg-icons';
import PrimaryButton from '@/Components/PrimaryButton';
import { Card, Tooltip } from '@nextui-org/react';
import TextInput from '@/Components/TextInput';
import { useForm } from '@inertiajs/react';
import { useState } from 'react';

export default function RegisterProductWebsite({ producsts }) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // console.log(products);
    

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

    const [showSpecs, setShowSpecs] = useState(false); // Initially hidden - product specs
    const handleProductChange = (value) => {        
        if(value === ""){
            setShowSpecs(false);
        } else {
            setShowSpecs(true);
        }
    };
    const [showRegForm, setShowRegForm] = useState(false); // Initially hidden - registration form
    const handleRegForm = (isChecked) => {
        setShowRegForm(isChecked);
    };

    return (
        <>

            <Card className="py-12">
                <div className="sm:px-6 lg:px-8">
                    {/* <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg"> */}


                        <div className="flex items-center mb-8 content-center">
                            <input id="checkbox" type="checkbox" className="form-checkbox h-5 w-5 text-blue-600" onChange={(e)=>handleRegForm(e.target.checked)} />
                            <label for="checkbox" className="ml-2 text-gray-700">I confirm that I have reviewed the <b>Terms and Condition</b> of the website I am about to register and Have found that web scraping is legally allowed. I hold all responsibility for the web scraping activity about the be performed.</label>
                        </div>

                        <form action="" method="POST" id='registerWebsiteForm' className={`mt-4 ${showRegForm ? "" : "hidden"}`}>
                            <div className="flex items-center mb-8">
                                <PrimaryButton >Add New Product<FontAwesomeIcon icon={faPlus}/></PrimaryButton>
                            </div>
                            
                            <input type="hidden" name="_token" value={csrfToken} />

                            {/* Product Inputs Wrapper */}
                            <div id='register_input_wrapper'>

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

                            
                                <TextInput
                                    id="terms_url"
                                    name="terms_url"
                                    value={data.terms_url}
                                    autoComplete=""
                                    label="Terms Url"
                                    classNames = {{
                                        inputWrapper: "group-data-[focus=true]:border-primary-400"
                                    }}
                                    onChange={(e) => setData('terms_url', e.target.value)}
                                />
                                
                                <TextInput
                                    id="product_url"
                                    name="product_url"
                                    value={data.product_url}
                                    autoComplete=""
                                    label="Product Url"
                                    classNames = {{
                                        inputWrapper: "group-data-[focus=true]:border-primary-400"
                                    }}
                                    onChange={(e) => setData('product_url', e.target.value)}
                                />

                                
                                <TextInput
                                    id="product_title_xpath"
                                    name="product_title_xpath"
                                    value={data.product_title_xpath}
                                    autoComplete=""
                                    label="Product Title Xpath"
                                    classNames = {{
                                        inputWrapper: "group-data-[focus=true]:border-primary-400"
                                    }}
                                    onChange={(e) => setData('product_title_xpath', e.target.value)}
                                />

                                
                                <TextInput
                                    id="product_price_xpath"
                                    name="product_price_xpath"
                                    value={data.product_price_xpath}
                                    autoComplete=""
                                    label="Product Price Xpath"
                                    classNames = {{
                                        inputWrapper: "group-data-[focus=true]:border-primary-400"
                                    }}
                                    onChange={(e) => setData('product_price_xpath', e.target.value)}
                                />

                                <div>
                                    <div className='text-end'>
                                        <Tooltip color="primary" content="Add Button Xpath">
                                            <span className="text-lg text-primary cursor-pointer active:opacity-50" onClick={() => alert(`View ${td.name} specs`)}>
                                                <PrimaryButton isIconOnly><FontAwesomeIcon icon={faPlus}/></PrimaryButton>
                                            </span>
                                        </Tooltip>
                                    </div>
                                    <div className='flex items-center'>
                                        <TextInput
                                            id="btn_xpath"
                                            name="btn_xpath"
                                            value={data.btn_xpath}
                                            autoComplete=""
                                            label="Button Xpath"
                                            classNames = {{
                                                inputWrapper: "group-data-[focus=true]:border-primary-400"
                                            }}
                                            onChange={(e) => setData('btn_xpath', e.target.value)}
                                        />
                                        <Tooltip color="warning" content="Remove Xpath">
                                            <span className="ml-1 text-lg text-warning cursor-pointer active:opacity-50" onClick={() => alert(`View ${td.name} specs`)}>
                                                <PrimaryButton color="warning" isIconOnly><FontAwesomeIcon icon={faMinus}/></PrimaryButton>
                                            </span>
                                        </Tooltip>
                                    </div>
                                </div>

                                <div>
                                    <div className='text-end'>
                                        <Tooltip color="primary" content="Add Specs Xpath">
                                            <span className="text-lg text-primary cursor-pointer active:opacity-50" onClick={() => alert(`View ${td.name} specs`)}>
                                                <PrimaryButton isIconOnly><FontAwesomeIcon icon={faPlus}/></PrimaryButton>
                                            </span>
                                        </Tooltip>
                                    </div>
                                    <div className='flex items-center'>
                                        <TextInput
                                            id="product_specs"
                                            name="product_specs"
                                            value={data.product_specs}
                                            autoComplete=""
                                            label="Product Specs Xpath"
                                            classNames = {{
                                                inputWrapper: "group-data-[focus=true]:border-primary-400"
                                            }}
                                            onChange={(e) => setData('product_specs', e.target.value)}
                                        />
                                        <Tooltip color="warning" content="Remove Xpath">
                                            <span className="ml-1 text-lg text-warning cursor-pointer active:opacity-50" onClick={() => alert(`View ${td.name} specs`)}>
                                                <PrimaryButton color="warning" isIconOnly><FontAwesomeIcon icon={faMinus}/></PrimaryButton>
                                            </span>
                                        </Tooltip>
                                    </div>
                                </div>

                            </div>

                            {/* Product Specifications Wrapper */}
                            <table id="icp_product_specs_div" className={`mt-4 border-opacity-5 ${showSpecs ? "" : "hidden"}`}>

                                {/* map over specs data here */}
                                <tr>
                                    <td>ICP Product Specifications</td>
                                </tr>
                                <tr>
                                    <td>ICP Product Specifications</td>
                                </tr>
                                <tr>
                                    <td>ICP Product Specifications</td>
                                </tr>
                                <tr>
                                    <td>ICP Product Specifications</td>
                                </tr>

                            </table>


                        </form>
                    {/* </div> */}
                </div>
            </Card>

        </>
    );
}
