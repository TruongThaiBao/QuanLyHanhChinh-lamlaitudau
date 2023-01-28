<div class="col-md-10">
    <fieldset>
        <div class="d-flex justify-content-between">
            <legend style="width:auto; flex: 2;">THÊM MỚI NHÂN VIÊN</legend>
            <a style="padding-right: 20px;" href="#"><i class="fa-regular fa-rectangle-list"></i> DANH SÁCH</a>
        </div>
        <hr>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên nhân viên : </label>
                <input type="text" name="txtname" class="form-control">
            </div>
            <div class="form-group">
                <label for="">User name : </label>
                <input type="text" name="txtuser" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password : </label>
                <input type="password" name="txtpass" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Giới tính : </label>
                <select name="sgioitinh" class="form-control">
                    <option value="1">Nam</option>
                    <option value="0">Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Phòng ban :</label>
                <select name="sphong" class="form-control">
                    <?php
                    foreach ($dspb as $p) {
                        echo "<option value=".$p['maphong'].">".$p['tenphong']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Ngày sinh : </label>
                <input type="date" name="txtdate" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Chức vụ : </label>
                <select name="schucvu" class="form-control">
                <?php
                    foreach ($dscv as $c) {
                        echo "<option value=".$c['macv'].">".$c['chucvu']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Hình ảnh</label>
                <input type="file" name="fupload" class="form-control">
            </div>
            <div class="form-group d-flex justify-content-center p-2">
                <input type="submit" name="addnhanvien" class="btn btn-primary" value="Lưu">
            </div>
        </form>
    </fieldset>
    <hr>
    <fieldset>
    <div class="d-flex justify-content-between">
            <legend >Danh Sách Nhân Viên</legend>
        </div>
    <table class="table table-bordered">
    <tr>
        <th>Mã NV</th>
        <th>Tên Nhân Viên</th>
        <th>Username</th>
        <th>Mã Phòng</th>
        <th>Giới tính</th>
        <th>Ngày sinh</th>
        <th>Mã CV</th>
    </tr>
    <?php
        foreach ($dsnv as $item){
            echo "<tr>";
            echo "<td>".$item['manv']."</td>";
            echo "<td>".$item['tennv']."</td>";
            echo "<td>".$item['username']."</td>";
            echo "<td>".$item['maphong']."</td>";
            if($item['gioitinh']==1)
                echo '<td>Nam</td>';
            else echo '<td>Nu</td>';
            echo "<td>". date("d-m-Y", strtotime($item['ngaysinh']))."</td>";
            echo "<td>".$item['macv']."</td>";
            echo "</tr>";
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