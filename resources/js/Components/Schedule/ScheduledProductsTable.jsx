import {Table, TableHeader, TableColumn, TableBody, TableRow, TableCell, RadioGroup, Radio, Pagination, Button, Tooltip, useDisclosure} from "@nextui-org/react";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faPenToSquare, faTrashCan } from '@fortawesome/free-solid-svg-icons';
import { useForm } from "@inertiajs/react";
import Swal from "sweetalert2";

export default function ScheduledProductsTable({data, onPageChange, onEditProduct}){
    const {delete: destroy, processing, errors} = useForm();

    const handleDeteleProduct = (id) => {
        
        Swal.fire({
            icon: "warning",
            title: "Are you sure you want to delete this product?",
            showCancelButton: true,
            confirmButtonText: 'Yes'
        }).then(function(res){
            if(res.isConfirmed){
                const isLastItemOnPage = data.data.length === 1; // Check if there's only one item on the current page
                const currentPage = data.current_page;
                destroy(route('product.destroy', id), {
                    onSuccess: (response) => {
                        const data = response.props.flash;
                        if(data.success){
                
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: data.success,
                            }).then(() => {
                                if(isLastItemOnPage && currentPage > 1) {
                                    onPageChange(currentPage - 1)
                                }
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
            }
        });
    }

    const {isOpen, onOpen, onOpenChange} = useDisclosure();
    return (
        <>
            <Table
                variant="light"
                removeWrapper
                aria-label="all-scheduled-products-table"
                bottomContent = {
                    data.data.length > 0 && (
                        <div className="flex w-full justify-center">
                            <Pagination 
                                total={data.last_page}
                                initialPage={data.current_page}
                                onChange={onPageChange}
                                showControls
                                color="primary"
                                classNames={{
                                    cursor: "bg-primary"
                                }}
                            />

                        </div>
                    )
                }
            >
            <TableHeader>
                <TableColumn>TITLE</TableColumn>
                <TableColumn>START DATE</TableColumn>
                <TableColumn>TIME(24 hours format)</TableColumn>
                <TableColumn>FREQUENCY</TableColumn>
                <TableColumn>PCODE</TableColumn>
                <TableColumn>PNAME</TableColumn>
                <TableColumn className="flex items-center justify-center">ACTION</TableColumn>
            </TableHeader>
                {
                    data.data.length == 0
                    ?
                    <TableBody emptyContent={"No scheduled products to display."}>{[]}</TableBody>
                    :
                    <TableBody>
                        {data.data.map((product) => (
                            
                                <TableRow key={product.id}>
                                <TableCell>{product.schedule.title}</TableCell>
                                <TableCell>{new Date(product.schedule.date).toLocaleDateString('en-US', {
                                            year: 'numeric',
                                            month: 'long',
                                            day: 'numeric',
                                        })}</TableCell>
                                <TableCell>{product.schedule.time.hour}:{product.schedule.time.minute}</TableCell>
                                <TableCell>{product.schedule.frequency}</TableCell>
                                <TableCell>{product.pcode}</TableCell>
                                <TableCell>{product.pname}</TableCell>
                                <TableCell className="flex items-center justify-center gap-1">
                                <Tooltip color="success" content="Edit">
                                    <Button size="sm" isIconOnly variant="flat" color="success" onPress={() => onEditProduct(product.schedule)}>
                                        <FontAwesomeIcon icon={faPenToSquare} />
                                    </Button>
                                </Tooltip>
                                
                                <Tooltip color="danger" content="Delete">
                                    <Button size="sm" isIconOnly variant="flat" color="danger" onPress={() => handleDeteleProduct(product.id)}>
                                        <FontAwesomeIcon icon={faTrashCan} />
                                    </Button>
                                </Tooltip>
                                </TableCell>
                            </TableRow>
                          
                            
                        ))}
                    </TableBody>
                }
            </Table>
        </>
    )
}