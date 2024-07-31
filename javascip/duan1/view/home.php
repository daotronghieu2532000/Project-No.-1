        <div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner mb">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        
                            <img src="images/products/banner1.jpg" style="width:100%;">
                        
                        </div>

                        <div class="mySlides fade">
                        
                            <img src="images/products/banner2.jpg" style="width:100%">
                        
                        </div>

                        <div class="mySlides fade">
                        
                            <img src="images/products/banner3.jpg" style="width:100%">
                        
                        </div>

                        <div class="mySlides fade">
                        
                            <img src="images/products/banner4.jpg" style="width:100%">
                        
                        </div>

                        <div class="mySlides fade">
                        
                            <img src="images/products/banner5.jpg" style="width:100%">
                        
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)"></a>
                        <a class="next" onclick="plusSlides(1)"></a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <!-- <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        </div> -->
                    </div>
                </div>

                <div class="row">
                <div class="boxsp1">
                    <?php 
                        foreach ($spnew as $sp){
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                            $hinh  = $img_path.$img;
                            echo '
                            
                            <div class="boxsp">
                                <div class="sp9">
                                <a href="'.$linksp.'"><img class="sp9-anh"  src="'.$hinh.'" alt=""></a>
                                </div>
                                <a href="'.$linksp.'"><span>'.$name.'</span></a>
                                <p><b>'.$price.'</b> <ins>đ</ins></p>
                                
                                <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="'.$id.'">
                                <input type="hidden" name="name" value="'.$name.'">
                                <input type="hidden" name="img" value="'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="submit" name="addtocart" id="addtocart" value="Thêm vào giỏ hàng">
                                <input type="submit" name="addtocart" id="addtocart" value="Mua ngay">
                            </form>
                            </div>
                            
                            ';
                        }
                    
                    ?>
                    
                    </div>      
                </div>
            </div>

            <div class="boxphai">
                <?php include "boxright.php"?>;
            </div>
        </div>