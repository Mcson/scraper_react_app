import TableComp from '@/Components/TableComp';
import { faEye, faPenToSquare, faTrashCan } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { Table, TableHeader, TableColumn, TableBody, TableRow, TableCell, Tooltip, Pagination } from '@nextui-org/react';
import React from 'react';

export default function ViewIcpTable({data, onPageChange}) {
    
   

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
                <TableColumn>ID</TableColumn>
                <TableColumn>PCODE</TableColumn>
                <TableColumn>PNAME</TableColumn>               
                
            </TableHeader>
                {
                    data.data.length == 0
                    ?
                    <TableBody emptyContent={"No Users to display."}>{[]}</TableBody>
                    :
                    <TableBody>
                        {data.data.map((icp) => (
                            
                                <TableRow key={icp.id}>
                                <TableCell>{icp.id}</TableCell>
                                <TableCell>{icp.pcode}</TableCell>
                                
                                <TableCell>{icp.pname}</TableCell>
                             
                               
                            </TableRow>
                          
                            
                        ))}
                    </TableBody>
                }
           
            </Table>

        </>
    );
}
