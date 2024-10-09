import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faMinus, faPlus } from '@fortawesome/free-solid-svg-icons';
import PrimaryButton from '@/Components/PrimaryButton';
import { Autocomplete, AutocompleteItem, Card, Tooltip } from '@nextui-org/react';
import TextInput from '@/Components/TextInput';
import { useForm } from '@inertiajs/react';
import { useState, useEffect } from 'react';
import SelectAutocomplete from '@/Components/SelectAutocomplete';

export default function RegisterProductWebsite({ products }) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    console.log(products);

    const { data, setData, post, processing, errors, reset } = useForm({
        product_id: '',
        outlet_id: '',
        terms_url: '',
        product_url: '',
        product_title_xpath: '',
        product_price_xpath: '',
        btn_xpath: '',
        product_url: '',
    });

    const [showRegForm, setShowRegForm] = useState(false); // Initially hidden - registration form
    const handleRegForm = (isChecked) => {
        setShowRegForm(isChecked);
    };

    const outletItems = [
        {label: "Outlet 1", value: "1"},
        {label: "Outlet 2", value: "2"},
        {label: "Outlet 3", value: "3"},
    ]

    const [productKey, setProductKey] = useState(null);
    const [selectedProduct, setSelectedProduct] = useState(null);

    const handleSelectProduct = (e) => {
        setProductKey(e);
    };

    useEffect(()=>{

        console.log('productKey: ', productKey);

        if(productKey){
            products.map((product)=>{
                if(productKey == product.id){
                    console.log('inside ifs: ', product); 
                    return setSelectedProduct(product);                  
                } else {
                }
            })
        } else {
            setSelectedProduct(null);
        }
        console.log('SelectedProduct: ', selectedProduct);
        
    }, [ productKey ])

    const handleSubmit = (e) => {
        
        post(route('scraper.create'), {
            onSuccess: (res) => {
                console.log(res);
            }
        });
        
    }

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
                                
                                <SelectAutocomplete
                                    items={products}
                                    label="Select Product"
                                    setProductKey={handleSelectProduct}
                                />
                                
                                <SelectAutocomplete
                                    items={outletItems}
                                    label="Select Outlet"
                                />

                            
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
                            {
                                selectedProduct &&
                                <table id="icp_product_specs_div" className="mt-4 w-full">

                                    {
                                        selectedProduct.pspecs.split('\r\n').map((spec, index) => (
                                            <tr key={index} className="border border-gray rounded">
                                                <td className="p-1">{spec}</td>
                                            </tr>
                                        ))
                                    }
    
                                </table>
                            }

                            <div className="flex justify-end mt-4">
                                <PrimaryButton
                                    className='min-w-[10rem]'
                                    onClick={handleSubmit}
                                >Register</PrimaryButton>
                            </div>
                            


                        </form>
                    {/* </div> */}
                </div>
            </Card>

        </>
    );
}
