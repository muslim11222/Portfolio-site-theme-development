<?php get_header(); ?>

<!-- nav section End  -->


  <!-- Header section start   -->

    <header>
      <div class="container header_container" id="home">

        <div class="header_left">
          <div class="header_left_img">
            <img src="<?php echo get_theme_mod('header_image'); ?>" alt="">
          </div>
        </div>



        <div class="header_right">
          <div class="text_1"><?php echo get_theme_mod('header_text_1'); ?></div>
          <div class="text_2"><?php echo get_theme_mod('header_text_2'); ?></div>
          <div class="text_3"><?php echo get_theme_mod('header_text_3'); ?> <span class="typing"></span></div>
          <a href="<?php echo get_theme_mod('header_btn_link'); ?>" class="btn"><?php echo get_theme_mod('header_btn_text'); ?></a>
        </div>  
      </div>
    </header>

  <!-- Header section End    -->


  <!-- About Me section Start Here  -->


    <section class="about" id="about">
        <h2 class="border_bottom"> <?php echo get_theme_mod('About_text'); ?> </h2>
        <div class="container about_container">
          <div class="about-img">
            <img src="<?php echo get_theme_mod('about_image') ?>" alt="">
          </div>

          <div class="about-text">
            <div class="text">
              <?php echo get_theme_mod('About_short_text'); ?> <span class="typing-2"></span>
            </div>
            <p>
              <?php echo get_theme_mod('About_description'); ?>
            </p>
            <a href=" <?php echo get_theme_mod('About_Download_link'); ?> " class="btn">Download CV</a>
          </div>
        </div>
    </section>

  <!-- About Me section End Here  -->

  <!-- My Service Section Start Here  -->
<div class="services" id="service">
    <h2 class="border_bottom"><?php echo get_theme_mod('service_1'); ?></h2>

    <div class="container services_container">
        <div class="cards">
            <?php
            $query = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 3
            ));
            while($query->have_posts()) : $query->the_post();
            ?>
                <div class="card">
                    <div class="sbox">
                        <?php the_post_thumbnail('medium', array('class' => 'service-img')); ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_content(), 30, '.....') ?></p>
                        <a href="<?php the_permalink(); ?>">Learn More</a>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<!-- My Service Section End Here  -->







<!-- My Skills Section Start Here  -->

  <div class="skills" id="skills">
    <div class="new">
      <h2 class="border_bottom"><?php echo get_theme_mod('skill_1') ?></h2>
    </div>

    <div class="container skills_container">
      <div class="bar">
        <div class="info">
          <span><?php echo get_theme_mod('html_bar_text'); ?></span>
        </div>

        <div class="progress-line html">
          <span></span>
        </div>
      </div>



      <div class="bar">
        <div class="info">
          <span><?php echo get_theme_mod('css_bar_text') ?></span>
        </div>

        <div class="progress-line css">
          <span></span>
        </div>
      </div>


      <div class="bar">
        <div class="info">
          <span><?php echo get_theme_mod('js_bar_text') ?></span>
        </div>

        <div class="progress-line javascript">
          <span></span>
        </div>
      </div>


      <div class="bar">
        <div class="info">
          <span><?php echo get_theme_mod('php_bar_text') ?></span>
        </div>

        <div class="progress-line php">
          <span></span>
        </div>
      </div>



      <div class="bar">
        <div class="info">
          <span><?php echo get_theme_mod('mysql_bar_text') ?></span>
        </div>

        <div class="progress-line MySQL">
          <span></span>
        </div>
      </div>
    </div>
  </div>


<!-- My Skills Section End Here  -->



<!-- My potfilio Section Start Here  -->


  <div class="container portfilio_container" id="portfolio">
    <h2 class="border_bottom">My Portfolio</h2>
    <div class="gallery">
      <a href="img/portfolio1.png"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio1.png" alt="portfolio1.png"></a>
      <a href="img/portfolio2.png"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio2.png" alt="portfolio2.png"></a>
      <a href="img/portfolio3.png"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio3.png" alt="portfolio3.png"></a>
      <a href="img/portfolio4.png"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio4.png" alt="portfolio4.png"></a>
      <a href="img/portfolio5.png"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio5.png" alt="portfolio5.png"></a>
      <a href="img/portfolio6.png"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio6.png" alt="portfolio6.png"></a>
</div>
  </div>

<!-- My potfilio Section End Here  -->
<!-- My Course Section Start Here  -->
   <section class="faqs">
    <h2 class="border_bottom">
      Frequently Asked  Question
    </h2>

    <div class="container faqs_container">
      <article class="faq">
        <div class="faq_icon">
          <i class="fa-solid fa-plus"></i>
        </div>

        <div class="question_ans">
          <h4>Can I see some other sites you have made?</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis temporibus molestiae ratione. A beatae amet maiores eaque vel nulla aliquam, debitis iusto consequatur labore culpa fugiat ullam, eligendi sapiente.</p>
        </div>
      </article>

      <article class="faq">
        <div class="faq_icon">
          <i class="fa-solid fa-plus"></i>
        </div>

        <div class="question_ans">
          <h4>Can I see some other sites you have made?</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis temporibus molestiae ratione. A beatae amet maiores eaque vel nulla aliquam, debitis iusto consequatur labore culpa fugiat ullam, eligendi sapiente.</p>
        </div>
      </article>



      <article class="faq">
        <div class="faq_icon">
          <i class="fa-solid fa-plus"></i>
        </div>

        <div class="question_ans">
          <h4>Can I see some other sites you have made?</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis temporibus molestiae ratione. A beatae amet maiores eaque vel nulla aliquam, debitis iusto consequatur labore culpa fugiat ullam, eligendi sapiente.</p>
        </div>
      </article>




      <article class="faq">
        <div class="faq_icon">
          <i class="fa-solid fa-plus"></i>
        </div>

        <div class="question_ans">
          <h4>Can I see some other sites you have made?</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis temporibus molestiae ratione. A beatae amet maiores eaque vel nulla aliquam, debitis iusto consequatur labore culpa fugiat ullam, eligendi sapiente.</p>
        </div>
      </article>




      <article class="faq">
        <div class="faq_icon">
          <i class="fa-solid fa-plus"></i>
        </div>

        <div class="question_ans">
          <h4>Can I see some other sites you have made?</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis temporibus molestiae ratione. A beatae amet maiores eaque vel nulla aliquam, debitis iusto consequatur labore culpa fugiat ullam, eligendi sapiente.</p>
        </div>
      </article>





      <article class="faq">
        <div class="faq_icon">
          <i class="fa-solid fa-plus"></i>
        </div>

        <div class="question_ans">
          <h4>Can I see some other sites you have made?</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis temporibus molestiae ratione. A beatae amet maiores eaque vel nulla aliquam, debitis iusto consequatur labore culpa fugiat ullam, eligendi sapiente.</p>
        </div>
      </article>





      <article class="faq">
        <div class="faq_icon">
          <i class="fa-solid fa-plus"></i>
        </div>

        <div class="question_ans">
          <h4>Can I see some other sites you have made?</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis temporibus molestiae ratione. A beatae amet maiores eaque vel nulla aliquam, debitis iusto consequatur labore culpa fugiat ullam, eligendi sapiente.</p>
        </div>
      </article>





      <article class="faq">
        <div class="faq_icon">
          <i class="fa-solid fa-plus"></i>
        </div>

        <div class="question_ans">
          <h4>Can I see some other sites you have made?</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis temporibus molestiae ratione. A beatae amet maiores eaque vel nulla aliquam, debitis iusto consequatur labore culpa fugiat ullam, eligendi sapiente.</p>
        </div>
      </article>







      <article class="faq">
        <div class="faq_icon">
          <i class="fa-solid fa-plus"></i>
        </div>

        <div class="question_ans">
          <h4>Can I see some other sites you have made?</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis temporibus molestiae ratione. A beatae amet maiores eaque vel nulla aliquam, debitis iusto consequatur labore culpa fugiat ullam, eligendi sapiente.</p>
        </div>
      </article>








      <article class="faq">
        <div class="faq_icon">
          <i class="fa-solid fa-plus"></i>
        </div>

        <div class="question_ans">
          <h4>Can I see some other sites you have made?</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis temporibus molestiae ratione. A beatae amet maiores eaque vel nulla aliquam, debitis iusto consequatur labore culpa fugiat ullam, eligendi sapiente.</p>
        </div>
      </article>
      
    </div>
   </section>

<!-- My course Section End Here  -->


<?php get_footer(); ?>

