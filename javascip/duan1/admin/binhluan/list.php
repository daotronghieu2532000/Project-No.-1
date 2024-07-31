<div class="row">
                <div class="row frmtitle mb10">
                    <h1>DANH SÁCH TÀI KHOẢN</h1>
                </div>
                <form action="index.php?act=listb-luan" method="post">
                    <input class="tk-form" type="text" name="kyw" placeholder="Nhập mã sản phẩm">
                    <input class="tk-form-bt" type="submit" name="listbl" value="Check">
                </form>
                <div class="row frmcontent">
                    <form action="index.php?act=dsbl" method="post">
                        <div class="row mb10 frmdsloai">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>ID</th>
                                        <th>Nội dung<th>
                                        <th>Mã tài khoản<th>
                                        <th>Mã sản phẩm<th>
                                        <th>Ngày bình luận<th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($listbinhluan as $binhluan){
                                            extract($binhluan);
                                            $xoabl = "index.php?act=xoabl&id=".$id;
                                            ?>
                                                <tr>
                                                    <td><input type="checkbox" name="" id=""></td>
                                                    <td><?=$id?></td>
                        
                                                    <td><?=$noidung?></td>
                                                    <td></td>
                                                    <td><?=$iduser?></td>
                                                    <td></td>
                                                    <td><?=$idpro?></td>
                                                    <td></td>
                                                    <td><?=$ngaybinhluan?></td>                                             
                                                    <td>
                                                        <a href="<?=$xoabl?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><input type="button" value="Xóa"></a>      
                                                    </td>
                                                </tr>
                                       <?php } ?>                                   
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