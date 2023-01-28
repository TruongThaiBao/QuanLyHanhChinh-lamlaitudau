<div class="col-md-10">
    <fieldset>
        <legend>Quản Lý Phòng Ban</legend>
        <hr>
        <form action="index.php?act=addphongban" method="post">
            <div class="d-flex justify-content-center">
                <label class="col-2">Tên phòng</label>
                <input type="text" placeholder="Tên phòng" class="col-6" name="txttenphong">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <label class="col-2">Tên viết tắt</label>
                <input type="text" placeholder="Tên viết tắt" class="col-6" name="txtviettat">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <label class="col-2">Ghi chú</label>
                <input type="text" placeholder="Ghi chú" class="col-6" name="txtghichu">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <input type="submit" value="Lưu" class="btn btn-primary col-2" name="add">
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
                <th class='col-1'>#</th>
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
                                <td><a href="index.php?act=nhanvientungphong&id='.$item['maphong'].'">'.$item['tenphong'].'</a></td>
                                <td>'.$item['viettat'].'</td>
                                <td><a href="index.php?act=updatephongban&id='.$item['maphong'].'">Sửa</a> | 
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