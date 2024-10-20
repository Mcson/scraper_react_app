import {Table, TableHeader, TableColumn, TableBody, TableRow, TableCell, Pagination} from "@nextui-org/react";

export default function TableComp({ tableHeader, tableData, onPageChange, ...props }) {
  return (
    <Table 
      variant="light" 
      removeWrapper 
      aria-label="Example static collection table" 
      {...props}
      bottomContent = {
        tableData.data.length > 0 && (
          <div className="flex w-full justify-center">
            <Pagination 
              total={tableData.last_page}
              initialPage={tableData.current_page}
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

        {
          tableHeader.map((th, i) => (
            <TableColumn key={i}>{th.label}</TableColumn>
          ))
        }

      </TableHeader>
      <TableBody>

        {
          tableData.data.map((td) => (
            <TableRow key={td.id}>

              {tableHeader.map((th, index) => (
                <TableCell key={index}>

                  {th.render ? th.render(td) : td[th.field]}

                </TableCell>
              ))}

            </TableRow>
          ))
        }

      </TableBody>
    </Table>
  );
}