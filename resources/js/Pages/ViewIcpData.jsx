import TableComp from '@/Components/TableComp';
import { faEye, faPenToSquare, faTrashCan } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { Table, TableHeader, TableColumn, TableBody, TableRow, TableCell, Tooltip } from '@nextui-org/react';
import React from 'react';

export default function ViewIcpData() {

   

    return (
        <>
            <Table
                variant="light"
                removeWrapper
                aria-label="all-scheduled-products-table"
            >
            <TableHeader>
                <TableColumn>ID</TableColumn>
                <TableColumn>PCODE</TableColumn>
                <TableColumn>PNAME</TableColumn>
                <TableColumn>PSPECS</TableColumn>
                
                
            </TableHeader>
            <TableBody>
                <TableRow>
                <TableCell>Test</TableCell>
                <TableCell>Test</TableCell>
                <TableCell>Test</TableCell>
                <TableCell>Test</TableCell>
                </TableRow>
            </TableBody>
            </Table>

        </>
    );
}
