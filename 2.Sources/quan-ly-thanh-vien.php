<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="fix/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fix/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fix/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fixvendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fix/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fix/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fix/css/util.css">
	<link rel="stylesheet" type="text/css" href="fix/css/main.css">
<!--===============================================================================================-->
<?php
	session_start(); 
 ?>
<?php require_once("demo/connection.php");?>
<?php include("permission.php");?>

	<meta charset="UTF-8">
	<script src="http://localhost/ckeditor/ckeditor.js"></script>
    <title>Trang Quản Trị</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .example{
            margin: 1px;
        }
 
    </style>


    <div class="example" style ="height:20px ">
            <div id="header">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <a href="admin.php"  class="navbar-brand">Trang chủ </a>
                    </div>
                </nav>
            </div>
                 
    </div>

	<div class="limiter"style = " padding-right:4px;width:100%">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">User name</th>
									<th class="cell100 column2">Email</th>
									<th class="cell100 column3">Khóa tài khoản</th>
									<th class="cell100 column4">Quyền</th>
									<th class="cell100 column5">Hành động</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
							<?php
	$sql = "SELECT * FROM users ";
	$query = mysqli_query($conn,$sql);
?>
<?php 
if(isset($_GET['id_delete'])){
 $id=$_GET['id_delete'];}
	if (isset($_GET["id_delete"])) {
		$sql = "DELETE FROM users WHERE id = $id And  permision != 1";
		mysqli_query($conn,$sql);
	}
	
?>
							<?php 
		while ( $data = mysqli_fetch_array($query) ) {
			$i = 1;
			$id = $data['id'];
	?>
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo $data['username']; ?></td>
									<td class="cell100 column2"><?php echo $data['email']; ?></td>

									<td class="cell100 column4"><?php echo ($data['permision'] == 0) ? "Thành viên thường" : "Admin"; ?></td>
									<td class="cell100 column5"><a href="chinh-sua-thanh-vien.php?id=<?php echo $id;?>">Sửa</a>
																<a href="quan-ly-thanh-vien.php?id_delete=<?php echo $id;?>">Xóa</a></td>
								</tr>
								<?php 
			$i++;
		} 
	?>

	
							</tbody>
						</table>
					</div>
				</div>
			
				


<!--===============================================================================================-->	
	<script src="fix/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="fix/vendor/bootstrap/js/popper.js"></script>
	<script src="fixvendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="fixvendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="fix/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="fix/js/main.js"></script>

