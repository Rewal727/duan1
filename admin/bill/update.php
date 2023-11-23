<?php
if (is_array($bill)) {
    extract($bill);
}
if (is_array($sanpham)) {
    extract($sanpham);    
}
?>
<div class="padding-l boxphai margin-b">
    <div class="row formtitle">
        <h1>CẬP NHẬT ĐƠN HÀNG</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatedh" method="post">
            <div class="row margin-b10">
                Tên Khách hàng <br>
                <input type="text" name="user" value="<?=$bill_name?>">
            </div>
            <div class="row margin-b10">
                Địa chỉ <br>
                <input type="text" name="address" value="<?=$bill_address?>">
            </div>
            <div class="row margin-b10">
                Điện thoại <br>
                <input type="text" name="tel" value="<?=$bill_tel?>">
            </div>
            <div class="row margin-b10">
                Email <br>
                <input type="text" name="email" value="<?=$bill_email?>">
            </div>
            --------------------------------------
            <div class="row margin-b10">
                Mã đơn hàng <br>
                <input type="text" name="id" value="<?=$id?>">
            </div>
            <div class="row margin-b10">
                Tên sản phẩm <br>
                <input type="text" name="sanpham" value="<?=$name?>">
                <!-- chưa hiện hết tên sản phẩm -->
            </div>
            <div class="row margin-b10">
                Tổng tiền <br>
                <input type="text" name="total" value="<?=$total?>">
            </div>
            <div class="row margin-b10">
                Trạng thái đơn hàng <br>
                <input type="text" name="status" value="<?=$bill_status?>">
                <!-- 
                    0. Đơn hàng mới
                    1. Đang xử lý
                    2. Đang giao hàng
                    3. Giao hàng thành công
                    4. Đã hủy
                 -->
            </div>
            <div class="row margin-b10">
                Ngày đặt hàng <br>
                <input type="text" name="ngaydathang" value="<?=$ngaydathang?>">
            </div>
            <div class="row margin-b10">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listbill"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>
        </form>
    </div>
</div>
</div>