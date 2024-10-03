import {Table, TableHeader, TableColumn, TableBody, TableRow, TableCell} from "@nextui-org/react";

export default function TableComp({ tableHeader, tableData }) {
  return (
    <Table aria-label="Example static collection table">
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

              {tableHeader.map((th) => (
                <TableCell key={th.field}>

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