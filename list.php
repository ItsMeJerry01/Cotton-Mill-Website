<?php 
include("connection.php");
?>
<?php
$query ="SELECT * FROM shop";
$data = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($data))
{



$productname =  $row['productname'];
$productprice = $row['productprice'];
$description = $row['description'];
$image = $row['image'];
?>
<?php
echo "$productname";
echo "<br>";
echo"$productprice";
echo "<br>";
//echo "$image";

echo '  
<tr>  
     <td>  
          <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" />  
     </td>  
</tr>  
';  
echo "<br>";
echo "$description";
echo "<br>";
$name[]= $productname;
$price[] =$productprice ;
}

echo "$name[6]";
echo "$price[6]"
?>