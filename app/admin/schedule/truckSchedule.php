<?php
$truckId = (isset($_GET['truckId']) && $_GET['truckId'] != '') ? $_GET['truckId'] : '';

$schedule = (isset($_GET['schedule']) && $_GET['schedule'] != '') ? $_GET['schedule'] : '';

$query = mysql_query("select * from delivery where truckId='$truckId' and deliveryDate='$schedule'");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>
<br>

<div class="listwrapper">
	<center>
		<?=getTruckName($truckId)?> Schedule on <?=$schedule?>
	</center>
	
	<table class="tablelist">
	<tr>
		<th>Order Number</th>
		<th>Name</th>
		<th>Shipping Address</th>
		<th></th>
	</tr> 
	<?php
		while($row=mysql_fetch_array($query)){
	?>
	<tr>
		<td><?=$row['orderNumber']?></td>
		<td><?=getFullName($row['orderNumber'])?></td>
		<td><?=getShippingAddress($row['orderNumber'])?></td>
		<td><button class="button updatebtn" onClick="location.href='?view=detail&orderNumber=<?=$row['orderNumber']?>'">View</button></td>
	</tr>

	<?php
		}
	?>
	</table>
</div>