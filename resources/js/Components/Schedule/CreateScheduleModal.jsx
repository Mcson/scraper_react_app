import ModalNextUi from '@/Components/ModalNextUi';
import TextInput from '@/Components/TextInput';
import SelectInput from '@/Components/SelectInput';
import SelectSearchMultiple from '@/Components/SelectSeachMultiple';
import DatePickerComponent from '@/Components/DatePickerUi';
import TimeNextUi from '@/Components/TimeNextUi';
import PrimaryButton from '@/Components/PrimaryButton';
import { useForm } from '@inertiajs/react';
import { useState, useEffect } from 'react';
import InputError from '@/Components/InputError';
import Swal from 'sweetalert2';
import {Time, parseDate} from "@internationalized/date";



export default function CreateScheduleModal({ isAddSheduleModalOpen, handleAddScheduleToggle, scheduleData = null , isEditing = false }){
    const { data, setData, post, put, processing, errors, reset, setError } = useForm({
        title: '',
        frequency: '',
        date: '',
        time: {hour: 0, minute: 0},
        products: []
    });

    
    const [isDateInvalid, setIsDateInvalid] = useState(false);
    const isSubmitDisabled = !data.title || !data.frequency || !data.date || !data.time || data.products.length === 0 || isDateInvalid;

    const freqTypes = [
        {key: 'Daily', label: 'Daily'},
        {key: 'Weekly', label: 'Weekly'},
        {key: 'Monthly', label: 'Monthly'},
    ]

    const items = [
        {pcode: 1, pname: 'Product 1'},
        {pcode: 2, pname: 'Product 2'},
        {pcode: 3, pname: 'Product 3'},
        {pcode: 4, pname: 'Product 4'},
        {pcode: 5, pname: 'Product 5'},
        {pcode: 6, pname: 'Product 6'},
        {pcode: 7, pname: 'Product 7'},
        {pcode: 8, pname: 'Product 8'},
        {pcode: 9, pname: 'Product 9'},
    ];

    const handleSubmit = (e) => {
       if(isEditing){
        put(route('schedule.update', {id: scheduleData.id,  data }), {
            onSuccess: (response) => {
                handleAddScheduleToggle(); 
                const data = response.props.flash;
                if(data.success){
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: data.success,
                    }).then(() => {
                        reset();
                        setIsDateInvalid(false);
                        
                    });
                } else if(data.error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Something went wrong!',
                        text: data.error,
                    });
                }
            }
        })
       } else {
        post(route('schedule.store'), {
            onSuccess: (response) => {
                handleAddScheduleToggle(); 
                const data = response.props.flash;
                if(data.success){
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: data.success,
                    }).then(() => {
                        reset();
                        setIsDateInvalid(false);
                    });
                } else if(data.error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Something went wrong!',
                        text: data.error,
                    });
                }
            }
           });
       }
  
    }

    useEffect(() => {
        
        if(!isAddSheduleModalOpen){
            reset();
            setIsDateInvalid(false); 
            Object.keys(errors).forEach(key => setError(key, ''));
        } else if(isEditing && scheduleData){
            // console.log(parseDate(scheduleData.date.split(" ")[0]));
            setData({
                title: scheduleData.title,
                frequency: scheduleData.frequency,
                // date: parseDate(scheduleData.date.split(" ")[0]),
                time: { hour: parseInt(scheduleData.time.hour )|| 0, minute: parseInt(scheduleData.time.minute) || 0 },
                products: scheduleData.products.map(product =>  parseInt(product.pcode))
            });
        } 
    }, [isAddSheduleModalOpen, isEditing, scheduleData])



    return (
        <ModalNextUi 
                isOpen={isAddSheduleModalOpen} 
                onOpenChange={handleAddScheduleToggle} 
                modalTitle={ isEditing && scheduleData ? "Update Schedule" : "Create Schedule" } 
                footerContent={
                isEditing && scheduleData ? <PrimaryButton type="submit" onPress={handleSubmit} className='lower-case' isLoading={processing} isDisabled={isSubmitDisabled}>Update</PrimaryButton> :
                <PrimaryButton type="submit" onPress={handleSubmit} className='lower-case' isLoading={processing} isDisabled={isSubmitDisabled}>Submit</PrimaryButton>
                
                }
            >
                <form>
                    <div>
                        <TextInput
                            id="title"
                            name="title"
                            label="Title"
                            classNames = {{
                                inputWrapper: "group-data-[focus=true]:border-primary-400"
                            }}
                            value={data.title}
                            onChange={(e) => setData('title', e.target.value)}
                        />
                        <InputError message={errors.title} className="mt-2" />
                    </div>
                    <div className='mt-4'>
                            <SelectInput 
                                options = {freqTypes}
                                selectedKeys={[data.frequency]}
                                classNames = {{
                                    trigger:'data-[focus-visible=true]:border-primary-400 data-[open=true]:border-primary-400 data-[focus=true]:border-primary-400',
                                    value: 'text-black',
                                    selectorIcon: 'text-black'
                                }}
                                label="Frequency"
                                value={data.frequency}
                                onChange={(e) => setData('frequency', e.target.value)}
                            />
                            <InputError message={errors.frequency} className="mt-2" />
                    </div>
                    <div className='mt-4'>
                         <DatePickerComponent 
                            label='Start Date'
                            value={data.value}
                            onDateChange={(date, isInvalid) => {
                                setData('date', date);
                                setIsDateInvalid(isInvalid); // Update invalid state based on DatePickerComponent
                                }}
                         />
                         <InputError message={errors.date} className="mt-2" />
                    </div>
                    <div className='mt-4'>
                            <TimeNextUi 
                            label='Time (24 hour format)'
                            variant='bordered'
                            size='sm'
                            classNames={{
                                inputWrapper: 
                                    "focus-within:border-primary-400 focus-within:hover:border-primary-400"      
                            }}
                            value={new Time(data.time.hour, data.time.minute)}
                            onChange={(newValue) => {
                                const newTime = newValue instanceof Time ? newValue : new Time(newValue.hour, newValue.minute);
                                setData('time', { hour: newTime.hour, minute: newTime.minute });
                      
                            }}
                            />
                            <InputError message={errors.time} className="mt-2" />
                    </div>
                    <div className='mt-4'>
                        <SelectSearchMultiple 
                        array={items} 
                        label="Select Products" 
                        onSelectChange={products => setData('products', products)}
                        defaultSelectedItems={items.filter(item => data.products.includes(item.pcode))}
                        />
                        <InputError message={errors.products} className="mt-2" />
                    </div>
                </form>
            </ModalNextUi>
    )
}