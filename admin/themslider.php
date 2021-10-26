<?php include 'include/sidebar.php' ?>
<?php
    include '../classes/slider.php';
    $slider = new slider();
    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['add'])){
        $addslide = $slider->add_slider($_FILES);
    }
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 align="center" style="margin: 30px">Thêm slide</h1>
            </div>
        </div>
    </div>
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title"> <small><span><?php
                                    if(isset($addslide)){
                                        echo $addslide;
                                    }
                                    ?></span></small></h3>

                    </div>
                    <form id="quickForm" action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="menu">Ảnh slide</label>
                                <input type="file" name="anhslide" class="form-control"
                                       placeholder="Nhập ảnh">
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="add" value="Thêm" class="btn btn-primary">
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<?php include 'include/footer.php' ?>