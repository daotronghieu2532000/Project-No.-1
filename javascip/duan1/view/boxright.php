<div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php 
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                        ?>
                        <div class="row mb10">
                                Xin chào <br>
                                <?=$user?>
                            </div>
                            
                            <div class="row mb10">
                                <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                                <li><a href="index.php?act=edit_taikhoan">Thông tin tài khoản && Sửa</a></li>
                                <?php if($role == 1){ ?>
                                <li><a href="admin/index.php?act=bieudo">Đăng nhập Admin</a></li>
                                <?php } ?>
                                <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                            </div>
                        <?php
                            }else{

                           
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                <div>Tên đăng nhập</div>
                                <input type="text" name="user" >
                            </div>
                            
                            <div class="row mb10">
                                <div>Mật khẩu</div>
                                <input type="password" name="pass" ><br>
                            </div>

                            <div class="row mb10">
                                <input type="checkbox"> Ghi nhớ tài khoản?
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap" id="">
                            </div>
                            
                        </form>
                        <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                        <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php 
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    
                                    $linkdm = "index.php?act=sanpham&iddm=".$id; 
                                    
                                    echo '
                                        <li><a href="'.$linkdm.'">'.$name.'</a></li>
                                    ';
                                }
                            ?>
                            
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form class="formtkiem" action="index.php?act=sanpham" method="post">
                            <input class="mb5" type="text" name="kyw" id="" placeholder="Từ khóa tìm kiếm" required>
                            <input type="submit" name="timkiem" value="Search">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="boxcontent row">

                        <?php 
                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&idsp=".$id;
                                $img = $img_path.$img;
                                echo '
                                    <div class="row mb10 top10">
                                        <img src="'.$img.'" alt="">
                                        <a href="'.$linksp.'">'.$name.'</a>
                                    </div>
                                ';
                            }
                        ?>                       
                    </div>
                </div>
                