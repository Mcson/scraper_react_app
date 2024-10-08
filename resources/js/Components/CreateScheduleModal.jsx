import ModalNextUi from '@/Components/ModalNextUi';
import TextInput from '@/Components/TextInput';
import SelectInput from '@/Components/SelectInput';
import SelectSearchMultiple from '@/Components/SelectSeachMultiple';
import DatePickerComponent from '@/Components/DatePickerUi';
import TimeNextUi from '@/Components/TimeNextUi';
import PrimaryButton from '@/Components/PrimaryButton';
import { useForm } from '@inertiajs/react';
import { TimeInput } from '@nextui-org/react';

export default function CreateScheduleModal({ isAddSheduleModalOpen, handleAddScheduleToggle }){
    const { data, setData, post } = useForm({
        title: '',
        frequency: '',
        date: '',
        time: '',
        products: []
    });


    const freqTypes = [
        {key: 'daily', label: 'Daily'},
        {key: 'weekly', label: 'Weekly'},
        {key: 'monthly', label: 'Monthly'},
    ]

    const items = [
        {id: 1, label: 'Daily'},
        {id: 2, label: 'Weekly'},
        {id: 3, label: 'Monthly'},
        {id: 4, label: 'Abc'},
        {id: 5, label: 'Efg'},
        {id: 6, label: 'Hij'},
        {id: 7, label: 'klm'},
        {id: 8, label: 'nop'},
        {id: 9, label: 'qrs'},
    ];

    const handleSubmit = (e) => {
        
        console.log(data);
    }

    return (
        <ModalNextUi 
                isOpen={isAddSheduleModalOpen} 
                onOpenChange={handleAddScheduleToggle} 
                modalTitle="Create Schedule" 
                footerContent={
                <PrimaryButton type="submit" onPress={handleSubmit} className='lower-case'>Submit</PrimaryButton>}
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
                    </div>
                    <div className='mt-4'>
                            <SelectInput 
                                options = {freqTypes}
                                classNames = {{
                                    trigger:'data-[focus-visible=true]:border-primary-400 data-[open=true]:border-primary-400 data-[focus=true]:border-primary-400',
                                    value: 'text-black',
                                    selectorIcon: 'text-black'
                                }}
                                label="Frequency"
                                value={data.frequency}
                                onChange={(e) => setData('frequency', e.target.value)}
                            />
                    </div>
                    <div className='mt-4'>
                         <DatePickerComponent 
                            value={data.value}
                            onChange={(date) => setData('date', date)}
                         />
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
                            value={data.time}
                            onChange={(time) => setData('time', time)}
                            />

                    </div>
                    <div className='mt-4'>
                        <SelectSearchMultiple 
                        array={items} 
                        label="Select Products" 
                        onSelectChange={products => setData('products', products)}
                        />

                    </div>
                </form>
            </ModalNextUi>
    )
}