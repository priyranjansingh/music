<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>
<!-- Banner Start -->
<section class="px-banner">
    <div class="banner-holder">
        <div class="flexslider px-loading">
            <div class="loader"><img src="<?php echo $baseUrl; ?>/assets/images/squares.gif" alt="" /></div>
            <ul class="slides">
                <li><img src="<?php echo $baseUrl; ?>/assets/extra-images/slider-img-1.jpg" alt="" />
                    <div class="banner-mask"><img src="<?php echo $baseUrl; ?>/assets/images/slider-border.png" alt="" /></div>
                    <div class="caption">
                        <h2>Wow Awards<br/>
                            VIP Upgrades for South America!</h2>
                        <p>The start of the GNR South American run is only days away. Do you have your tickets yet?? If you do, don't miss your chance to NOW upgrade your experience to VIP! Upgrades are now available for purchase! </p>
                        <a href="#" class="px-readmore">Read more</a> </div>
                </li>
                <li><img src="<?php echo $baseUrl; ?>/assets/extra-images/slider-img-1.jpg" alt="" />
                    <div class="banner-mask"><img src="<?php echo $baseUrl; ?>/assets/images/slider-border.png" alt="" /></div>
                    <div class="caption">
                        <h2>Wow Awards<br/>
                            VIP Upgrades for South America!</h2>
                        <p>The start of the GNR South American run is only days away. Do you have your tickets yet?? If you do, don't miss your chance to NOW upgrade your experience to VIP! Upgrades are now available for purchase! </p>
                        <a href="#" class="px-readmore">Read more</a> </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Banner End --> 
<!-- Main Start -->
<div id="main">
    <section>
        <div class="container">
            <div class="row">
                <section class="px-biography">
                    <article class="col-md-6">
                        <div class="px-text">
                            <div class="main-heading">
                                <h2>Biography</h2>
                            </div>
                            <h3>The start of the GNR South American run is only days away. Do you have your tickets yet??</h3>
                            <p>Snow Patrol's new album, Fallen Empires, arrives with a serious reputation attached. The Irish/Scottish five piece have sold over 11 million albums and have been responsible for several era-defining singles, including Run, Chocolate, and Chasing Cars (which spent an incredible 104 weeks in the UK Top 75 and was voted song of the decade in a Channel 4 poll). Their albums have been nominated for the Mercury Music Prize.</p>
                            <p>Grammys and MTV Europe Music Awards, with Final Straw landing them an Ivor Novello Award in 2005. By anyone's standards, it's been a pretty good century</p>
                            <a href="#" class="px-botton">Read more</a> <a href="#" class="px-botton">Discography</a> </div>
                    </article>
                    <article class="col-md-6">
                        <figure><img src="<?php echo $baseUrl; ?>/assets/extra-images/biograohy-img.jpg" alt="" /></figure>
                    </article>
                </section>
            </div>
        </div>
    </section>

    <section class="album-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading">
                        <h2>Latest Albums</h2>
                        <p>Snow Patrol's new album, Fallen Empires, arrives with a serious reputation attached. The Irish/Scottish five piece have sold over.</p>
                    </div>
                </div>
                <div class="px-portfolio grid portfolio-items">

                    <?php
                    foreach ($albums as $album) {
                        ?>   
                        <article class="col-md-4 portfolio-item jquery">
                            <figure> 
                                <?php if(!empty($album->album_image)){ ?>
                                <img height="340" width="340" src="<?php echo base_url(); ?>/assets/albums/<?php echo $album->album_image; ?>" alt="#">
                                <?php  }else 
                                {
                                ?>
                                <img height="340" width="340" src="<?php echo base_url(); ?>/assets/albums/no_album_img.jpg" alt="#">
                                <?php
                                }
                               ?>
                                <figcaption>
                                    <div class="px-bottom"> <a href="#"><i class="icon-cart5"></i></a> <a href="#" class="right"><i class="icon-arrow-down6"></i></a> </div>
                                </figcaption>
                            </figure>
                            <div class="text"> <span>Rock Music</span>
                                <h5><a href="#"><?php echo $album->album_name; ?></a></h5>
                                <a href="#" class="tracks-btn"><?php echo count($album->tracks) ?> tracks</a> <a href="#" class="px-cart"><i class="icon-cart5"></i>Buy Album</a> </div>
                        </article>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>




    <section>
        <div class="container">
            <div class="row">
                <section class="px-fancy-heading text-center">
                    <div class="col-md-12">
                        <div class="px-spreater">
                            <div class="box-spreater"><i class="icon-camera5"></i></div>
                        </div>
                        <h2>Performences Gallery</h2>
                        <p>Snow Patrol's new album, Fallen Empires, arrives with a serious reputation attached. The Irish/Scottish five piece have sold over.</p>
                    </div>
                </section>
            </div>
        </div>
    </section>	
    <section class="px-grally fancy-grally">
        <div class="col-md-12">
            <div class="row">
                <article class="col-md-2">
                    <figure class="effect-selena"><img src="<?php echo $baseUrl; ?>/assets/extra-images/grall-img-1.jpg" alt=""/>
                        <figcaption>
                            <div class="px-text">
                                <i class="icon-camera5"></i>
                                <a href="#">8Photos</a>
                                <span>Amazing Music Concert <em>in Dubai</em></span>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-md-2">
                    <figure class="effect-selena"><img src="<?php echo $baseUrl; ?>/assets/extra-images/grall-img-2.jpg" alt=""/>
                        <figcaption>
                            <div class="px-text">
                                <i class="icon-camera5"></i>
                                <a href="#">8Photos</a>
                                <span>Amazing Music Concert <em>in Dubai</em></span>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-md-2">
                    <figure class="effect-selena"><img src="<?php echo $baseUrl; ?>/assets/extra-images/grall-img-3.jpg" alt=""/>
                        <figcaption>
                            <div class="px-text">
                                <i class="icon-camera5"></i>
                                <a href="#">8Photos</a>
                                <span>Amazing Music Concert <em>in Dubai</em></span>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-md-2">
                    <figure class="effect-selena"><img src="<?php echo $baseUrl; ?>/assets/extra-images/grall-img-4.jpg" alt=""/>
                        <figcaption>
                            <div class="px-text">
                                <i class="icon-camera5"></i>
                                <a href="#">8Photos</a>
                                <span>Amazing Music Concert <em>in Dubai</em></span>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-md-2">
                    <figure class="effect-selena"><img src="<?php echo $baseUrl; ?>/assets/extra-images/grall-img-5.jpg" alt=""/>
                        <figcaption>
                            <div class="px-text">
                                <i class="icon-camera5"></i>
                                <a href="#">8Photos</a>
                                <span>Amazing Music Concert <em>in Dubai</em></span>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-md-2">
                    <figure class="effect-selena"><img src="<?php echo $baseUrl; ?>/assets/extra-images/grall-img-6.jpg" alt=""/>
                        <figcaption>
                            <div class="px-text">
                                <i class="icon-camera5"></i>
                                <a href="#">8Photos</a>
                                <span>Amazing Music Concert <em>in Dubai</em></span>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-md-2">
                    <figure class="effect-selena"><img src="<?php echo $baseUrl; ?>/assets/extra-images/grall-img-7.jpg" alt=""/>
                        <figcaption>
                            <div class="px-text">
                                <i class="icon-camera5"></i>
                                <a href="#">8Photos</a>
                                <span>Amazing Music Concert <em>in Dubai</em></span>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-md-2">
                    <figure class="effect-selena"><img src="<?php echo $baseUrl; ?>/assets/extra-images/grall-img-8.jpg" alt=""/>
                        <figcaption>
                            <div class="px-text">
                                <i class="icon-camera5"></i>
                                <a href="#">8Photos</a>
                                <span>Amazing Music Concert <em>in Dubai</em></span>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-md-2">
                    <figure class="effect-selena"><img src="<?php echo $baseUrl; ?>/assets/extra-images/grall-img-9.jpg" alt=""/>
                        <figcaption>
                            <div class="px-text">
                                <i class="icon-camera5"></i>
                                <a href="#">8Photos</a>
                                <span>Amazing Music Concert <em>in Dubai</em></span>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-md-2">
                    <figure class="effect-selena"><img src="<?php echo $baseUrl; ?>/assets/extra-images/grall-img-10.jpg" alt=""/>
                        <figcaption>
                            <div class="px-text">
                                <i class="icon-camera5"></i>
                                <a href="#">8Photos</a>
                                <span>Amazing Music Concert <em>in Dubai</em></span>
                            </div>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </div>
    </section>
    <section class="px-twitter-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="twitter-content">
                            <i class=" icon-twitter6"></i>
                            <ul class="twitter-slider">
                                <li>
                                    <p>4 hours Ago:<a href="#">@mistromney</a> You don't know Jack? How a young scientist transformed cancer discovery <a href="#">http://iq.intel.com/iq/40033957/do-you-know-jack-a-look … #lookinside</a> pic.twitter.com/rrwrpkUPEy</p>
                                </li>
                                <li>
                                    <p>4 hours Ago:<a href="#">@mistromney</a> You don't know Jack? How a young scientist transformed cancer discovery <a href="#">http://iq.intel.com/iq/40033957/do-you-know-jack-a-look … #lookinside</a> pic.twitter.com/rrwrpkUPEy</p>
                                </li>
                                <li>
                                    <p>4 hours Ago:<a href="#">@mistromney</a> You don't know Jack? How a young scientist transformed cancer discovery <a href="#">http://iq.intel.com/iq/40033957/do-you-know-jack-a-look … #lookinside</a> pic.twitter.com/rrwrpkUPEy</p>
                                </li>
                                <li>
                                    <p>4 hours Ago:<a href="#">@mistromney</a> You don't know Jack? How a young scientist transformed cancer discovery <a href="#">http://iq.intel.com/iq/40033957/do-you-know-jack-a-look … #lookinside</a> pic.twitter.com/rrwrpkUPEy</p>
                                </li>
                                <li>
                                    <p>4 hours Ago:<a href="#">@mistromney</a> You don't know Jack? How a young scientist transformed cancer discovery <a href="#">http://iq.intel.com/iq/40033957/do-you-know-jack-a-look … #lookinside</a> pic.twitter.com/rrwrpkUPEy</p>
                                </li>
                                <li>
                                    <p>4 hours Ago:<a href="#">@mistromney</a> You don't know Jack? How a young scientist transformed cancer discovery <a href="#">http://iq.intel.com/iq/40033957/do-you-know-jack-a-look … #lookinside</a> pic.twitter.com/rrwrpkUPEy</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Main End --> 