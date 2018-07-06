<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li class="active">New Products</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<?php 
    $id =1;
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
    $sql = "SELECT MaSanPham, TenSanPham, HinhURL, Gia 
    FROM SanPham 
    WHERE BiXoa = 0 
    ORDER BY MaSanPham 
    DESC LIMIT 0, 9";
    $result = DataProvider::ExecuteQuery($sql);
?>
<!--start-product-->
<div class="product">
    <div class="container">
        <div class="product-main">
            <div class="col-md-9 p-left">
                <!-- <div class="product-one"> -->
                    <!-- Single product -->
                    <?php while($row = mysqli_fetch_array($result)){ ?>
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
                                <a class="item_add" href="#">
                                    <i></i>
                                    <span class=" item_price">$<?php echo $row["Gia"] ?></span>
                                </a>
                                </p>
                            </div>
                        </div>
                    <?php }?>
                    <!-- Single product -->
                    <!-- <div class="clearfix"> </div> -->
                <!-- </div> -->
        <!-- sort code -->
            </div>
            <div class="col-md-3 p-right single-right">
                <h3>Categories</h3>
                <ul class="product-categories">
                    <li>
                        <a href="#">Blucher Shoe</a>
                        <span class="count">(14)</span>
                    </li>
                    <li>
                        <a href="#">Clog Shoe</a>
                        <span class="count">(2)</span>
                    </li>
                    <li>
                        <a href="#">Snow Boot Shoe</a>
                        <span class="count">(2)</span>
                    </li>
                    <li>
                        <a href="#">Galesh Shoe</a>
                        <span class="count">(11)</span>
                    </li>
                    <li>
                        <a href="#">pataugas Shoe</a>
                        <span class="count">(3)</span>
                    </li>
                    <li>
                        <a href="#">Jazz Shoe</a>
                        <span class="count">(3)</span>
                    </li>
                </ul>
                <h3>Colors</h3>
                <ul class="product-categories">
                    <li>
                        <a href="#">Green</a>
                        <span class="count">(14)</span>
                    </li>
                    <li>
                        <a href="#">Blue</a>
                        <span class="count">(2)</span>
                    </li>
                    <li>
                        <a href="#">Red</a>
                        <span class="count">(2)</span>
                    </li>
                    <li>
                        <a href="#">Gray</a>
                        <span class="count">(8)</span>
                    </li>
                    <li>
                        <a href="#">Green</a>
                        <span class="count">(11)</span>
                    </li>
                    <li>
                        <a href="#">Yellow</a>
                        <span class="count">(2)</span>
                    </li>
                </ul>
                <h3>Sizes</h3>
                <ul class="product-categories">
                    <li>
                        <a href="#">5.5</a>
                        <span class="count">(14)</span>
                    </li>
                    <li>
                        <a href="#">6</a>
                        <span class="count">(2)</span>
                    </li>
                    <li>
                        <a href="#">6.5</a>
                        <span class="count">(2)</span>
                    </li>
                    <li>
                        <a href="#">7</a>
                        <span class="count">(8)</span>
                    </li>
                    <li>
                        <a href="#">7.5</a>
                        <span class="count">(11)</span>
                    </li>
                </ul>
                <h3>Price</h3>
                <ul class="product-categories p1">
                    <li>
                        <a href="#">600$-700$</a>
                        <span class="count">(14)</span>
                    </li>
                    <li>
                        <a href="#">700$-800$</a>
                        <span class="count">(2)</span>
                    </li>
                    <li>
                        <a href="#">800$-900$</a>
                        <span class="count">(2)</span>
                    </li>
                    <li>
                        <a href="#">900$-1000$</a>
                        <span class="count">(8)</span>
                    </li>
                    <li>
                        <a href="#">1000$-1100$</a>
                        <span class="count">(11)</span>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--end-product-->