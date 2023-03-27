<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $userName = "Mohammed";

        switch ($userName) {
            case 'Ahamed':
                echo "Welcome Ahamed";
                break;
            case 'Mohammed':
                echo "Welcome Mohammed";
                break;    
            default:
                echo "Welcome back";
                break;
        }
    ?>
</body>
</html>