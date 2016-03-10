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
                    <?php $this->widget('zii.widgets.CListView', array(
                        'dataProvider'=>$albums,
                        'itemView'=>'_albums',
                    )); ?>
                </div>
            </div>
            <?php $this->widget('CLinkPager', array(
			    'pages' => $albums->pagination,
			)); ?>
        </div>
    </section>
</div>
<!-- Main End --> 