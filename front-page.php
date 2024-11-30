<?php
/***
 * Template for showing the front page of the website
 */
get_header();
?>
		<?php if (get_theme_mod('slider_enable', true)) : ?>
    <section class="slider-one">
        <div class="thm-owl__carousel owl-carousel owl-theme" data-owl-options='{
            "loop": true,
            "autoplay": true,
            "autoplayTimeOut": 7000,
            "items": 1,
            "margin": 0,
            "animateIn": "fadeIn",
            "animateOut": "slideOutDown",
            "nav": true,
            "dots": true,
            "navText": ["<span class=\"paroti-icon-left-arrow\"></span>","<span class=\"paroti-icon-right-arrow\"></span>"]
        }'>
            <?php for ($i = 1; $i <= 3; $i++) : 
                $slider_image = get_theme_mod("slider_image_$i"); 
                $slider_title = get_theme_mod("slider_title_$i", __("Default Title $i", 'rehab'));
                $slider_subtitle = get_theme_mod("slider_subtitle_$i", __("Default Subtitle $i", 'rehab'));
                $slider_button_text = get_theme_mod("slider_button_text_$i", __("Discover More", 'rehab'));
                $slider_button_link = get_theme_mod("slider_button_link_$i", '#');
                if ($slider_image) : ?>
                    <div class="item">
                        <div class="slider-one__item">
                            <div class="slider-one__image" style="background-image: url(<?php echo esc_url($slider_image); ?>);"></div>
                            <div class="container">
                                <h2 class="slider-one__title"><?php echo esc_html($slider_title); ?></h2>
                                <p class="slider-one__text"><?php echo esc_html($slider_subtitle); ?></p>
                                <div class="slider-one__btns">
                                    <a href="<?php echo esc_url($slider_button_link); ?>" class="thm-btn slider-one__btn">
                                        <span><?php echo esc_html($slider_button_text); ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; 
            endfor; ?>
        </div>
    </section>
<?php endif; ?>




		<section class="sec-pad-top sec-pad-bottom about-two">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/shapes/about-2-1.png" class="about-two__shape-1 float-bob-x" alt="">
			<div class="container">
				<div class="row gutter-y-60">
					<div class="col-md-12 col-lg-6">
						<div class="about-two__image">
							<div class="about-two__image__shape-1"></div><!-- /.about-two__image__shape-1 -->
							<div class="about-two__image__shape-2"></div><!-- /.about-two__image__shape-2 -->
							<div class="about-two__image__shape-3"></div><!-- /.about-two__image__shape-3 -->
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/about-2-1.png" class="wow fadeInLeft"
								data-wow-duration="1500ms" alt="">
							<div class="about-two__image__caption">
								<h3 class="about-two__image__caption__count count-box">
									<span class="count-text" data-stop="30" data-speed="1500"></span>+
								</h3><!-- /.about-two__image__caption__count count-box -->
								<p class="about-two__image__caption__text">Years of work
									expeirece</p><!-- /.about-two__image__caption__text -->
							</div><!-- /.about-two__image__caption -->
						</div><!-- /.about-two__image -->
					</div><!-- /.col-md-12 col-lg-6 -->
					<div class="col-md-12 col-lg-6">
						<div class="about-two__content">
							<div class="sec-title">
								<p class="sec-title__tagline">Welcome to charity agency</p><!-- /.sec-title__tagline -->
								<h2 class="sec-title__title">Make your goals to help people</h2>
							</div><!-- /.sec-title -->
							<p class="about-two__text">There are many variations of passages of lorem ipsum available,
								but the majority have suffered alteration in some form, by injected humour, or
								randomised words.</p><!-- /.about-two__text -->
							<ul class="list-unstyled about-two__info">
								<li class="about-two__info__item">
									<i class="paroti-icon-sponsor"></i>
									<h3 class="about-two__info__title">Let’s sponsor an
										entire project</h3><!-- /.about-two__info__title -->
								</li>
								<li class="about-two__info__item" style="--accent-color: #8139e7;">
									<i class="paroti-icon-solidarity"></i>
									<h3 class="about-two__info__title">Donate to the
										new cause</h3><!-- /.about-two__info__title -->
								</li>
							</ul><!-- /.list-unstyled -->
							<ul class="list-unstyled about-two__list">
								<li>
									<i class="fa fa-check-circle"></i>
									If you are going to use a passage of you need.
								</li>
								<li>
									<i class="fa fa-check-circle"></i>
									Lorem ipsum available, but the majority have suffered.
								</li>
							</ul><!-- /.list-unstyled -->
							<div class="about-two__btns">
								<a href="about.html" class="thm-btn about-two__btn">
									<span>Discover More</span>
								</a><!-- /.thm-btn about-two__btn -->
							</div><!-- /.about-two__btns -->
						</div><!-- /.about-two__content -->
					</div><!-- /.col-md-12 col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.sec-pad-top -->

		<section class="sec-pad-top sec-pad-bottom donation-two">
			<div class="container">
				<div class="row gutter-y-60">
					<div class="col-md-12 col-lg-4">
						<div class="sec-title">
							<p class="sec-title__tagline">Change everything</p><!-- /.sec-title__tagline -->
							<h2 class="sec-title__title">We’re here to help them</h2>
						</div><!-- /.sec-title -->
						<p class="donation-two__text">Man braid hell of edison bulb four brunch subway
							tile authentic, chillwave put a bird on it church-key try-hard ramps heirloom.</p>
						<!-- /.donation-two__text -->
					</div><!-- /.col-md-12 -->
					<div class="col-md-12 col-lg-6">
						<div class="thm-owl__carousel owl-carousel owl-theme donation-two__carousel" data-owl-options='{
							"items": 1,
							"margin": 0,
							"loop": false,
							"nav": false,
							"dots": false,
							"autoplay": false,
							"responsive": {
								"0": {
									"items": 1
								},
								"576": {
									"items": 2,
									"margin": 30
								}
							}
						}'>
							<div class="item">
								<div class="donation-card-two">
									<div class="donation-card-two__bg"></div><!-- /.donation-card-two__bg -->
									<h3 class="donation-card-two__title"><a href="donation-details.html">Healthy
											food</a></h3><!-- /.donation-card-two__title -->
									<p class="donation-card-two__text">When nothing prevents our to we like best, every
										pleasure to be.</p><!-- /.donation-card-two__text -->
									<i class="paroti-icon-organic-food donation-card-two__icon"></i>
									<a href="donation-details.html"><i
											class="fa fa-angle-double-right donation-card-two__link"></i></a>
									<div class="donation-card-two__shape"></div><!-- /.donation-card-two__shape -->
								</div><!-- /.donation-card-two -->
							</div><!-- /.item -->
							<div class="item">
								<div class="donation-card-two" style="--accent-color: #fdbe44;">
									<div class="donation-card-two__bg"></div><!-- /.donation-card-two__bg -->
									<h3 class="donation-card-two__title"><a href="donation-details.html">Kids
											education</a></h3><!-- /.donation-card-two__title -->
									<p class="donation-card-two__text">When nothing prevents our to we like best, every
										pleasure to be.</p><!-- /.donation-card-two__text -->
									<i class="paroti-icon-education donation-card-two__icon"></i>
									<a href="donation-details.html"><i
											class="fa fa-angle-double-right donation-card-two__link"></i></a>
									<div class="donation-card-two__shape"></div><!-- /.donation-card-two__shape -->
								</div><!-- /.donation-card-two -->
							</div><!-- /.item -->
							<div class="item">
								<div class="donation-card-two" style="--accent-color: #8139e7;">
									<div class="donation-card-two__bg"></div><!-- /.donation-card-two__bg -->
									<h3 class="donation-card-two__title"><a href="donation-details.html">Medical
											care</a></h3><!-- /.donation-card-two__title -->
									<p class="donation-card-two__text">When nothing prevents our to we like best, every
										pleasure to be.</p><!-- /.donation-card-two__text -->
									<i class="paroti-icon-patient  donation-card-two__icon"></i>
									<a href="donation-details.html"><i
											class="fa fa-angle-double-right donation-card-two__link"></i></a>
									<div class="donation-card-two__shape"></div><!-- /.donation-card-two__shape -->
								</div><!-- /.donation-card-two -->
							</div><!-- /.item -->
						</div><!-- /.donation-two__carousel -->
					</div><!-- /.col-md-12 col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>

		<section class="sec-pad-top sec-pad-bottom cta-one">
			<div class="cta-one__bg" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/backgrounds/cta-bg-1-1.jpg);"></div>
			<div class="cta-one__shape" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/shapes/cta-s-1-1.png)">
			</div>
			<!-- /.cta-one__shape -->
			<!-- /.cta-one__bg -->
			<div class="container  text-center">
				<div class="sec-title">
					<p class="sec-title__tagline">We’re here to support poor people</p><!-- /.sec-title__tagline -->
					<h2 class="sec-title__title">Fundraising for the people and <br>
						<span>causes</span> you care about</h2>
				</div><!-- /.sec-title -->
				<a href="donations.html" class="thm-btn cta-one__btn"><span>Start donating thAem</span></a>
			</div><!-- /.container -->
		</section>

		<section class="sec-pad-top sec-pad-bottom">
			<div class="container">
				<div class="sec-title ">
					<p class="sec-title__tagline">Start donating them</p><!-- /.sec-title__tagline -->
					<h2 class="sec-title__title">Find popular causes</h2>
				</div><!-- /.sec-title -->

				<div class="donations-carousel">
					<div class="thm-tns__carousel" id="donations-carousel-1" data-tns-options='{
						"container": "#donations-carousel-1",
						"loop": true,
						"autoplay": true,
						"items": 1,
						"gutter": 0,
						"mouseDrag": true,
						"touch": true,
						"nav": true,
						"autoplayButtonOutput": false,
						"controls": false,
						"responsive": {
							"0": {
								"items": 1,
								"gutter": 0
							},
							"576": {
								"items": 1,
								"gutter": 0
							},
							"768": {
								"items": 2,
								"gutter": 30
							},
							"992": {
								"items": 2,
								"gutter": 30
							},
							"1200": {
								"items": 3,
								"gutter": 30
							}
						}
					}'>
						<div class="item">
							<div class="donations-card">
								<div class="donations-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/donations/donations-1-1.jpg" alt="">
									<div class="donations-card__category">
										<a href="#">Medical</a>
									</div><!-- /.donations-card__category -->
								</div><!-- /.donations-card__image -->
								<div class="donations-card__content">
									<h3 class="donations-card__title"><a href="donations-details.html">Your little help
											can
											heal
											their pains</a></h3><!-- /.donations-card__title -->
									<p class="donations-card__text">Aellentesque porttitor lacus quis enim varius sed
										efficitur...</p>
									<div class="bar">
										<div class="bar-inner count-bar--no-appear" data-percent="36%">
											<div class="count-text">36%</div>
										</div>
									</div>
									<div class="donations-card__amount">
										<p>
											<span>$25,270</span> Raised
										</p>
										<p>
											<span>$30,000</span> Goal
										</p>
									</div><!-- /.donations-card__amount -->
								</div><!-- /.donations-card__content -->
							</div><!-- /.donations-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="donations-card" style="--accent-color: #8139e7;">
								<div class="donations-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/donations/donations-1-2.jpg" alt="">
									<div class="donations-card__category">
										<a href="#">education</a>
									</div><!-- /.donations-card__category -->
								</div><!-- /.donations-card__image -->
								<div class="donations-card__content">
									<h3 class="donations-card__title"><a href="donations-details.html">Give african
											childrens
											a
											good education</a></h3><!-- /.donations-card__title -->
									<p class="donations-card__text">Aellentesque porttitor lacus quis enim varius sed
										efficitur...</p>
									<div class="bar">
										<div class="bar-inner count-bar--no-appear" data-percent="36%">
											<div class="count-text">36%</div>
										</div>
									</div>
									<div class="donations-card__amount">
										<p>
											<span>$25,270</span> Raised
										</p>
										<p>
											<span>$30,000</span> Goal
										</p>
									</div><!-- /.donations-card__amount -->
								</div><!-- /.donations-card__content -->
							</div><!-- /.donations-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="donations-card" style="--accent-color: #fdbe44;">
								<div class="donations-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/donations/donations-1-3.jpg" alt="">
									<div class="donations-card__category">
										<a href="#">Food</a>
									</div><!-- /.donations-card__category -->
								</div><!-- /.donations-card__image -->
								<div class="donations-card__content">
									<h3 class="donations-card__title"><a href="donations-details.html">Raise funds for
											clean
											&
											healthy food</a></h3><!-- /.donations-card__title -->
									<p class="donations-card__text">Aellentesque porttitor lacus quis enim varius sed
										efficitur...</p>
									<div class="bar">
										<div class="bar-inner count-bar--no-appear" data-percent="36%">
											<div class="count-text">36%</div>
										</div>
									</div>
									<div class="donations-card__amount">
										<p>
											<span>$25,270</span> Raised
										</p>
										<p>
											<span>$30,000</span> Goal
										</p>
									</div><!-- /.donations-card__amount -->
								</div><!-- /.donations-card__content -->
							</div><!-- /.donations-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="donations-card">
								<div class="donations-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/donations/donations-1-4.jpg" alt="">
									<div class="donations-card__category">
										<a href="#">Water</a>
									</div><!-- /.donations-card__category -->
								</div><!-- /.donations-card__image -->
								<div class="donations-card__content">
									<h3 class="donations-card__title"><a href="donations-details.html">Help poor kids
											after
											an
											unfortunate tragedy</a></h3><!-- /.donations-card__title -->
									<p class="donations-card__text">Aellentesque porttitor lacus quis enim varius sed
										efficitur...</p>
									<div class="bar">
										<div class="bar-inner count-bar--no-appear" data-percent="36%">
											<div class="count-text">36%</div>
										</div>
									</div>
									<div class="donations-card__amount">
										<p>
											<span>$25,270</span> Raised
										</p>
										<p>
											<span>$30,000</span> Goal
										</p>
									</div><!-- /.donations-card__amount -->
								</div><!-- /.donations-card__content -->
							</div><!-- /.donations-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="donations-card" style="--accent-color: #fdbe44;">
								<div class="donations-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/donations/donations-1-5.jpg" alt="">
									<div class="donations-card__category">
										<a href="#">Houses</a>
									</div><!-- /.donations-card__category -->
								</div><!-- /.donations-card__image -->
								<div class="donations-card__content">
									<h3 class="donations-card__title"><a href="donations-details.html">Help poor kids
											after
											an
											unfortunate tragedy</a></h3><!-- /.donations-card__title -->
									<p class="donations-card__text">Aellentesque porttitor lacus quis enim varius sed
										efficitur...</p>
									<div class="bar">
										<div class="bar-inner count-bar--no-appear" data-percent="36%">
											<div class="count-text">36%</div>
										</div>
									</div>
									<div class="donations-card__amount">
										<p>
											<span>$25,270</span> Raised
										</p>
										<p>
											<span>$30,000</span> Goal
										</p>
									</div><!-- /.donations-card__amount -->
								</div><!-- /.donations-card__content -->
							</div><!-- /.donations-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="donations-card">
								<div class="donations-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/donations/donations-1-6.jpg" alt="">
									<div class="donations-card__category">
										<a href="#">Health</a>
									</div><!-- /.donations-card__category -->
								</div><!-- /.donations-card__image -->
								<div class="donations-card__content">
									<h3 class="donations-card__title"><a href="donations-details.html">Help poor kids
											after
											an
											unfortunate tragedy</a></h3><!-- /.donations-card__title -->
									<p class="donations-card__text">Aellentesque porttitor lacus quis enim varius sed
										efficitur...</p>
									<div class="bar">
										<div class="bar-inner count-bar--no-appear" data-percent="36%">
											<div class="count-text">36%</div>
										</div>
									</div>
									<div class="donations-card__amount">
										<p>
											<span>$25,270</span> Raised
										</p>
										<p>
											<span>$30,000</span> Goal
										</p>
									</div><!-- /.donations-card__amount -->
								</div><!-- /.donations-card__content -->
							</div><!-- /.donations-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="donations-card" style="--accent-color: #8139e7;">
								<div class="donations-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/donations/donations-1-1.jpg" alt="">
									<div class="donations-card__category">
										<a href="#">Medical</a>
									</div><!-- /.donations-card__category -->
								</div><!-- /.donations-card__image -->
								<div class="donations-card__content">
									<h3 class="donations-card__title"><a href="donations-details.html">Your little help
											can
											heal
											their pains</a></h3><!-- /.donations-card__title -->
									<p class="donations-card__text">Aellentesque porttitor lacus quis enim varius sed
										efficitur...</p>
									<div class="bar">
										<div class="bar-inner count-bar--no-appear" data-percent="36%">
											<div class="count-text">36%</div>
										</div>
									</div>
									<div class="donations-card__amount">
										<p>
											<span>$25,270</span> Raised
										</p>
										<p>
											<span>$30,000</span> Goal
										</p>
									</div><!-- /.donations-card__amount -->
								</div><!-- /.donations-card__content -->
							</div><!-- /.donations-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="donations-card">
								<div class="donations-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/donations/donations-1-2.jpg" alt="">
									<div class="donations-card__category">
										<a href="#">education</a>
									</div><!-- /.donations-card__category -->
								</div><!-- /.donations-card__image -->
								<div class="donations-card__content">
									<h3 class="donations-card__title"><a href="donations-details.html">Give african
											childrens
											a
											good education</a></h3><!-- /.donations-card__title -->
									<p class="donations-card__text">Aellentesque porttitor lacus quis enim varius sed
										efficitur...</p>
									<div class="bar">
										<div class="bar-inner count-bar--no-appear" data-percent="36%">
											<div class="count-text">36%</div>
										</div>
									</div>
									<div class="donations-card__amount">
										<p>
											<span>$25,270</span> Raised
										</p>
										<p>
											<span>$30,000</span> Goal
										</p>
									</div><!-- /.donations-card__amount -->
								</div><!-- /.donations-card__content -->
							</div><!-- /.donations-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="donations-card">
								<div class="donations-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/donations/donations-1-3.jpg" alt="">
									<div class="donations-card__category">
										<a href="#">Food</a>
									</div><!-- /.donations-card__category -->
								</div><!-- /.donations-card__image -->
								<div class="donations-card__content">
									<h3 class="donations-card__title"><a href="donations-details.html">Raise funds for
											clean
											&
											healthy food</a></h3><!-- /.donations-card__title -->
									<p class="donations-card__text">Aellentesque porttitor lacus quis enim varius sed
										efficitur...</p>
									<div class="bar">
										<div class="bar-inner count-bar--no-appear" data-percent="36%">
											<div class="count-text">36%</div>
										</div>
									</div>
									<div class="donations-card__amount">
										<p>
											<span>$25,270</span> Raised
										</p>
										<p>
											<span>$30,000</span> Goal
										</p>
									</div><!-- /.donations-card__amount -->
								</div><!-- /.donations-card__content -->
							</div><!-- /.donations-card -->
						</div><!-- /.item -->
					</div><!-- /.thm-tns__carousel -->
				</div><!-- /.donations-carousel -->
			</div><!-- /.container -->
		</section><!-- /.sec-pad-top sec-pad-bottom -->

		<section class="sec-pad-top testimonials-one testimonials-one--bottom-pd-lg">
			<div class="testimonials-one__bg"
				style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/backgrounds/testimonials-1-bg.jpg);"></div>
			<!-- /.testimonials-one__bg -->
			<div class="testimonials-one__gallery">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/testi-2-1.png" class="float-bob-x" alt="">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/testi-2-2.png" class="float-bob-y" alt="">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/testi-2-3.png" class="float-bob-x" alt="">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/testi-2-4.png" class="float-bob-y" alt="">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/testi-2-5.png" class="float-bob-x" alt="">
			</div><!-- /.testimonials-one__gallery -->
			<div class="container">
				<div class="row gutter-y-60">
					<div class="col-lg-5">
						<div class="testimonials-one__content">
							<div class="sec-title">
								<p class="sec-title__tagline">Our feedbacks</p><!-- /.sec-title__tagline -->
								<h2 class="sec-title__title">What they’re <br>talking about us</h2>
							</div><!-- /.sec-title -->
							<p class="testimonials-one__text">Proin a lacus arcu. Nullam id dui eu orci maximus. <br>
								Cras
								at auctor lectus, pretium tellus.</p><!-- /.testimonials-one__text -->
							<a href="#" class="thm-btn testimonials-one__btn"><span>View all feedbacks</span></a>
						</div><!-- /.testimonials-one__content -->
					</div><!-- /.col-lg-5 -->
					<div class="col-lg-7">
						<div class="thm-tns__carousel" id="testimonials-one-carousel-1" data-tns-options='{
						"container": "#testimonials-one-carousel-1",
						"loop": true,
						"autoplay": true,
						"items": 1,
						"gutter": 0,
						"mouseDrag": true,
						"touch": true,
						"nav": false,
						"autoplayButtonOutput": false,
						"controls": false
					}'>
							<div class="item">
								<div class="testimonials-card">
									<i class="paroti-icon-quote testimonials-card__icon"></i>
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/shapes/testimonials-item-bg-1-1.png"
										class="testimonials-card__bg" alt="">
									<p class="testimonials-card__text">Proin a lacus arcu nullam id dui eu orci
										maximus.
										Cras at auctor lectus, vel pretium tellus. Class aptent sociosqu ad litora
										torquent
										per conubia nostra.</p><!-- /.testimonials-card__text -->
									<div class="testimonials-card__meta clearfix">
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/testi-1-1.png" alt="">
										<h3 class="testimonials-card__name">Mike hardson</h3>
										<!-- /.testimonials-card__name -->
										<p class="testimonials-card__designation">Customer</p>
										<!-- /.testimonials-card__designation -->
									</div><!-- /.testimonials-card__meta -->
								</div><!-- /.testimonials-one__card -->
							</div><!-- /.item -->
							<div class="item">
								<div class="testimonials-card">
									<i class="paroti-icon-quote testimonials-card__icon"></i>
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/shapes/testimonials-item-bg-1-1.png"
										class="testimonials-card__bg" alt="">
									<p class="testimonials-card__text">Proin a lacus arcu nullam id dui eu orci
										maximus.
										Cras at auctor lectus, vel pretium tellus. Class aptent sociosqu ad litora
										torquent
										per conubia nostra.</p><!-- /.testimonials-card__text -->
									<div class="testimonials-card__meta clearfix">
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/testi-1-1.png" alt="">
										<h3 class="testimonials-card__name">Mike hardson</h3>
										<!-- /.testimonials-card__name -->
										<p class="testimonials-card__designation">Customer</p>
										<!-- /.testimonials-card__designation -->
									</div><!-- /.testimonials-card__meta -->
								</div><!-- /.testimonials-one__card -->
							</div><!-- /.item -->
							<div class="item">
								<div class="testimonials-card">
									<i class="paroti-icon-quote testimonials-card__icon"></i>
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/shapes/testimonials-item-bg-1-1.png"
										class="testimonials-card__bg" alt="">
									<p class="testimonials-card__text">Proin a lacus arcu nullam id dui eu orci
										maximus.
										Cras at auctor lectus, vel pretium tellus. Class aptent sociosqu ad litora
										torquent
										per conubia nostra.</p><!-- /.testimonials-card__text -->
									<div class="testimonials-card__meta clearfix">
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/testi-1-1.png" alt="">
										<h3 class="testimonials-card__name">Mike hardson</h3>
										<!-- /.testimonials-card__name -->
										<p class="testimonials-card__designation">Customer</p>
										<!-- /.testimonials-card__designation -->
									</div><!-- /.testimonials-card__meta -->
								</div><!-- /.testimonials-one__card -->
							</div><!-- /.item -->
						</div><!-- /.thm-tns__carousel -->
					</div><!-- /.col-lg-7 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.testimonials-one -->

		<section class="gallery-one">
			<div class="container">
				<div class="gallery-one__carousel thm-owl__carousel owl-carousel owl-theme" data-owl-options='{
					"items": 1,
					"loop": true,
					"dots": false,
					"nav": false,
					"margin": 0,
					"autoplay": true,
					"autoplayTimeOut": 5000,
					"autoplayHoverPause": true,
					"responsive": {
						"0": {
							"items": 1
						},
						"576": {
							"items": 2,
							"margin": 30
						},
						"992": {
							"items": 3,
							"margin": 30
						}
					}
				}'>
					<div class="item">
						<div class="gallery-card">
							<div class="gallery-card__image">
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-1-1.png" alt="">
							</div><!-- /.gallery-card__image -->
							<div class="gallery-card__content">
								<a class="img-popup" href="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-1-1.png"><i
										class="fab fa-instagram"></i></a>
							</div><!-- /.gallery-card__content -->
						</div><!-- /.gallery-card -->
					</div><!-- /.item -->
					<div class="item">
						<div class="gallery-card">
							<div class="gallery-card__image">
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-1-2.png" alt="">
							</div><!-- /.gallery-card__image -->
							<div class="gallery-card__content">
								<a class="img-popup" href="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-1-2.png"><i
										class="fab fa-instagram"></i></a>
							</div><!-- /.gallery-card__content -->
						</div><!-- /.gallery-card -->
					</div><!-- /.item -->
					<div class="item">
						<div class="gallery-card">
							<div class="gallery-card__image">
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-1-3.png" alt="">
							</div><!-- /.gallery-card__image -->
							<div class="gallery-card__content">
								<a class="img-popup" href="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-1-3.png"><i
										class="fab fa-instagram"></i></a>
							</div><!-- /.gallery-card__content -->
						</div><!-- /.gallery-card -->
					</div><!-- /.item -->
					<div class="item">
						<div class="gallery-card">
							<div class="gallery-card__image">
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-1-4.png" alt="">
							</div><!-- /.gallery-card__image -->
							<div class="gallery-card__content">
								<a class="img-popup" href="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-1-4.png"><i
										class="fab fa-instagram"></i></a>
							</div><!-- /.gallery-card__content -->
						</div><!-- /.gallery-card -->
					</div><!-- /.item -->
					<div class="item">
						<div class="gallery-card">
							<div class="gallery-card__image">
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-1-5.png" alt="">
							</div><!-- /.gallery-card__image -->
							<div class="gallery-card__content">
								<a class="img-popup" href="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-1-5.png"><i
										class="fab fa-instagram"></i></a>
							</div><!-- /.gallery-card__content -->
						</div><!-- /.gallery-card -->
					</div><!-- /.item -->
				</div><!-- /.gallery-one__carousel thm-owl__carousel owl-carousel owl-theme -->
			</div><!-- /.container-fluid -->
		</section><!-- /.gallery-one -->

		<section class="sec-pad-top sec-pad-bottom video-one">
			<div class="container">
				<div class="video-one__inner"
					style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/backgrounds/video-inner-bg-1-1.jpg);">
					<div class="row gutter-y-60">
						<div class="col-md-12 col-lg-6">
							<div class="video-one__content">
								<a href="https://www.youtube.com/watch?v=CWCPovmNWK8"
									class="video-one__btn video-popup">
									<i class="fa fa-play"></i>
									<span class="video-one__btn__arrow"></span>
								</a>
								<h3 class="video-one__title count-box">Help us to donate <br>
									$<span class="count-text" data-stop="3800" data-speed="1500"></span> to poor
									childrens</h3><!-- /.video-one__title -->
								<ul class="list-unstyled video-one__list">
									<li>
										<i class="fa fa-check-circle"></i>
										If you are going to use a pass available
									</li>
									<li>
										<i class="fa fa-check-circle"></i>
										Lorem ipsum the majority have suffered
									</li>
									<li>
										<i class="fa fa-check-circle"></i>
										Totam rem aperiam eaque ipsam
									</li>
								</ul><!-- /.list-unstyled video-one__list -->
							</div><!-- /.video-one__content -->
						</div><!-- /.col-md-12 col-lg-6 -->
						<div class="col-md-12 col-lg-6">
							<form action="<?php bloginfo('template_directory'); ?>/assets/inc/sendemail.php"
								class=" contact-one__form video-one__form contact-form-validated">
								<div class="row">
									<div class="col-md-6">
										<input type="text" placeholder="Your name" name="name">
									</div><!-- /.col-md-6 -->
									<div class="col-md-6">
										<input type="text" placeholder="Your phone" name="phone">
									</div><!-- /.col-md-6 -->
									<div class="col-md-12">
										<input type="text" placeholder="Email address" name="email">
									</div><!-- /.col-md-6 -->
									<div class="col-md-12">
										<input type="text" placeholder="Location" name="location">
									</div><!-- /.col-md-6 -->
									<div class="col-md-12">
										<textarea name="message" placeholder="Message"></textarea>
									</div><!-- /.col-md-12 -->
									<div class="col-md-12">
										<button type="submit" class="thm-btn contact-one__btn"><span>Continue
												now</span></button>
									</div><!-- /.col-md-12 -->
								</div><!-- /.row -->

							</form><!-- /.video-one__form -->
						</div><!-- /.col-md-12 col-lg-6 -->
					</div><!-- /.row -->
				</div><!-- /.video-one__inner -->
			</div><!-- /.container -->
		</section>

		<section class="sec-pad-top sec-pad-bottom sponsor-carousel">
			<div class="container">
				<div class="thm-tns__carousel" id="sponsor-carousel-1" data-tns-options='{
					"container": "#sponsor-carousel-1",
					"loop": true,
					"autoplay": true,
					"items": 2,
					"gutter": 30,
					"mouseDrag": true,
					"touch": true,
					"nav": false,
					"autoplayButtonOutput": false,
					"controls": false,
					"responsive": {
						"0": {
							"items": 2,
							"gutter": 30
						},
						"576": {
							"items": 3,
							"gutter": 30
						},
						"768": {
							"items": 4,
							"gutter": 30
						},
						"992": {
							"items": 5,
							"gutter": 50
						},
						"1200": {
							"items": 5,
							"gutter": 140
						}
					}
				}'>
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/brand-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/brand-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/brand-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/brand-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/brand-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/brand-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/brand-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/brand-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/brand-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/resources/brand-1.png" alt="">
					</div><!-- /.item -->
				</div><!-- /.thm-tns__carousel -->
			</div><!-- /.container -->
		</section><!-- /.sec-pad-top sec-pad-bottom -->

		<section class="funfact-two sec-pad-top sec-pad-bottom"
			style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/backgrounds/funfact-bg-1-1.jpg);">
			<div class="funfact-two__shape"></div><!-- /.funfact-two__shape -->
			<div class="container">
				<div class="sec-title text-center">
					<p class="sec-title__tagline">Let’s support us to help them</p><!-- /.sec-title__tagline -->
					<h2 class="sec-title__title">Join your hands with us for <br>a better life and future</h2>
				</div><!-- /.sec-title -->
				<ul class="list-unstyled funfact-two__list">
					<li class="funfact-two__list__item">
						<div class="funfact-two__list__icon">
							<i class="paroti-icon-campaign"></i>
						</div><!-- /.funfact-two__list__icon -->
						<h3 class="funfact-two__list__count count-box"><span class="count-text" data-stop="4850"
								data-speed="1500"></span><!-- /.count-text -->
						</h3><!-- /.funfact-two__list__count count-box -->
						<p class="funfact-two__list__text">Total Campaigns</p><!-- /.funfact-two__list__text -->
					</li><!-- /.funfact-two__list__item -->
					<li class="funfact-two__list__item" style="--accent-color: #fdbe44;">
						<div class="funfact-two__list__icon">
							<i class="paroti-icon-budget"></i>
						</div><!-- /.funfact-two__list__icon -->
						<h3 class="funfact-two__list__count count-box"><span class="count-text" data-stop="3456"
								data-speed="1500"></span><!-- /.count-text -->
						</h3><!-- /.funfact-two__list__count count-box -->
						<p class="funfact-two__list__text">Raised Funds</p><!-- /.funfact-two__list__text -->
					</li><!-- /.funfact-two__list__item -->
					<li class="funfact-two__list__item" style="--accent-color: #138999;">
						<div class="funfact-two__list__icon">
							<i class="paroti-icon-social-campaign"></i>
						</div><!-- /.funfact-two__list__icon -->
						<h3 class="funfact-two__list__count count-box"><span class="count-text" data-stop="480"
								data-speed="1500"></span><!-- /.count-text -->
						</h3><!-- /.funfact-two__list__count count-box -->
						<p class="funfact-two__list__text">Satisfied Donors</p><!-- /.funfact-two__list__text -->
					</li><!-- /.funfact-two__list__item -->
					<li class="funfact-two__list__item" style="--accent-color: #8139e7;">
						<div class="funfact-two__list__icon">
							<i class="paroti-icon-help"></i>
						</div><!-- /.funfact-two__list__icon -->
						<h3 class="funfact-two__list__count count-box"><span class="count-text" data-stop="2068"
								data-speed="1500"></span><!-- /.count-text -->
						</h3><!-- /.funfact-two__list__count count-box -->
						<p class="funfact-two__list__text">Happy Volunteers</p><!-- /.funfact-two__list__text -->
					</li><!-- /.funfact-two__list__item -->
				</ul><!-- /.list-unstyled -->
			</div><!-- /.container -->
		</section><!-- /.funfact-two -->

		<section class="sec-pad-top sec-pad-bottom">
			<div class="container">
				<div class="sec-title text-center">
					<p class="sec-title__tagline">Watch our latest blogs</p><!-- /.sec-title__tagline -->
					<h2 class="sec-title__title">Latest news & articles</h2>
				</div><!-- /.sec-title -->
				<div class="blog-carousel">
					<div class="thm-tns__carousel " id="blog-carousel-1" data-tns-options='{
					"container": "#blog-carousel-1",
					"loop": true,
					"autoplay": true,
					"items": 1,
					"gutter": 0,
					"mouseDrag": true,
					"touch": true,
					"nav": false,
					"autoplayButtonOutput": false,
					"controls": false,
					"responsive": {
						"0": {
							"items": 1,
							"gutter": 0
						},
						"576": {
							"items": 1,
							"gutter": 0
						},
						"768": {
							"items": 2,
							"gutter": 30
						},
						"992": {
							"items": 2,
							"gutter": 30
						},
						"1200": {
							"items": 3,
							"gutter": 30
						}
					}
				}'>
						<div class="item">
							<div class="blog-card">
								<div class="blog-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/blog-1-1.jpg" alt="">
									<div class="blog-card__date">
										<span>28</span>Oct
									</div><!-- /.blog-card__date -->
								</div><!-- /.blog-card__image -->
								<div class="blog-card__content">
									<ul class="blog-card__meta list-unstyled">
										<li>
											<i class="fa fa-user"></i>
											<a href="#">by Admin</a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">02 comments</a>
										</li>
									</ul><!-- /.blog-card__meta -->
									<h3 class="blog-card__title"><a href="blog-details.html">Online legal advice for
											asylum seekers in Greece</a></h3><!-- /.blog-card__title -->
									<a href="blog-details.html" class="blog-card__links">
										<i class="fa fa-angle-double-right"></i>
										Read More</a><!-- /.blog-card__links -->
								</div><!-- /.blog-card__content -->
							</div><!-- /.blog-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="blog-card">
								<div class="blog-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/blog-1-2.jpg" alt="">
									<div class="blog-card__date">
										<span>28</span>Oct
									</div><!-- /.blog-card__date -->
								</div><!-- /.blog-card__image -->
								<div class="blog-card__content">
									<ul class="blog-card__meta list-unstyled">
										<li>
											<i class="fa fa-user"></i>
											<a href="#">by Admin</a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">02 comments</a>
										</li>
									</ul><!-- /.blog-card__meta -->
									<h3 class="blog-card__title"><a href="blog-details.html">Online legal advice for
											asylum seekers in Greece</a></h3><!-- /.blog-card__title -->
									<a href="blog-details.html" class="blog-card__links">
										<i class="fa fa-angle-double-right"></i>
										Read More</a><!-- /.blog-card__links -->
								</div><!-- /.blog-card__content -->
							</div><!-- /.blog-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="blog-card">
								<div class="blog-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/blog-1-3.jpg" alt="">
									<div class="blog-card__date">
										<span>28</span>Oct
									</div><!-- /.blog-card__date -->
								</div><!-- /.blog-card__image -->
								<div class="blog-card__content">
									<ul class="blog-card__meta list-unstyled">
										<li>
											<i class="fa fa-user"></i>
											<a href="#">by Admin</a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">02 comments</a>
										</li>
									</ul><!-- /.blog-card__meta -->
									<h3 class="blog-card__title"><a href="blog-details.html">Online legal advice for
											asylum seekers in Greece</a></h3><!-- /.blog-card__title -->
									<a href="blog-details.html" class="blog-card__links">
										<i class="fa fa-angle-double-right"></i>
										Read More</a><!-- /.blog-card__links -->
								</div><!-- /.blog-card__content -->
							</div><!-- /.blog-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="blog-card">
								<div class="blog-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/blog-1-4.jpg" alt="">
									<div class="blog-card__date">
										<span>28</span>Oct
									</div><!-- /.blog-card__date -->
								</div><!-- /.blog-card__image -->
								<div class="blog-card__content">
									<ul class="blog-card__meta list-unstyled">
										<li>
											<i class="fa fa-user"></i>
											<a href="#">by Admin</a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">02 comments</a>
										</li>
									</ul><!-- /.blog-card__meta -->
									<h3 class="blog-card__title"><a href="blog-details.html">Online legal advice for
											asylum seekers in Greece</a></h3><!-- /.blog-card__title -->
									<a href="blog-details.html" class="blog-card__links">
										<i class="fa fa-angle-double-right"></i>
										Read More</a><!-- /.blog-card__links -->
								</div><!-- /.blog-card__content -->
							</div><!-- /.blog-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="blog-card">
								<div class="blog-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/blog-1-5.jpg" alt="">
									<div class="blog-card__date">
										<span>28</span>Oct
									</div><!-- /.blog-card__date -->
								</div><!-- /.blog-card__image -->
								<div class="blog-card__content">
									<ul class="blog-card__meta list-unstyled">
										<li>
											<i class="fa fa-user"></i>
											<a href="#">by Admin</a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">02 comments</a>
										</li>
									</ul><!-- /.blog-card__meta -->
									<h3 class="blog-card__title"><a href="blog-details.html">Online legal advice for
											asylum seekers in Greece</a></h3><!-- /.blog-card__title -->
									<a href="blog-details.html" class="blog-card__links">
										<i class="fa fa-angle-double-right"></i>
										Read More</a><!-- /.blog-card__links -->
								</div><!-- /.blog-card__content -->
							</div><!-- /.blog-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="blog-card">
								<div class="blog-card__image">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/blog-1-6.jpg" alt="">
									<div class="blog-card__date">
										<span>28</span>Oct
									</div><!-- /.blog-card__date -->
								</div><!-- /.blog-card__image -->
								<div class="blog-card__content">
									<ul class="blog-card__meta list-unstyled">
										<li>
											<i class="fa fa-user"></i>
											<a href="#">by Admin</a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">02 comments</a>
										</li>
									</ul><!-- /.blog-card__meta -->
									<h3 class="blog-card__title"><a href="blog-details.html">Online legal advice for
											asylum seekers in Greece</a></h3><!-- /.blog-card__title -->
									<a href="blog-details.html" class="blog-card__links">
										<i class="fa fa-angle-double-right"></i>
										Read More</a><!-- /.blog-card__links -->
								</div><!-- /.blog-card__content -->
							</div><!-- /.blog-card -->
						</div><!-- /.item -->
					</div><!-- /.thm-tns__carousel -->
				</div><!-- /.blog-carousel -->
			</div><!-- /.container -->
		</section><!-- /.sec-pad-top -->



		<section class="newsletter-one">
			<div class="newsletter-one__bg"
				style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/backgrounds/newsletter-1-1.png);"></div>
			<!-- /.newsletter-one__bg -->
			<div class="newsletter-one__shape float-bob-x">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/shapes/newsletter-1-1.png" alt="">
			</div><!-- /.newsletter-one__shape -->
			<div class="container">
				<div class="newsletter-one__icon float-bob-y">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/shapes/newsletter-1-2.png" alt="">
				</div><!-- /.newsletter-one__icon -->
				<div class="row">
					<div class="col-lg-7">
						<div class="sec-title">
							<p class="sec-title__tagline">Wordwide non-profit charity</p><!-- /.sec-title__tagline -->
							<h2 class="sec-title__title">Give a helping hand for <br> needy People</h2>
						</div><!-- /.sec-title -->
						<form action="#" class="mc-form newsletter-one__form">
							<input type="email" placeholder="Your email">
							<button type="submit" class="newsletter-one__form__btn">
								Subscribe
							</button>
						</form>
						<div class="mc-response"></div><!-- /.mc-response -->
					</div><!-- /.col-lg-7 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>


        <?php get_footer(); ?>