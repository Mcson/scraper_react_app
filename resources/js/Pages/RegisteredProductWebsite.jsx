import TableComp from "@/Components/TableComp";
import { faPenToSquare, faTrashCan } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { Chip, Tooltip } from "@nextui-org/react";

export default function RegisteredProductWebsite() { // add props and pass data here

    // registered dummy datas
    const registeredTableHeader = [
        // change the field values, it needs to be identical with the column name from DB
        { label: 'Product Code', field: 'code' },
        { label: 'Product Name', field: 'name' },
        { label: 'Url', field: 'url' },
        { label: 'Terms Url', field: 'terms_url' },
        { label: 'Title', field: 'title' },
        { label: 'Price', field: 'price' },
        { label: 'Outlet', field: 'outlet' },
        {
          label: 'Status',
          key: 'status',
          render: (td) => {
            const statusStyles = {
                active: "success",
                inactive: "danger",
                pending: "warning",
            };
      
            return (
              <Chip className="capitalize" color={statusStyles[td.status]} size="sm" variant="flat">
                  {td.status}
              </Chip>
            );
          }
        },
        { label: 'Registered Date', field: 'registered' },
        { 
            label: 'Action', 
            field: 'action',
            render: (td) => (
                <div className='flex gap-1'>
                    <Tooltip color="success" content="Update">
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

    const registeredTableData = [
        // must always gave id prop, it is used as key
        { id: 1, code: 1, name: 'John Doe', url: 28, terms_url: 'john.example.com', title: 'title', price: 'price', outlet: 'outlet', status: 'active', registered: 'registered' },
        { id: 2, code: 2, name: 'Jane Smith', url: 34, terms_url: 'jane.example.com', title: 'title', price: 'price', outlet: 'outlet', status: 'inactive', registered: 'registered' },
        { id: 3, code: 3, name: 'Sam Green', url: 25, terms_url: 'sam.example.com', title: 'title', price: 'price', outlet: 'outlet', status: 'pending', registered: 'registered' },
    ];

    return (
        <>

            <TableComp tableHeader={registeredTableHeader} tableData={registeredTableData}/>

        </>
    );
}
