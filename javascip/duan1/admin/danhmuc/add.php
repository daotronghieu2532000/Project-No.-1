<div class="row">
            <div class="row frmtitle">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddm" onsubmit="return validateForm();" method="post">
                    <div class="row mb10 adddm1">
                        <strong>Mã loại</strong>  <br>
                        <input placeholder="Tự động" type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10 adddm">
                        <strong>Tên loại</strong>   <br>
                        <input type="text" name="tenloai" id="tloai">
                        <p style="color: red;" id="tenloai"></p>
                    </div>
                    <div class="row mb10 mt10">
                        <input type="submit" class="mr5"  onclick="validateForm()" name="themmoi" value="THÊM MỚI">
                        <input type="reset" class="mr5" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>    
                    </div>
                    <?php
                        if(isset($thongbao) &&($thongbao != "")){
                            echo $thongbao;
                        } 
                    ?>
                </form>
            </div>
    </div>
</div>
<script>
    function validateForm() {
    let x = document.getElementById("tloai").value;
    let text;
    if (x == "") {
        text = "Tên loại không được để trống";
        document.getElementById("tenloai").innerHTML = text;
        return false;
        }
    }
</script>

