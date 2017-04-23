<!DOCTYPE html>
<?php
include'./xlcustomer/XLcustom.php';
$pdo = new XLcustom();

$action = $_GET['action'];
if (isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['gender'])) {
    if ($action == 'add') {
        $pdo->AddCustom($_GET['firstName'], $_GET['lastName'], $_GET['gender'], $_GET['email'], $_GET['address'], $_GET['city'], $_GET['state'], $_GET['zip']);
        echo "<script>alert('vao`');</script>";
    }
    else{
        $pdo->EditCustom($action,$_GET['firstName'], $_GET['lastName'], $_GET['gender'], $_GET['email'], $_GET['address'], $_GET['city'], $_GET['state'], $_GET['zip']);
    }
};
?>
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
                        <li><a href="#">Liên hệ </a></li>
                        <li>
                            <a href="login.php">Đăng nhập</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="slide-animation-container">
            <div class="customers view indent">
                <div class="container">
                    <header>
                        <h3><span class="glyphicon glyphicon-user"></span> Customers</h3>
                    </header>
                    <div class="view">
                        <div class="container">
                            <header>
                                <h3><span class="glyphicon glyphicon-edit"></span> Add Customer</h3>
                            </header>
                            <form name="editForm" novalidate>
                                <div class="customerEdit">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4><span></span></h4>
                                            <br />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            First Name:
                                        </div>
                                        <div class="col-md-10">
                                            <input value="<?php echo $_GET['action'] ?>" name="action" type="hidden"/>

                                            <input type="text" name="firstName" class="form-control"  required />
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            Last Name:
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" name="lastName" class="form-control" required />
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            Gender:
                                        </div>
                                        <div class="col-md-10">
                                            <div class="radio">
                                                <label class="radio">
                                                    <input type="radio" name="gender" value="Male"/>
                                                    Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label class="radio">
                                                    <input type="radio" name="gender" value="Female"/>
                                                    Female
                                                    <br />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            Email:
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" name="email" required />
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            Address:
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" name="address" class="form-control" required />
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            City:
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" name="city" class="form-control" required />
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            State:
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" name="state" class="form-control" required />
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            Zip:
                                        </div>
                                        <div class="col-md-10">
                                            <input type="number" name="zip" class="form-control" required />
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary" >
                                                Save
                                            </button>
                                            &nbsp;&nbsp;
                                            <a href="customer.php" class="btn btn-danger" >Back </a>
                                        </div>
                                    </div>
                                    <br />

                                </div>
                            </form>
                        </div>
                    </div>

                    <div id="footer">
                        <div class="navbar ">
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
                </div>
            </div>
    </body>
</html>