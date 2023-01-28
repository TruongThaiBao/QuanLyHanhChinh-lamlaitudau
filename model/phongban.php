<?php

//THÊM PHÒNG BAN
    function add_phongban($tenphong,$viettat,$ghichu){
        $conn = connectdb();
        $sql = "INSERT INTO phongban (maphong, tenphong, viettat, ghichu)
        VALUES (NULL, '$tenphong', '$viettat', '$ghichu')";
         $conn->exec($sql);
    }

//SỬA PHÒNG BAN
    function update_phongban($id,$tenphong, $viettat, $ghichu){
        $conn = connectdb();
        $sql = "UPDATE phongban 
                SET tenphong='".$tenphong."', viettat='".$viettat."',ghichu='".$ghichu."'
                WHERE maphong=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

//LẤY 1 ĐỐI TƯỢNG PHÒNG BAN
    function getone_phongban($id){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM phongban WHERE maphong=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //Biến phương thức trả về thành mảng
        $kq = $stmt->fetchALL();
        return $kq;
    }

//XOÁ PHÒNG BAN
    function del_phongban($id){
        $conn = connectdb();
        $sql = "DELETE FROM phongban WHERE maphong=".$id;
        
        $conn->exec($sql);
    }

//DANH SÁCH PHÒNG BAN
    function ds_phongban(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM phongban");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //Biến phương thức trả về thành mảng
        $kq = $stmt->fetchALL();

        return $kq;
    }

?>