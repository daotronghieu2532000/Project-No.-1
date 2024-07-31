        <div class="row mb">
            <div class="boxtrai mr">  
                <div class="row mb">
                        <?php 
                            extract($onesp);
                        ?>
                        <div class="boxtitle">
                            <h1 class="spct text-size">Chi tiết sản phẩm</h1>
                         
                            <p class="spct text-size1"><?=$name?></p>
                        </div>
                        <div class="boxcontent row">
                            <?php 
                                $img = $img_path.$img;
                                echo '<div class="row mb spct"><img src="'.$img.'"></div>';
                                echo '<p class="mb"  style="color: red;font-size: 20px;text-align: center ;"><b style="font-size: 20px;">'.$price.'</b> <ins style="font-size: 15px;">đ</ins></p>';
                                echo $mota;
                            ?>
                        </div>
                    </div>
                    
                    
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script>
                        $(document).ready(function(){
                            $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                        });
                    </script>
                    <div class="row" id="binhluan">
                        
                    </div>

                    <div class="row">
                        <div class="boxtitle">HÀNG CÙNG LOẠI</div>
                        <div class="boxcontent row">
                            <?php 
                                foreach ($sp_cung_loai as $sp_cung_loai){
                                    extract($sp_cung_loai);
                                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                                    echo '<li class="spcl"><a style="text-decoration: none;color: black" href="'.$linksp.'">'.$name.'</a></li>';
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="boxphai">
                    <?php include "boxright.php"?>;
                </div>
        </div>