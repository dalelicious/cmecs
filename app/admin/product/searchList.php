<?php
$search = (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '';

$query = mysql_query("select * from product where name like '%$search%'");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<div class="main_bg">
<div class="wrap">	
<div class="main">	
<div style="width: 100%; margin-left:auto; margin-right:auto;">
<div style="margin-right: 5%;">
	<?php if (!$message){} else {?>
	<div class="successmessage"> <?=$message;?></div>
	<?php } ?>
	
<button class="myButton" style="width: 100%; margin-left: 3%;" onClick="location.href='?view=add'">Add Product</button>

<br><br><br>
		<center><font color="green">Search for "<?=$search;?>"</font></center>
<?php

if (mysql_num_rows($query) > 0){
	while($row=mysql_fetch_array($query)){
?>
<!--diri-->
<!-- start grids_of_3 -->
<?php

if(file_exists("../../../media/".$row['image']))
    $fileName = $row['image'];
else
    $fileName = "default.png";
?>

	<div class="grids_of_3">
		<div class="grid1_of_3">
			<img src="../../../media/<?=$fileName;?>" alt=""/>
				<div class="descname"><?=$row['name']?></div>
				<div class="price">
					<button class="myButton" onClick="location.href='?view=detail&id=<?=$row['Id']?>'">View</button>
				</div>
			</div>
	</div>
	<!--asta d-->
<?php
	}
}
else{
	?>
	<div class="grids_of_3"><font color="red">Product not found</font></div>
	</div>
	<?php
}
?>
</div>
</div>
</div>
</div>
<div class="clear"></div>
</div>	