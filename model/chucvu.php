<?php

//XOÁ CHỨC VỤ
function del_chucvu($id){
    $conn = connectdb();
    $sql = "DELETE FROM chucvu WHERE macv=".$id;
    
    $conn->exec($sql);
}


//THÊM CHỨC VỤ
function add_chucvu($chucvu){
    $conn = connectdb();
    $sql = "INSERT INTO chucvu (macv, chucvu)
    VALUES (NULL, '$chucvu')";
     $conn->exec($sql);
}

//DANH SÁCH PHÒNG BAN
function ds_chucvu(){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM chucvu");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //Biến phương thức trả về thành mảng
    $kq = $stmt->fetchALL();

    return $kq;
}