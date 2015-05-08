		<?php include("incl/header.php"); ?>
		<?php
			while($row = mysql_fetch_array($result)) {
				foreach (explode(',', $row['galleryImages']) as $imgUrl){
					print '<img style="width:20%;" src="'.$imgUrl.'">';
				}
			}
		?>
		<?php include("incl/footer.php"); ?>
