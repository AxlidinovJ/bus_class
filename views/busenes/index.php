<?php
use yii\helpers\Url;
?>

<style type="text/css">
.learn-more-section {
  background-image: url(<?=url::to('@web/imgs/'.$section1->bg)?>);
}
.story-section {
   background-image: url(<?=url::to('@web/imgs/'.$section2->bg)?>);
}
.quote-section{ 
   background-image: url(<?=url::to('@web/imgs/'.$section3->bg)?>);
}
</style>

      <div class="slider" id="home">
         <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="slider-shop" data-source="gallery" style="background:rgba(255,255,225,0);padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
            <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
               <ul>
                  <?php $i=0; foreach ($sliders as $slider) {?>
                  <li data-index="rs-<?=$slider->id?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="<?=url::to(['imgs/'.$slider->bg])?>"  data-rotate="0"  data-saveperformance="off"  data-title="Slide 2" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                     <!-- MAIN IMAGE -->
                     <img src="<?=url::to(['imgs/'.$slider->bg])?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                     <div class="bg-overlay bg-white opacity-<?=($slider->id)%2+1?>"></div>
                     <!-- LAYERS -->
                     <!-- LAYER NR. 6 -->
                     <div class="tp-caption   tp-resizeme"
                        id="slide-<?=$slider->id?>-layer-1"
                        data-x="['left','center','center','center']" data-hoffset="['5','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-120','-115','-114','-114']"
                        data-fontsize="['16','16','18','18']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; white-space: nowrap; font-size: 24px; line-height: 22px; font-weight: 500; color:#18191d;"><?=$slider->year?></div>
                     <!-- LAYER NR. 7 -->
                     <div class="tp-caption   tp-resizeme"
                        id="slide-2-layer-2"
                        data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-52','-52','-52','-52']"
                        data-fontsize="['60','60','50','40']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 16px; font-weight: 600; color: #032a58; letter-spacing: 0px;"><?=$slider->title?></div>
                     <!-- LAYER NR. 8 -->
                     <div class="tp-caption   tp-resizeme"
                        id="slide-<?=$slider->id?>-layer-3"
                        data-x="['left','center','center','center']" data-hoffset="['3','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                        data-fontsize="['18','18','16','16']"
                        data-width="['530','530','530','450']"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','center','center','center']"
                        data-paddingtop="[30,30,30,30]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; white-space: normal; font-size: 18px; line-height: 22px; font-weight: 400; color: #18191d; letter-spacing: 0px; "><?=$slider->subtitle?> 
                     </div>
                     <div class="tp-caption   tp-resizeme"
                        id="slide-2-layer-4"
                        data-x="['left','center','center','center']" data-hoffset="['0','0','30','1']"
                        data-y="['top','top','top','top']" data-voffset="['415','439','533','270']"
                        data-width="['160','160','260','320']"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="button"
                        data-responsive_offset="on"
                        data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Linear.ease","to":"o:1;rX:0;rY:0;rZ:0;z:0;"}]'
                        data-textAlign="['inherit','inherit','inherit','center']"
                        data-paddingtop="[30,30,30,30]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 11; max-width:960px; white-space: nowrap; font-size: 14px; line-height: 22px; font-weight: 500; color: #ffffff; letter-spacing: 0px;">
                        <a class="btn button btn-rounded btn-white btn-hvr-blue" href="<?=$slider->button_link?>">
                          <?=$slider->button_name?>
                           <div class="btn-hvr-setting">
                              <ul class="btn-hvr-setting-inner">
                                 <li class="btn-hvr-effect"></li>
                                 <li class="btn-hvr-effect"></li>
                                 <li class="btn-hvr-effect"></li>
                                 <li class="btn-hvr-effect"></li>
                              </ul>
                           </div>
                        </a>
                     </div>
                  </li>
                  <?php }?>

               </ul>
               <div class="tp-bannertimer tp-bottom" style="height: 5px; background: rgb(87,202,133);"></div>
            </div>
         </div>
         <!-- END REVOLUTION SLIDER -->
      </div>
      <!--SLIDER END-->
      <!-- SERVICES START -->
      <div class="services-section" id="services">
         <div class="container">
            <h2 class="wow fadeInDown" data-wow-delay="300ms" >Our Exclusive Services</h2>
            <p class="wow fadeInDown" data-wow-delay="300ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="row no-gutters ">
               <?php foreach ($services as $service) {?>
               <div class="col-lg-4 col-md-4 col-sm-12 flip-boxes wow fadeIn" data-wow-delay="300ms">
                  <div class="flip-box">
                     <div class="flip-box-inner blue-box">
                        <div class="flip-box-front">
                           <i class="<?=$service->img?>"></i>
                           <h5><?=$service->title?></h5>
                           <p><?=$service->subtitle?></p>
                        </div>
                        <div class="flip-box-back">
                          <i class="<?=$service->img?>"></i>
                           <h5><?=$service->title?></h5>
                           <p><?=$service->subtitle?></p>
                        </div>
                     </div>
                  </div>
               </div>
               <?php }?>
            </div>
         </div>
         <!-- Container End -->
      </div>
      <!-- SERVICES END -->
      <!--LEARN-MORE-SECTION START -->
      <div class="learn-more-section">
         <div class="container">
            <div class="text-area wow fadeInDown" data-wow-delay="300ms">
               <p><?=$section1->subtext?></p>
               <h2><?=$section1->text?></h2>
               <a class="btn button btn-rounded trans-btn btn-hvr-white wow fadeInUp" data-wow-delay="300ms" href="<?=$section1->button_link?>">
                  <?=$section1->button_name?>
                  <div class="btn-hvr-setting">
                     <ul class="btn-hvr-setting-inner">
                        <li class="btn-hvr-effect"></li>
                        <li class="btn-hvr-effect"></li>
                        <li class="btn-hvr-effect"></li>
                        <li class="btn-hvr-effect"></li>
                     </ul>
                  </div>
               </a>
            </div>
         </div>
         <!-- Container End -->
      </div>
      <!--LEARN-MORE-SECTION END  -->
      <!-- COUNTER-SECTION START -->
      <div class="counter-section">
         <div class="container">
            <h2 class="wow fadeInDown" data-wow-delay="300ms"><?=$stat->title?></h2>
            <p class="wow fadeInDown" data-wow-delay="300ms"><?=$stat->sub_title?>
            </p>
            <div class="row no-gutters">
               <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="400ms">
                  <div class="counter">
                     <div class="media">
                        <i class="fas fa-chart-bar"></i>
                        <div class="media-body">
                           <span class="timer count-title count-number" data-to="<?=$stat->completed?>" data-speed="9000"></span>
                           <p>Projects Completed</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="400ms">
                  <div class="counter">
                     <div class="media">
                        <i class="far fa-clock"></i>
                        <div class="media-body">
                           <span class="timer count-title count-number" data-to="<?=$stat->hours?>" data-speed="9000">K</span>
                           <p>Working Hours</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="400ms">
                  <div class="counter">
                     <div class="media">
                        <i class="far fa-star"></i>
                        <div class="media-body">
                           <span class="timer count-title count-number" data-to="<?=$stat->feedbacks?>" data-speed="9000">K</span>
                           <p>Positive Feedbacks</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="400ms">
                  <div class="counter">
                     <div class="media">
                        <i class="far fa-heart"></i>
                        <div class="media-body">
                           <span class="timer count-title count-number" data-to="<?=$stat->clients?>" data-speed="9000">K</span>
                           <p>Happy Clients</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Container End -->
      </div>
      <!-- COUNTER-SECTION END -->
      <!-- TEAM-SECTION START -->
      <div class="team-section" id="team">
         <div class="container">
            <h2 class="wow fadeInDown" data-wow-delay="300ms">Meet The Team</h2>
            <p class="wow fadeInDown" data-wow-delay="300ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class=" text-center team-section-carousel owl-carousel owl-themes active wow zoomIn" data-wow-delay="400ms">
               <?php foreach ($meets as $meet) {?>
               <div class=" item">
                  <img src="<?=url::to(['imgs/'.$meet->img])?>" alt="image">
                  <div class="team-detail">
                     <h5><?=$meet->name?></h5>
                     <p><?=$meet->company?></p>
                  </div>
               </div>
               <?php }?>
   
            </div>
         </div>
         <!-- Container End -->
      </div>
      <!-- TEAM SECTION END -->
      <!-- STORY-SECTION START -->
      <div class="story-section">
         <div class="container">
            <div class="text-area wow fadeInDown" data-wow-delay="300ms">
               <p><?=$section2->subtext?> </p>
               <h2><?=$section2->text?></h2>
               <a data-fancybox="" href="<?=$section2->button_link?>" class="btn button btn-rounded trans-btn btn-hvr-white wow fadeInUp" data-wow-delay="300ms" >
                  <i class="fas fa-play"></i>
                  <?=$section2->button_name?>
                  <div class="btn-hvr-setting">
                     <ul class="btn-hvr-setting-inner">
                        <li class="btn-hvr-effect"></li>
                        <li class="btn-hvr-effect"></li>
                        <li class="btn-hvr-effect"></li>
                        <li class="btn-hvr-effect"></li>
                     </ul>
                  </div>
               </a>
            </div>
         </div>
      </div>
      <!-- STORY-SECTION END -->
      <!-- CUBE-PORTFOLIO-SECTION START -->
      <div class="cubeportfolio" id="work">
         <div class="container">
            <h2 class="wow fadeInDown" data-wow-delay="300ms">Recent Projects</h2>
            <p class="wow fadeInDown" data-wow-delay="300ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <div id="js-filters-mosaic-flat" class="cbp-l-filters-buttonCenter">
               <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>

               <?php foreach ($p_category as $category) { //$m = strtoupper(trim(str_replace(' ','-',$category->name)))?>
               <span class="margin-line">/</span>
               <div data-filter=".rasm<?=$category->id?>" class="cbp-filter-item"><?=$category->name?> </div>
               <?php }?>

            </div>
            <!-- Portfolio Items Start -->
            <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat">

               <?php  foreach ($p_img as $img) {?>
               <div class="cbp-item rasm<?=$img->catagory_id?>">
                  <a href="<?=url::to("@web/imgs/".$img->img)?>" class="cbp-caption cbp-lightbox" data-title="WhereTO App<br>by Tiberiu Neamu">
                     <div class="cbp-caption-defaultWrap">
                        <img src="<?=url::to("@web/imgs/".$img->img)?>" alt="" height='200px'>
                     </div>
                     <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="plus"></div>
                              <div class="title">Latest Work</div>
                              <div class="cbp-l-caption-desc">See Our Recent Project</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <?php }?>
            </div>
            <!-- Portfolio Items -->
            <div class="cube-button">
               <a class="btn button btn-rounded btn-light-blue btn-hvr-light-blue" href="javascript:void(0);">
                  Learn
                  More
                  <div class="btn-hvr-setting">
                     <ul class="btn-hvr-setting-inner">
                        <li class="btn-hvr-effect"></li>
                        <li class="btn-hvr-effect"></li>
                        <li class="btn-hvr-effect"></li>
                        <li class="btn-hvr-effect"></li>
                     </ul>
                  </div>
               </a>
            </div>
         </div>
         <!-- Container End -->
      </div>
      <!-- CUBE-PORTFOLIO-SECTION END -->
      <!-- QUOTE-SECTION START -->
      <div class="quote-section">
         <div class="container">
            <div class="text-section wow zoomIn" data-wow-delay="300ms">
               <div class="left-quote">
                  <i class="fas fa-quote-left"></i>
               </div>
               <h3>Maecenas nec odio et ante tincidunt tempus<br> Donecbero vitae sapien ut libero nenatis.</h3>
               <div class="right-quote">
                  <i class="fas fa-quote-right"></i>
               </div>
            </div>
         </div>
      </div>
      <!-- QUOTE-SECTION END -->
      <!-- PRICING-SECTION -->
      <div class="pricing-section" id="pricing">
         <div class="container">
            <h2 class="wow fadeInDown" data-wow-delay="300ms">Pricing Plans</h2>
            <p class="wow fadeInDown" data-wow-delay="300ms">Vivamus ut scelerisque tellus. Morbi egestas neque et lorem sodales faucibus. Etiam<br> 
               efficitur vehicula commodo. Curabitur ac libero ullamcorper,
            <div class="row pricing-plans">

             <!--   <div class="col-lg-4 wow fadeInLeft" data-wow-delay="400ms">
                  <div class="single-price">
                     <div class="price-tag">
                        <h4>Starter Plan</h4>
                        <h3>$19.<span>00</span></h3>
                        <p>1Months</p>
                     </div>
                     <div class="price-item">
                        <ul>
                           <li>Modern & Creative Design</li>
                           <li>Premium Plugins</li>
                           <li>Clean Code</li>
                           <li>Responsive Layouts</li>
                           <li>Google Fonts</li>
                           <li>Highly Customizable</li>
                        </ul>
                     </div>
                     <a class="btn button btn-rounded btn-white btn-hvr-blue" href="javascript:void(0);">
                        GET STARTED
                        <div class="btn-hvr-setting">
                           <ul class="btn-hvr-setting-inner">
                              <li class="btn-hvr-effect"></li>
                              <li class="btn-hvr-effect"></li>
                              <li class="btn-hvr-effect"></li>
                              <li class="btn-hvr-effect"></li>
                           </ul>
                        </div>
                     </a>
                  </div>
               </div> -->

               <?php foreach ($prices as $price) {?>
               <div class="col-lg-4  wow fadeIn" data-wow-delay="400ms">
                  <div class="single-price <?php if(!empty($price->status)) echo "active" ?>">
                     <div class="price-tag ">
                        <h4><?=$price->title?></h4>
                        <h3><?=$price->price?>.<span>00</span></h3>
                        <p><?=$price->month?></p>
                     </div>
                     <div class="price-item">
                        <ul>
                           <?php
                           $content  = $price->price_item;
                           $items = explode("\n",$content);
                           foreach ($items as $item) {
                              echo "<li>".$item."</li>";
                           }
                           ?>
                        </ul>
                     </div>
                     <a class="btn button btn-rounded btn-light-blue btn-hvr-light-blue" href="<?=$price->button_link?>">
                        <?=$price->button_name?>
                        <div class="btn-hvr-setting">
                           <ul class="btn-hvr-setting-inner">
                              <li class="btn-hvr-effect"></li>
                              <li class="btn-hvr-effect"></li>
                              <li class="btn-hvr-effect"></li>
                              <li class="btn-hvr-effect"></li>
                           </ul>
                        </div>
                     </a>
                  </div>
               </div>
               <?php }?>

             </div>
         </div>
         <!-- Container End -->
      </div>
      <!-- PRICING-SECTION -->
      <!-- BLOG-SECTION START -->
      <div class="blog-section" id="blog">
         <div class="container">
            <div class="row no-gutters">
              <?php foreach ($news as $new) {
                  if($new->id%2==1){
               ?>
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 left-text wow fadeInLeftBig" data-wow-delay="300ms">
                  <h2><?=$new->title?></h2>
                  <p><?=$new->content?></p>
                  <a class="btn button btn-rounded btn-light-blue btn-hvr-light-blue" href="<?=$new->button_link?>">
                     <?=$new->button_name?>
                     <div class="btn-hvr-setting">
                        <ul class="btn-hvr-setting-inner">
                           <li class="btn-hvr-effect"></li>
                           <li class="btn-hvr-effect"></li>
                           <li class="btn-hvr-effect"></li>
                           <li class="btn-hvr-effect"></li>
                        </ul>
                     </div>
                  </a>
               </div>
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRightBig" data-wow-delay="300ms">
                  <img src="<?=url::to(['imgs/'.$new->img])?>" alt="image">
               </div>
            <?php }else{ ?>
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 right-text order-2 order-lg-1 wow fadeInLeftBig" data-wow-delay="300ms">
                  <img src="<?=url::to(['imgs/'.$new->img])?>" alt="image">
               </div>
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 right-text order-1 order-lg-2 wow fadeInRightBig" data-wow-delay="300ms">
                  <h2><?=$new->title?></h2>
                  <p><?=$new->content?> </p>
                  <a class="btn button btn-rounded btn-light-blue btn-hvr-light-blue" href="<?=$new->button_link?>">
                     <?=$new->button_name?>
                     <div class="btn-hvr-setting">
                        <ul class="btn-hvr-setting-inner">
                           <li class="btn-hvr-effect"></li>
                           <li class="btn-hvr-effect"></li>
                           <li class="btn-hvr-effect"></li>
                           <li class="btn-hvr-effect"></li>
                        </ul>
                     </div>
                  </a>
               </div>
               <?php }} ?>
            </div>
         </div>
         <!-- Container End -->
      </div>
      <!-- BLOG-SECTION END -->
      <!-- CONTACT-SECTION START -->
      <div class="contact-section" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="300ms">
                  <h2>Let's Get In Touch</h2>
                  <form class="contact-form"  method="GET">
                     <div class="row">
                        <div class="col-12" id="result"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <div class="form-group">
                              <label>Name</label>
                              <input class="form-control" type="text" placeholder="Your Name" required=""  name="name">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <div class="form-group">
                              <label >Email</label>
                              <input class="form-control" type="email" placeholder="email@website.com" required=""  name="email">
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <div class="form-group">
                              <label>Message</label>
                              <textarea class="form-control" placeholder="Write your message here"  name="message" rows="6" cols="50"></textarea>
                           </div>
                        </div>
                        <button class="btn button btn-rounded btn-light-blue btn-hvr-light-blue " name='sendM'>
                           SEND
                           <div class="btn-hvr-setting">
                              <ul class="btn-hvr-setting-inner">
                                 <li class="btn-hvr-effect"></li>
                                 <li class="btn-hvr-effect"></li>
                                 <li class="btn-hvr-effect"></li>
                                 <li class="btn-hvr-effect"></li>
                              </ul>
                           </div>
                        </button>
                     </div>
                  </form>
               </div>
                 <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay="300ms">
                  <p><?=$call->text?></p>
                  <div class="media">
                     <i class="fas fa-map-marker-alt"></i>
                     <div class="media-body">
                        <h5>OUR ADDRESS</h5>
                       <?php 
                           $num = explode("\n",$call->address);
                           foreach($num as $ex2){
                           echo "<p>".$ex2."</p>";
                           } ?>
                     </div>
                  </div>
                  <div class="media">
                     <i class="fas fa-phone"></i>
                     <div class="media-body">
                        <h5>PHONE NUMBER</h5>
                        <?php 
                           $num = explode("\n",$call->number);
                           foreach($num as $ex2){
                           echo "<p>".$ex2."</p>";
                           } ?>
                     </div>
                  </div>
                  <div class="media">
                     <i class="far fa-envelope"></i>
                     <div class="media-body">
                        <h5>EMAIL ADDRESS</h5>
                       <?php 
                           $num = explode("\n",$call->email);
                           foreach($num as $ex2){
                           echo "<p>".$ex2."</p>";
                           } ?>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container End -->
         </div>
      </div>
      <!-- CONTACT-SECTION END -->
