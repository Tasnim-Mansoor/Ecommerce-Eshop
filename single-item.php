<html dir=rtl" >
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birds Worlds</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js" ></script>
<script src="./script1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
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
<?php 
 $PROID =   $_GET['id']; 
$query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
            WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND p.`PROID`=" . $PROID;
            $mydb->setQuery($query);
            $cur = $mydb->loadResultList();


  foreach ($cur as $result) { 
   
 ?>

        <!-- Portfolio Item Row -->
   <form   method="POST" action="cart/controller.php?action=add">
        
        <div class="row">

            <div class="col-md-8">
            <div class="row">
                <div class="col-m-12">
                    <div class="col-md-8 responsive">
                          <img width="402" class="img-portfolio " height="300"  src="<?php echo web_root . 'admin/products/'.  $result->IMAGES;?>" alt="">
               
                    </div>
                    </div>
                
            </div>
            
       
            </div>

     
            <div class="col-md-4">
              <input type="hidden" name="PROPRICE" value="<?php  echo $result->PRODISPRICE; ?>">
              <input type="hidden" id="PROQTY" name="PROQTY" value="<?php  echo $result->PROQTY; ?>">

              <input type="hidden" name="PROID" value="<?php  echo $result->PROID; ?>">
                <!-- <h3><?php echo $result->PRONAME ; ?></h3> -->
                <p><?php echo   $result->CATEGORIES;?></p>
                <!-- <h3>Project Details</h3> -->
                <ul>
                    <!-- <li>Model - <?php echo $result->PROMODEL; ?></li> -->
                    <li>Type - <?php echo $result->PRODESC; ?></li>
                    <li>Price - ريال <?php echo $result->PROPRICE; ?></li>
                    <?php if($result->PRODISCOUNT>0){ ?>
                    <li>Discount - <?php echo $result->PRODISCOUNT; ?> % </li> 

                    <li>Discounted Price - ريال <?php echo $result->PRODISPRICE; ?> </li> 
                    <?php } ?>
                    <li>Available Quantity - <?php echo $result->PROQTY; ?></li>
                </ul>

                 <button  type="submit"  class="btn btn-pup btn-sm"  name="btnorder">Order Now!</button>
            </div>
<?php } ?>       
        </div>
        <!-- /.row -->
</form>

<?php 
$query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
            WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND `CATEGORIES`='" . $result->CATEGORIES . "' limit 4";
            $mydb->setQuery($query);
            $cur = $mydb->loadResultList(); 
?>
        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Products</h3>
            </div>
<?php

  foreach ($cur as $result) { 

?>
            <div class="col-sm-3 col-xs-6">
                <a href="index.php?q=single-item&id=<?php echo $result->PROID; ?>">
                    <img class="img-hover img-related" width="135px" height="90px"  src="<?php echo web_root.'admin/products/'.$result->IMAGES;?>" alt="">
                </a><br/>
               <a href="index.php?q=single-item&id=<?php echo $result->PROID; ?>"><b><?php echo  $result->PRODESC ; ?></b></a>
            </div>

<?php } ?>
<!-- 
            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div> -->

        </div>