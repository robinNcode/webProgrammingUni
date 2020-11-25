<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="A Web Assingment On Html & Css">
    <meta name="keywords" content="Html, CSS, JavaScript, PHP">
    <meta name="author" content="MD SHAHIN MIA ROBIN">
    <title>WEB PAGE OF MD SHAHIN MIA ROBIN</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Header Section Start -->
    <div class="wrapper-full header-full">
        <div class="wrapper header">
            <p>
                <i class="fas fa-envelope"></i>
                <span>
                    Mail us : mdshahinmiarobina.r@gmail.com
                </span>
            </p>

            <ul>
                <!-- github -->
                <li>
                    <a href="https://github.com/robinNcode">
                        <i class="fab fa-github-square"></i>
                    </a>
                </li>
                <!-- Facebook -->
                <li>
                    <a href="https://www.facebook.com/arrobinkhan34">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                </li>
                <!-- youtube -->
                <li>
                    <a href="#">
                        <i class="fab fa-youtube-square"></i>
                    </a>
                </li>
                <!-- Linkedin -->
                <li>
                    <a href="https://www.linkedin.com/in/msm-robin-96b29a1b2/?originalSubdomain=bd">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Header Section End -->


    <!-- Navbar Section Start -->
    <div class="wrapper-full navbar-full">
        <div class="wrapper navbar">
            <ul>
                <li style="background-color: green;">
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Navbar Section End -->


    <!-- Banner Section Start -->
    <div class="wrapper-full banner-full">
        <div class="wrapper banner">

        </div>
    </div>
    <center><div style="padding:10px;"><h3>1.1 : The life of <a href="https://en.wikipedia.org/wiki/Ant"><span  style="color:red">ant</span></a> in a leaf.</h3></div></center>
    <br><br>
    <br><br>
    <!-- Banner Section End -->


    <!-- Content Section Start -->
    <div  class="wrapper-full content-full">
        <div class="wrapper content">
            <h2># A c program to find out a year is leap year or not.</h2>
            <hr>
            <code>
                <?php echo "<pre>"; ?>
                #include<stdio.h>
                    int main() {
                       int year;
                       printf("Enter a year: ");
                       scanf("%d", &year);
                    
                       // leap year if perfectly visible by 400
                       if (year % 400 == 0) {
                          printf("%d is a leap year.", year);
                       }
                       // not a leap year if visible by 100
                       // but not divisible by 400
                       else if (year % 100 == 0) {
                          printf("%d is not a leap year.", year);
                       }
                       // leap year if not divisible by 100
                       // but divisible by 4
                       else if (year % 4 == 0) {
                          printf("%d is a leap year.", year);
                       }
                       // all other years are not leap year
                       else {
                          printf("%d is not a leap year.", year);
                       }
                    
                       return 0;
                    }
                <?php echo "</pre>"; ?>
            </code>
        </div>
    </div>
    <!-- Content Section End -->

    
    <!-- Footer Section Start -->
    <div class="wrapper-full footer-full">
        <div class="wrapper footer">
            <p>Copyright &COPY; MD SHAHIN MIA ROBIN</p>
        </div>
    </div>
    <!-- Footer Section End -->
</body>

</html>