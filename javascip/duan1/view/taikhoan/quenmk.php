<div class="row mb">
<div class="boxtrai mr">  
    <div class="row mb">
           
            <div class="boxtitle">
                <h1 class="spct text-size">QUÊN TÀI KHOẢN</h1>
            </div>
            <div class="boxcontent row formtaikhoan">
                <form action="index.php?act=quenmk" method="post">
                    <div class="row mb">
                        Email
                        <input type="email" name="email" id="email" required>
                    </div>
                    
                    <div class="row mb">
                        <input type="submit" value="Xác nhận" name="guiemail">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php 
                        if(isset($thongbao) && ($thongbao != "")){
                            echo $thongbao;
                        }
                    ?>
                </h2>
            </div>
        </div>
        
        
    </div>

    <div class="boxphai">
        <?php include "view/boxright.php"?>;
    </div>
</div>