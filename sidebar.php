<!---左側選單欄--->
<?php
switch($do){
  case "login":
  case "reg":
  case "member":
  case "content":
?>
<div id="sidebar">
  <a href="index.php" target="_top">
    <img src="./asset/earth.png" alt="幸福泉源-回首頁" title="幸福泉源-回首頁" id="tp1"></a>
      
      <ul class="menu">
      <li>&nbsp</li>
      <li><a href="index.php?do=content&repo=items">年度業務狀況</a></li>
      <li><a href="index.php?do=content&repo=sales">業務部銷售狀況</a></li>
      <li><a href="index.php?do=content&repo=season">年度品項銷售狀況</a></li>
 
    </ul>
  </div>
<?php
  break;
  case "admin":
  ?>
<div id="sidebar">
      <ul class="menu">
       <li><a href="index.php?do=admin&ad=items">產品管理</a></li>
      <li><a href="index.php?do=admin&ad=emp">員工管理</a></li>
      <li><a href="index.php?do=admin&ad=client">客戶管理</a></li>
 
    </ul>
  </div>
  <?php
  break;
}
?>


<?php

?>