<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Pdf</title>
</head><body>

    <h3 style="text-align: center;">DATA QUOTES</h3>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Position</th>
            <th>Quotes</th>
        </tr>

        <?php
        $no = 1;
        foreach ($queryAllQuotes as $row) {
        ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->jabatan ?></td>
                <td><?= $row->quotes ?></td>
            </tr>

        <?php
        }
        ?>
    </table>

</body></html>