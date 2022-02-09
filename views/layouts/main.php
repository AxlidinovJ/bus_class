<?php
use yii\helpers\url;
use app\assets\BusAsset;
BusAsset::register($this);
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and HTML5 template with 14 ready home page demos.">
      <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, faq">
      <title>Classic Business | MegaOne HTML5 Template</title>
      <link rel="icon" href="classic-business/img/favicon.png">
      <?php $this->head() ?>
   </head>
   <body data-spy="scroll" data-target=".navbar" data-offset="50">
   <?php $this->beginBody() ?>
      <div class="pre-loader">
         <div class="loader">
            <div></div>
            <div></div>
            <div></div>
         </div>
      </div>
      <div class="navigation-bar">
         <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top navbar-fixed-top">
            <div class="container">
               <a class="navbar-brand" href="<?=url::home()?>">
               <img src="<?=url::to('@web/classic-business/img/logo.png')?>" alt="image"></a>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                     </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="#services">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#work">Work</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?=\yii\helpers\url::to(['./admin'])?>">Login</a>
                     </li>
                  </ul>
               </div>
               <div class="social-icons">
                  <ul >
                     <li><a class="facebook-hovr" href="">
                        <i class="fab fa-facebook-f"></i></a>
                     </li>
                     <li><a class="twitter-hovr" href="">
                        <i class="fab fa-twitter"></i></a>
                     </li>
                     <li><a class="instagram-hovr" href="">
                        <i class="fab fab fa-instagram"></i></a>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Container End -->
            <a href="javascript:void(0)" class="sidemenu_btn link" id="sidemenu_toggle">
            <span></span>
            <span></span>
            <span></span>
            </a>
         </nav>
         <!-- Side Menu -->
         <div class="side-menu hidden">
            <div class="inner-wrapper">
               <div class="image">
                  <img src="classic-business/img/side-menu.png" alt="image">
               </div>
               <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
               <nav class="side-nav w-100">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link scroll" href="#home">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link scroll" href="#services">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link scroll" href="#team">Team</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link scroll" href="#work">Work</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link scroll" href="#contact">Contact</a>
                     </li>
                  </ul>
               </nav>
               <div class="side-menu-footer">
                  <div class="banner-icons">
                     <ul>
                        <li>
                           <a href="#" class="hover"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="#" class="hover"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="hover"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" class="hover"><i class="fab fa-instagram"></i></a></li>
                     </ul>
                  </div>
                  <p class="copywrite text-left">&#169; 2020 MegaOne. Made With Love by Themesindustry.</p>
               </div>
            </div>
         </div>
         <a id="close_side_menu" href="javascript:void(0);"></a>
         <!-- End side menu -->
      </div>
      <!-- End Navbar -->
      <!--SLIDER START-->
      <?=$content?>
      <!-- FOOTER START -->
      <footer class="no-gutters">
         <div class="container">
            <div class="footer-social-icons wow fadeInDown" data-wow-delay="300ms">
               <ul >
                  <li><a class="facebook-hovr" href="">
                     <i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="">
                     <i class="fab fa-twitter"></i></a>
                  </li>
                  <li><a  href="">
                     <i class="fab fa-google-plus-g"></i></a>
                  </li>
                  <li><a  href="">
                     <i class="fab fa-linkedin-in"></i></a>
                  </li>
                  <li><a  href="">
                     <i class="fab fa-instagram"></i></a>
                  </li>
                  <li><a href="">
                     <i class="far fa-envelope"></i></a>
                  </li>
               </ul>
            </div>
            <p class="wow fadeInDown" data-wow-delay="300ms">© 2020 MegaOne. made with love by themesindustry</p>
         </div>
      </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>