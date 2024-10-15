import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faMinus, faPlus } from '@fortawesome/free-solid-svg-icons';
import PrimaryButton from '@/Components/PrimaryButton';
import { Autocomplete, AutocompleteItem, Card, Chip, Tooltip } from '@nextui-org/react';
import TextInput from '@/Components/TextInput';
import { useForm } from '@inertiajs/react';
import { useState, useEffect } from 'react';
import SelectAutocomplete from '@/Components/SelectAutocomplete';
import Swal from 'sweetalert2';

export default function RegisterProductWebsite({ products }) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const { data, setData, post, processing, errors, reset } = useForm({
        product_id: '',
        outlet_id: '',
        terms_url: '',
        product_url: '',
        product_title_xpath: '',
        product_price_xpath: '',
        btn_xpaths: [],
        specs_xpaths: [],
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
    const [outletKey, setOutletKey] = useState(null);
    // const [specsLabelKey, setSpecsLabelKey] = useState(null);
    const [specsLabel, setSpecsLabel] = useState([{label: "Select", value: "0"}]); // default specs label select options
    const [currentBtnXpath, setCurrentBtnXpath] = useState('');
    const [currentSpecsXpath, setCurrentSpecsXpath] = useState('');
    const [currentSpecsLabel, setCurrentSpecsLabel] = useState('');

    // Handle adding to the btn_xpaths array and resetting the input
    const handleAddBtnXpath = () => {
        if (currentBtnXpath.trim() !== '') {
            // Add the current input value to the btn_xpaths array
            setData('btn_xpaths', [...data.btn_xpaths, currentBtnXpath]);
            // Clear the input field
            setCurrentBtnXpath('');
        }
    };
    const handleRemoveBtnXpath = (xpath) => {
        setData('btn_xpaths', data.btn_xpaths.filter(item => item !== xpath));
    };

    // handle specs label
    const handleSpecsLabel = (key) => {
        specsLabel?.map((item)=>{
            if(item.value == key){
                setCurrentSpecsLabel(item.label);
            }
        })
    }
    const handleRemoveSpecsXpath = (xpath) => {
        setData('specs_xpaths', data.specs_xpaths.filter(item => item !== xpath));
    }

    // Handle adding the object to specs_xpaths array
    const handleAddSpecsXpath = () => {
        if (currentSpecsXpath.trim() !== '' && currentSpecsLabel.trim() !== '' && currentSpecsLabel.trim() !== 'Select') {
            // Add both the specs_label and specs_xpath as an object
            setData('specs_xpaths', [
                ...data.specs_xpaths, 
                { specs_label: currentSpecsLabel, specs_xpath: currentSpecsXpath }
            ]);

            // Reset both input fields after adding
            setCurrentSpecsXpath(''); // Clear local state for specs_xpath
            setCurrentSpecsLabel(''); // Clear local state for the label
            
        } 
        
    };
    const handleSelectProduct = (e) => {
        setProductKey(e);
        setCurrentSpecsLabel('');
    };

    useEffect(()=>{

        // console.log('productKey: ', productKey);

        if(productKey){
            products.map((product)=>{
                if(productKey == product.id){
                    // console.log('inside ifs: ', product); 
                    setSelectedProduct(product);   
                    setData('product_id', productKey);

                    // Extract labels from pspecs
                    const labels = product.pspecs
                        .split('\n') // Split by new lines
                        .map(line => line.trim()) // Remove extra spaces
                        .filter(line => line.includes(':')) // Only keep lines with ":"
                        .map((line, index) => {
                        const label = line.split(':')[0].trim(); // Extract label before ":"
                        return { label, value: index + 1 }; // Assign sequential number as value
                        });

                    setSpecsLabel(labels);
                    // console.log("labels: ",labels);
                    
                }
            })
        } else {
            setSelectedProduct(null);
            setSpecsLabel([{label: "Select", value: "0"}]);
        }

        if(outletKey){
            setData('outlet_id', outletKey);
        }

    }, [ productKey, outletKey ])

    const handleSubmit = (e) => {
        
        post(route('scraper.create'), {
            onSuccess: (response) => {
                const msg = response.props.flash;
                if(msg.success){
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: msg.success,
                    }).then(() => {
                        setProductKey(null);
                        reset();
                    });
                } else if(msg.error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Something went wrong!',
                        text: msg.error,
                    });
                }
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
                                    // inputValue={productKey}
                                    label="Select Product"
                                    setValue={handleSelectProduct}
                                />
                                
                                <SelectAutocomplete
                                    items={outletItems}
                                    // inputValue={outletKey}
                                    label="Select Outlet"
                                    setValue={setOutletKey}
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
                                    
                                    <Tooltip color="warning" content="Tooltip 1" delay={1000}>
                                        <PrimaryButton type="button" onPress={handleAddBtnXpath} className='lower-case mb-1 float-end'><FontAwesomeIcon icon={faPlus}/></PrimaryButton>
                                    </Tooltip>
                                    <TextInput
                                        id="btn_xpath"
                                        name="btn_xpath"
                                        autoComplete=""
                                        label="Product Button Xpath"
                                        classNames={{
                                            inputWrapper: "group-data-[focus=true]:border-primary-400"
                                        }}
                                        value={currentBtnXpath} // Controlled input
                                        onChange={(e) => setCurrentBtnXpath(e.target.value)}
                                        onKeyDown={(e)=>{
                                            if(e.key === 'Enter') handleAddBtnXpath(e);
                                        }} // Handle keypress for Enter
                                    />
                                    {/* Optionally display the current array of btn_xpaths */}
                                    <div>
                                        <ul className='flex flex-wrap gap-1 mt-1'>
                                            {data.btn_xpaths.map((xpath, index) => {
                                                const xpathCount = index + 1;
                                                // <li key={index}>{xpath}</li>
                                                return <li key={index}>
                                                    <Chip
                                                        color="primary"
                                                        onClose={() => {handleRemoveBtnXpath(xpath)}}
                                                    >xpath({xpathCount})</Chip>
                                                </li>
                                            })}
                                        </ul>
                                    </div>
                                </div>

                                <div>

                                    <div className='flex justify-end'>
                                        <PrimaryButton type="button" onPress={handleAddSpecsXpath} className='lower-case mb-1'><FontAwesomeIcon icon={faPlus}/></PrimaryButton>
                                    </div>
                                    <div className="flex gap-1">
                                        <div className="flex-1">
                                            <TextInput
                                                id="specs_xpath"
                                                name="specs_xpath"
                                                value={currentSpecsXpath}
                                                autoComplete=""
                                                label="Product Specs Xpath"
                                                classNames={{
                                                    inputWrapper: "group-data-[focus=true]:border-primary-400"
                                                }}
                                                onChange={(e) => setCurrentSpecsXpath(e.target.value)}
                                                // onKeyDown={handleAddSpecsXpath} // Handle keypress for Enter
                                            />
                                        </div>
                                        <div>

                                            <Autocomplete 
                                                variant='bordered'
                                                defaultItems={specsLabel}
                                                size='sm'
                                                label="Label"
                                                inputProps={{
                                                    classNames: {
                                                        inputWrapper: [
                                                        "group-data-[focus=true]:border-primary-400",
                                                        "data-[focus-visible=true]:border-primary-400",
                                                        "data-[open=true]:border-primary-400", "max-w-[8rem]"
                                                        ]
                                                    }
                                                }}
                                                inputValue={currentSpecsLabel}
                                                onSelectionChange={(e)=>handleSpecsLabel(e)}
                                            >
                                                {(item) => <AutocompleteItem key={item.value}>{item.label}</AutocompleteItem>}
                                            </Autocomplete>
                                        </div>
                                    </div>

                                    
                                    <div>
                                        <ul className='flex flex-wrap gap-1 mt-1'>
                                            {data.specs_xpaths.map((xpath, index) => {
                                                return <li key={index}>
                                                    <Chip
                                                        color="primary"
                                                        onClose={() => {handleRemoveSpecsXpath(xpath)}}
                                                    >{xpath.specs_label}</Chip>
                                                </li>
                                            })}
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            {/* Product Specifications Wrapper */}
                            {
                                selectedProduct &&
                                <table id="icp_product_specs_div" className="mt-4 w-full">
                                    <tbody>
                                        {
                                            selectedProduct.pspecs.split('\n').map((spec, index) => (
                                                <tr key={index} className="border border-gray rounded">
                                                    <td className="p-1">{spec}</td>
                                                </tr>
                                            ))
                                        }
                                    </tbody>
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
