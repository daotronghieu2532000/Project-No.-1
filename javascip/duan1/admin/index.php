<?php 
    include "../model/pdo.php";

    //nhúng tất cả các file sử dụng trong model
    
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/cart.php";
  
    include "./header.php";

    // Controller

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){

            // Danh mục
            case 'adddm':
                // Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm thành công";
                    
                }
                include "danhmuc/add.php";
                break;
            
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            case 'xoadm':
                if(isset($_GET['id']) && ($_GET['id'] >0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            
            case 'suadm':
                    if(isset($_GET['id']) && ($_GET['id'] >0)){
                        $dm = loadone_danhmuc($_GET['id']);
                    }
                    include "danhmuc/update.php";
                    break;
            case 'updatedm':
                // Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="Cập nhật thành công thành công";
                    
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            // Sản phẩm


            case 'addsp':
                // Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir .basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                         //quá là ok
                    }else{
                        // lỗi r
                    }

                    insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao="Thêm thành công";
                    
                }
                $listdanhmuc = loadall_danhmuc();
                include "./sanpham/add.php";
                break;
            
            case 'listsp':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = '';
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;

            case 'xoasp':
                if(isset($_GET['id']) && ($_GET['id'] >0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            
            case 'suasp':
                    if(isset($_GET['id']) && ($_GET['id'] >0)){
                        $sanpham = loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
            case 'updatesp':
                // Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir .basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                         //quá là ok
                    }else{
                        // lỗi r
                    }
                    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                    $thongbao="Cập nhật thành công thành công";
                    
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;

                // Tài khoản
                case 'addtk':
                    // Kiểm tra xem người dùng có click vào nút add hay không
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $tentk=$_POST['tenuser'];
                        $mktk=$_POST['mkuser'];
                        $emailtk=$_POST['emailuser'];
                        $addresstk=$_POST['aduser'];
                        $phonetk=$_POST['phoneuser'];
                        $role=$_POST['role'];
                        insert_taikhoan($emailtk,$tentk,$mktk,$addresstk,$phonetk,$role);
                        $thongbao="Thêm thành công";
                        
                    }
                    $listtaikhoan = loadall_taikhoan();
                    include "./taikhoan/add.php";
                    break;
                case 'dskh':
                    
                    $listtaikhoan = loadall_taikhoan();
                    // $listtaikhoan = loadall_taikhoan("",0);
                    include "taikhoan/list.php";
                    break;
               
                case 'xoatk':
                    if(isset($_GET['id']) && ($_GET['id'] >0)){
                        delete_user($_GET['id']);
                    }
                    $listtaikhoan = loadall_taikhoan();
                    // $listtaikhoan = loadall_taikhoan("",0);
                    include "taikhoan/list.php";
                    break;
                case 'suatk':
                    if(isset($_GET['id']) && ($_GET['id'] >0)){
                        $taikhoan = loadone_taikhoan($_GET['id']);
                    }
                    include "taikhoan/update.php";
                    break;
                case 'updatetk':
                    // Kiểm tra xem người dùng có click vào nút add hay không
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $tel=$_POST['tel'];
                        $role=$_POST['role'];
                        $id=$_POST['id'];
                        update_taikhoan_admin($id,$user,$pass,$email,$address,$tel,$role);
                        $thongbao="Cập nhật thành công thành công";    
                    }
                    $listtaikhoan = loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;

                // Bình luận
                
                case 'dsbl':
                    
                    $listbinhluan = loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;
                case 'xoabl':
                    if(isset($_GET['id']) && ($_GET['id'] >0)){        
                        delete_binhluan($_GET['id']);
                    }
                    $listbinhluan = loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;
                case 'listb-luan':
                    if(isset($_POST["kyw"]) && $_POST["kyw"] != ""){
                        $kyw = $_POST['kyw'];
                    }else{
                        $kyw = "";
                    }
                    $listbinhluan =  loadall_binhluan($kyw);
                    include "binhluan/list.php";
                    break;
            
                // Thống kê
                case 'thongke':
                    $listthongke = loadall_thongke();
                    include "thongke/list.php";
                    break;
                // Biểu đồ 
                case 'bieudo':
                    $listthongke = loadall_thongke();
                    include "thongke/bieudo.php";
                    break;
                // Bill
                case 'listbill':
                    if(isset($_POST["kyw"]) && $_POST["kyw"] != ""){
                        $kyw = $_POST['kyw'];
                    }else{
                        $kyw = "";
                    }
                    $listbill =  loadall_bill($kyw,0);
                    include "bill/listbill.php";
                    break;
                case 'xoabill':
                    if(isset($_GET['id']) && ($_GET['id'] >0)){                    
                        delete_bill($_GET['id']);
                    }
                    if(isset($_POST["kyw"]) && $_POST["kyw"] != ""){
                        $kyw = $_POST['kyw'];
                    }else{
                        $kyw = "";
                    }
                    $listbill =  loadall_bill($kyw,0);
                    include "bill/listbill.php";
                    break;
             
                default:
                    include "home.php";
                    break;
            
        }
    }
    else{
        include "home.php";
    }

    include "footer.php"
?>