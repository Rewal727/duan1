<div class="row boxphai margin-b">
    <div class="row formtitle margin-b">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="row formcontent">
        <div class="row margin-b10 formds">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>
                <?php foreach($listdm as $dm) {
                    extract($dm);
                    $suadm = "index.php?act=suadm&id=".$id;
                    $xoadm = "index.php?act=xoadm&id=".$id;
                    echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td><a href='.$suadm.'><input type="button" value="Sửa"></a> <a href='.$xoadm.'><input type="button" value="Xóa"></a></td>
                    </tr>';
                }?>
                
            </table>
        </div>
        <div class="row margin-b10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" name="nhapthem" value="Nhập thêm"></a>
        </div>
    </div>
</div>