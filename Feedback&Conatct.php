<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Feedback</title>
    <style>
        h3 {
            text-align: center;
        }

        body {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            /* background-image: url('image/Hi2'); */
        }


        .col-sm-12 {
            font-weight: 800;
            border-radius: 40px;
        }

        .panel-body {
            padding: 15px;
            border-radius: 40px;
        }

        .form-control {
            margin-top: 10px;
            margin-bottom: 10px;
        }
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

    <div class="col-sm-12">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 panel panel-body" style=">
            <h3>Registration Panel Here
                <span class="fa fa-envelope-o"></span>
            </h3>
            <hr style="background: brown;width: 60%;height: 3px">
            <form action="api/Ragister_sumbit.php" method="post">
                <div class="col-sm-12">
                    Enter Name </br>
                    <input type="text" id="name" class="form-control" name="name">
                  
                    Enter Mobile Number
                    <input type="text" name="mobile_no" class="form-control">
                </div>
                <div class="col-sm-12">
                    Enter email
                    <input type="email" name="email" class="form-control">
                    <center>Feedback</center> <br>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-8">
                        <textarea name="" id=""></textarea>
                    </div>
                   
                </div>
                <div class="col-sm-3"> </div>
                <div class="col-sm-6">
                    <input type="submit" class="form-control btn-success" value="Register Now" name="btnregister">
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
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