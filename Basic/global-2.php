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
    function mytest(){
        $x=5;//local scope
        echo"<p> variable x inside function is$x</p>";
    }
    mytest();
    //using x outside the function will generate an error  echo"<p> variable x outside function is$x</p>";
    ?>
</body>
</html>