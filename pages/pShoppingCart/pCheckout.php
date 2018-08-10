<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Checkout</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--start-ckeckout-->
<div class="ckeckout">
    <div class="container">
        <div class="ckeckout-top">
        <div class=" cart-items heading">
            <h3>My Shopping Bag</h3>
            
            
        <div class="in-check" >
            <ul class="unit">
                <li><span>Item</span></li>
                <li><span>Product Name</span></li>		
                <li><span>Unit Price</span></li>
                <li><span>Stock Status</span></li>
                <li> </li>
                <div class="clearfix"> </div>
            </ul>
            <?php $gioHang = unserialize($_SESSION["GioHang"]);
            $TongThanhTien = 0;
            $SoSanPham = count($gioHang->arrSanPham);

            for ($i = 0; $i < $SoSanPham; $i++) {
                $STT = $i + 1;
                $id = $gioHang->arrSanPham[$i]->MaSanPham;

                $sql = "SELECT MaSanPham, TenSanPham, HinhURL, Gia FROM SanPham WHERE BiXoa = 0 AND MaSanPham = $id";
                $result = DataProvider::ExecuteQuery($sql);

                $row = mysqli_fetch_array($result); ?>
            <ul class="cart-header">
                <div class="close1"> </div>
                    <li class="ring-in"><a href="single.html" ><img src="images/<?php echo $row["HinhURL"] ?>" class="img-responsive" alt=""></a>
                    </li>
                    <li><span><?php echo $row["TenSanPham"] ?></span></li>
                    <li><span>$ <?php echo $row["Gia"] ?></span></li>
                    <li><span>In Stock</span></li>
                    <li> <a href="single.html" class="add-cart cart-check">ADD TO CART</a></li>
                <div class="clearfix"> </div>
            </ul>
           <?php 
        } ?>
             
            <!-- <ul class=" cart-header1">
                <div class="close2"> </div>
                    <li class="ring-in"><a href="single.html" ><img src="images/s-2.jpg" class="img-responsive" alt=""></a>
                    </li>
                    <li><span>Elliot Shoes</span></li>
                    <li><span>$ 300.00</span></li>
                    <li><span>In Stock</span></li>
                    <li> <a href="single.html" class="add-cart cart-check">ADD TO CART</a></li>
                    <div class="clearfix"> </div>
            </ul>
            <ul class="cart-header2">
                <div class="close3"> </div>
                    <li class="ring-in"><a href="single.html" ><img src="images/s-4.jpg" class="img-responsive" alt=""></a>
                    </li>
                    <li><span>Woo Dress</span></li>
                    <li><span>$ 360.00</span></li>
                    <li><span>In Stock</span></li>
                    <li> <a href="single.html" class="add-cart cart-check">ADD TO CART</a></li>
                    <div class="clearfix"> </div>
            </ul> -->
        </div>
        </div>  
        </div>
    </div>
</div>
<script>$(document).ready(function(c) {
    $('.close1').on('click', function(c){
        $('.cart-header').fadeOut('slow', function(c){
            $('.cart-header').remove();
        });
        });	  
    });
</script>
<script>$(document).ready(function(c) {
    $('.close2').on('click', function(c){
        $('.cart-header1').fadeOut('slow', function(c){
            $('.cart-header1').remove();
        });
        });	  
    });
</script>
<script>$(document).ready(function(c) {
    $('.close3').on('click', function(c){
        $('.cart-header2').fadeOut('slow', function(c){
            $('.cart-header2').remove();
        });
        });	  
    });
</script>
<!--end-ckeckout-->