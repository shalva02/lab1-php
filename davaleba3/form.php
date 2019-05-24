<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php error_reporting(0); ?>
<?php
 
$arr = array("1","correct","3","calc","calc1");
$num = 0;
for ($x = 0; $x < sizeof($arr); $x++) {
if($_POST[$arr[$x]]==="this" || $_POST[$arr[$x]] === "-1" || $_POST[$arr[$x]] === "75"  ){
$num = $num + 1;
}

}

echo " თქვენ დაგროვეთ ".    $num.  "  სწორი პასუხი"
?>
</body>
</html>