<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 06</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif
        }

        td {
            padding: 4px;
        }

        table {
            border: 1px solid;
        }
    </style>
</head>

<body>
    <h1> Latihan 06 </h1>

    <table>
        <?php
        $baju = 78;
        $bawa = 250;
        for ($x = 1; $x <= 2; $x++) {
            $hasil = $bawa - $x;
        ?>
            <tr>
                <td><?php echo $bawa; ?></td>
                <td>-</td>
                <td><?php echo $baju; ?></td>
                <td>=</td>
                <td><?php echo $hasil; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>