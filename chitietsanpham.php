<?php include 'include/header.php'; ?>
<?php
if(!isset($_GET['id']) || $_GET['id'] == NULL) {
    echo "<script>window.location='index.php'</script>";
}
else{
    $id = $_GET['id'];
}
?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style2.css" />
    <div class="section" style="margin: 100px">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <?php
                include 'classes/sanpham.php';
                $sanpham = new sanpham();
                $chitiet = $sanpham->show_sanphamtheoid($id);
                if ($chitiet){
                while ($result = $chitiet->fetch_assoc()){
                ?>
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="admin/uploads/<?= $result['hinhanh']; ?>" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="admin/uploads/<?= $result['hinhanh']; ?>" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="admin/uploads/<?= $result['hinhanh']; ?>" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="admin/uploads/<?= $result['hinhanh']; ?>" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->

                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="admin/uploads/<?= $result['hinhanh']; ?>" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="admin/uploads/<?= $result['hinhanh']; ?>" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="admin/uploads/<?= $result['hinhanh']; ?>" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="admin/uploads/<?= $result['hinhanh']; ?>" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name"><?= $result['tensanpham']; ?></h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#">10 Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price"><?php echo number_format($result['gia'],0,',','.');?> Đ</h3>
                            <span class="product-available">In Stock</span>
                        </div>
<!--                        <p>--><?php //echo $result['']; ?><!--</p>-->
                        <div class="add-to-cart">
                            <div class="qty-label">
                                Số lượng
                                <div class="input-number">
                                    <input type="number" value="1" min="1">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                            <button class="add-to-cart-btn" onclick="addCart(<?php echo $result['idsanpham'] ?>)"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>

                            <button style="margin: 30px 0px 0px 170px" class="add-to-cart-btn"><a href="viewcart.php"  style="color: white;font-weight: bold"><i class="fa fa-shopping-cart"></i> Xem giỏ hàng</a></button>
                        </div>

                        <ul class="product-btns">
                            <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Category:</li>
                            <li><a href="#">Headphones</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>

                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-12">
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Mô tả</a></li>
                            <!--                        <li><a data-toggle="tab" href="#tab2">Details</a></li>-->
<!--                            <li><a data-toggle="tab" href="#tab3">Bình luận</a></li>-->
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><?php echo $result['mota']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1  -->

                        </div>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">Sản phẩm liên quan</h3>
                    </div>
                </div>
                <?php
                $show_related_pr = $sanpham->show_sanpham();
                if ($show_related_pr){
                    while ($result_related = $show_related_pr->fetch_assoc()){

                        ?>
                        <!-- product -->
                        <div class="col-md-3 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="admin/uploads/<?php echo $result_related['hinhanh'] ?>" alt="">
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <!--                        <p class="product-category">Category</p>-->
                                    <h3 class="product-name"><a href="#"><?php echo $result_related['tensanpham'] ?></a></h3>
                                    <h4 class="product-price"><?php echo number_format($result_related['gia'],0,',','.');?> Đ</h4>
                                    <div class="product-rating">
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">xem nhanh</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn" onclick="addCart(<?php echo $result_related['idsanpham'] ?>)"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                        <?php
                    }
                }
                ?>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
    <script src="js/jquery.min.js"></script>
    <script src="js/product/bootstrap.min.js"></script>
    <script src="js/product/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>

<?php include 'include/footer.php'; ?>