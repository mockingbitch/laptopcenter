<?php include 'include/sidebar.php' ?>
<?php
include '../classes/sanpham.php';
$sanpham = new sanpham();
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['add'])){
    $tensanpham = $_POST['tensanpham'];
    $danhmuc = $_POST['danhmuc'];
    $mota = $_POST['mota'];
    $gia = $_POST['gia'];
    $hinhanh = $_FILES['hinhanh'];
    $soluong = $_POST['soluong'];
    $themsanpham = $sanpham->sua_sanpham($tensanpham,$mota,$danhmuc,$gia,$hinhanh,$soluong);
}
?>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 align="center" style="margin: 30px">Thêm sản phẩm</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h3 class="card-title"> <small><span><?php
                                            if(isset($themsanpham)){
                                                echo $themsanpham;
                                            }
                                            ?></span></small></h3>
                            </div>
                            <form id="quickForm" action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="card-body col-md-8">
                                        <div class="form-group">
                                            <label for="menu">Tên sản phẩm</label>
                                            <input type="text" name="tensanpham" class="form-control" id="menu"
                                                   placeholder="Tên sản phẩm">
                                        </div>
                                        <div class="form-group">
                                            <label>Mô tả chi tiết</label>
                                            <textarea id="editor1"  name="mota" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="menu">Giá sản phẩm</label>
                                            <input type="number" name="gia" class="form-control"
                                                   placeholder="Giá sản phẩm">
                                        </div>
                                        <div class="form-group">
                                            <label for="menu">Số lượng</label>
                                            <input type="number" name="soluong" class="form-control"
                                                   placeholder="Số lượng sản phẩm">
                                        </div>
                                        <div class="form-group">
                                            <label for="menu">Hình ảnh sản phẩm</label>
                                            <input type="file" name="hinhanh" class="form-control"
                                                   placeholder="Nhập hình ảnh">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="add" class="btn btn-primary" value="Thêm"/>
                                        </div>
                                    </div>
                                    <style>
                                        label{
                                            color: black;
                                        }
                                    </style>
                                    <div class="col-md-4" style="margin: 50px auto" >
                                        <div class="form-group">
                                            <label for="menu">Danh mục:</label>
                                            <select name="danhmuc" style="width:50%;height:50px;margin-left:17px " class="select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                <option>Danh mục</option>
                                                <?php
                                                include "../classes/danhmuc.php";
                                                $danhmuc = new danhmuc();
                                                $show_danhmuc = $danhmuc->show_danhmuc();
                                                if($show_danhmuc){
                                                    while($result_danhmuc=$show_danhmuc->fetch_assoc()){
                                                        ?>
                                                        <option
                                                                value="<?php echo $result_danhmuc['iddanhmuc']; ?>"><?php echo $result_danhmuc['tendanhmuc']; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script>

        CKEDITOR.replace( 'editor1' );

    </script>
<?php include 'include/footer.php' ?>