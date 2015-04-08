<?php include("incl/header.php"); ?>




		<section id="gallery">
				<h2>Galleri</h2>
				<nav>
					<button data-filter="*" class="active">Alla</button>
					<button data-filter=".2015" class="">2015</button>
					<button data-filter=".2014" class="">2014</button>
					<button data-filter=".2013" class="">2013</button>
				</nav>
				<div id="gallery-container">
					<div data-filter="hej"class="item 2014">
						<img src="img/gallery/1.jpg">
					</div>
					<div class="item 2013">
						<img src="img/gallery/2.jpg">
					</div>
					<div class="item 2015">
						<img src="img/gallery/3.jpg">
					</div>
					<div class="item 2014">
						<img src="img/gallery/4.jpg">
					</div>
				</div>
		</section>


		<section class="divider"></section>

		<?php include("incl/footer.php"); ?>
