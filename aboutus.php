<!DOCTYPE html>
<html lang="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Anime Worlds</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <html dir="rtl" >
  

<script>
  window.addEventListener('scroll', function() {
    var orangeImg = document.getElementById('orange');
    var orangeImg2 = document.getElementById('orange-cut');
    var scrollPosition = window.scrollY;
    var targetPosition = 500; // Adjust this value to your desired position

    if (scrollPosition > targetPosition) {
      orangeImg.style.top = '80%'; // Adjust this value to move the first image vertically
      orangeImg.style.left = '20%'; // Adjust this value to move the first image horizontally
      orangeImg2.style.top = '80%'; // Adjust this value to move the second image vertically
      orangeImg2.style.left = '20%'; // Adjust this value to move the second image horizontally
    } else {
      orangeImg.style.top = '50%';
      orangeImg.style.left = '50%';
      orangeImg2.style.top = '50%';
      orangeImg2.style.left = '50%';
    }
  });
</script>
  <style>
  
  #orange {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    transition: top 0.5s, left 0.5s;
  }
#orange-cut{
    position: absolute;
    top: 10%;
    left: 32%;
    width: 15%;
    z-index: 1;
    transition: all cubic-bezier(0.19, 1, 0.22, 1)0.5s;

}
.fa-angle-right:before {
    content: "\f105";
    display:none;
}

#orang3{
    position: absolute;
    width: 20%;
    z-index: 3;
    top: 55%;
    right: 30%;
    transition: all cubic-bezier(0.19, 1, 0.22, 1)0.5s;

}

fa-angle-left:before {
    content: "\f104";
    display: none;
}
   
    
    @keyframes moveLeftToRight {
  0% {
    opacity: 0;
    transform: translateX(-100%);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}

.text {
  position: relative;
  animation: moveLeftToRight 1s linear;
  animation-fill-mode: forwards;
  align:"center";
}
     @keyframes moveLeftToRight {
      0% {
        transform: translateX(-100%);
      }
      100% {
        transform: translateX(1%);
      }
    }

   
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
.item p {
    color: white;
    font-size: 16px;
    font-weight: 300;
    font-family: 'Roboto', sans-serif;
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
.title{
    line-height: 1.2;
}
</style>

</head>

<body style="background-color:black" onload="totalprice()" >

 <!-- <header id="header"><!--header-->
 <!--   <div class="header_top"><!--header_top-->
     <!-- <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="contactinfo">
              <ul class="nav nav-pills">
                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> jannopalacios@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="social-icons pull-right">
              <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>ader_top-->
    
    <div class="header-middle"style="background-color: black"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-md-4 clearfix">
            <div class="logo pull-left">
            <a href="index.php">
  <img src="images/home/logo3.jpeg" alt="" style="float: left; width: 30%;" />
</a>
            </div> 
          </div>
          <div class="col-md-8 clearfix">
            <div class="shop-menu clearfix pull-right">
              <ul class="nav navbar-nav" style="background-color: black;">     
                <li><a href="<?php echo web_root;?>index.php?q=cart"><i class=""></i> </a></li>
                
                  <li><a href="https://www.facebook.com/profile.php?id=100082964841372"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/tmayanime/"><i class="fa fa-instagram"></i></a></li>
                <li><a data-target="" data-toggle=""  href=""><i class=""></i> </a></li>
              
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-middle-->
  
    <div class="header-bottom"><!--header-bottom-->
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu pull-left">
              <ul class="nav navbar-nav collapse navbar-collapse">
                
             
              <li><a href="http://localhost/ecommerce/index.php?q=product">المنتجات</a></li>
              <li><a href="aboutus.php">من نحن</a></li>
              <li><a href="http://localhost/ecommerce/index.php?q=contact">تواصل معنا</a></li>
              <li><a href="index.php">الرئيسية</a></li>
</ul>

<section id="slider" style="background-color: black;"><!--slider-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          
                
              </div>
              <div class="item">
                <div class="col-sm-6 text title glow">
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                <h1><span dir="rtl">متجر انمي اون لاين</span></h1>
  <h2 align=""><span dir="">لبيع  منتجات الانمي</span></h2>
  <p>ابحث وتسوق واطلب بكل سهولة حدد ما تريده وارسل لنا والباقي علينا </p>
                 
                </div>
                <div class="col-sm-6 glow move-up-down">
                  <img src="" id="orange"  class="girl img-responsive" alt="" />

                <!--  <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
                </div>
              </div>
                        <div class="item">
                <div class="col-sm-6 glow move-up-down">
                <br>
              <br>
              
             
                <img src="images/home/a6.png" class="girl img-responsive" alt="" />
              <!--  <img id="movingImg" src="images/home/pricing.png" class="pricing" alt="" /> -->
                 
                 
                </div>
                <br>
              <br>
              <br>
              <br>
              
                <div class="col-sm-6 text">
                <h1><span align="center">تسوق معنا-</span>الان</h1>
                  <h2>اطلب الان بسرعة وبسهولة</h2>
                  <p>استكشف مجموعة واسعة من أحدث وأروع المنتجات المتعلقة بالأنمي، بدءًا من الدمى المحشوة والتماثيل إلى الملابس والإكسسوارات... </p>
               
                </div>
              </div>
              
            </div>
            
            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </section><!--/slider-->
  
           
  <img class="glow" id="orange-cut" src="Assets/a9.png" alt="" style="width: 400px; height: 400px;">
            
           
            
           
        </div>
        

  
                                     
</body>
</html>
                               