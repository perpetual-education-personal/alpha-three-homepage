<!-- Loops through each student -->

<?php foreach ($students as $student) { ?>
		
	<div class="student <?=$student["name"]?> <?=$student["color"]?>">

		<picture>

			<img src="<?=$student["picture"]?>">

		</picture>

	  <h2><?=$student["name"]?></h2>

	  <p><?=$student["description"]?></p>

	 	<a href=<?=$student["site"]?>><?=$student["link"]?></a>

	</div>


<?php } ?>