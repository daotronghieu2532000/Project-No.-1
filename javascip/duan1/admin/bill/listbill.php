<div class="row">
    <div class="row frmtitle mb10">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <form action="index.php?act=listbill" method="post">
        <input class="tk-form" type="text" name="kyw" placeholder="Nhập mã đơn hàng">
        <input class="tk-form-bt" type="submit" name="listok" value="Check">
    </form>
    <div class="row frmcontent">
        <form action="#" method="post">
            <div class="row mb10 frmdsloai">

                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>MÃ ĐƠN HÀNG</th>
                            <th>KHÁCH HÀNG
                            <th>
                            <th>SỐ LƯỢNG HÀNG
                            <th>
                            <th>GIÁ TRỊ ĐƠN HÀNG
                            <th>
                            <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                            <th></th>
                            <th>NGÀY ĐẶT HÀNG<th>
                            
                            <th>Địa Chỉ Giao Hàng <th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $xoabill = "index.php?act=xoabill&id=" . $id;
                            $kh = $bill["bill_name"] . '<br> ' . $bill["bill_email"] . '<br> ' . $bill["bill_address"] . '<br> ' . $bill["bill_tel"];
                            $ttdh  = get_ttdh($bill["bill_status"]);
                            $countsp = loadall_cart_count($bill["id"]);
                            $dcgh = $bill['bill_address'];
                             ?>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?= $id ?></td>
                                <td><?= $kh ?></td>
                                <td></td>
                                <td><?= $countsp ?></td>
                                <td></td>
                                <td><strong><?= $total ?></strong> VND</td>
                                <td></td>
                                <td> 
                                    <select name="status" id="status">
                                        <option value="" disabled selected>Xác nhận trạng thái</option>
                                        <option value="processing">Đang xử lí</option>
                                        <option value="shipping">Đang giao hàng</option>
                                        <option value="delivered">Đã giao hàng</option>
                                    </select>
                                 <td>
                                </td></td>
                                <td><?= $ngaydathang ?></td>
                                <td></td>
                                <td><?=$dcgh ?></td>
                                <td></td>
                              
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="row mb10 mt10">

                <input type="button" class="mr5" value="Chọn tất cả">
                <input type="button" class="mr5" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục tất tả">
            </div>
        </form>
    </div>
</div>