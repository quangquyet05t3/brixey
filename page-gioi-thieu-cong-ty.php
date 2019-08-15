<?php get_header() ?>

<!--Meet Peng Joon-->
<?php
if(!empty(get_option( 'sticky_posts' ))) {
    $args = [
        'type' => 'post',
        'posts_per_page' => 1,
        'post__in'  => get_option( 'sticky_posts' )  // Get article with sticky
    ];
    $the_query = new WP_Query($args);
    ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <section id="about">
            <?php get_template_part('template-parts/content-sticky', get_post_format()); ?>
        </section>
    <?php endwhile; ?>
    <?php
}
?>
<section id="about-market">
    <div class="container">
        <div class="row">
            <div class="about-market_box">
                <h2>Market a product based on something you love.</h2>
                <p>At the time, the only thing Peng Joon was passionate about was World of Warcraft. So using his knowledge he wrote a 32-page guide on the game. With a $7 price tag, his first digital product was launched.</p>
                <p>Seven months down the road, Peng Joon received a PayPal notification of payment received for $7. His guide had provided him with his first online sale. That magic moment marked the turning point in Peng Joon’s life as he realized that making money online was real.</p>
            </div>
        </div>
    </div>
</section>
<section id="about-event">
</section>
<section id="about-successfully">
	<div class="container">
        <div class="row">
	        <div class="col-lg-6">

	        </div>
            <div class="col-lg-6">
                <h3>Meet TRAN XUAN VAN ARCHITECTS</h3>
				<h5> Tran Xuan Van Architects  là page của  kiến trúc sư, yêu thích kinh doanh, thích khám phá bản thân và muốn giúp đỡ người khác khám phá ra khả năng tiềm ẩn trong mỗi con người.  </h5>
				<p> Năm 2013 đồng sáng lập VAN HIEN GROUP - Đơn vị cung cấp cá cảnh giá sỉ toàn quốc </p>
				<p>  Năm 2019 làm kiến trúc sư tư vấn thiết kế, setup Nhà Hàng, Coffee - phòng kinh doanh khu vực miền nam Công ty CP Nội thất Kendesign   </p>
				<p>    Không ngừng học hỏi từ những người thầy tuyệt vời như TS.Lê Thẩm Dương, T.Harv eker, Blair singer, AnthonyRobin và các triệu phú, tỉ phú như Donand J Trump, những diễn giả hàng đầu thế giới…  để có thêm kiến thức, phong cách sống. Tôi tin rằng: Người kinh doanh muốn sự giàu có thực sự bạn phải có mục đích lớn hơn sự giàu có. </p>
            </div>
            
        </div>
    </div>
</section>
<section id="about-event_time">
</section >
<section id="about-programs"> 
	<div class="container">
		<div class="row">
			<div class="about-programs_box">
				<h2>Through online programs and speaking on stages, Peng Joon has reached millions of people from all walks of life:</h2>
				<div class="row">
					<div class="about-programs_elementor">
						<div class="col-lg-2 col-sm-3">
							<img src="/wp-content/themes/brixey/img/monitor-icon.png" alt="">
		        		</div>
		        		<div class="col-lg-10 col-sm-9">
							<p>He has created over 500 websites and launched multiple products which have become the foundation of online empire.</p>
		        		</div>
					</div>
					<div class="about-programs_elementor">
						<div class="col-lg-2 col-sm-3">
							<img src="/wp-content/themes/brixey/img/dollar-icon.png" alt="">
		        		</div>
		        		<div class="col-lg-10 col-sm-9">
							<p>His million-dollar partnerships have seen collaborations with thought leaders, luminaries and legends in different industries.</p>
		        		</div>
					</div>
					<div class="about-programs_elementor">
						<div class="col-lg-2 col-sm-3">
							<img src="/wp-content/themes/brixey/img/globe-icon.png"  alt="">
		        		</div>
		        		<div class="col-lg-10 col-sm-9">
							<p>He has trained thousands of people in over 20+ countries all over the world.and marketers from across the globe</p>
		        		</div>
					</div>
					<div class="about-programs_elementor">
						<div class="col-lg-2 col-sm-3">
							<img src="/wp-content/themes/brixey/img/mic-icon.png"  alt="">
		        		</div>
		        		<div class="col-lg-10 col-sm-9">
							<p>As a highly in demand speaker, he has shared the stage with Richard Branson, Tony Robbins,  and other thought-leaders, motivators and marketers from across the globe.</p>
		        		</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="about-famous">
</section >
<section id="about-seemore">
	<div class="container">
		<div class="row">
			<p><b>Tran Xuan Van Architects là page của kiến trúc sư</b> – a global brand that teaches people how to build, grow and scale an online business.</p>
			<div class="read-more">
                    <div class="container">
                        <div class="row">
                            <div class="read-more-arrow">
                                <div class="arrow icon">
                                </div>
                            </div>
                            <div class="read-more-button">
                                <a href="https://tranxuanvan.com/meet-peng-joon/">
                                    <button type="button" class="btn btn-light">Đọc thêm</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
		</div>
	</div>
</section >
<?php brixey_pagination($lastBlog) ?>

<?php get_footer() ?>
