<?php

$sql = "SELECT MaSanPham, TenSanPham, HinhURL, Gia 
    FROM SanPham 
    WHERE BiXoa = 0 
    ORDER BY SoLuongBan 
    DESC LIMIT 0, 8";
$result = DataProvider::ExecuteQuery($sql);
?>
<div class="shoes">
	<div class="container">
		<div class="product-one">
			<!-- Single product -->
			<?php while ($row = mysqli_fetch_array($result)) { ?>
				<div class="col-md-3 product-left">
					<div class="p-one simpleCart_shelfItem">
						<a href="index.php?c=6&id=<?php echo $row["MaSanPham"]; ?>">
							<img src="images/<?php echo $row["HinhURL"]; ?>" alt="" />
							<div class="mask">
								<span>Quick View</span>
							</div>
						</a>
						<h4><?php echo $row["TenSanPham"]; ?></h4>
						<p>
							<a class="item_add" href="index.php?c=101&id=<?php echo $row["MaSanPham"]; ?>">
								<i ></i>
								<span class=" item_price">$<?php echo $row["Gia"]; ?></span>
							</a>
						</p>
					</div>
				</div>
			<?php 
	} ?>
			<!-- Single product -->
		</div>
	</div>
</div>