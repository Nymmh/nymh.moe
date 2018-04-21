<?php
	require('php/usersession.php');
	require('php/head.php');
	require('php/mainnavEdit.php');
	require('php/extrabackground.php');
?>
<!doctype html>
	<form action="magnet.php" method="post" id="form" class="bs-component">
		<div class="form-group">
			<div class="flex-center">
				<input type="text" class="form-control shitdrop magnetInput" id="magnetlink" name="search" placeholder="magnet:?xt=urn:" required>
				<input type="submit" class="btn btn-default shitdrop" id="show" name="button" value="Search" onClick="showDiv()">
			</div>
		</div>
	</form>
<?php 
	$search = $_POST["search"];
?>
<style>
	.sizebuttonflex{
		display: flex;
	}
</style>
	<div id="downloadbutton" class="flex-center sizebuttonflex">
		<a id="button" href="<?php echo $search ?>" class="downloaddrop btn btn-default">Download</a>
	</div>
<?php
	require('php/dropdownscript.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>