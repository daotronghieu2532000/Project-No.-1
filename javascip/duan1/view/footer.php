    <div class="row mb footer spct" style="margin-top: 25px;">
        <div style="display: flex;justify-content: space-between;align-items: center;color: #e57373;">
                <h2 style="font-size: 1vw;margin-right: 15px;">Nước Hoa Thiên Đường</h2>
            </div>
        </div>
    </div>  



    <!-- Script SlideShow  -->
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</body>
</html> 