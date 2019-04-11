<html>
    <head>
        <h1><span style="color:green;font-size: 40px"><i>computer science 6th sem</i></span>engineering</h1><hr>
        <link rel="stylesheet" href="main1.css">
    </head>
    <body>
        <ul>
            <li><a href="login.php">Home</a></li>
            <li><a href="main1.php">previous</a><li>
        </ul>
        <div id="mySidenav" class="sidenav">
        <a href="syllabus.pdf"><i>syllabus</i></a>
        <hr/>
        <br/>
        <hr/>
        <a href="#" onclick="csee()"><i>internet & web thechnology</i></a>
        <hr/>
        <a href="#"><i>compiler design</i></a>
        <hr/>
        <a href="#"><i>wireless sensor networks</i></a>
        <hr/>
        <a href="#"><i>computer graphics</i></a>
        <hr/>
        <a href="#"><i>cloud & big data</i></a>
        <hr/>
        <a href="#"><i>software testing</i></a>
        </div>
        <div id="abc" class="cse">
            <a class="button" href="#">module1</a>
        </div>
        <script>
            function csee() {
                 document.getElementById("abc").setAttribute('style', 'display:block');
            }
        </script>  
    </body>
</html>

