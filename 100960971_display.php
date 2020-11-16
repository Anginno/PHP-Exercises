
<script type="text/javascript" src="js/js.js">
	alert("IT WORKS!");
	
</script>
<?php
/*
Filename: display.php
Author: Angelo T. Innocente
Date Created: 16 March 2017
Last Updated: 16 March 2017
Description: A file to display the table in mySQL
*/

echo "<h2>Display Products (Basic)</h2>";

//connect to the database

include "includes/connect.php";

// write a sql statement to get data from the tbl_product table
try {
	//create our sql statement
	$sql = 'SELECT prodId, prodName, description, qtyOnHand, listPrice, thumbNail, image FROM tbl_product';
	//execute the sql statement and store the output
	$resultSet = $pdo->query($sql);
} //end of try block

catch(PDOException $e) {
	// Creating a suitable error message including exception details
	echo "Unable to fetch database: " .$e->getMessage();
	
	// Stops the script continuing
	exit();
} //end of catch block

//display data in result set
?>
<table>
	<tr>
		<th>Product Id</th>
		<th>Product Name</th>
		<th>Description</th>
		<th>Quanitity</th>
		<th>List price $</th>
		<th>Thumbnail</th>
	</tr>


<?php
	
	foreach($resultSet as $row) {
		//store row data in variables
		$prodId = $row["prodId"];
		$prodName = $row["prodName"];
		$description = $row["description"];
		$qtyOnHand =$row["qtyOnHand"];
		$listPrice = $row["listPrice"];
		$thumbNail = $row["thumbNail"];
		$description = $row["description"];
		$image = $row["image"];
		
		//display data in next row of table
		
		echo "<tr>";
		echo "<td>$prodId</td>";
		echo "<td>$prodName</td>";
		echo "<td>$description</td>";
		echo "<td>$qtyOnHand</td>";
		echo "<td>$listPrice</td>";
		echo "<td>";
		?>
		<img src='<?php echo $thumbNail; ?>' width='250' height='250' alt='$prodName' onclick='displayImage("<?php echo $image; ?>", "<?php echo $description; ?>");'>

		<?php
		echo "</td>";
		
		//test for out of stock
		echo "<td>";
		
		if ($qtyOnHand <= 0) {
			
			echo "<img src='images/x.png' alt='out of stock' width='50' height='50'>";
		}
		else {
			//echo "<img src='images/shop.png' alt='out of stock' width='50' height='50'>";
			//creating a hidden form
			?>
			<form action='addToCart.php' method='post'>
				<input type='hidden' name='prodId' value='<?php echo $prodId; ?>'>
				<input type='hidden' name='prodName' value='<?php echo $prodName; ?>'>
				<input type='hidden' name='qtyOnHand' value='<?php echo $qtyOnHand; ?>'>
				<input type='hidden' name='listPrice' value='<?php echo $listPrice; ?>'>
				
				<input type='image' src='images/shop.png' width='50' height='50' name='addToCartSubmit'>
			</form>
			
			<?php
			
		
		}
		echo "</td>";
		echo "</tr>";		
	
	}//end of foreach
echo "</table>";
?>