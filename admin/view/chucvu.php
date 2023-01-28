<div class="col-md-10">
    <fieldset>
        <legend>Quản Lý Chức Vụ</legend>
        <hr>
        <form action="index.php?act=addchucvu" method="post">
            <div class="d-flex justify-content-center">
                <label class="col-2">Tên chức vụ</label>
                <input type="text" placeholder="Tên chức vụ" class="col-6" name="txtchucvu">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <input type="submit" value="Lưu" class="btn btn-primary col-2" name="btnaddchucvu">
            </div>
        </form>
    </fieldset>
    <br>
    <fieldset>
        <legend>Danh Sách Chức Vụ</legend>
        <hr>
        <br>
        <table class='table table-bordered'>
            <tr>
                <th class='col-1'>#</th>
                <th class='col-4'>Tên chức vụ</th>
                <th class='col-2'><i class='fa-regular fa-trash-can'></i></th>
            </tr>
            
            <?php
                if(isset($kq) && (count($kq)>0)){
                    $i=1;
                    foreach ($kq as $item) {
                        echo '<tr>
                                <td>'.$i.'</td>
                                <td><a href="index.php?act=nhanvientungphong&id='.$item['chucvu'].'">'.$item['chucvu'].'</a></td>
                                <td><a href="index.php?act=delchucvu&id='.$item['macv'].'">Xoá</a></td>
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