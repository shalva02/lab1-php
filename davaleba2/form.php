<!DOCTYPE html>
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
<td>სახელი:&nbsp; <?php echo  $_POST['name'];?></td>
</tr>
<tr>
<td>გვარი:&nbsp; <?php echo $_POST['lastname'];?></td>
</tr>
<tr>
<td>კურსი: &nbsp; <?php echo (int) $_POST['position'];?></td>
 
</tr
><tr>
<td>სემესტრი: &nbsp; <?php echo (int)  $_POST['points'];?></td>

</tr>
<tr>
<td>სასწავლო კურსი: &nbsp; <?php echo (int) $_POST['income'];?></td>

</tr>
<tr>
<td>მიღებული ნიშანი: &nbsp; <?php echo (int) $_POST['grades'];?></td>

</tr>
<tr>
<td>შესაბამისი შეფასება: &nbsp; 
<?php 
$grade = $_POST['grades'];
if($grade>=90){
echo "A-ფრიადი,";



}
else if($grade>=80){
echo "B-ძალიან კარგი";
        
        
        
}
else if($grade>=70){
echo "C-არაუშავს";
            
            
            
}
else if($grade>=51){
echo "D-ძლივს გადარჩი";
           
           
           
}
else{
echo "ჩაიჭერი სიმონ";
        
        
}
?>
</td>

</tr>
<tr>
<td>ლექტორის სახელი: &nbsp; <?php echo $_POST['lectorN'];?></td>

</tr>
<tr>
<td>ლექტორის გვარი: &nbsp; <?php echo $_POST['lectorS'];?></td>

</tr>
<tr>
<td>დეკანის სახელი: &nbsp; <?php echo $_POST['decanN'];?></td>

</tr>
<tr>
<td>დეკანის გვარი: &nbsp; <?php echo $_POST['decanS'];?></td>

</tr>
</table>
</body>
</html>