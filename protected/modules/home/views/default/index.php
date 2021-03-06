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
                </li>
                <li><img src="<?php echo $baseUrl; ?>/assets/extra-images/slider-img-1.jpg" alt="" />
                    <div class="banner-mask"><img src="<?php echo $baseUrl; ?>/assets/images/slider-border.png" alt="" /></div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Banner End --> 
<!-- Main Start -->
<div id="main">
    <section class="album-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading">
                        <h2>Latest Albums</h2>
                        <p>Recent 20 Albums from our library</p>
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
                                    <div class="px-bottom"> <a href="#" title="Click to see all tracks"><i class="icon-search6"></i></a> <a href="#" class="right" title="Click to download all tracks"><i class="icon-arrow-down6"></i></a> </div>
                                </figcaption>
                            </figure>
                            <div class="text"> 
                                <h5><a href="#"><?php echo $album->album_name; ?></a></h5>
                                <a href="#" class="tracks-btn"><?php echo count($album->tracks) ?> tracks</a>
                                <a href="#" class="px-cart"><i class="icon-download5"></i>Download</a>
                            </div>
                        </article>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Main End --> 