<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
include_once ($filepath.'/../helpers/format.php');
?>
<?php
class slider{
    private $db;
    private $fm;
    public function __construct(){
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function add_slider($file){
        $permited  = array('jpg','jpeg','png','gif');
        $file_name = $_FILES['anhslide']['name'];
        $file_size = $_FILES['anhslide']['size'];
        $file_temp = $_FILES['anhslide']['tmp_name'];
        $div = explode('.',$file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()),0,10).'.'.$file_ext;
        $uploaded_image = "../admin/uploads/".$unique_image;

        if (empty($file)){
            $alert = 'Không được để trống!!!';
            return $alert;
        }
        else{
            move_uploaded_file($file_temp, $unique_image);
            $query = "INSERT INTO tbl_slider(img) VALUES ('$unique_image')";
            $result = $this->db->insert($query);
            if ($result){
                $alert = " Thêm thành công!";
                return $alert;
            }
            else{
                $alert = " Thêm thất bại!";
                return $alert;
            }
        }
    }
    public function show_slider(){
        $query = "SELECT * FROM tbl_slider ORDER BY id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function delete_slider($id){
        $query = "DELETE FROM tbl_slider WHERE id = '$id'";
        $result = $this->db->delete($query);
        if ($result){
            $alert = 'Xoá thành công';
            return $alert;
        }
        else{
            $alert = 'Xoá thất bại';
            return $alert;
        }
    }
}
?>
