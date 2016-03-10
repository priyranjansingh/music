<section>
	<div class="albumbanner">
      <section class="px-player">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
            	<figure>
                	<img height="331" width="331" src="<?php echo base_url(); ?>/assets/albums/<?php echo $album->album_image; ?>" alt=""/>
                </figure>
            </div>
            <div class="col-md-8">
				<div class="text">
					<a href="#" class="tracks-btn"><?php echo count($album->tracks); ?> tracks</a>
					<h2><?php echo $album->album_name; ?></h2>
					<ul class="post-options">
						<li>
							<i class="icon-folder-open-o"></i>
							Gener: 
							<a href="#">Rock,</a>
							<a href="#">POP,</a>
							<a href="#">Night,</a>
							<a href="#">Remix</a>
						</li>
					</ul>
				</div>
              	<div id="jquery_jplayer_1" class="jp-jplayer"></div>
              	<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                <div class="jp-type-playlist">
                  <div class="jp-gui jp-interface">
                    <div class="jp-controls">
                      <button class="jp-previous" tabindex="0">previous</button>
                      <button class="jp-play" tabindex="0">play</button>
                      <button class="jp-next" tabindex="0">next</button>
                    </div>
                    <div class="jp-progress">
                      <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                      </div>
                    </div>
                    <div class="jp-volume-controls">
                      <button class="jp-mute" role="button" tabindex="0">mute</button>
                      <div class="jp-volume-bar">
                        <div class="jp-volume-bar-value"></div>
                      </div>
                    </div>
                  </div>
                  <div class="jp-playlist no2">
                    <ul>
                      <li>&nbsp;</li>
                    </ul>
                  </div>
                  <div class="jp-no-solution"> <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div>
                </div>
              </div>
			</div>
          </div>
        </div>
      </section>
    </div>
  </section> 
  <!-- Main Start -->
  <script type="text/javascript">
  	var song_list = <?php echo $song_list; ?>;
  </script>