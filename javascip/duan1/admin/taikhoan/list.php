<div class="row">
                <div class="row frmtitle">
                    <h1>DANH SÁCH TÀI KHOẢN</h1>
                </div>
                <div class="row frmcontent">
                    <form action="index.php?act=dstk" method="post">
                        <div class="row mb10 frmdsloai">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>MÃ TK</th>
                                        <th>TÊN TÀI KHOẢN<th>
                                        <th>MẬT KHẨU<th>
                                        <th>EMAIL<th>
                                        <th>ĐỊA CHỈ<th>
                                        <th>SDT<th>
                                        <th>VAI TRÒ<th>
                                        <th>Trạng Thái<th>
                                            
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($listtaikhoan as $taikhoan){
                                            extract($taikhoan);
                                            $suatk = "index.php?act=suatk&id=".$id;
                                            $xoatk = "index.php?act=xoatk&id=".$id;
                                            ?>
                                                <tr>
                                                    <td><input type="checkbox" name="" id=""></td>
                                                    <td><?=$id?></td>                       
                                                    <td><?=$user?></td>
                                                    <td></td>
                                                    <td><?=$pass?></td>
                                                    <td></td>
                                                    <td><?=$email?></td>
                                                    <td></td>
                                                    <td><?=$address?></td>
                                                    <td></td>
                                                    <td><?=$tel?></td>
                                                    <td></td>
                                                    <td><?=($role == 0)? "Khách hàng":"Admin"?></td>
                                                    <td></td>
                                                    <td><?=($status == 0)? "offline":"online"?></td>
                                                    <td>
                                                        <a href="<?=$suatk?>"><input type="button" value="Sửa"></a>  
                                                        <a href="<?=$xoatk?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><input class="mt5" type="button" value="Xóa"></a>      
                                                    </td>
                                                </tr>
                                       <?php } ?>                                   
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb10 mt10">
                            <input id="checkall" type="button" class="mr5" value="Chọn tất cả">
                            <input id="clearall" type="button" class="mr5" value="Bỏ chọn tất cả">
                            <input id="btn_delete" name="delete-click" type="button" class="mr5" value="Xóa các mục tất tả">
                            <a href="index.php?act=addtk"><input type="button" value="Thêm mới"></a>    
                        </div>
                    </form> 
                </div>
        </div>