<!DOCTYPE html>
<html>
    <head>
        <title>Quan ly khach hang</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Content/bootstrap.css" rel="stylesheet" />
        <link href="Content/animations.css" rel="stylesheet" />
        <link href="Content/styles.css" rel="stylesheet" />
    </head>
    <body>

        <header class="navbar navbar-inner navbar-fixed-top">
            <nav class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="Content/images/people.png" alt="logo" />
                        <span class="appTitle">Khach Hang</span>
                    </a>
                </div>
                <div class="nav-container" data-collapse="vm.isCollapsed">
                    <ul class="nav navbar-nav nav-pills navBarPadding"
                        menu-highlighter highlight-class-name="active">
                        <li><a href="Index.php">Danh sách</a></li>
                        <li><a href="order.php">Đơn hàng</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li >
                            <a href="login.php">Đăng nhập</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="view">
            <div class="container">
                <header>
                    <h3><span class="glyphicon glyphicon-lock"></span> Đăng nhập</h3>
                </header>
                <?php
                include 'pdoClass.php';
                $pdoclass = new pdoClass();





//                $pdoclass=new pdoClass();
//                foreach($pdoclass->querySql('SELECT * FROM `tbluser` WHERE 1') as $row){
//                    echo $row['user'];
//                    
//                }
//                
//                $pdo = new PDO("mysql:host=localhost;dbname=angularcode_task",'root', '');
//                
//                foreach($pdo->query('SELECT * FROM `tbluser` WHERE 1')as $row){
//                   echo $row['user'];
//                   echo $row['pass'];
//               }
                if (isset($_POST['email']) && isset($_POST['password'])) {
                    $pass = $_POST['password'];
                    $user = $_POST['email'];
                    if ($pass != '' && $user != '') {
                        foreach ($pdoclass->querySql('select * from tbluser')as $row) {
                            if ($user == $row['user'] && $pass == $row['pass']) {
                               
                                header('Location:index.php');
                                
                                exit();
                            }
                        }

                        $pdoclass->querySql("INSERT INTO `tbluser`(`user`, `pass`) VALUES ('$user','$pass')");
                        echo'<script>alert("da~ them"); </script>';
                        
                    }
                }
                ?>
                <form name="loginForm" novalidate method="post" action="login.php">
                    <div class="login">
                        <div class="row">
                            <div class="col-md-2">
                                Email:
                            </div>
                            <div class="col-md-10">
                                <input type="email" name="email" class="form-control" required />

                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-2">
                                Password:
                            </div>
                            <div class="col-md-10">
                                <input type="password" name="password" class="form-control" required />
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                        <br />
                        <div class="statusRow">
                            <br />
                            <div class="label label-important">
                                <span class="glyphicon glyphicon-thumbs-down icon-white"></span>

                            </div>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
        <div id="footer">
            <div class="navbar navbar-fixed-bottom">
                <div class="navbar-inner footer">
                    <div class="container">
                        <footer>
                            <div class="row">
                                <div class="col-md-12">
                                    Created by <a href="http://itc.edu.vn" target="_blank">Trần Công Mua </a>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>