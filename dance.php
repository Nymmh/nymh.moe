<?php
	require('php/usersession.php');
	require('php/head.php');
	require('php/mainnavEdit.php');
	require('php/dropdownscript.php');
?>
<link rel="stylesheet" type="text/css" href="css/dance.css">
	<img src="assets/dance/dance1.gif" id="myButton" class="center">
	<script>
		var images = [
			'assets/dance/dance2.gif',
			'assets/dance/dance3.gif',
			'assets/dance/dance1.gif'
		],
			i =1;
		   for (var j=images.length; j--;) {
                var img = new Image();
                img.src = images[j];
            }
            document.getElementById('myButton').addEventListener('click', function() {
                this.src = images[i >= images.length - 1 ? i = 0 : ++i];
            }, false);
	</script>
</html>