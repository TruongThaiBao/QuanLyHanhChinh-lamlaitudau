<div class="col-md-10">
    <fieldset>
        <div class="d-flex justify-content-between">
            <legend style="width:auto;">Danh Sách Nhân Viên</legend>
            <a style="padding-right: 20px;" href="index.php?act=themmoinhanvien"><i class="fa-solid fa-user-plus"></i> Thêm mới</a>
        </div>
        <hr>
        <br>
        <table class='table table-bordered'>
            <tr>
                <th class='col-1'>#</th>
                <th class='col-3'>Tên Nhân Viên</th>
                <th class='col-3'>Phòng</th>
                <th class='col-3'>Chức Vụ</th>
                <th class='col-2'><i class='fa-regular fa-trash-can'></i></th>
            </tr>
            <?php
            if (isset($kq) && (count($kq) > 0)) {
                $i = 1;
                foreach ($kq as $item) {
                    echo '<tr>';
                    echo '<td>'.$i.'</td>';
                    echo '<td>' . $item['tennv'] . '</td>';
                    echo '<td>' . $item['tenphong'] . '</td>';
                    echo '<td>' . $item['chucvu'] . '</td>';
                    echo '<td><a href="index.php?act=xoanhanvientungphong&id='.$item['manv'].'&p='.$item['maphong'].'">Xoá</a></td>';
                    echo '</tr>';
                    $i++;
                }
            }
            ?>
        </table>
    </fieldset>

</div>