import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faMinus, faPlus } from '@fortawesome/free-solid-svg-icons';
import PrimaryButton from '@/Components/PrimaryButton';
import { Card, Tooltip } from '@nextui-org/react';
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
    const [specsLabelKey, setSpecsLabelKey] = useState(null);
    const [specsLabel, setSpecsLabel] = useState([{label: "Select", value: "0"}]);
    const [currentBtnXpath, setCurrentBtnXpath] = useState('');
    const [currentSpecsXpath, setCurrentSpecsXpath] = useState('');

    // Handle adding to the btn_xpaths array and resetting the input
    const handleAddBtnXpath = (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();

            if (currentBtnXpath.trim() !== '') {
                // Add the current input value to the btn_xpaths array
                setData('btn_xpaths', [...data.btn_xpaths, currentBtnXpath]);
                // Clear the input field
                setCurrentBtnXpath('');
            }
        }
    };

    // Handle adding the object to specs_xpaths array
    const handleAddSpecsXpath = () => {
        if (currentSpecsXpath.trim() !== '' && specsLabelKey.trim() !== '') {
            // Add both the specs_label and specs_xpath as an object
            setData('specs_xpaths', [
                ...data.specs_xpaths, 
                { specs_label: specsLabelKey, specs_xpath: currentSpecsXpath }
            ]);

            // Reset both input fields after adding
            setCurrentSpecsXpath(''); // Clear local state for specs_xpath
            setSpecsLabelKey(''); // Clear local state for the label
        }

        // console.log();
        
    };
    const handleSelectProduct = (e) => {
        setProductKey(e);
    };

    useEffect(()=>{

        console.log('productKey: ', productKey);

        if(productKey){
            products.map((product)=>{
                if(productKey == product.id){
                    console.log('inside ifs: ', product); 
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
                    console.log("labels: ",labels);
                    
                }
            })
        } else {
            setSelectedProduct(null);
        }

        if(outletKey){
            setData('outlet_id', outletKey);
        }

        if(specsLabelKey){
            // Find label by value
            const findLabelByValue = (value) => {
                const foundItem = specsLabel.find(item => item.value === value);
                return foundItem ? foundItem.label : 'Label not found';
            };
            setData('specs_label', findLabelByValue(specsLabelKey));
        }

        console.log('SelectedProduct: ', selectedProduct);
        
    }, [ productKey, outletKey, specsLabelKey ])

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
                                    setValue={handleSelectProduct}
                                />
                                
                                <SelectAutocomplete
                                    items={outletItems}
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
                                        onKeyDown={handleAddBtnXpath} // Handle keypress for Enter
                                    />
                                    {/* Optionally display the current array of btn_xpaths */}
                                    <ul>
                                        {data.btn_xpaths.map((xpath, index) => (
                                            <li key={index}>{xpath}</li>
                                        ))}
                                    </ul>
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
                                        <SelectAutocomplete
                                            items={specsLabel} // Assuming specsLabel is an array of labels
                                            label="Label"
                                            setValue={setSpecsLabelKey} // Set the selected label
                                            classNames="max-w-[8rem]"
                                            // onKeyDown={handleAddSpecsXpath} // Handle keypress for Enter
                                        />
                                    </div>

                                </div>
                                    {/* Button to add the spec to the array */}
                                    <button type="button" onClick={handleAddSpecsXpath}>
                                        Add Spec
                                    </button>
                                    {/* Optionally display the current array of specs_xpaths */}
                                    <ul>
                                        {data.specs_xpaths.map((xpath, index) => (
                                            <li key={index}>
                                                <strong>Label:</strong> {xpath.specs_label}, <strong>Xpath:</strong> {xpath.specs_xpath}
                                            </li> 
                                        ))}
                                    </ul>

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
