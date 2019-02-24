<?php
session_start();
$pagename = 'Most popular';
include 'header.php';
include 'call.php';
?>

<div id="main">
	<div id="content">
        <div class="box row">
            <div class="head">
            <h1 class="text-center">Upcomming</h1>
            <p class="text-right"></p>
         </div>
		<?php 
		   $url = 'https://api.themoviedb.org/3/movie/upcoming?api_key=37ef0f35df83c6eb8ed109a42fc6d7a3';
			$array = callApi($url,'GET');
			foreach ($array as $a ){
				if(is_array($a)){
    				foreach ($a as $aa ){
    					if(is_array($aa)){
                            $Vurl = 'https://api.themoviedb.org/3/movie/'.$aa['id'].'/videos?api_key=37ef0f35df83c6eb8ed109a42fc6d7a3&language=en-US';
                                    $videos = callApi($Vurl, 'GET');
                                    $key='';
                                    foreach ($videos as $video) {
                                        if(is_array($video)){
                                        foreach ($video as $v ){
                                            if(is_array($v)){
                                                $key=$v['key']; 

                                            }
                                        }
                                        }

                                    }

                            ?>
                                <div class="movie last col col-lg-2 ">
                                <div class="movie-image"><a href="youtube.php?videoKey=<?php echo $key; ?> "class="play"><span class=""><span class="name"><?php echo $aa['title']?></span></span></a><?php echo '<img class = "img-responsive img-rounded" src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/'.$aa['poster_path'].'">';?></div>
                                      <div class="rating">
                                        <p>RATING: </p>
                                        <div class="stars">
                                          <div class="stars-in"> <?php echo $aa['vote_average'];?></div>
                                        </div>

                                        <span class="comments"><?php echo $aa['vote_count']?></span> </div>

                                        <div class="Moptions">
                                          <a href="rate.php?id=<?php echo $aa['id'] ?>" class=""> rating movie</a>
                                          <form target="_blank" method="DELETE" action="https://api.themoviedb.org/3/movie/<?php echo $aa['id'] ?>/rating?api_key=37ef0f35df83c6eb8ed109a42fc6d7a3&guest_session_id=<?php echo $_SESSION['G_session']?>">
                                          	<input type="submit" value="Delete rate">
                                          </form>
                                        </div>
        							</div>
                                    <div class="cl">&nbsp;</div>
                            <?php
        				}
    				}
				}
			}
		?>
           </div> 
	</div>
</div>
<?php
include 'footer.php';