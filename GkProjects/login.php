<html>
    <head>
        <h1><span style="color:green;font-size: 40px"><i>vvce</i></span>.com</h1><hr>
        <link rel="stylesheet" href="vvce.css">

    </head>
    <body>
        <ul>
            <li><a href="login.php">Home</a></li>
            <li><a href="main1.php">acadamics</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="abc"><a href="index.php">login</a></li>
            <li class="abc"><a href="register.php">register</a></li>
          </ul>
          <!--- here start sliding -->
          <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="img1.jpg" style="width:100%; height: 40%;">
              <div class="text">Caption Text</div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="img2.jpg" style="width:100%; height: 40%;">
              <div class="text">Caption Two</div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="img3.jpg" style="width:100%; height: 40%;">
              <div class="text">Caption Three</div>
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
            
            <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
            </script>
            
          <!--end sliding-->
    </body>
</html>