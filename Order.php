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
                    <li><a href="#">Liên hệ </a></li>
                    <li>
                        <a href="login.php">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <header>
            <h3><span class="glyphicon glyphicon-user"></span> Customers</h3>
        </header>
    </div>

 ﻿<div class="orders view">
    <div class="container">
        <header>
            <h3><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;All Customer Orders</h3>
        </header>
        <br />
        <div class="customerEdit">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="navbarText col-sm-2">Filter by Name/Product:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control novalidate" />
                    </div>
                </div>
            </form>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="span12">
             <div> <h4>Tran cong Man</h4></div>
                       <h3>Ddon dat hang cua Tran cong Man (trong partial/ordertable)</h3>
                </div>                
            </div>
        </div>
    </div>
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