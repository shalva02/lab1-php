-<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table style="width:50%" border="1px" >
<tr>
<caption>მონაცემები</caption>
<td>სახელი:&nbsp; <?php echo  $_GET['name'];?></td>
</tr>
<tr>
<td>გვარი:&nbsp; <?php echo $_GET['lastname'];?></td>
</tr>
<tr>
<td>დაკავებული თანამდებობა: &nbsp; <?php echo $_GET['position'];?></td>

</tr>
<tr>
<td>ხელფასის რაოდენობა: &nbsp; <?php echo (int)  $_GET['points'];?></td>

</tr>
<tr>
<td>დაკავებული საშემოსავლო: &nbsp; <?php echo (int) $_GET['income'];?></td>

</tr>
<tr>
<td>დარიცხული ხელფასი: &nbsp; <?php echo (int) $_GET['salary'];?></td>
 
</tr>
</table>
</body>
</html>