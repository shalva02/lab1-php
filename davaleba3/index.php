<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
       :root,body{
width:60%;
margin:0px auto;
}
img{
display:block;
}
     
</style>
<form action="form.php" method="post">

<h3>1.აქ რომ არ მუშაობდეთ, სად იქნებოდით ახლა?</h3>
<input type="radio" name="1"  value="this"> სახლში<br>
<input type="radio" name="1"  value="სხვა სამუშაოზე">სხვა სამუშაოზე<br>
<input type="radio" name="1"  value="უნივერსიტეტში">უნივერსიტეტში<br>
<input type="radio" name="1"   value="სადმე სხვაგან"> სადმე სხვაგან  



<h3>2.ბოლოს რომელ ფილმზე იტირეთ? ან იცინეთ ხმამაღლა??</h3>
<input type="radio" name="correct" value="ტიტანიკი"> ტიტანიკი<br>
<input type="radio" name="correct" value="სამეფო კარის თამაშები"> სამეფო კარის თამაშები<br>
<input type="radio" name="correct" value="გრეის ანატომია"> გრეის ანატომია<br>
<input type="radio" name="correct" value="this"> გია ანატომია


<h3><img src="panther.jpg" alt="lion" width:"200px" height="200px">რომელი ცხოველია ჩამოთვლილთაგან?</h3>
<input type="radio" name="3" value="this"> პანტერა<br>
<input type="radio" name="3" value="პანტერა"> ლომი<br>
<input type="radio" name="3" value="ვეფხვი"> ვეფხვი<br>
<input type="radio" name="3" value="კატა"> კატა <br><br>

<h3>3 - 4 = ?</h3>
<input type="text" name="calc"><br>
<h3>5 * 15 = ?</h3>
<input type="text" name="calc1"><br><br>

<input type="Submit" value="Submit">
</form>
</body>
</html>