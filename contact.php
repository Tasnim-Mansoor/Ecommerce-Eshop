<html dir=rtl" >
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.4.0/model-viewer.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birds Worlds</title>
    

  <style>
    .jomhuria-regular {
  font-family: "Jomhuria", serif;
  font-weight: 400;
  font-style: normal;
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
    line-height: 1.1;
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
.banner spline-viewer{
transform:scale(1.3);
}
.banner{
overflow:hidden;
}
.spline-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: #fff;
}
.banner {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f8f8f8;
}

</style>
</head>

<section class="banner">
    <br>
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.2.3/build/spline-viewer.js"></script>
<spline-viewer url="https://prod.spline.design/vyrSqxaf43hS42lB/scene.splinecode"></spline-viewer>
<div class="spline-text glow col-sm-6">
  <h2 style="font-weight: bold; font-size: 80px; text-align: center;">تواصل معنا الان</h2>
  <p style="font-weight: bold; font-size: 18px; text-align: center;">متجر اون لاين في صنعاء</p>
  <p style="font-weight: bold; font-size: 18px; text-align: center;">يمكنك التواصل معنا عن طريق الانستجرام او الفيسبوك</p>
  <button style="text-align: left; margin-right: 10px; background-color: red; color: white; padding: 10px 20px; border: none;" onclick="window.location.href = 'https://www.facebook.com/profile.php?id=100082964841372">فيسبوك</button>
<button style="text-align: left; margin-right: 10px; background-color: orange; color: white; padding: 10px 20px; border: none;" onclick="window.location.href = 'https://www.instagram.com/tmayanime/';">انستجرام</button>
</div>
  </div>
</section>
  <!--<div id="contact-page" class="container">
        <div class="bg">
            <div class="row">           
                <div class="col-sm-12">                         
                    <h2 class="title text-center">Contact <strong>Us</strong></h2>                                                      
                    <div id="gmap" class="contact-map">
                    </div>
                </div>                  
            </div>      
            <div class="row">   
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Get In Touch</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                            </div>                        
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                            </div>
                        </form>
                    </div>
                </div> -->
            <!--    <div class="row">   
                <div class="col-sm-8">
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Contact Info</h2>
                        <address>
                            <p>E-Shopper Inc.</p>
                            <p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
                            <p>Newyork USA</p>
                            <p>Mobile: +2346 17 38 93</p>
                            <p>Fax: 1-714-252-0026</p>
                            <p>Email: info@e-shopper.com</p>
                        </address> -->
                        <div class="social-networks">
                            <h2 class="title text-center">منصات التواصل الاجتماعي</h2>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100082964841372"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/tmayanime/"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                <!--    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>              
            </div>  
            </div>              
            </div> 
    </div><!--/#contact-page