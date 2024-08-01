<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
            extract($onesp);
            $img_path = "upload/"; // Đảm bảo biến này được thiết lập đúng
            ?>
            <div class="boxtitle">
                <h1 class="spct text-size">Chi tiết sản phẩm</h1>
                <p class="spct text-size1"><?= $name ?></p>
            </div>
            <div class="boxcontent row">
                <?php
                $img = $img_path . $img;
                echo '<div class="row mb spct"><img src="' . $img . '"></div>';
                echo '<p class="mb" style="color: red; font-size: 20px; text-align: center;"><b style="font-size: 20px;">' . $price . '</b> <ins style="font-size: 15px;">đ</ins></p>';
                echo $mota;
                ?>
                <p>Đường dẫn ảnh: <?= $img ?></p>
                <form action="index.php?act=addtocart" method="post" class="add-to-cart-form">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                    <input type="hidden" name="img" value="<?php echo $img; ?>"> <!-- Đảm bảo đường dẫn hình ảnh đầy đủ -->
                    <input type="hidden" name="price" value="<?php echo $price; ?>">
                    <input style="padding: 5px;margin: 10px;" type="submit" name="addtocart" value="Thêm vào giỏ hàng" class="btn">
                    <input style="padding: 5px;margin-top: 10px;" type="submit" name="addtocart" value="Mua ngay" class="btn btn-buy-now">
                </form>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanform.php", {
                    idpro: <?= $id ?>
                });
            });
        </script>
        <div class="row" id="binhluan"></div>

        <div class="row">
            <div class="boxtitle">HÀNG CÙNG LOẠI</div>
            <div class="boxcontent row">
                <?php
                foreach ($sp_cung_loai as $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '<li class="spcl"><a style="text-decoration: none; color: black" href="' . $linksp . '">' . $name . '</a></li>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>