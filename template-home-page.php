<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<section id="BLOCK1">

	<main id="hero-block-mfw-001" class="d-flex align-items-end">
		<style type="text/css">
			#hero-block-mfw-001 {
				background: url("/wp-content/uploads/2018/02/hero-1920x1200.jpg") no-repeat center center fixed;

				  -webkit-background-size: cover;

				  -moz-background-size: cover;

				  -o-background-size: cover;

				  background-size: cover;				
			}
		</style>

		<section class="container">
			<div class="col-sm-10 col-md-7 co-lg-7">
				<div class="item">
					<article class="hero-info-box">
						<div class="card">
							<!-- <img class="card-img-top" data-src="holder.js/100%x180/" alt="Card image cap"> -->
							<div class="card-block">
								<h5 class="card-title pl-4">The Best Resort</h5>
								<article class="card-content pl-4 pt-5">
									<h1 class="card-text text-white">La Casa of Mason Creek</h1>
									<p class="text-white pr-2">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									</p>
									<a href="#" class="btn btn-secondary btn-lg mb-2 px-4">Find Out More</a>
								</article>
							</div>
						</div>
					</article>
				</div>
			</div>
		</section>

	</main>
	
</section>


<section id="BLOCK2">

	<main id="hero-story-block-mfw-001" class="d-flex align-items-center">
		<section class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-10 offset-md-2 col-lg-11 offset-lg-1 col-xl-11 offset-xl-1">
					<article class="block-content p-5">
						<h1 class="block-title">We make it happen</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>

						<div class="row">
							<div class="col-sm-6">
								<img class="img-fluid" src="/wp-content/uploads/2018/02/hero-story-icon-left.png" alt="">
								<h2 class="block-subtitle text-capitalize">Experience</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. 
								</p>
							</div>
							<div class="col-sm-6">
								<img class="img-fluid" src="/wp-content/uploads/2018/02/hero-story-icon-right.png" alt="">
								<h2 class="block-subtitle text-capitalize">Our Offer</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. 
								</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</section>
	</main>
	
</section>


<section id="BLOCK3">

	<main id="info-block-mfw-001">

		<section class="container">

			<article class="block-content">
				
				<h1 class="block-title">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit
				</h1>

				<div class="row">
					<div class="col-sm-4">
						<article class="left-content">
							<ul class="list-unstyled mt-5">
								<li class="row">
									<div class="col-2">
										<i class="fa fa-adjust"></i>	
									</div>
									<div class="col-10">
										Mauris rhoncus orci in imperdiet placerat. Vestibulum euismod nisl.
									</div>
								</li>
								<li class="row">
									<div class="col-2">
										<i class="fa fa-adjust"></i>	
									</div>
									<div class="col-10">
										Mauris rhoncus orci in imperdiet placerat. Vestibulum euismod nisl.
									</div>
								</li>
								<li class="row">
									<div class="col-2">
										<i class="fa fa-adjust"></i>	
									</div>
									<div class="col-10">
										Mauris rhoncus orci in imperdiet placerat. Vestibulum euismod nisl.
									</div>
								</li>
							</ul>							
						</article>
					</div>
					<div class="col-sm-8">
						<article class="right-content p-2">

							<img class="img-fluid rounded-circle" src="/wp-content/uploads/2018/02/info-block-map.jpg">
												
						</article>
					</div>

				</div>
			</article>
			
		</section>

	</main>
	
</section>


<section id="BLOCK4">

	<main id="slider-block-mfw-001" class="d-flex align-items-center">

		<section class="container-fluid">

			<article class="slider-holder">
				
			  <div class="home-slider">
			    <!-- <div><img src="http://via.placeholder.com/450x450"></div> -->
			    <div><img src="/wp-content/uploads/2018/02/slider-6.jpg"></div>
			    <div><img src="/wp-content/uploads/2018/02/slider-2.jpg"></div>
			    <div><img src="/wp-content/uploads/2018/02/slider-3.jpg"></div>
			    <div><img src="/wp-content/uploads/2018/02/slider-1.jpg"></div>
			    <div><img src="/wp-content/uploads/2018/02/slider-5.jpg"></div>
			    <div><img src="/wp-content/uploads/2018/02/slider-4.jpg"></div>
			    
			    <!-- <div><img src="http://via.placeholder.com/450x450"></div> -->
			  </div>

			</article>
			
		</section>
		


	</main>	
	
</section>

<?php
get_footer();
























