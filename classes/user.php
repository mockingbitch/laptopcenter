<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/session.php');
Session::checkLogin();
include_once ($filepath.'/../lib/database.php');
include_once ($filepath.'/../helpers/format.php');
?>
<?php
class user
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function login($username,$pass){
        $username = $this->fm->validation($username);
        $userpass = $this->fm->validation($pass);
        $username = mysqli_real_escape_string($this->db->link, $username);
        $userpass = mysqli_real_escape_string($this->db->link, $userpass);
        $userpass = md5($userpass);
        if(empty($username)||empty($userpass)){
            $alert = "ID or password must be not empty";
            return $alert;
        }
        else{
            $query = "SELECT * FROM tbl_user WHERE username = '$username' AND password  = '$userpass' LIMIT 1";
            $result = $this->db->select($query);
//            print_r($result);
            if($result!=false){
                $value = $result->fetch_assoc();
                Session::set('userlogin',true);
                Session::set('userid',$value['userid']);
                Session::set('username',$value['username']);
                Session::set('password',$value['password']);
                Session::set('fullname',$value['fullname']);
                header('Location:index.php');
                $alert = "Success";
                return $alert;
            }
            else{
                $alert = "Wrong user or password";
                return $alert;
            }
        }
    }
    public function register_user($email,$password,$repassword,$hoten){
        $email = $this->fm->validation($email);
        $password = $this->fm->validation($password);
        $hoten = $this->fm->validation($hoten);
        $repassword = $this->fm->validation($repassword);
        $email = mysqli_real_escape_string($this->db->link, $email);
        $password = mysqli_real_escape_string($this->db->link, $password);
        $hoten = mysqli_real_escape_string($this->db->link, $hoten);
        $repassword = mysqli_real_escape_string($this->db->link, $repassword);
        if (empty($email)||empty($hoten)||empty($repassword)||empty($password)){
            $alert = "<span style='color: red'>* Kh??ng ???????c b??? tr???ng th??ng tin!!!</span>";
            return $alert;
        }elseif($password!=$repassword){
            $alert = "<span style='color: red'>* Vui l??ng x??c nh???n l???i m???t kh???u!!!</span>";
            return $alert;
        }
        else{
            $query = "INSERT INTO tbl_customer(customerEmail,customerName,password) VALUES ('$email','$hoten','$password')";
            $result = $this->db->insert($query);
            if ($result){
                $alert = "<span style='color: green'>????ng k?? t??i kho???n th??nh c??ng. <a href='dangnhap.php'>????ng nh???p ngay!!!</a></span>";
                return $alert;
            }
        }
    }
}
?>