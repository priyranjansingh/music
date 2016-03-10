<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>
<div style="background:url(<?php echo $baseUrl; ?>/assets/extra-images/subheader1.jpg) no-repeat; min-height:179px;" class="breadcrumb-sec align-left">
  	<div class="container">
		<div class="px-table">
			<div class="px-tablerow">
				<div class="px-pageinfo">
					<h2>Albums</h2>
					<span>Our whole library</span>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li class="active">Albums</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
  </div>
<!-- Main Start -->
<div id="main">
    <section class="album-sec">
        <div class="container">
            <div class="row">
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
            <?php $this->widget('CLinkPager', array(
			    'pages' => $albums->pagination,
			)); ?>
        </div>
    </section>
</div>
<!-- Main End --> 