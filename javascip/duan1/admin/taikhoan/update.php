<?php 
    if(is_array($taikhoan)){
        extract($taikhoan);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT TÀI KHOẢN</h1>
            </div>
            <div class="row frmcontent">

                <form action="index.php?act=updatetk" onsubmit="return validateForm();" method="post">
                    <div class="kh-all">
                        <div>
                            <div class="row mb kh-one">
                            <strong>Username</strong>
                                <input type="text" name="user" id="tenuser" value="<?php if(isset($user) && ($user>0)) echo $user;?>">
                                <p style="color: red;" id="tenuser-err"></p>
                            </div>
                            <div class="row mb kh-one">
                            <strong>Password</strong>
                                <input type="text" name="pass" id="mkuser" value="<?php if(isset($pass)) echo $pass;?>">
                                <p style="color: red;" id="mkuser-err"></p>
                            </div>
                            <div class="row mb kh-one">
                            <strong>Email</strong>
                                <input type="email" name="email" id="email" value="<?php if(isset($email) && ($email>0)) echo $email;?>">
                                <p style="color: red;" id="email-err"></p>
                            </div>
                        </div>
                        <div>
                            <div class="row mb kh-one">
                            <strong>Địa chỉ</strong>
                                <input type="text" name="address" id="aduser" value="<?php if(isset($address) && ($address>0)) echo $address;?>">
                                <p style="color: red;" id="aduser-err"></p>
                            </div>
                            <div class="row mb kh-one">
                            <strong>Số điện thoại</strong>
                                <input type="text" name="tel" id="phoneuser" value="<?php if(isset($tel)) echo $tel;?>">
                                <p style="color: red;" id="phoneuser-err"></p>
                            </div>
                            <div class="row mb10 kh-one">
                            <strong>Loại Tài khoản(1:Admin 0:Khách)</strong>  <br>
                                <input type="number" name="role" id="role" value="<?php if(isset($role)) echo $role;?>">
                                <p style="color: red;" id="role-err"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb mt10 ">
                        <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id;?>">
                        <input type="submit" class="mr5" onclick="validateForm()" value="Cập nhật" name="capnhat">
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

<script>
    function validateForm() {
        let tenuser = document.getElementById("tenuser").value;
        let mkuser = document.getElementById("mkuser").value;
        let email = document.getElementById("email").value;
        let aduser = document.getElementById("aduser").value;
        let phoneuser = document.getElementById("phoneuser").value;
        let role = document.getElementById("role").value;
        let text;

        // Tên tài khoản
        if (tenuser == "") {
            text = "Tên tài khoản không được để trống";
            document.getElementById("tenuser-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("tenuser-err").innerHTML = text;
        }
        
        // Mật khẩu
        if (mkuser == "") {
            text = "Mật khẩu không được để trống";
            document.getElementById("mkuser-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("mkuser-err").innerHTML = text;
        }

        // Email
        if (email == "") {
            text = "Email không được để trống";
            document.getElementById("email-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("email-err").innerHTML = text;
        }

        // Địa chỉ
        if (aduser == "") {
            text = "Địa chỉ không được để trống";
            document.getElementById("aduser-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("aduser-err").innerHTML = text;
        }

        // Số điện thoại
        if (phoneuser == "") {
            text = "Số điện thoại không được để trống";
            document.getElementById("phoneuser-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("phoneuser-err").innerHTML = text;
        }

        // Loại tài khoản
        if (role == "") {
            text = "Loại tài khoản không được để trống và chỉ được lựa chọn 1: Admin và 0: Khách hàng";
            document.getElementById("role-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("role-err").innerHTML = text;
        }
    }
</script>