<?php get_header() ?>

<?php

$category_name = 'video';
$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
$post_per_page = 10;

$list_video = array();

$args = array(
    'post_type' => 'post',
    'category_name' => $category_name,
    'posts_per_page' => $post_per_page
);
$lastBlog = new WP_Query($args);
if( $lastBlog->have_posts() ):
    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
        <?php
            list(, , $year) = explode('/', get_the_date());
            $list_video[$year][] = array(
                'title' => get_the_title(),
                'link_youtube' => get_field('link_youtube')
            );
        ?>
    <?php endwhile;
endif;
wp_reset_postdata();
?>




<section id="testimonials-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
                <h3>Video</h3>
            </div>
            <div class="col-lg-4">

            </div>
		</div>
	</div>
</section>
<section id="testimonials-video_all">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="media-video-box">
					<iframe height="315" src="https://www.youtube.com/embed/oMcIcEiOtmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="media-video-text">
	    				<h2>ABC4 Utah</h2>
					</div>
				</div>				
			</div>
			<div class="col-lg-6">
					<div class="media-video-box">
					<iframe height="315" src="https://www.youtube.com/embed/oMcIcEiOtmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="media-video-text">
	    				<h2>ABC4 Utah</h2>
					</div>			
				</div>
			</div>
		</div>
	</div>
</section>
<section id="testimonials-video">
	<div class="container">
		<div class="row">
			<div class="media-press_img">
				<h2>
					<b></b>
						<span>2018</span>
					<b></b>
				</h2>
			</div>
			<div class="col-lg-6">
				<div class="media-video-box">
					<iframe height="315" src="https://www.youtube.com/embed/oMcIcEiOtmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="media-video-text">
	    				<h2>ABC4 Utah</h2>
					</div>
				</div>				
			</div>
			<div class="col-lg-6">
					<div class="media-video-box">
					<iframe height="315" src="https://www.youtube.com/embed/oMcIcEiOtmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="media-video-text">
	    				<h2>ABC4 Utah</h2>
					</div>			
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
					<div class="media-video-box">
					<iframe height="315" src="https://www.youtube.com/embed/oMcIcEiOtmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="media-video-text">
	    				<h2>ABC4 Utah</h2>
					</div>			
				</div>
			</div>
			<div class="col-lg-4">
					<div class="media-video-box">
					<iframe height="315" src="https://www.youtube.com/embed/oMcIcEiOtmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="media-video-text">
	    				<h2>ABC4 Utah</h2>
					</div>			
				</div>
			</div>
			<div class="col-lg-4">
					<div class="media-video-box">
					<iframe height="315" src="https://www.youtube.com/embed/oMcIcEiOtmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="media-video-text">
	    				<h2>ABC4 Utah</h2>
					</div>			
				</div>
			</div>
		</div>
	</div>
</section>
<section id="testimonials-video-1">
	<div class="container">
		<div class="row">
			<div class="media-press_img">
				<h2>
					<b></b>
						<span>2017</span>
					<b></b>
				</h2>
			</div>
			<div class="col-lg-4">
					<div class="media-video-box">
					<iframe height="315" src="https://www.youtube.com/embed/oMcIcEiOtmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="media-video-text">
	    				<h2>ABC4 Utah</h2>
					</div>			
				</div>
			</div>
			<div class="col-lg-4">
					<div class="media-video-box">
					<iframe height="315" src="https://www.youtube.com/embed/oMcIcEiOtmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="media-video-text">
	    				<h2>ABC4 Utah</h2>
					</div>			
				</div>
			</div>
			<div class="col-lg-4">
					<div class="media-video-box">
					<iframe height="315" src="https://www.youtube.com/embed/oMcIcEiOtmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="media-video-text">
	    				<h2>ABC4 Utah</h2>
					</div>			
				</div>
			</div>
		</div>
	</div>
</section>
<section id="testimonials-video-2">
	<div class="container">
		<div class="row">
			<div class="media-press_img">
				<h2>
					<b></b>
						<span>2016</span>
					<b></b>
				</h2>
			</div>
			<div class="col-lg-4">
				<div class="media-video-box">
					<iframe height="315" src="https://www.youtube.com/embed/oMcIcEiOtmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="media-video-text">
	    				<h2>ABC4 Utah</h2>
					</div>
				</div>				
			</div>
			<div class="col-lg-4">
					<div class="media-video-box">
					<iframe height="315" src="https://www.youtube.com/embed/oMcIcEiOtmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="media-video-text">
	    				<h2>ABC4 Utah</h2>
					</div>			
				</div>
			</div>
			<div class="col-lg-4">
					<div class="media-video-box">
					<iframe height="315" src="https://www.youtube.com/embed/oMcIcEiOtmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="media-video-text">
	    				<h2>ABC4 Utah</h2>
					</div>			
				</div>
			</div>
		</div>
	</div>
</section>
<?php brixey_pagination($lastBlog) ?>

<?php get_footer() ?>
