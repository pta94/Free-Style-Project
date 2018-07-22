<?php
$sql = "SELECT MaLoaiSanPham, TenLoaiSanPham 
    FROM loaisanpham 
    WHERE BiXoa = 0";
$result = DataProvider::ExecuteQuery($sql);
?>
<!--top-header-->
<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-4 top-header-left">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="col-md-4 top-header-middle">
				<a href="index.php"><img src="images/logo-4.png" alt="" /></a>
			</div>
			<div class="col-md-4 top-header-right">
				<div class="cart box_1">
						<a href="index.php?c=3">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart-1.png" alt="" />
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--top-header-->
<!--bottom-header-->
<div class="header-bottom">
	<div class="container">
		<div class="top-nav">
			<ul class="memenu skyblue">
				<li class=""><a href="index.php">Home</a>
			
				</li>
				<?php while ($row = mysqli_fetch_array($result)) { ?>
				<li class="grid"><a href="index.php?c=5&id=<?php echo $row["MaLoaiSanPham"] ?>"><?php echo $row["TenLoaiSanPham"] ?></a>
					
				</li>
				<?php 
		} ?>
				<!-- <li class="grid"><a href="#">Women</a>
					
				</li>
				<li class="grid"><a href="#">Kids</a>
					
				</li>
				<li class="grid"><a href="#">Sports</a>
					
				</li>
				<li class="grid"><a href="#">Brands</a>
					
				</li> -->
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!--bottom-header-->