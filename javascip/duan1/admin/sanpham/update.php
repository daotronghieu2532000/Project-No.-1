<?php 
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath = "../upload/".$img;
    if(is_file($hinhpath)){
        $hinh = "<img src='".$hinhpath."' height = '60px'>";
    }else{
        $hinh = "No Photo";
    }
?>


<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
            <form action="index.php?act=updatesp" method="post" onsubmit="return validateForm();" enctype="multipart/form-data">
                    <div class="sp-all">
                        <div>
                            <div class="row mb10 sp-one">
                            <strong>Danh mục </strong><br>                   
                                    <select name="iddm" id="">
                                        
                                        <option value="0">Chọn danh mục</option>
                                        <?php foreach ($listdanhmuc as $lo) : ?>
                                            <option value="<?= $lo['id'] ?>" <?php echo ($lo['id'] == $sanpham['iddm'] ? 'selected' : '') ?>>
                                                <?= $lo['name'] ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                            </div>
                            <div class="row mb10 sp-one">
                            <strong>Tên sản phẩm</strong>   <br>
                                <input type="text" name="tensp" id="tensp" value="<?=$name?>">
                                <p style="color: red;" id="tensanpham"></p>
                            </div>
                            <div class="row mb10 sp-one">
                            <strong>Giá</strong> <br>
                                <input type="number" name="giasp" id="giasp" value="<?=$price?>">
                                <p style="color: red;" id="giasanpham"></p>
                            </div>
                        </div>
                        <div>
                            <div class="row mb10 sp-one1 mb5">
                            <strong>Hình ảnh</strong>  <br>
                                <?=$hinh?>
                                <input type="file" name="hinh">
                            </div>
                            <div class="row mb10 sp-one">
                            <strong>Mô tả</strong> <br>
                                <textarea name="mota" cols="30" rows="10" id="mota"><?=$mota?></textarea>
                                <p style="color: red;" id="mota-loi"></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb10 mt10" >
                        <input type="hidden" class="mr5" name="id" value="<?=$id?>">
                        <input type="submit" class="mr5" name="capnhat" onclick="validateForm()" value="CẬP NHẬT">
                        <input type="reset" class="mr5" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>    
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
        let tensp = document.getElementById("tensp").value;
        let giasp = document.getElementById("giasp").value;
        let mota = document.getElementById("mota").value;
        let text;
        if (tensp == "") {
            text = "Tên sản phẩm không được để trống";
            document.getElementById("tensanpham").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("tensanpham").innerHTML = text;
        }
        
        if (giasp == "" || giasp <= 0) {
            text = "Giá sản phẩm không được để trống và phải lớn hơn 0";
            document.getElementById("giasanpham").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("giasanpham").innerHTML = text;
        }

        if (mota == "") {
            text = "Mô tả sản phẩm không được để trống";
            document.getElementById("mota-loi").innerHTML = text;
            return false;
        }
    }
</script>