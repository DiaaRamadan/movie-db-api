	<?php 
		session_start();
	 ?>
	<form target="_blank"  method="POST" action="https://api.themoviedb.org/3/movie/<?php echo $_GET['id']?>/rating?api_key=37ef0f35df83c6eb8ed109a42fc6d7a3&guest_session_id=<?php echo $_SESSION['G_session']?>">
 <input type="text" name="value" placeholder="Value">
<input onclick="window.location.href = 'https://website.com/my-account';" type="submit"  value="Rate">
</form>

