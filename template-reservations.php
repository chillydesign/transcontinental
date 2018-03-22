<?php /* Template Name: Reservations Template */ get_header(); ?>

	<?php if ( has_post_thumbnail()) :  ?>
	<div class="page_image" style="background-image:url('<?php echo the_post_thumbnail_url(); ?>')"></div>
	<?php else: ?>
		<div id="featured_slide"><?php  get_template_part('slides'); ?></div>
	<?php endif; ?>


<div class="page_title">
	<h1 class="container"><?php the_title(); ?></h1>
</div>



<div class="container" >
	<div class="row">

		<!-- section -->
		<section id="main_col" class="col-sm-12">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>



				<!-- article -->
				<article id="main_article" <?php post_class(); ?>>



						<?php the_content(); ?>


					<ul class="iframe_links row">

					<li class="col-sm-6 col-lg-3 offre_iframe">	<a target="_blank" href="https://www.kendros.com/fr/web2web.aspx?W2W=7531103"  data-url="https://www.kendros.com/fr/web2web.aspx?W2W=7531103">
							<h4>Rechercher une offre</h4>
							<p>Vous pouvez réserver votre vol en ligne 24h/24.</p>
						</a></li>


						<!-- <li class="col-sm-6 col-lg-3 vol_iframe"><a class="iframe_link" href="#" data-url="http://flight1.onlinetravel.ch/flightmoregif/fastbooking/tco/reservations.html"> -->
						<li class="col-sm-6 col-lg-3 vol_iframe"><a class="iframe_link" href="#placetoslide" data-url="https://aqtion1.airquest.com/aq4/jsp/c/amadeus2/Aqtionbooker.jsp;jsessionid=6D82C06EF35A072C362E7EB9F5A564EB?j_username=transcontinental.ch&j_password=transcontinental.ch&&&termid=transcontinental.ch">
							<h4>Réserver un vol</h4>
							<p>Entrez vos dates, vos critères et toutes les offres spéciales disponibles vous seront proposées.</p>
						</a></li>

						<!-- <li class="col-sm-6 col-lg-3 hotel_iframe"><a class="iframe_link" href="#placetoslide"  data-message="Cette application est actuellement en cours de modernisation, une mise en ligne est prévue tout prochainement."  data-url-old="http://www.hotelpronto.com/Search.aspx?affiliateid=9924&amp;width=200&amp;height=300&amp;language=fr"> -->
						<li class="col-sm-6 col-lg-3 hotel_iframe"><a target="_blank" href="http://www.hotelpronto.com/?affiliateid=30614"  data-url="www.hotelpronto.com/?affiliateid=30614">
							<h4>Rechercher un hotel</h4>
							<p></p>
						</a></li>

						<li class="col-sm-6 col-lg-3 voiture_iframe"><a class="iframe_link" href="#placetoslide" data-url="https://partner.sunnycars.ch/ak/452593">

					<!-- http://switzerland.holidayautos.com/cgi-bin/liveweb.sh/QSearch.w?ctryref=SWZ&lang=SFR&aff=849sfr -->
							<h4>Réserver une voiture</h4>
							<p>En quelques clics votre voiture de location sera confirmée.</p>
						</a></li>
					</ul>
					<div id="placetoslide"></div>

					<iframe id="page_iframe" style="height:700px" src=""></iframe>

					<p id="message_to_show"></p>

								<hr>
			<br>

			<h3>Contactez-nous</h3>


			<div class="row">
				<div class="col-sm-4">
					<p>
						TRANSCONTINENTAL Florissant<br>
						66, route de Florissant<br>
						CH – 1206 Genève<br>
						T +41 22 347 27 27<br>
						<a href="mailto:info@transcontinental.ch">info@transcontinental.ch</a>
					</p>
				</div>
				<div class="col-sm-4">
					<p>
						TRANSCONTINENTAL Chêne-Bourg<br>
						48, rue de Genève<br>
						CH – 1225 Chêne-Bourg<br>
						T +41 22 869 18 18<br>
						<a href="mailto:chene@transcontinental.ch">chene@transcontinental.ch</a>
					</p>
				</div>
			</div>
			<p>Votre équipe Transcontinental</p>


					<br class="clear">

					<?php edit_post_link(); ?>





				</article>
				<!-- /article -->

			<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</section>
	<!-- /section -->


	<?php //get_sidebar(); ?>
	<?php // get_template_part('sidebar_right'); ?>


</div> <!-- END OF ROW -->
</div> <!-- END OF CONTAINER -->




<?php get_footer(); ?>
