<article class="col-md-4 portfolio-item jquery">
	<figure> 
	    <?php if(!empty($data->album_image)){ ?>
	    <img height="340" width="340" src="<?php echo base_url(); ?>/assets/albums/<?php echo CHtml::encode($data->album_image); ?>" alt="#">
	    <?php  } else  { ?>
	    <img height="340" width="340" src="<?php echo base_url(); ?>/assets/albums/no_album_img.jpg" alt="#">
	    <?php
	    }
	   ?>
	    <figcaption>
	        <div class="px-bottom"> <a href="<?php echo base_url().'/albums/detail?album='.CHtml::encode($data->id); ?>" title="Click to see all tracks"><i class="icon-search6"></i></a> <a href="#" class="right" title="Click to download all tracks"><i class="icon-arrow-down6"></i></a> </div>
	    </figcaption>
	</figure>
	<div class="text"> 
	    <h5><a href="<?php echo base_url().'/albums/detail?album='.CHtml::encode($data->id); ?>"><?php echo CHtml::encode($data->album_name); ?></a></h5>
	    <a href="#" class="tracks-btn"><?php echo count($data->tracks) ?> tracks</a>
	    <a href="#" class="px-cart"><i class="icon-download5"></i>Download</a>
	</div>
</article>