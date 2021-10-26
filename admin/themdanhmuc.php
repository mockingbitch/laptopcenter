<?php include 'include/sidebar.php'; ?>
<?php
include '../classes/danhmuc.php';
$danhmuc = new danhmuc();
if ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['add']){
    $tendanhmuc = $_POST['tendanhmuc'];
    $mota = $_POST['mota'];
    $themdanhmuc = $danhmuc->them_danhmuc($tendanhmuc,$mota);
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 align="center" style="margin: 30px">Thêm danh mục</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
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
                                    if(isset($themdanhmuc)){
                                        echo $themdanhmuc;
                                    }
                                    ?></span></small></h3>

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" action="" method="POST">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="menu">Tên danh mục</label>
                                <input type="text" name="tendanhmuc" class="form-control" id="menu"
                                       placeholder="Nhập tên danh mục">
                            </div>
                            <div class="form-group">
                                <label>Mô tả ngắn</label>
                                <textarea name="mota" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="submit" name="add" value="Thêm" class="btn btn-primary">
                        </div>

                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<?php include 'include/footer.php'; ?>