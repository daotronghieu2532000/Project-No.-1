<?php 
    function loadall_taikhoan(){
        $sql = "select * from taikhoan order by id";
        $listtaikhoan =pdo_query($sql);
        return $listtaikhoan;
    }
    function loadone_taikhoan($id){
        $sql = "select * from taikhoan where id =".$id;
        $taikhoan=pdo_query_one($sql);
        return $taikhoan;
    }
    function insert_taikhoan($email,$user,$pass,$address,$tel,$role){
        $sql="insert into taikhoan(email,user,pass,address,tel,role) values('$email','$user','$pass','$address','$tel','$role')";
        pdo_execute($sql);
    }

    function checkuser($user,$pass){
        $sql = "select * from taikhoan where user ='".$user."' and pass = '".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email){
        $sql = "select * from taikhoan where email ='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function update_taikhoan($id,$user,$pass,$email,$address,$tel){
        $sql="update taikhoan set user = '".$user."', pass = '".$pass."',email = '".$email."', address = '".$address."', tel = '".$tel."' where id =".$id; 
        pdo_execute($sql);
    }
    function update_taikhoan_admin($id,$user,$pass,$email,$address,$tel,$role){
        $sql="update taikhoan set user = '".$user."', pass = '".$pass."',email = '".$email."', address = '".$address."', tel = '".$tel."', role = '".$role."' where id =".$id; 
        pdo_execute($sql);
    }

    function delete_user($id){
        $sql = "delete from taikhoan where id =".$id;
        pdo_execute($sql);
    }
?>