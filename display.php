On the display.php file write this code

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<table>
<tr>
<th>NO</th>
<th>Firstname</th>
<th>Lastname</th>
<th>IMAGE</th>
</tr>
<?php
// include the database connection file here

$sql = "SELECT * FROM upload";

$result = mysqli_query($conn, $sql);

if(!$result){
exit("Error: ".mysqli_error($conn));
}else{
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?=$sn ?></td>
<td><?=$row['firstname'] ?></td>
<td><?=$row['lastname'] ?></td>
<td>
<img src="<?=$row['img'] ?>" alt="">
</td>
</tr>
<?php
}
}
?>
</table>
</body>
</html>
