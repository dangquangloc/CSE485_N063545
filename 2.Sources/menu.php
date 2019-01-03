<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<script src="http://localhost/ckeditor/ckeditor.js"></script>

    <title>Trang Quản Trị</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <style type="text/css">

        .example{

            margin: 5px;

        }

 

        .menu{

margin-top: 40px;

}

#trangchu{

color:rgb(49, 49, 160);

}

#a{

margin-left: 100px;

    

}

#b{

margin-left: 300px;

}

#quanly ul li a{

color: rgb(194, 147, 59);

}

h2{

font-family: 'Charmonman', cursive;

}
         

 

    </style>

</head>

<body>

    <div class="example">

            <h2 class="text-center">Xin Chào <?php echo $_SESSION['username'] ?> !!!</h2>

            <div id="header" class="menu">

                <nav  class="navbar navbar-inverse">

                    <div  class="navbar-header">

                        <a id="trangchu" href="admin.php"  class="navbar-brand">Trang Chủ </a>

                    </div>

 

                    <div id="quanly" class="navbar-collapse">

                        <ul class="nav navbar-nav">

                            <li id="a"><a href="them-bai-viet.php">Thêm bài viết mới</a></li>

                            <li ><a href="quan-ly-thanh-vien.php">Quản lý thành viên</a></li>

                            <li ><a href="quan-ly-bai-viet.php">Quản lý bài viết đã lưu</a></li>

                            <li ><a href="report-list.php">Quản lý các bình luận bị report</a></li>

                            <li id="b"><a href="logout.php">Đăng xuất</a></li>

                        </ul>

                    </div>

                </nav>

            </div>

                 

    </div>

	</body>

	</html>