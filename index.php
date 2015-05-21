<?php include("incl/header.php"); ?>
		<section id="calendar">
			<h2>Kalender</h2>
			<div id="calendar-container">
				<div class="date-text">
					<h3>Emmaboda - En dag på strippen</h3>
					<p>2015 - Juni - 13</p>
				</div>

				<div class="date-text">
					<h3>Emmaboda - En dag på strippen</h3>
					<p>2015 - Juni - 13</p>
				</div>

				<div class="date-text">
					<h3>Emmaboda - En dag på strippen</h3>
					<p>2015 - Juni - 13</p>
				</div>
			</div>
		</section>
		<section id="gallery">
				<h2>Galleri</h2>
				<nav>
					<button data-filter="*" class="active">Alla</button>
					<button data-filter="2015" class="">2015</button>
					<button data-filter="2014" class="">2014</button>
					<button data-filter="2013" class="">2013</button>
				</nav>
				<div id="gallery-container">
					<?php while($row = mysql_fetch_array($result)) { ?>
						<?php $randomIndex = array(); ?>
						<?php foreach (explode(',', $row['galleryImages']) as $imgUrl){
								array_push($randomIndex, $imgUrl);
								$test = count($randomIndex);
							} ?>
							<?php $i = mt_rand(0, $test-1); ?>
						<div class="item <?php echo $row['year']; ?> gallery-active">
					    <a href="viewgallery.php?=<?php echo $row['year']; echo $row['location']; ?>"><img src="<?php print_r($randomIndex[$i]); ?>"></a>
					    </div>
					<?php } ?>
				</div>
		</section>


		<section id="members">
			<h2>Medlemmar</h2>
			<div id="member-container">
				<div class="member-card">
					<div class="front">
						<div class="cover">
							<img src="img/card1.png">
						</div>
						<div class="user">
							<img class="img-circle" src="img/rotating_card_profile.png">
						</div>
						<div class="content">
							<div class="main">
								<h3>Jim Andersson</h3>
								<p class="profession">Bil Mekaniker</p>
								<h5><i class="fa fa-map-marker fa-fw"></i> Tingsryd, Sverige</h5>
								<h5><i class="fa fa-building-o fa-fw"></i> Carlqvist Bil AB</h5>
								<h5><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:jimandersson@totalextas.se">jimandersson@totalextas.se</a></h5>
							</div>
							<div class="footer">
								<button onclick="rotateCard(this)"><i class="fa fa-mail-forward"></i> Vänd</button>
							</div>
						</div>
					</div>
					<div class="back">
						<div class="header">
							<h5>"To be or not to be, this is my awesome motto!"</h5>
						</div>
						<div class="content">
							<div class="main">
								<h4>Experience</h4>
								<p>Mike was working with our team since 2012.</p>
								<h4>Areas of Expertise</h4>
								<p>Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>
							</div>
						</div>
						<div class="footer">
							<button rel="tooltip" title onclick="rotateCard(this)" title="Vänd">
								<i class="fa fa-reply"></i> Back
							</button>
							<div class="social-links">
								<a href=""><i class="fa fa-facebook fa-fw"></i></a>
								<a href=""><i class="fa fa-twitter fa-fw"></i></a>
								<a href=""><i class="fa fa-instagram fa-fw"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include("incl/footer.php"); ?>
