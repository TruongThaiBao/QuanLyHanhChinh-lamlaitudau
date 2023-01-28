<div class="col-md-10">
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