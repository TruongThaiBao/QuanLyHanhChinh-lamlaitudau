<?php

//THÊM NHÂN VIÊN
function insertnhanvien($name, $user, $pass, $phong, $gioitinh, $ngaysinh, $chucvu, $tenfile){
    $conn = connectdb();
    $sql = "insert into nhanvien(manv, tennv, username, password, maphong, gioitinh, ngaysinh, macv, hinh)
    values (null, '$name', '$user', '$pass', $phong, '$gioitinh', '$ngaysinh', $chucvu, '$tenfile')";
     $conn->exec($sql);
}

//LẤY DANH SÁCH NHÂN VIÊN TỪNG PHÒNG
function nhanvientungphongban($id){
    $conn = connectdb();
    $stmt = $conn->prepare("select nhanvien.*, c.chucvu, p.tenphong 
        from nhanvien join chucvu c on c.macv = nhanvien.macv 
        join phongban p on p.maphong = nhanvien.maphong where nhanvien.maphong = $id");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); //Biến phương thức trả về thành mảng
    $kq = $stmt->fetchAll();
    return $kq;
}

//XOÁ NHÂN VIÊN TỪNG PHÒNG
function xoanhanvientungphong($id){
    $conn = connectdb();
    $sql = "DELETE FROM nhanvien WHERE manv=".$id;
    
    $conn->exec($sql);
}

//DANH SÁCH NHÂN VIÊN
function ds_nhanvien(){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM nhanvien");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //Biến phương thức trả về thành mảng
    $kq = $stmt->fetchALL();

    return $kq;
}

?>