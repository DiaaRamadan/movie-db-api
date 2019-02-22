<?php
session_start();
$pagename = 'Most popular';
include 'header.php';
include 'nav.php';
include 'call.php';
?>
<h1 class="text-center">Most popular</h1>
<div class="container">
	<div class="row">
		<?php 
			$url = 'https://api.themoviedb.org/3/movie/popular?api_key=37ef0f35df83c6eb8ed109a42fc6d7a3';
			$array = callApi($url,'GET');
			foreach ($array as $a ){
				if(is_array($a)){
    				foreach ($a as $aa ){
    					echo "<div class = 'col col-lg-4'>";
    						echo "<div class='info col-lg-10'>";
    							echo '<img class = "img-thumbnail img-responsive img-rounded" src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/'.$aa['poster_path'].'"><br>';
    							echo "<div class='caption'>";
        							echo '<p> Title: '.$aa['title'].'</p><br>';
        							echo '<p>Rate: '.$aa['vote_average'].'</p><br>';
        							echo '<p>Popularity: '.$aa['popularity'].'</p><br>';
        							echo '<p class="pull-right">Votes: '.$aa['vote_count'].'</p><br>';
        						echo "</div>";
        						echo "</div>";
        						?>
        						<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
								<input type="text" name="value" placeholder="Rate Value" required="required">
								<input type="text" name="session_id" hidden="hidden" value="<?php echo $_SESSION['G_session']?>">
								<input type="submit" value="login">
							</form>
        						<?php
        					echo "</div>";
    				}
				}
			}
		?>
	</div>
</div>
<?php
include 'footer.php';
?>