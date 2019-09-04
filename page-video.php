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
$current_year = date('Y', time());
$previous_year = (string) (((int)$current_year)-1);
if( $lastBlog->have_posts() ):
    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
        <?php

            list(, , $year) = explode('/', get_the_date());
            $list_video[$year][] = array(
                'year' => $year,
                'title' => get_the_title(),
                'embed_youtube' => get_field('embed_youtube')
            );
        ?>
    <?php endwhile;
endif;
wp_reset_postdata();




$list_video = array();
$current_year = date('Y', time());

for($i=1;$i<=3;$i++) {
    $list_video['2016'][] = array(
        'year' => '2016',
        'title' => 'Video 2016 '.$i,
        'embed_youtube' => '<iframe width="560" height="250" src="https://www.youtube.com/embed/Gr1pREAm6Os" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
    );
}

for($i=1;$i<=3;$i++) {
    $list_video['2017'][] = array(
        'year' => '2017',
        'title' => 'Video 2017 '.$i,
        'embed_youtube' => '<iframe width="560" height="250" src="https://www.youtube.com/embed/Gr1pREAm6Os" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
    );
}

for($i=1;$i<=5;$i++) {
    $list_video['2018'][] = array(
        'year' => '2018',
        'title' => 'Video 2018 '.$i,
        'embed_youtube' => '<iframe width="560" height="250" src="https://www.youtube.com/embed/Gr1pREAm6Os" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
    );
}

for($i=1;$i<=2;$i++) {
    $list_video['2019'][] = array(
        'year' => '2019',
        'title' => 'Video 2019 '.$i,
        'link_youtube' => 'https://www.youtube.com/embed/Gr1pREAm6Os',
        'embed_youtube' => '<iframe width="560" height="250" src="https://www.youtube.com/embed/Gr1pREAm6Os" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
    );
}



krsort($list_video);

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
	<div class="button-year">
	    <ul>
	        <?php foreach ($list_video as $year=>$item): ?>
	            <?php $li_id = sprintf('li-%s', $year); ?>
	            <li class="li-year" id="<?php echo $li_id; ?>" year="<?php echo $year; ?>">
	                <a>
	                    <?php echo $year; ?>
	                </a>
	            </li>
	        <?php endforeach; ?>
	    </ul>
	</div>
</section>

<section id="testimonials-video_all">
	<div class="container">
		<div class="row">
            <?php if(isset($list_video[$current_year])) : ?>
                <?php foreach ($list_video[$current_year] as $item) : ?>
                    <div class="col-lg-6">
                        <div class="media-video-box">
                            <?php //echo $item['embed_youtube']; ?>
                            <img src="https://tranxuanvan.com/wp-content/uploads/2019/05/TANG-3C-570x400.jpeg"alt="">
                            <div class="media-video-text">
                                <h2> <?php echo $item['title']; ?></h2>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
		</div>
	</div>
</section>
<section id="testimonials-video">
	<div class="container">
		<div class="row">
            <?php if(isset($list_video[$previous_year])) : ?>
                <?php $year_id = sprintf('year-%s', $previous_year); ?>
                <div class="button-year">
                    <ul>
                        <?php foreach ($list_video as $year=>$item): ?>
                            <?php $li_id = sprintf('li-%s', $year); ?>
                            <li class="li-year" id="<?php echo $li_id; ?>" year="<?php echo $year; ?>">
                                <a>
                                    <?php echo $year; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="media-press_img" id="<?php echo $year_id; ?>">
                    <h2>
                        <b></b>
                        <span><?php echo $previous_year; ?></span>
                        <b></b>
                    </h2>
                </div>
                <?php $i=1; ?>
                <?php foreach ($list_video[$previous_year] as $item) : ?>
                    <?php if($i<=2): ?>
                        <div class="col-lg-6">
                            <div class="media-video-box">
                                <?php //echo $item['embed_youtube']; ?>
                                <img src="https://tranxuanvan.com/wp-content/uploads/2019/05/TANG-3C-570x400.jpeg"alt="">
                                <div class="media-video-text">
                                    <h2><?php echo $item['title']; ?></h2>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
		</div>
		<div class="row">
            <?php if(isset($list_video[$previous_year])) : ?>
                <?php $i=1; ?>
                <?php foreach ($list_video[$previous_year] as $item) : ?>
                    <?php if($i>2): ?>
                        <div class="col-lg-4">
                            <div class="media-video-box">
                                <?php //echo $item['embed_youtube']; ?>
                                <img src="https://tranxuanvan.com/wp-content/uploads/2019/05/TANG-3C-570x400.jpeg"alt="">
                                <div class="media-video-text">
                                    <h2><?php echo $item['title']; ?></h2>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php $i++; ?>

                <?php endforeach; ?>
            <?php endif; ?>
		</div>
	</div>
</section>
<?php $i=1; ?>
<?php foreach ($list_video as $year => $items): ?>
    <?php if($year!=(int)$current_year && $year!=(int)$previous_year): ?>
        <section id="testimonials-video-<?php echo $i; ?>">
            <div class="container">
                <div class="row">
                    <?php $year_id = sprintf('year-%s', $year); ?>
                    <div class="button-year">
                        <ul>
                            <?php foreach ($list_video as $year=>$item): ?>
                                <?php $li_id = sprintf('li-%s', $year); ?>
                                <li class="li-year" id="<?php echo $li_id; ?>" year="<?php echo $year; ?>">
                                    <a>
                                        <?php echo $year; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="media-press_img" id="<?php echo $year_id; ?>">
                        <h2>
                            <b></b>
                            <span><?php echo $year; ?></span>
                            <b></b>
                        </h2>
                    </div>
                    <?php foreach ($items as $item): ?>
                        <div class="col-lg-4">
                            <div class="media-video-box">
                                <?php //echo $item['embed_youtube']; ?>
                                <img src="https://tranxuanvan.com/wp-content/uploads/2019/05/TANG-3C-570x400.jpeg"alt="">
                                <div class="media-video-text">
                                    <h2><?php echo $item['title']; ?></h2>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php $i++; ?>
    <?php endif; ?>
<?php endforeach; ?>

<?php get_footer() ?>
