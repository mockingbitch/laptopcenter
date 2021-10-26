<?php include 'include/sidebar.php'; ?>
<?php
include '../classes/danhmuc.php';
$danhmuc = new danhmuc();
if(!isset($_GET['iddanhmuc']) || $_GET['iddanhmuc'] == NULL) {
    echo "<script>window.location='danhsachdanhmuc.php'</script>";
}
else{
    $id = $_GET['iddanhmuc'];
}
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $tendanhmuc = $_POST['tendanhmuc'];
    $mota = $_POST['mota'];
    $capnhat = $danhmuc->sua_danhmuc($id,$tendanhmuc, $mota);
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
                                        if(isset($capnhat)){
                                            echo $capnhat;
                                        }
                                        ?></span></small></h3>
                        </div>
                        <form id="quickForm" action="" method="POST">
                            <?php
                                $show_danhmuc = $danhmuc->show_danhmuctheoid($id);
                                if ($show_danhmuc){
                                    while ($result = $show_danhmuc->fetch_assoc()){
                            ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="menu">Tên danh mục</label>
                                    <input type="text" name="tendanhmuc" class="form-control" id="menu"
                                           value="<?php echo $result['tendanhmuc']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả ngắn</label>
                                    <textarea name="mota" class="form-control" cols="30" rows="10"><?php echo $result['mota']; ?></textarea>
                                </div>
                            </div>
                                        <?php
                                    }
                                }?>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <input type="submit" name="add" value="Thêm" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'include/footer.php'; ?>