<?php include("incl/header.php"); ?>
		<section id="gallery">
				<h2>Galleri</h2>
				<nav>
					<button data-filter="*" class="active">Alla</button>
					<button data-filter="2015" class="">2015</button>
					<button data-filter="2014" class="">2014</button>
					<button data-filter="2013" class="">2013</button>
				</nav>
				<div id="gallery-container">
					<div class="item 2014 gallery-active">
						<a href=""><img src="img/gallery/1.jpg"></a>
					</div>
					<div class="item 2013 gallery-active">
						<a href=""><img src="img/gallery/2.jpg"></a>
					</div>
					<div class="item 2015 gallery-active">
						<a href=""><img src="img/gallery/3.jpg"></a>
					</div>
					<div class="item 2014 gallery-active">
						<a href=""><img src="img/gallery/4.jpg"></a>
					</div>
				</div>
		</section>


		<section id="members">
			<h2>Medlemmar</h2>
			<div id="member-container">
				<div class="member"></div>
				<div class="member"></div>
				<div class="member"></div>
				<div class="member"></div>
			</div>
		</section>

		<?php include("incl/footer.php"); ?>
