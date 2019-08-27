<?php get_header() ?>
<section id="contact">
    <div class="container">
        <div class="row text-center">
            <img width="797" height="600" src="/wp-content/themes/brixey/img/peng-contact-img.png" class="attachment-large size-large" alt="">
        </div>
    </div>
</section>
<section id="contact-f">
    <div class="section-content">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9">
                    <div class="contact-text">
                        <?php
                        if( have_posts() ):
                            while( have_posts() ): the_post(); ?>
                                <?php get_template_part('template-parts/content-single',get_post_format()); ?>
                            <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="hire">
                        <h2>Hire Peng Joon</h2>
                        <h3>Information on 1:1 Consulting &amp; Speaking<br> Engagements</h3>
                        <span>If you’re interested in consulting or speaking with Peng Joon, his fees for events are below:</span>
                        <table>
                          <tr>
                            <td>LUNCH (TO PICK HIS BRAIN)</td>
                            <td>Starts at <strong>$2,000</strong> and on location in Kuala Lumpur</td>
                          </tr>
                          <tr>
                            <td>SPEAKING ENGAGEMENTS</td>
                            <td><strong>$25,000</strong> (keynote) or 50% back of room sales (whichever is higher)</td>
                          </tr>
                          <tr>
                            <td>BUILDING A FUNNEL</td>
                            <td><strong>$50,000</strong> and 10% of gross sales of the funnel (lifetime of the funnel)</td>
                          </tr>
                          <tr>
                            <td>TRAIN YOUR TEAM</td>
                            <td><strong>$50,000</strong> for 2 days</td>
                          </tr>
                        </table>
                        <p>** prices quoted are in USD.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
