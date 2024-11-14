<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="image/Hi.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>shivrajfoundation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>

    /* Start code for general Header */
        #myNavbar ul li a {
            color: white;

        }

        #myNavbar ul li a:hover {
            color: #d11f46;
            background-color: #202738;
            text-decoration: underline;
        }

        .navbar {
            height: 20px;
            margin: 0px, 0px, 0px 0px;
        }

        /* End code for general Header */


        /* Start code for general footer */
        footer {
            background: #39291F;
            color: wheat;
            height: 200px;
            width: 100%
        }

        .fa {
            font-size: 30px;
        }

        /* End code for general footer */
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <?php
            include "GeneralHeader.php";
            ?>
        </div>
    </div>

            <!-- Start Code for slider-->
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="assets/img/img1.jpg" alt="Panel" style="width:100%; height: 450px;">
                        </div>

                        <div class="item">
                            <img src="assets/img/img1.jpg" alt="Panel" style="width:100%; height: 450px;">
                        </div>

                        <div class="item">
                            <img src="assets/img/img1.jpg" alt="New Panel" style="width:100%;  height: 450px;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- End Code for slider-->
        </div>
        <!-- Start code for About -->
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 panel panel-body" style="font-size:18px;text-align: justify">
                    <h1>About Vision and Mission
                        <span class="fa fa-times-circle-o" style="font-size: 30px;color: maroon"></span>
                    </h1>
                    <hr style="background: maroon;height: 2px">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias deserunt repellendus harum necessitatibus molestias inventore, pariatur exercitationem blanditiis culpa quae beatae error architecto numquam distinctio iusto quos saepe, vero tempore quisquam doloremque officia impedit nesciunt ut in! Id beatae quaerat perferendis consectetur ipsa repellendus possimus, tempora commodi rem ex quae facilis accusamus harum, neque ea fugiat sint unde minus, consequuntur odit! Eveniet tenetur quidem maiores. Placeat id provident libero recusandae.

             <h3>Our Network </h3>
             
   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis magnam ipsum error placeat aliquid ducimus, consequuntur pariatur voluptatibus illo, soluta animi modi ut esse. Iste, incidunt tempore velit, odio voluptas ad autem sint obcaecati aut vitae asperiores qui dolorem recusandae porro voluptates iusto ipsa laudantium sit quia animi natus dolore excepturi beatae! Odit, ipsum expedita in inventore ab ullam tempore optio aliquam pariatur illo, ad, veritatis neque officia architecto alias incidunt deserunt assumenda. Provident sapiente laboriosam, culpa odio ut unde!
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <!-- End Code for About -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php
            include "GeneralFooter.php";
            ?>
        </div>
    </div>
</body>

</html>
