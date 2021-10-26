<?php include 'include/sidebar.php' ?>
<?php include '../classes/danhmuc.php'; ?>
<?php
$danhmuc = new danhmuc();

if(isset($_GET['xoadanhmuc'])) {
    $id = $_GET['xoadanhmuc'];
    $xoadanhmuc= $danhmuc->xoa_danhmuc($id);
}
?>
    <style></style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 align="center" style="text-shadow: 1px 1px 5px grey;">Danh sách danh mục</h3>
                <?php
                if(isset($xoadanhmuc)){
                    echo $xoadanhmuc;
                }
                ?>
                <hr>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Mô tả danh mục</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $show_danhmuc = $danhmuc->show_danhmuc();
                    if ($show_danhmuc) {
                        $i = 0;
                        while ($result=$show_danhmuc->fetch_assoc()) {
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $result['iddanhmuc']; ?></td>
                                <td><?php echo $result['tendanhmuc']; ?></td>
                                <td><?php echo $result['mota']; ?></td>
                                <td align="left"><a href="suadanhmuc.php?iddanhmuc=<?php echo $result['iddanhmuc']; ?>"><img width="17px" src="images/edit.png" alt=""></a></td>
                                <td align="left"><a onclick="return confirm('Bạn muốn xoá mục này?');" href="?xoadanhmuc=<?php echo $result['iddanhmuc']; ?>"><img width="17px" src="images/delete.png" alt=""></a></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include 'include/footer.php'; ?>