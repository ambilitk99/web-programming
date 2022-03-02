<html>
<body>
<h2>search</h2>

<?php
$con=mysql_connect("localhost","root","","book");

if(isset($_POST["t1"];
$sql="SELECT * FROM book1 WHERE title LIKE '%{$title}%'";
$result=mysqli_query($con,$sql);

echo"<table border=1>";
echo"<tr><th>bookno</th><th>name</th><th>author</th><th>price</th></tr>";
while($row=mysql_fetch_array($result))
{
echo"<tr>
<td>$row[0]</td>
<td>$row[1]</td>
<td>$row[2]</td>
<td>$row[3]</td></tr>";
}
}
echo"</table>";
?>

<form method="post" action="#">
Enter book name:<input type="text" name="t1"><br>
<input type="submit" name="search" value="search">
</form>
</body>
</html>
