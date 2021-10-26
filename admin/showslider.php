<?php include 'include/sidebar.php'; ?>
<?php
    include '../classes/slider.php';
    $slider = new slider();
    if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['xoaid'])){
        $id = $_GET['xoaid'];
        $xoa = $slider->delete_slider($id);
    }
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 align="center" >Danh sách slide</h3>
            <?php
                if (isset($xoa)){
                    echo $xoa;
                }
            ?>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Hình ảnh</th>
                    <th>Xoá</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $show_slider = $slider->show_slider();
                        if ($show_slider){
                            while ($result = $show_slider->fetch_assoc()){
                    ?>
                        <tr>
                            <td><?= $result['id']; ?> </td>
                            <td><img src="<?php echo $result['img']; ?>" width="100px" alt=""></td>
<!--                            <td align="left"><a href=""><img width="25" src="images/edit.png" alt=""></a></td>-->
                            <td align="left"><a onclick="return confirm('Bạn muốn xoá sản phẩm này?');" href="?xoaid=<?= $result['id']; ?>"><img width="25" src="images/delete.png" alt=""></a></td>
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