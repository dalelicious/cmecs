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
		<div class="welcome">
			<?=$headerName;?>
			<?php
			if ($querylen == 0){
			?>
			<div>
				<a href="../../user/account">Login</a> |
				<a href="../../user/account/?view=register">Sign up</a>
			</div>
			<?php
			}
			else{
			?>
			<div>
				<a href="../../user/account/?view=detail">My Account</a>  | 
				<a href="../../user/account/process.php?action=logout">Logout</a>
			</div>
			<?php
			}
			?>
		</div>
		<div class="logo">
			<a href="../../../user/home"><img src="../../../include/web/images/logo.png" alt=""/> </a>
		</div>
		<div class="h_search">
    		<form class="formsearch" action="../../user/product" method="GET">
    			<input type="hidden" name="view" value="searchList">
				<input type="text" name="search" value="">
    			<input type="submit" value="">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li class="active"><a href="../../user/home">Home</a></li> |
				<li><a href="../../user/category">category</a></li> |
				<li><a href="../../user/product">product</a></li> |
				<li><a href="../../user/wishlist">wishlist</a></li> |
				<li><a href="../../user/order">order</a></li> |
				<li><a href="../../user/personalize">personalize</a></li>		
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	            	        <li class="nav-item"><a class="active" href="index.html">Home</a></li>
							<li class="nav-item"><a href="sale.html">Sale</a></li>
							<li class="nav-item"><a href="handbags.html">Handbags</a></li>
							<li class="nav-item"><a href="accessories.html">Accessories</a></li>
							<li class="nav-item"><a href="shoes.html">Shoes</a></li>
							<li class="nav-item"><a href="service.html">Services</a></li>
							<li class="nav-item"><a href="contact.html">Contact</a></li>
	                 </ul>
	           </nav>
	             <div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="../../include/js/responsive.menu.js"></script>
</div>
         </div>		  
	<div class="clear"></div>
</div>
</div>