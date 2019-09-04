<?php get_header() ?>
 <section id="single-post-banner-wrapper">
 	<div class="container">
 		<div class="row">
 			<div class="row-title">
 				<img src="/wp-content/themes/brixey/img/single-divider.png" alt="">
 				<h2><?php the_title() ?></h2>
 			</div>
 		</div>
 	</div>
 </section>
 <section id="single-post-content">
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-8">
	 			<div class="content-block">
	 				<p>“Come on brother, it’s free.”</p>
	 				<p>I was strolling on the streets in Athens and there was this guy from Kenya stopped me because he wanted to give me this handmade bracelet for free and invited me to watch a performance in the nearby pub the same night.</p>
	 				<p>My defenses went up faster than a speeding ticket.</p>
	 				<p>My immediate autopilot reaction was he is obviously going to hustle me for something.</p>
	 				<p>I brushed him off and said “No, thank you” and I continued walking.</p>
	 				<p>He was relentless. He said “come on brother, I’m for peace and love. I’m trying to start a new life here. Help a brother out.”</p>
	 				<p>I kept saying no and kept walking.</p>
					<p>10mins into walking, I reflected and asked myself what caused me to be conditioned and think like this.</p>
					<p>I realised, it was because of previous experiences.</p>
					<p>I want you to ask yourself… how often in your life have you made a decision or judged someone based on a previous encounter without being truly objective?</p>
					<p>I questioned myself if I was coming from the angle of abundance or scarcity?</p>
					<p>Truth is what I did cams from a scarcity mindset, not abundance and that is not who I wanted to show up.</p>
					<p>I turned around, looking for the same guy and not did I buy a few bracelets from him, I had an amazing conversation with him and I made a friend for life.</p>
					<p>I have a question for you…</p>
					<p>If you have the reset button, how would you like to show up today? Not just how you are towards your loved ones and peers but also strangers?</p>
					<img src="/wp-content/themes/brixey/img/WhatsApp_Image_2019-07-08_at_6.17.56_PM.jpeg-810x620.jpg" alt="" class="text-center">
	 			</div>
 			</div>
 			<div id="blog-right" class="col-sm-12 col-lg-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Recent Posts</h1>
                        </div>

                        <?php
                        $args = array('post_type' => 'blog', 'posts_per_page' => 10 );
                        $recentBlog = new WP_Query( $args );
                        ?>
                        <?php
                        if( $recentBlog->have_posts() ):

                            while( $recentBlog->have_posts() ): $recentBlog->the_post(); ?>
                                <?php
                                $url_blog = get_the_post_thumbnail_url(null, 'blog-small');
                                ?>

                                <div class="col-sm-12">
                                    <div class="row justify-content-md-start row-right">
                                        <div class="col col-lg-3">
                                            <img src="<?php echo $url_blog; ?>" width="70" height="70">
                                        </div>
                                        <div class="col-9">
                                            <h6>
                                                <a href="<?php the_permalink() ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 blog-right">

                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>

                        <div class="col-sm-12 p-3">
                            <h1>Tìm kiếm</h1>
                            <div class="flex-container">
                                <input class="form-control input-field" type="search" placeholder="Tìm kiếm">
                                <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/img/search-btn.jpg" alt="Search Icon"></button>
                            </div>
                        </div>

                    </div>
                </div>
 		</div>
 	</div>
 </section>
<?php brixey_pagination($lastBlog) ?>

<?php get_footer() ?>
 