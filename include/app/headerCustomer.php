<?php
$username = $_SESSION['user_session'];
$query = mysql_query("select * from user where username = '$username'");
$querylen = mysql_num_rows($query);

if ($querylen != 0)
	{
		$headerName = "Welcome ".$username."!";
	}
else
	{
		$headerName="Please login";
	}
?>

<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<img src="../../../include/app/images/logo.png" alt=""/>
		</div>
		
		
		<div class="pleaselogin"><?=$headerName;?></div>
		
		<div class="welcome">
			<?php
			if ($querylen == 0){
			?>
			<div>
				<a href="../../../app/user/account">Login</a> |
				<a href="../../../app/user/account/?view=register">Sign up</a>
			</div>
			<?php
			}
			else{
			?>	
			<div>
				<a href="../../../app/user/account/?view=detail">My Account</a>  | 
				<a href="../../../app/user/account/process.php?action=logout">Logout</a>
			</div>
			<?php
			}
			?>
		</div>
	
		<div class="clear"></div>
		
	</div>
	<div class="search_box" style="width: 100%;">
    		<form class="formsearch" action="../product" method="GET">
    			<input type="hidden" name="view" value="searchList">
				<input type="text" name="search" value="">
    			<input type="submit" value="">
    		</form>
		</div>
</div>
</div>

<div class="header_btm">
<div class="dropwrap">
	<div class="drp-dwn">
		 	<select onchange="window.location=this.options[this.selectedIndex].value">
				<option value="../../../app/user/home">---------</option>
				<option value="../../../app/user/home">Home</option>
				<option value="../../../app/user/category">Category</option>
				<option value="../../../app/user/product">Product</option>
				<option value="../../../app/user/wishlist">Wishlist</option>
				<option value="../../../app/user/order">Order</option>
				<option value="../../../app/user/order/?view=searchOrderNumber">Search OrderNumber</option>
			</select>
	</div>
	
</div>		  
<div class="clear"></div>
</div>