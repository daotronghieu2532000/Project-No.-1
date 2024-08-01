<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table>
                    <?php
                    viewcart(1);
                    ?>
                </table>
            </div>
        </div>

        <div class="row mb bill">
            <?php
            if (isset($_SESSION['user'])) {
            ?>
                <a class="mr" href="index.php">
                    <input style="padding: 10px;" type="button" value="Trang chủ">
                </a>
                <a class="mr" href="index.php?act=bill">
                    <input style="padding: 10px;" type="button" value="Đặt Mua">
                </a>
                <a href="index.php?act=delcart">
                    <input style="padding: 10px;" type="button" value="Xóa sản phẩm">
                </a>
                
            <?php
            } else {
            ?>
                <h1 style="color: red; text-align: center;">Vui lòng đăng nhập để tiếp tục đặt hàng!</h1>
            <?php } ?>
        </div>

        <?php if (isset($thongbao) && $thongbao != "") : ?>
            <div class="alert alert-danger">
                <?php echo $thongbao; ?>
            </div>
        <?php endif; ?>

    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>