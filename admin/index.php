<?php
// session_start();
// ob_start();
    include '../model/db.php';
    include '../model/phongban.php';
    include '../model/nhanvien.php';
    include '../model/chucvu.php';

    include 'view/header.php';

    if(isset($_GET['act'])){
        switch ($_GET['act']) {

            case 'phongban':
                //Nhận yêu cầu xử lý dữ liệu
                $kq = ds_phongban();
                include 'view/phongban.php';
                break;
            case 'addphongban':
                //Nhận yêu cầu xử lý dữ liệu
                if(isset($_POST['add'])&&($_POST['add'])){
                    $add = $_POST['add'];
                    $tenphong = $_POST['txttenphong'];
                    $viettat = $_POST['txtviettat'];
                    $ghichu = $_POST['txtghichu'];
                    add_phongban($tenphong,$viettat,$ghichu);  
                }
                $kq = ds_phongban();
                include 'view/phongban.php';
                break;
            case 'delphongban':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    del_phongban($id);
                }
                $kq = ds_phongban();
                include 'view/phongban.php';
                break;
            case 'updatephongban':
                //Lấy 1 Record đúng với id truyền vào
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $kqone = getone_phongban($id);
                        //Hiển thị danh sách phòng ban
                    $kq = ds_phongban();
                    include 'view/updatephongban.php';
                }
                
                if(isset($_POST['id'])){
                    $id = $_POST['id'];
                    $tenphong = $_POST['txttenphong'];
                    $viettat = $_POST['txtviettat'];
                    $ghichu = $_POST['txtghichu'];
                    update_phongban($id,$tenphong,$viettat,$ghichu);
                    $kq = ds_phongban();
                    include 'view/phongban.php';    
                }
            case 'nhanvientungphong':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];           
                    $kq=nhanvientungphongban($id);
                }
                include 'view/nhanvientungphong.php';
                break;    
            case 'xoanhanvientungphong':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    xoanhanvientungphong($id);
                }
                if(isset($_GET['p'])){
                    $p = $_GET['p'];
                    $kq = nhanvientungphongban($p);
                }   
                include 'view/nhanvientungphong.php';
                break;
            case 'themmoinhanvien':
                if(isset($_POST['addnhanvien'])&&($_POST['addnhanvien'])){
                    $addnhanvien = $_POST['addnhanvien'];
                    $name = $_POST['txtname'];
                    $user = $_POST['txtuser'];
                    $pass = $_POST['txtpass'];
                    $phong = $_POST['sphong'];
                    $gioitinh = $_POST['sgioitinh'];
                    $chucvu = $_POST['schucvu'];
                    $ngaysinh = date('Y-m-d',strtotime($_POST['txtdate']));
                    $tenfile = "";
                    if(!empty($_FILES['fupload']['name'])){
                        $tenfile = $_FILES['fupload']['name'];
                        $tmp = $_FILES['fupload']['tmp_name'];
                        move_uploaded_file($tmp,'files/'.$tenfile);
                    }
                    if($tenfile="") $tenfile="default.jpg";
                    insertnhanvien($name, $user, $pass, $phong, $gioitinh, $ngaysinh, $chucvu, $tenfile);
                }
                $dspb = ds_phongban();
                $dscv = ds_chucvu();
                $dsnv = ds_nhanvien();
                include 'view/themmoinhanvien.php';
                break;    
            case 'chucvu':
                $kq = ds_chucvu();
                include 'view/chucvu.php';
                break;
            case 'addchucvu':
                if(isset($_POST['btnaddchucvu'])&&($_POST['btnaddchucvu'])){
                    $add = $_POST['btnaddchucvu'];
                    $chucvu = $_POST['txtchucvu'];
                    add_chucvu($chucvu);  
                }
                $kq = ds_chucvu();
                include 'view/chucvu.php';
                break;
            case 'delchucvu':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    del_chucvu($id);
                }
                $kq = ds_chucvu();
                include 'view/chucvu.php';
                break;
            case 'nhanvien':
                $dsnv = ds_nhanvien();
                include 'view/nhanvien.php';
                break;
            case 'ngayphep':
                include 'view/ngayphep.php';
                break;
            case 'phieunghiphep':
                include 'view/phieunghiphep.php';
                break;
            
            default:
                include 'view/home.php';
                break;
        }

    }else{
        include 'view/home.php';
    }
    

    include 'view/footer.php';
