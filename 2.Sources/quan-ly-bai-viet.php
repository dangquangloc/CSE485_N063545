<?php require_once("demo/connection.php"); ?>
<?php
// Bước 2: Tính tổng $totalRecords
$sql = "SELECT count(*) AS totalRecords FROM posts";
 $result=	mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$totalRecords = !empty($row) ? $row['totalRecords'] : 0;
 
// Bước 3: Lấy $currentPage và thiết lập $recordPerPage
$currentPage = isset($_GET['page']) && (int) $_GET['page'] > 0 ? (int) $_GET['page'] : 1;
$recordPerPage = 5;
 
// Bước 4: Tính tổng số trang($totalPage) và tính $offset
$totalPage = ceil($totalRecords/$recordPerPage);
// Tính $offset
$offset = ($currentPage-1)*$recordPerPage;
$limit = "LIMIT $offset,$recordPerPage";
 
$sql= "SELECT * FROM posts ".$limit; 
$result=	mysqli_query($conn,$sql);
 
// PHẦN HIỂN THỊ DANH SÁCH
?>
<div class="container">
  <?php if(mysqli_num_rows($result) > 0){ ?>
  <table class="tbl-grid" cellpadding="0" cellspacing="0" width="100%" border="0.01">
    <thead><tr>
      <td class="gridheader">id</td>
      <td class="gridheader">title</td>
      <td class="gridheader">content</td>
      <td class="gridheader">user_id</td>
      <td class="gridheader">is_public</td>
      <td class="gridheader">createdate</td>
      <td class="gridheader">updatedate</td>
      <td class="gridheader">type</td>
      </tr></thead>
    <?php while ($row = mysqli_fetch_assoc($result)){?>
    <tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['title'] ?></td>
      <td><?php echo ($row['content']) ?></td>
      <td><?php echo $row['user_id'] ?></td>
      <td><?php echo $row['is_public'] ?></td>
      <td><?php echo $row['createdate'] ?></td>
      <td><?php echo $row['updatedate'] ?></td>
      <td><?php echo $row['type'] ?></td>
    </tr>
    <?php } ?>
  </table>
  <?php } ?>
 
  <br />
  <div class="pagination">
    <?php
// PHẦN HIỂN THỊ PHÂN TRANG
 
// Button trang trước
if($currentPage > 1 && $totalPage > 0){
echo '<a href="quan-ly-bai-viet.php?page='.($currentPage-1).'&t='.time().'">←</a>';
}
// Danh sách trang
for($i=1; $i<=$totalPage; $i++){
echo '<a'.($currentPage==$i?' class="current"':'').' href="quan-ly-bai-viet.php?page='.$i.'&t='.time().'">'.$i.'</a>';
}
 
// Button trang kế tiếp
if($currentPage < $totalPage && $totalPage > 1){
echo '<a href="quan-ly-bai-viet.php?page='.($currentPage+1).'&t='.time().'">→</a>';
}
?>
  </div>
</div>