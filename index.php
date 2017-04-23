<?php


echo '    <header class="navbar navbar-inner navbar-fixed-top">
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
                    <li><a href="customer.php">Danh sách</a></li>
                    <li><a href="order.php">Đơn hàng</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li >
                        <a href="login.php">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>';

?>
