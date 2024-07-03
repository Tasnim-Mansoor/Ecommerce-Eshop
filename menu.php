<html dir="rtl" >
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Worlds</title>
   
  <style>
    .productinfo h2 {
    color: #d70f0f;
    font-family: 'Roboto', sans-serif;
    font-size: 24px;
    font-weight: 700;
}
    .mainmenu ul li a:hover, .mainmenu ul li a.active, .shop-menu ul li a.active {
    background: none;
    color: #fdb45e;
}
    h2.title {
    color: #d70f0f;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    font-weight: 700;
    margin: 0 15px;
    text-transform: uppercase;
    margin-bottom: 30px;
    position: relative;
}
    .left-sidebar h2, .brands_products h2 {
    color: #d70f0f;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    font-weight: 700;
    margin: 0 auto 30px;
    text-align: center;
    text-transform: uppercase;
    position: relative;
    z-index: 3;
}
    .right-side{
    justify-self: flex-end;
}
    .title{
    line-height: 1.2;
}
    @keyframes moveRightToLeft {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(-100%) translateY(100%);
  }
}

.move-animation {
  position: relative;
  animation: moveRightToLeft 4s linear infinite;
}
     .move {
  position: relative;
  animation: moveRightToLeft 4s linear infinite;
}
    @keyframes moveRightToLeft {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(-100%) translateY(100%);
  }
}
    @keyframes moveUpDown {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
  100% {
    transform: translateY(0);
  }
}

.move-up-down {
  animation: moveUpDown 4s ease-in-out infinite;
}
    .product-overlay {
    background: rgb(254 152 15 / 10%);
    top: 0;
    display: none;
    height: 0;
    position: absolute;
    -webkit-transition: height 500ms ease 0s;
    transition: height 500ms ease 0s;
    width: 100%;
    display: none;
    }

    .header-bottom {
    padding-bottom: 30px;
    padding-top: 30px;
    background-color: black;
}
.shop-menu ul li a {
    background: black;
    color: orange;
}
.glow{
    filter: drop-shadow(-20px 0px 1.75em rgba(255, 0, 0, 1));
}
</style>
</head>
 <section id="advertisement">
    <div class="container glow">
      <img src="images/shop/b1.jpg" alt="" />
    </div>
  </section>
  
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
         <?php include 'sidebar.php'; ?>
          </div><!--/category-productsr-->  
        
        <div class="col-sm-9 padding-right">
          <div class="features_items"><!--features_items-->
            <h2 class="title text-center">المنتجات</h2>
              <?php
             if(isset($_POST['search'])) { 
                $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
                          WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND PROQTY>0 
                AND ( `CATEGORIES` LIKE '%{$_POST['search']}%' OR `PRODESC` LIKE '%{$_POST['search']}%' or `PROQTY` LIKE '%{$_POST['search']}%' or `PROPRICE` LIKE '%{$_POST['search']}%')";
              }elseif(isset($_GET['category'])){
                $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
                          WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND PROQTY>0 AND CATEGORIES='{$_GET['category']}'";
              }else{
                $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
                          WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND PROQTY>0 ";
              }

           
            $mydb->setQuery($query);
            $res = $mydb->executeQuery();
            $maxrow = $mydb->num_rows($res);

            if ($maxrow > 0) { 
            $cur = $mydb->loadResultList();
           
            foreach ($cur as $result) { 

              ?>
        <form method="POST" action="https://www.instagram.com/direct/t/17845158819133814">
            <input type="hidden" name="PROPRICE" value="<?php  echo $result->PROPRICE; ?>">
            <input type="hidden" id="PROQTY" name="PROQTY" value="<?php  echo $result->PROQTY; ?>">

            <input type="hidden" name="PROID" value="<?php  echo $result->PROID; ?>">
            <div class="col-sm-4">
              <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="<?php  echo web_root.'admin/products/'. $result->IMAGES; ?>" alt="" />
                      <h2>ريال <?php  echo $result->PRODISPRICE; ?></h2>
                      <p><?php  echo    $result->PRODESC; ?></p>
                      <button type="submit" name="btnorder" class="btn btn-default add-to-cart">
  <i class="fa fa-instagram" style="color: #E4405F;"></i>
  اطلب الان
</button>
              </div>
              
                    <div class="product-overlay"> 
                      <div class="overlay-content">
                        <h2>ريال <?php  echo $result->PRODISPRICE; ?></h2>
                        <p><?php  echo    $result->PRODESC; ?></p>
                       <button type="submit" name="btnorder" class="btn btn-default add-to-cart"><i class="fa fa-instagram"></i>اطلب الان</button>
                      </div>
                    </div>
                </div>
                
                <div class="choose">
                <div style="text-align: center;">
<a href="https://www.messenger.com/t/110262045026424/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0"> اطلب الان </a>
    <i class="fa fa-facebook" style="color: blue;"></i>
    <span></span>
  </button>
</div>
                  <ul class="nav nav-pills nav-justified">
                    <li>
                              <?php     
                            if (isset($_SESSION['CUSID'])){  

                              echo '
                              
                            ';

                             }else{
                               echo'
                            ';
                            }  
                            ?>

                    </li> 
                  </ul>
                </div>
              </div>
            </div>
          </form>
       <?php  } 


            }else{ 

              echo '<h1>المنتج غير متوفر</h1>';

            }?> 
          </div><!--features_items-->
        </div>
      </div>
    </div>
  </section>
  