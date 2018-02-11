<?php
	require('php/head.php');
	require('php/mainnav.php');
	require('php/background.php');
	require('php/dropdownscript.php');
	require('php/AniDBdatabase.php');
	require('php/anidbstuff.php');
?>
<style>
	.flex-center{
		display: flex;
		justify-content: center;
	}
	.magnetInput{
		max-width: 25%;
		border-radius: 25px;
		margin-right: 1.5rem;
	}
</style>
<div class="flex-center">
<input type="text" id="anidbinput" onkeyup="search()" placeholder="Search the db" class="form-control magnetInput">
</div>
<div class="tablemax">
	<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-12">
		<div class="bs-component">
			<table class="table table-striped table-hover tablesorter" id="anidbsearch">
				<thead>
					<tr class="success">
						<th id="title">Title</th>
						<th id="quality">Quality</th>
						<th id="length">Length</th>
						<th id="encoded">Hard Encoded</th>
						<th id="audio">Dual Audio</th>
						<th id="airing">Currently Airing</th>
						<th id="redownload">Plan to Redownload</th>
						<th id="from">From</th>
					</tr>
				</thead>
				<tbody>
				<?php
					require('php/anidbtable.php');
				?>
				</tbody>
			</table>
		</div>
	</div>
	</div>
</div>
</div>
</body>
</html>