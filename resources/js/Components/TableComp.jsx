import {Table, TableHeader, TableColumn, TableBody, TableRow, TableCell} from "@nextui-org/react";

export default function TableComp({ tableHeader, tableData, ...props }) {
  return (
    <Table variant="light" removeWrapper aria-label="Example static collection table" {...props}>
      <TableHeader>

        {
          tableHeader.map((th, i) => (
            <TableColumn key={i}>{th.label}</TableColumn>
          ))
        }

      </TableHeader>
      <TableBody>

        {
          tableData.map((td) => (
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