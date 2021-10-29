<div class="product-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Sản phẩm đang nổi</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-info">
                    <div class="nav-main">
                        <!-- Tab Nav -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php
                                include 'classes/danhmuc.php';
                                $danhmuc = new danhmuc();
                                $show_danhmuc = $danhmuc->show_danhmuc();
                                if($show_danhmuc){
                                    while ($result = $show_danhmuc->fetch_assoc()){
                            ?>
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab"><?php echo $result['tendanhmuc']; ?></a></li>
                            <?php
                                    }
                                }
                            ?>
                        </ul>
                        <!--/ End Tab Nav -->
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <?php
                                        include 'classes/sanpham.php';
                                        $sanpham = new sanpham();
                                        $show_sanpham = $sanpham->show_sanpham();
                                        if ($show_sanpham){
                                            while ($result_sp=$show_sanpham->fetch_assoc()){
                                    ?>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="chitietsanpham.php?id=<?=$result_sp['idsanpham']; ?>">
                                                    <img class="default-img" src="admin/uploads/<?php echo $result_sp['hinhanh']; ?>" alt="#">
                                                    <img class="hover-img" src="admin/uploads/<?php echo $result_sp['hinhanh']; ?>" alt="#">
                                                </a>
                                                <div class="button-head">
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                    </div>
                                                    <div class="product-action-2">
                                                        <a title="Add to cart" onclick="addCart(<?php echo $result_sp['idsanpham'] ?>)">Thêm vào giỏ</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="chitietsanpham.php?id=<?php echo $result_sp['idsanpham']; ?>"><?php echo $result_sp['tensanpham']; ?></a></h3>
                                                <div class="product-price">
                                                    <span><?php echo $result_sp['gia']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                            }
                                        }
                                        ?>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade" id="women" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <?php
                                        $show_sp = $sanpham->show_sanpham();
                                        if ($show_sp){
                                        while ($result_sphot=$show_sp->fetch_assoc()){
                                    ?>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="chitietsanpham.php?id=<?= $result_sphot['idsanpham']; ?>">
                                                    <img class="default-img" src="admin/uploads/<?php echo $result_sphot['hinhanh']; ?>" alt="#">
                                                    <img class="hover-img" src="admin/uploads/<?php echo $result_sphot['hinhanh']; ?>" alt="#">
                                                </a>
                                                <div class="button-head">
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                    </div>
                                                    <div class="product-action-2">
                                                        <a title="Add to cart" onclick="addCart(<?php echo $result_sphot['idsanpham'] ?>)" href="#">Thêm vào giỏ</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html"><?php echo $result_sphot['tensanpham']; ?></a></h3>
                                                <div class="product-price">
                                                    <span><?php echo $result_sphot['gia']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                        }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Area -->
<!-- Start Most Popular -->
<div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Hot Item</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    <!-- Start Single Product -->
                    <?php
                    $show_sp = $sanpham->show_sanpham();
                    if ($show_sp){
                    while ($result_sphot=$show_sp->fetch_assoc()){
                    ?>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="chitietsanpham.php?id=<?= $result_sphot['idsanpham']; ?>">
                                <img class="default-img" src="admin/uploads/<?= $result_sphot['hinhanh']; ?>" alt="#">
                                <img class="hover-img" src="admin/uploads/<?= $result_sphot['hinhanh']; ?>" alt="#">
                                <span class="out-of-stock">Hot</span>
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                </div>
                                <div class="product-action-2">
                                    <a title="Add to cart" onclick="addCart(<?php echo $result_sphot['idsanpham'] ?>)" href="">Thêm vào giỏ</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><?= $result_sphot['tensanpham']; ?></a></h3>
                            <div class="product-price">
                                <span class="old"><?=$result_sphot['gia']; ?></span>
                                <span><?=$result_sphot['gia']; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    }?>
                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Most Popular Area -->
<!-- Start Shop Services Area -->