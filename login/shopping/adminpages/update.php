<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM products");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	  <td class="ml-2 mr-2">Id</td>
		<td>Name</td>
		<td>RRP</td>
		<td>price</td>
		<td>Quantity</td>
		


	  </tr>
	  
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	  <td><?php echo $row["id"]; ?></td>
	    <td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["rrp"]; ?></td>
		<td><?php echo $row["price"]; ?></td>
		<td><?php echo $row["quantity"]; ?></td>

       
		<td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>


