<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Baju</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

    </style>

</head>

<body>
    <h1>Beli Baju</h1>

 
        <?php
        $baju = 30;
        $helai = 0;
        for ($duit = 50;$duit>$baju; $duit-=$baju) {
            $helai++;
          
        }
        echo"$helai helai baju.baki duit = $duit";
        ?>
    

    <p><a href = "jadual.php"

</body>

</html>