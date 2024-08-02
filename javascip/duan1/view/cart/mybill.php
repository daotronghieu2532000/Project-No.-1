<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>SỐ LƯỢNG MẶT HÀNG</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>THAO TÁC</th>
                    </tr>
                    
                    <?php 
                        $total_amount = 0;
                        if(is_array($mybill)){
                            $thaotac = "Hủy đơn hàng";
                            foreach ($mybill as $bill) {
                                extract($bill);
                                $ttdh = get_ttdh($bill['bill_status']);
                                $countsp = loadall_cart_count($bill['id']);
                                $total_amount += $bill['total'];
                                echo '  
                                    <tr>
                                        <td>'.$bill['id'].'</td>
                                        <td>'.$bill['ngaydathang'].'</td>
                                        <td>'.$countsp.'</td>
                                        <td>'.$bill['total'].'</td>
                                        <td>'.$ttdh.'</td>
                                        <td>'.$thaotac.'</td>
                                    </tr>
                                ';
                            }
                        }
                    ?>
                    
                </table>
                <h2 style="margin-top: 10px;">THỰC TÍNH : <?php echo $total_amount; ?> vnđ. </h2>
                <h3>Bạn hãy chuẩn bị số tiền trên để có thể thanh toán tổng đơn hàng ! Xin cảm ơn.</h3>
            </div>
        </div>
    </div>
    <div class="boxphai">
            <?php include "view/boxright.php";?>
        </div>
    
</div>
