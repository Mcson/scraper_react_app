import TableComp from '@/Components/TableComp';
import { faEye, faPenToSquare, faTrashCan } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { Tooltip } from '@nextui-org/react';
import React from 'react';

export default function ViewNonIcpData() {

    // scapred dummy datas
    const scrapedDataTableHeader = [
        // change the field values, it needs to be identical with the column name from DB
        { label: 'Product Code', field: 'code' },
        { label: 'Product Name', field: 'name' },
        { 
            label: 'Url', 
            field: 'url',
            render: (td) => (
                <div className='text-center'>
                    <Tooltip color="primary" content="View Site">
                        <span className="text-lg text-primary cursor-pointer active:opacity-50" onClick={() => alert(`View ${td.name} specs`)}>
                            <FontAwesomeIcon icon={faEye} />
                        </span>
                    </Tooltip>
                </div>
            )
        },
        { label: 'Terms Url', field: 'terms_url' },
        { label: 'Scraped Title', field: 'title' },
        { label: 'Scraped Price', field: 'price' },
        { 
            label: 'Specifications', 
            field: 'specifications',
            render: (td) => (
                <div className='text-center'>
                    <Tooltip color="primary" content="View Specifications">
                        <span className="text-lg text-primary cursor-pointer active:opacity-50" onClick={() => alert(`View ${td.name} specs`)}>
                            <FontAwesomeIcon icon={faEye} />
                        </span>
                    </Tooltip>
                </div>
            )
        },
        { label: 'Date Scraped', field: 'date_scraped' },
        { 
            label: 'Action', 
            field: 'action',
            render: (td) => (
                <div className='flex gap-1'>
                    <Tooltip color="success" content="Scrape">
                        <span className="text-lg text-success cursor-pointer active:opacity-50" onClick={() => alert(`Editing ${td.name}`)}>
                            <FontAwesomeIcon icon={faPenToSquare} />
                        </span>
                    </Tooltip>
                    
                    <Tooltip color="danger" content="Delete">
                        <span className="text-lg text-danger cursor-pointer active:opacity-50" onClick={() => alert(`Deleting ${td.name}`)}>
                            <FontAwesomeIcon icon={faTrashCan} />
                        </span>
                    </Tooltip>
                </div>
            )
        },
    ];

    const scrapedDataTableData = [
        // must always gave id prop, it is used as key
        { id: 1, code: 1, name: 'John Doe', url: 28, terms_url: 'john.example.com', title: 'title', price: 'price', specifications: 'specifications', date_scraped: 'date_scraped' },
        { id: 2, code: 2, name: 'Jane Smith', url: 34, terms_url: 'jane.example.com', title: 'title', price: 'price', specifications: 'specifications', date_scraped: 'date_scraped' },
        { id: 3, code: 3, name: 'Sam Green', url: 25, terms_url: 'sam.example.com', title: 'title', price: 'price', specifications: 'specifications', date_scraped: 'date_scraped' },
    ];

    return (
        <>

            <TableComp tableHeader={scrapedDataTableHeader} tableData={scrapedDataTableData}/>

        </>
    );
}
