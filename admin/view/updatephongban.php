<div class="col-md-10">
   
    <fieldset>
        <legend>Update Phòng Ban</legend>
        <hr>
        <form action="index.php?act=updatephongban" method="post">
            <div class="d-flex justify-content-center">
                <label class="col-2">Tên phòng</label>
                <input type="text" placeholder="Tên phòng" class="col-6" name="txttenphong" 
                        value="<?=$kqone[0]['tenphong']?>">
                <input type="hidden" name="id" value="<?=$kqone[0]['maphong']?>">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <label class="col-2">Tên viết tắt</label>
                <input type="text" placeholder="Tên viết tắt" class="col-6" name="txttenviettat"
                        value="<?=$kqone[0]['viettat']?>">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <label class="col-2">Ghi chú</label>
                <input type="text" placeholder="Ghi chú" class="col-6" name="txtghichu"
                        value="<?=$kqone[0]['ghichu']?>">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <input type="submit" value="Cập nhật" class="btn btn-primary col-2" name="capnhat">
            </div>
        </form>
    </fieldset>
    <br>
    <fieldset>
        <legend>Danh Sách Phòng Ban</legend>
        <hr>
        <br>
        <table class='table table-bordered'>
            <tr>
                <th class='col-1'>Mã phòng</th>
                <th class='col-4'>Tên phòng</th>
                <th class='col-4'>Tên viết tắt</th>
                <th class='col-2'><i class='fa-regular fa-trash-can'></i></th>
            </tr>
            <?php
                if(isset($kq) && (count($kq)>0)){
                    $i=1;
                    foreach ($kq as $item) {
                        echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$item['tenphong'].'</td>
                                <td>'.$item['viettat'].'</td>
                                <td><a href="index.php?updatephongban&id='.$item['maphong'].'">Sửa</a> | 
                                    <a href="index.php?act=delphongban&id='.$item['maphong'].'">Xoá</a></td>
                            </tr>';
                            $i++;
                    }
                }
            ?>
            
        </table>

    </fieldset>

</div>
</div>
</div>
</div>
</div>
</div>