<?php
$id = 1;
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
$sql = "SELECT sp.MaSanPham, TenSanPham, TenLoaiSanPham, HinhURL, Gia, MoTa, SoLuongTon, lsp.MaLoaiSanPham, Hinh1, Hinh2, Hinh3 
FROM sanpham sp, loaisanpham lsp, hinhchitiet hct 
WHERE sp.BiXoa = 0 AND lsp.BiXoa = 0 AND sp.MaLoaiSanPham = lsp.MaLoaiSanPham AND sp.MaSanPham = hct.MaSanPham AND sp.MaSanPham = $id";

$result = DataProvider::ExecuteQuery($sql);
$row = mysqli_fetch_array($result);
?>
<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="index.php?c=5&id=<?php echo $row["MaLoaiSanPham"] ?>"><?php echo $row["TenLoaiSanPham"] ?></a></li>
                <li class="active"><?php echo $row["TenSanPham"] ?></li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--start-single-->
<div class="single contact">
    <div class="container">
        <div class="single-main">
            <div class="col-md-9 single-main-left">
            <div class="sngl-top">
                <div class="col-md-5 single-top-left">	
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="images/<?php echo $row["HinhURL"] ?>">
                                <img src="images/<?php echo $row["HinhURL"] ?>" />
                            </li>
                            <li data-thumb="images/<?php echo $row["Hinh1"] ?>">
                                <img src="images/<?php echo $row["Hinh1"] ?>" />
                            </li>
                            <li data-thumb="images/<?php echo $row["Hinh2"] ?>">
                                <img src="images/<?php echo $row["Hinh2"] ?>" />
                            </li>
                            <li data-thumb="images/<?php echo $row["Hinh3"] ?>">
                                <img src="images/<?php echo $row["Hinh3"] ?>" />
                            </li>
                        </ul>
                    </div>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
$('.flexslider').flexslider({
animation: "slide",
controlNav: "thumbnails"
});
});
</script>
            </div>	
            <div class="col-md-7 single-top-right">
                <div class="details-left-info simpleCart_shelfItem">
                    <h3><?php echo $row["TenSanPham"] ?></h3>
                    <p class="availability">Availability: <span class="color"><?php echo $row["SoLuongTon"] ?></span></p>
                    <div class="price_single">
                        <span class="actual item_price">$<?php echo $row["Gia"] ?></span>
                    </div>
                    <h2 class="quick">Quick Overview:</h2>
                    <p class="quick_desc"><?php echo $row["MoTa"] ?></p>
                    <ul class="product-colors">
                        <h3>available Colors ::</h3>
                        <li><a class="color1" href="#"><span> </span></a></li>
                        <li><a class="color2" href="#"><span> </span></a></li>
                        <li><a class="color3" href="#"><span> </span></a></li>
                        <li><a class="color4" href="#"><span> </span></a></li>
                        <li><a class="color5" href="#"><span> </span></a></li>
                        <li><a class="color6" href="#"><span> </span></a></li>
                        <li><a class="color7" href="#"><span> </span></a></li>
                        <li><a class="color8" href="#"><span> </span></a></li>
                        <div class="clear"> </div>
                    </ul>
                    <ul class="size">
                        <h3>Length</h3>
                        <li><a href="#">7</a></li>
                        <li><a href="#">6</a></li>
                    </ul>
                    <div class="quantity_box">
                        <ul class="product-qty">
                            <span>Quantity:</span>
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </ul>
                    </div>
                <div class="clearfix"> </div>
            <div class="single-but item_add">
                <input type="submit" value="add to cart"/>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php 
$sql = "SELECT MaSanPham, TenSanPham, HinhURL, Gia 
FROM SanPham 
WHERE BiXoa = 0 
ORDER BY SoLuotXem 
DESC LIMIT 0, 3";
$result = DataProvider::ExecuteQuery($sql);
?>
                <div class="latest products">
                    <div class="product-one">
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <div class="col-md-4 product-left single-left"> 
                            <div class="p-one simpleCart_shelfItem">
                                <a href="index.php?c=6&id=<?php echo $row["MaSanPham"] ?>">
                                    <img src="images/<?php echo $row["HinhURL"] ?>" alt="" />
                                    <div class="mask mask1">
                                    <span>Quick View</span>
                                    </div>
                                </a>
                                <h4><?php echo $row["TenSanPham"] ?></h4>
                                <p>
                                <a class="item_add" href="index.php?c=101&id=<?php echo $row["MaSanPham"]; ?>">
                                    <i></i>
                                    <span class=" item_price">$<?php echo $row["Gia"] ?></span>
                                </a>
                                </p>
                            </div>
                        </div>
                    <?php 
                } ?>
                      
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 single-right">
                <h3>Categories</h3>
                <ul class="product-categories">
                    <li><a href="#">Blucher Shoe</a> <span class="count">(14)</span></li>
                    <li><a href="#">Clog Shoe</a> <span class="count">(2)</span></li>
                    <li><a href="#">Snow Boot Shoe</a> <span class="count">(2)</span></li>
                    <li><a href="#">Galesh Shoe</a> <span class="count">(11)</span></li>
                    <li><a href="#">pataugas Shoe</a> <span class="count">(3)</span></li>
                    <li><a href="#">Jazz Shoe</a> <span class="count">(3)</span></li>
                </ul>
                <h3>Colors</h3>
                <ul class="product-categories">
                    <li><a href="#">Green</a> <span class="count">(14)</span></li>
                    <li><a href="#">Blue</a> <span class="count">(2)</span></li>
                    <li><a href="#">Red</a> <span class="count">(2)</span></li>
                    <li><a href="#">Gray</a> <span class="count">(8)</span></li>
                    <li><a href="#">Green</a> <span class="count">(11)</span></li>
                    <li><a href="#">Yellow</a> <span class="count">(2)</span></li>
                </ul>
                <h3>Sizes</h3>
                <ul class="product-categories">
                    <li><a href="#">5.5</a> <span class="count">(14)</span></li>
                    <li><a href="#">6</a> <span class="count">(2)</span></li>
                    <li><a href="#">6.5</a> <span class="count">(2)</span></li>
                    <li><a href="#">7</a> <span class="count">(8)</span></li>
                    <li><a href="#">7.5</a> <span class="count">(11)</span></li>
                </ul>
                <h3>Price</h3>
                <ul class="product-categories p1">
                    <li><a href="#">600$-700$</a> <span class="count">(14)</span></li>
                    <li><a href="#">700$-800$</a> <span class="count">(2)</span></li>
                    <li><a href="#">800$-900$</a> <span class="count">(2)</span></li>
                    <li><a href="#">900$-1000$</a> <span class="count">(8)</span></li>
                    <li><a href="#">1000$-1100$</a> <span class="count">(11)</span></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--end-single-->