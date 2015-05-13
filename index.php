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
				<div class="member">
					<div class="member-image"><img src="img/2.jpg" alt="Jim Andersson"></div>
					<h3>Jim Andersson</h3>
					<h4>BMW E30 Turbo</h4>
					<p>Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin. Lorem ipsum har varit standard ända sedan 1500-talet, när en okänd boksättare tog att antal bokstäver och blandade dem för att göra ett provexemplar av en bok</p>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-car"></i></a>
				</div>
				<div class="member">
					<div class="member-image"><img src="img/3.jpg" alt="Viktor Fransson"></div>
					<h3>Viktor Fransson</h3>
					<h4>BMW E30 Turbo</h4>
					<p>"Jag lever för driftingen"
					<br><br>
					"Jag lever för driftingen"
					<br><br>
					"Jag lever för driftingen"
					<br><br>
					"Jag lever för driftingen"
					<br><br>
					"Jag lever för driftingen"
					</p>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-car"></i></a>
				</div>
				<div class="member">
					<div class="member-image"><img src="img/4.jpg" alt="Joakim Gustafsson"></div>
					<h3>Joakim Gustafsson</h3>
					<h4>BMW E30 Turbo</h4>
					<p>Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin. Lorem ipsum har varit standard ända sedan 1500-talet, när en okänd boksättare tog att antal bokstäver och blandade dem för att göra ett provexemplar av en bok</p>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-car"></i></a>
				</div>
				<div class="member">
					<div class="member-image"><img src="img/5.jpg" alt="Johan Ingvaldsson"></div>
					<h3>Johan Ingvaldsson</h3>
					<h4>BMW E30 Turbo</h4>
					<p>Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin. Lorem ipsum har varit standard ända sedan 1500-talet, när en okänd boksättare tog att antal bokstäver och blandade dem för att göra ett provexemplar av en bok</p>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-car"></i></a>
				</div>
			</div>
		</section>

		<?php include("incl/footer.php"); ?>
