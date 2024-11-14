<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="image/Hi.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>shivrajfoundation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .Hello {
            background: #E0C9AC;
            margin: 0px;
            padding: 0px;
        }

        .image:hover {
            animation: ease-in-out-animation 3s;
            cursor: pointer;
        }

        .h2cursor {
            cursor: grab;
        }

        @keyframes ease-in-out-animation {

            0%,
            50% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php
            include "GeneralHeader.php";
            ?>
            <div class="Hello">


                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                            <h2 class="h2cursor" style="font-family: 'Pacifico', cursive; font-size: 28px;">
                               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam praesentium aperiam maxime! Illo saepe quas cumque quae ut, mollitia aliquam sapiente at voluptates perspiciatis dolorum, voluptas hic corporis magni quidem blanditiis pariatur recusandae. Veniam eos, id delectus ipsum cumque modi unde quae reprehenderit aut assumenda dolorum ipsa tenetur fugiat error labore architecto quas quam dolore. Ea qui modi eligendi nihil est, et exercitationem repellendus, voluptatum in suscipit ullam. Saepe nesciunt accusamus ratione alias ullam a.
                        </div>
                        <div class="col-sm-4">
                            <img class="image" src="assets/img/img3.jpg"
                                style="height:450px;width:550px; cursor: pointer; border-radius:10px; " />
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
                <br><br><br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <img class="image" src="assets/img/img2.jpg"
                                style="height:450px; width:550px; border-radius:10px; " />
                        </div>
                        <div class="col-sm-6" style="margin-left:14%; ">
                            <h2 class="h2cursor" style=" margin-top: 28px; font-size: 28px;
                        color:orangered; font-family: cursive;">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium perferendis rerum natus temporibus sequi, fuga eum ut vitae enim facere cum aut sit aperiam blanditiis iusto libero minus voluptatibus dolores maxime at? Similique quis delectus maxime praesentium, placeat omnis quam ullam. Dignissimos unde fugit odio nemo culpa. Reiciendis quasi perferendis deleniti reprehenderit porro obcaecati magnam, eius, atque soluta pariatur animi commodi odit dicta! Odit est beatae, ipsum perferendis sed similique.
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
                <br><br><br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-6">

                            <h2 class="h2cursor" style="font-size: 29px; font-family: Algerian; color: goldenrod">
                               Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aut dicta ex nobis aliquid perspiciatis impedit rerum molestiae earum fuga voluptate, dignissimos expedita distinctio laudantium ipsa culpa voluptatem recusandae numquam. Vitae accusantium, nisi veniam repellat iste autem totam! Eius dolores dolor id fugiat nam minus rerum assumenda veniam, sapiente nisi ab modi culpa earum harum unde dignissimos sit ex sed tempore cumque iusto dicta ipsa ratione voluptatem! Id pariatur commodi reiciendis deleniti ex a, odio porro cupiditate, voluptate 
                            </h2>
                        </div>
                        <div class="col-sm-4">
                            <img class="image" src="assets/img/img1.jpg"
                                style="height:450px; width:550px; border-radius:10px; " />
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
                <br><br><br>

                <div class="container-fluid">
                    <div class="row">
                        <?php
                        include "GeneralFooter.php";
                        ?>
                    </div>
                </div>
            </div>

</body>

</html>