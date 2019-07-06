<?php

if(!empty($_GET['repo'])){
  switch($_GET['repo']){
    case "items":
      include "item_sales.php";
    break;
    case "sales":
      include "dept_sales.php";
    break;
    case "season":
      include "season_sales.php";
    break;
  }
}else{
?>
<body>
<span class="abc">『幸福泉源』語錄:<br>
                  "我們的使命是生產優質的產品和加值服務，與全球客戶共同成長。"</span>
<div>&nbsp;</div>
<div class="ad"> → 幸福泉源電子科技股份有限公司成立於1999年05月，在2002年2月開始進行量產從事各類軟性印刷電路板之生產與銷售，
                  本公司秉持著「品質第一、顧客至上」的一貫原則，持續致力於技術研發與製程改善，先後獲得多項國際認證，包含ISO-9001
                  、ISO-14001、TS-16949、QC080000與UL等認證，並建立起完善的品質系統，以確保產品品質符合客戶需求。我們的熱情是
                  開發優質產品，以穩定的生產批次為後盾，同時保持良好的服務支持，以培養與全球合作夥伴的關係。
</div>
<br>
<div id="photo">
           <div id="imgs">
              <img src="./asset/global.jpg" alt="" class="pic">
              <img src="./asset/banner1.jpg" alt="" class="pic">
              <img src="./asset/banner2.jpg" alt="" class="pic">
              <img src="./asset/banner3.jpg" alt="" class="pic">
              <img src="./asset/banner4.jpg" alt="" class="pic">
              <img src="./asset/banner5.jpg" alt="" class="pic">
              
            </div>
    </div>
    <button id="left"> < </button>
    <button id="right"> > </button>
    <br>
    <script src="./jquery-3.4.1.min.js"></script>
    <script>

      $(function(){
             let nowimg = 0;
             let total = $(".pic").length;    
             
             $("#right").click(function(){
              if(nowimg < total-1){   
               nowimg++;     
                console.log(`現在是第 ${nowimg} 張`);
                let move = nowimg *800;
                $("#imgs").css("left", `-${move}px`);
               }
           })
           
           $("#left").click(function(){
             if(nowimg > 0){
               nowimg--;
               console.log(`現在是第 ${nowimg} 張`);
               let move = nowimg *800;
               $("#imgs").css("left", `-${move}px`);
               }
           })
      })

    </script>

<?php
}
?>
<body>

<?php

?>