<div class="row margin-b">
    <div class="boxtrai margin-r">


    <div class="row margin-b">
                
                    <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
                    <div class="row boxcontent cart">
                        <table>
                            <tr>
                                <th>MÃ ĐƠN HÀNG</th>
                                    <th>NGÀY ĐẶT</th>
                                <th>SỐ LƯỢNG MẶT HÀNG</th>
                                <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                            </tr>

                            <?php 
                                if (is_array($listbill)) {
                                    foreach ($listbill as $bill){
                                        extract($bill);
                                        $ttdonhang = get_ttdh($bill['bill_status']);
                                        $countsp = loadall_cart_count($bill['id']);
                                        echo '<tr>
                                                <td>'.$bill['id'].'</td>
                                                <td>'.$bill['ngaydathang'].'</td>
                                                <td>'.$countsp.'</td>
                                                <td>'.$bill['total'].'</td>
                                                <td>'.$ttdonhang.'</td>
                                            </tr>';
                                    }
                                }
                            ?>

                            
                        </table>
                    </div>
                </div>

    </div>
        <div class="boxphai">
            <?php include "view/boxright.php" ?>
        </div>
</div>