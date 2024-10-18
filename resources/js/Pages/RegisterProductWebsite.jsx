import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faMinus, faPlus, faXmark } from '@fortawesome/free-solid-svg-icons';
import PrimaryButton from '@/Components/PrimaryButton';
import { Autocomplete, AutocompleteItem, Card, Chip, Divider, Tooltip } from '@nextui-org/react';
import TextInput from '@/Components/TextInput';
import { useForm } from '@inertiajs/react';
import { useState, useEffect } from 'react';
import SelectAutocomplete from '@/Components/SelectAutocomplete';
import Swal from 'sweetalert2';

export default function RegisterProductWebsite({ products }) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const [showRegForm, setShowRegForm] = useState(false); // Initially hidden - registration form
    const handleRegForm = (isChecked) => {
        setShowRegForm(isChecked);
    };

    const { data, setData, post, processing, errors, reset } = useForm({
        products: [
            {
                product_id: '',
                outlet_id: '',
                terms_url: '',
                product_url: '',
                product_title_xpath: '',
                product_price_xpath: '',
                btn_xpaths: [],
                specs_xpaths: [],
            },
        ],
    }); // default product
    // const [specsLabel, setSpecsLabel] = useState([
    //     [
    //         { label: "Select", value: "0" }
    //     ] // default specs label select options
    // ]);
    
    // setSpecsLabel([{label: "Select", value: "0"}]);
    const [specsLabel, setSpecsLabel] = useState([
        { labels: [{ label: "Select", value: "0" }] }
    ]);

    // manage multiple btn xpaths
    const [btnXpath, setBtnXpath] = useState([
        { currentXpath: "" },
        // when i add product there will be another btn xpath input same with labels
    ]);

    // manage multiple btn xpaths
    const [specsXpath, setSpecsXpath] = useState([
        { currentLabel: "", currentXpath: "" },
        // when i add product it should also add another specs label object
    ]);

    const handleBtnXpathChange = (index, value) => {
        const updatedBtnXpath = btnXpath.map((btn, i) =>
            i === index ? { ...btn, currentXpath: value } : btn // Update currentXpath for the specific product
        );
        setBtnXpath(updatedBtnXpath);
    };

    useEffect(() => {
        // console.log('Products1:', data.products[0].btn_xpaths);
        // console.log('Products2:', data.products[1]?.btn_xpaths);
        // console.log('Products1:', data.products[0]);
        // console.log('Products2:', data.products[1] ? data.products[1] : 'none');

        // console.log(btnXpath);        

        // console.log('Specs Label:', specsLabel);
        // console.log('labelslog: ', specsLabel[0].labels);

        // console.log(specsXpath);
        // console.log(specsLabel);
        // console.log(specsXpath);
        
    }, [data.products]);

    const outletItems = [
        {label: "Outlet 1", value: "1"},
        {label: "Outlet 2", value: "2"},
        {label: "Outlet 3", value: "3"},
    ]

    const [productKey, setProductKey] = useState(null);
    // const [selectedProduct, setSelectedProduct] = useState(null);
    // const [outletKey, setOutletKey] = useState(null);
    // const [specsLabelKey, setSpecsLabelKey] = useState(null);
    // const [currentSpecsXpath, setCurrentSpecsXpath] = useState('');
    // const [currentSpecsLabel, setCurrentSpecsLabel] = useState('');

    // Handle adding to the btn_xpaths array and resetting the input
    const handleAddBtnXpath = (productIndex) => {
        if (btnXpath[productIndex].currentXpath !== '') {
            const updatedProducts = data.products.map((product, index) => {
                if (index === productIndex) {
                    return {
                        ...product, // keep other product fields
                        btn_xpaths: [...product.btn_xpaths, btnXpath[productIndex].currentXpath], // update btn_xpaths
                    };
                }
                return product; // return the product unchanged for other indices
            });
    
            // Update the state with the modified products array
            setData('products', updatedProducts);
    
            // Clear the input field
            setBtnXpath(prev => {
                const updatedBtnXpath = [...prev];
                updatedBtnXpath[productIndex].currentXpath = ""; // Clear the specific input
                return updatedBtnXpath; // Return the updated state
            });
        }
    };

    // const handleRemoveBtnXpath = (productIndex, labelIndex, xpath) => {
    //     const updatedProducts = data.products.map((product, index) => {
    //         if (index === productIndex) {
    //             // use labelindex
    //             return {
    //                 ...product,
    //                 btn_xpaths: product.btn_xpaths.filter(item => item !== xpath), // Remove the xpath
    //             };
    //         }
    //         return product; // Leave other products unchanged
    //     });
    
    //     // Update the state with the modified products array
    //     setData('products', updatedProducts);
    // };
    const handleRemoveBtnXpath = (productIndex, labelIndex) => {
        const updatedProducts = data.products.map((product, index) => {
            if (index === productIndex) {
                return {
                    ...product,
                    // Remove the item at labelIndex
                    btn_xpaths: product.btn_xpaths.filter((_, i) => i !== labelIndex),
                };
            }
            return product; // Leave other products unchanged
        });
    
        // Update the state with the modified products array
        setData('products', updatedProducts);
    };

    // handle current specs value
    const handleUpdateSpecs = (productIndex, updates) => {
        setSpecsXpath(prev => {
            const updatedSpecs = [...prev]; // Copy current state
            updatedSpecs[productIndex] = {
                ...updatedSpecs[productIndex], // Keep other fields unchanged
                ...updates // Spread the updates (can be newLabel, newXpath, or both)
            };
            return updatedSpecs; // Return updated state
        });
        // handleUpdateSpecs(productIndex, { currentXpath: newXpath });
    };
    const handleSpecsLabel = (index, value) => {        
        const selectedLabel = specsLabel[index].labels.find(item => item.value === parseInt(value));
        
        // Update currentLabel using the label found
        if (selectedLabel) {
            handleUpdateSpecs(index, { currentLabel: selectedLabel.label });
        }
    }
    const handleRemoveSpecsXpath = (xpath) => {
        setData('specs_xpaths', data.specs_xpaths.filter(item => item !== xpath));
    }

    // Handle adding the object to specs_xpaths array
    const handleAddSpecsXpath = (index) => {

        console.log('specs_xpath:', specsXpath[index].currentXpath);
        console.log('specs_label:', specsXpath[index].currentLabel);
        if (specsXpath[index].currentLabel !== '' && specsXpath[index].currentXpath !== '' && specsXpath[index].currentLabel !== 'Select') {

            // Map over the products and update the specs_xpaths for the right product
            const updatedProducts = data.products.map((product, productIndex) => {
                if (productIndex === index) {
                    return {
                        ...product,
                        specs_xpaths: [
                            ...product.specs_xpaths, // Keep the existing specs_xpaths
                            {
                                specs_label: specsXpath[index].currentLabel,
                                specs_xpath: specsXpath[index].currentXpath
                            }
                        ]
                    };
                }
                return product; // Leave other products unchanged
            });

            // Update the form data using setData (if using useForm)
            setData('products', updatedProducts);

            // Clear the input for the current product
            setSpecsXpath(prev => {
                const updatedSpecs = [...prev];
                updatedSpecs[index] = {
                    currentLabel: '',
                    currentXpath: ''
                };
                return updatedSpecs;
            });
            
        } 
        
    };

    const handleSelectProduct = (e, index) => {
        const updatedProducts = data.products.map((product, i) =>
            i === index ? { ...product, product_id: e } : product // Set the selected product_id
        );

        // Update the state with the modified products array
        setData('products', updatedProducts);

        // Find the selected product from the products array by id
        const selectedProduct = products.find(prod => prod.id === Number(e));

        if (selectedProduct) {
            // Create the specs label array for the selected product
            const labels = selectedProduct.pspecs
                .split('\n') // Split by new lines
                .map(line => line.trim()) // Trim whitespace
                .filter(line => line.includes(':')) // Filter valid lines with a colon
                .map((line, idx) => ({
                    label: line.split(':')[0].trim(), // Extract label
                    value: idx + 1 // Assign a value based on the index
                }));

            // Update the specsLabel state at the same index as the selected product
            setSpecsLabel(prevSpecsLabel => {
                const updatedSpecsLabel = [...prevSpecsLabel];
                updatedSpecsLabel[index] = { labels }; // Update the labels for the specific product
                return updatedSpecsLabel;
            });
        }
    };
    
    const handleSelectOutlet = (e, index) => {
        const updatedProducts = data.products.map((product, i) =>
            i === index ? { ...product, outlet_id: e } : product // Set the selected product_id
        );

        // Update the state with the modified products array
        setData('products', updatedProducts);
    };

    // Function to handle adding a new product
    const addProduct = () => {
        setData('products', [
            ...data.products,
            {
                product_id: '',
                outlet_id: '',
                terms_url: '',
                product_url: '',
                product_title_xpath: '',
                product_price_xpath: '',
                btn_xpaths: [],
                specs_xpaths: [],
            },
        ]);
        // handle current specs label input options/values
        setSpecsLabel(prevSpecsLabel => [
            ...prevSpecsLabel,
            { labels: [{ label: "Select", value: "0" }] } // Add new set of labels for the new product
        ]);
        // handle current btnxpath inputs
        setBtnXpath(prev => [
            ...prev,
            { currentXpath: "" }
        ])
        // handle current specs inputs
        setSpecsXpath(prev => [
            ...prev,
            { currentLabel: "", currentXpath: "" }
        ])
    };

    // Function to remove a product
    const removeProduct = (index) => {
        const updatedProducts = data.products.filter((_, i) => i !== index);
        setData('products', updatedProducts);
        const updatedSpecsLabel = specsLabel.filter((_, i) => i !== index); // remove corresponding specs labels
        setSpecsLabel(updatedSpecsLabel);
        const updatedBtnXpath = btnXpath.filter((_, i) => i !== index); // remove corresponding btn xpaths
        setBtnXpath(updatedBtnXpath);
        const updatedSpecsXpath = specsXpath.filter((_, i) => i !== index); // remove corresponding btn xpaths
        setSpecsXpath(updatedSpecsXpath);
    };

    // Function to handle changes in each product input
    const handleProductChange = (index, field, value) => {
        const updatedProducts = data.products.map((product, i) =>
            i === index ? { ...product, [field]: value } : product
        );
        setData('products', updatedProducts);
    };

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
                                <PrimaryButton onPress={addProduct}>Add New Product<FontAwesomeIcon icon={faPlus}/></PrimaryButton>
                            </div>
                            
                            <input type="hidden" name="_token" value={csrfToken} />

                            {/* Product Inputs Wrapper */}
                            <div>
                                {
                                    data.products.map((product, index) => (
                                        <div key={index}>
                                            <div className='flex justify-between'>
                                                <h4>Product {index + 1}</h4>
                                                {/* <Tooltip content="I am Tooltip"><span className='bg-danger text-white px-3 py-1 rounded-md hover:cursor-pointer'>Tooltip</span></Tooltip> */}
                                                <Tooltip content="Remove Product">
                                                    <PrimaryButton type="button" color="danger" onPress={()=>{removeProduct(index)}} className='lower-case mb-1 float-end'><FontAwesomeIcon icon={faXmark}/></PrimaryButton>
                                                </Tooltip>
                                            </div>
                                            <div className='register_input_wrapper'>
                                                <SelectAutocomplete
                                                    items={products}
                                                    // inputValue={product.product_id}
                                                    label="Select Product"
                                                    setValue={(e)=>{handleSelectProduct(e, index)}}
                                                />
                                                
                                                <SelectAutocomplete
                                                    items={outletItems}
                                                    // inputValue={outletKey}
                                                    label="Select Outlet"
                                                    setValue={(e)=>{handleSelectOutlet(e, index)}}
                                                />
                                            
                                                <TextInput
                                                    name="terms_url"
                                                    value={product.terms_url}
                                                    autoComplete=""
                                                    label="Terms Url"
                                                    classNames = {{
                                                        inputWrapper: "group-data-[focus=true]:border-primary-400"
                                                    }}
                                                    onChange={(e) => handleProductChange(index, 'terms_url', e.target.value)}
                                                />
                                                
                                                <TextInput
                                                    name="product_url"
                                                    value={product.product_url}
                                                    autoComplete=""
                                                    label="Product Url"
                                                    classNames = {{
                                                        inputWrapper: "group-data-[focus=true]:border-primary-400"
                                                    }}
                                                    onChange={(e) => handleProductChange(index, 'product_url', e.target.value)}
                                                />
                                                
                                                <TextInput
                                                    name="product_title_xpath"
                                                    value={product.product_title_xpath}
                                                    autoComplete=""
                                                    label="Product Title Xpath"
                                                    classNames = {{
                                                        inputWrapper: "group-data-[focus=true]:border-primary-400"
                                                    }}
                                                    onChange={(e) => handleProductChange(index, 'product_title_xpath', e.target.value)}
                                                />
                                                
                                                <TextInput
                                                    name="product_price_xpath"
                                                    value={product.product_price_xpath}
                                                    autoComplete=""
                                                    label="Product Price Xpath"
                                                    classNames = {{
                                                        inputWrapper: "group-data-[focus=true]:border-primary-400"
                                                    }}
                                                    onChange={(e) => handleProductChange(index, 'product_price_xpath', e.target.value)}
                                                />

                                                <div>
                                                    
                                                    <Tooltip content="Tooltip 1">
                                                        <PrimaryButton type="button" onPress={()=>{handleAddBtnXpath(index)}} className='lower-case mb-1 float-end'><FontAwesomeIcon icon={faPlus}/></PrimaryButton>
                                                    </Tooltip>
                                                    <TextInput
                                                        name="btn_xpath"
                                                        autoComplete=""
                                                        label="Product Button Xpath"
                                                        classNames={{
                                                            inputWrapper: "group-data-[focus=true]:border-primary-400"
                                                        }}
                                                        value={btnXpath[index]?.currentXpath || ''} // Controlled input
                                                        onChange={(e) => handleBtnXpathChange(index, e.target.value)}
                                                        onKeyDown={(e)=>{
                                                            if(e.key === 'Enter') handleAddBtnXpath(index);
                                                        }} // Handle keypress for Enter
                                                    />
                                                    {/* Optionally display the current array of btn_xpaths */}
                                                    <div>
                                                        <ul className='flex flex-wrap gap-1 mt-1'>
                                                            {product.btn_xpaths.map((xpath, i) => {
                                                                const xpathCount = i + 1;
                                                                // <li key={index}>{xpath}</li>
                                                                return <li key={i}>
                                                                    <Chip
                                                                        color="primary"
                                                                        onClose={() => {handleRemoveBtnXpath(index, i, xpath)}}
                                                                        // onClose={() => {console.log(i, index)}}
                                                                    >xpath({xpathCount})</Chip>
                                                                </li>
                                                            })}
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div>

                                                    <div className='flex justify-end'>
                                                        <PrimaryButton type="button" onPress={()=>handleAddSpecsXpath(index)} className='lower-case mb-1'><FontAwesomeIcon icon={faPlus}/></PrimaryButton>
                                                    </div>
                                                    <div className="flex gap-1">
                                                        <div className="flex-1">
                                                            <TextInput
                                                                id="specs_xpath"
                                                                name="specs_xpath"
                                                                value={specsXpath[index].currentXpath}
                                                                autoComplete=""
                                                                label="Product Specs Xpath"
                                                                classNames={{
                                                                    inputWrapper: "group-data-[focus=true]:border-primary-400"
                                                                }}
                                                                onChange={(e) => handleUpdateSpecs(index, { currentXpath: e.target.value })}
                                                            />
                                                        </div>
                                                        <div>

                                                        <Autocomplete 
                                                            variant='bordered'
                                                            defaultItems={specsLabel[index]?.labels}
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
                                                            inputValue={specsLabel[index].currentLabel}
                                                            onSelectionChange={(e)=>handleSpecsLabel(index, e)}
                                                        >
                                                            {(item) => <AutocompleteItem key={item.value}>{item.label}</AutocompleteItem>}
                                                        </Autocomplete>
                                                        </div>
                                                    </div>

                                                    
                                                    <div>
                                                        <ul className='flex flex-wrap gap-1 mt-1'>
                                                            {data.products[index].specs_xpaths?.map((xpath, index) => {
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
                                                // selectedProduct &&
                                                // <table id="icp_product_specs_div" className="mt-4 w-full">
                                                //     <tbody>
                                                //         {
                                                //             selectedProduct.pspecs.split('\n').map((spec, index) => (
                                                //                 <tr key={index} className="border border-gray rounded">
                                                //                     <td className="p-1">{spec}</td>
                                                //                 </tr>
                                                //             ))
                                                //         }
                                                //     </tbody>
                                                // </table>
                                            }
                                            <Divider className="my-4" />
                                        </div>
                                    ))
                                }
                            </div>

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
