<?php /* Template Name: About - Hotel */?>

<!doctype html>
<html <?php echo get_language_attributes(); ?>>
  <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <body <?php body_class() ?>>
    <?php do_action('get_header') ?>
    <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.header-mobile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div class="section-banner">
  <img style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['url'] ?>);"/>
      <div class="section-banner__text">
        <div class="container">
          <h1 class="section-banner__text--heading"><?php the_title(); ?></h1>
          <p class="section-banner__text--text"><?php the_content(); ?></p>
        </div>
      </div>
      <div class="section-banner__shadow"></div>
</div>
    
    
<div class="top-shadow"></div>

<div class="subpage">

<section class="main__aboutus py-5">
    <div class="container-fluid">
        <div class="main__aboutus__content">
            <div class="row m-0 p-0 d-flex justify-content-between">

                <div class="main__aboutus__content__bg"></div>

                  <div class="main__aboutus__content__img col-sm-12 col-md-12 col-lg-7" data-aos="fade-right" data-aos-duration="800">
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-sec.jpg" class="" alt="...">
                    </div>

                <div class="col-sm-12 col-md-12 col-lg-1"></div>
                <div class="main__aboutus__content__right col-sm-12  col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="800">
                    <h3 class="main__aboutus__content__right--title">History</h3>
                    <p class="main__aboutus__content__right--text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatibus adipisci rem ex! Perferendis voluptatibus, at eligendi ab provident vitae minima similique, saepe adipisci, deleniti illo a. </p>
                    <p class="main__aboutus__content__right--text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatibus adipisci rem ex! Perferendis voluptatibus, at eligendi ab provident vitae minima similique, saepe adipisci, deleniti illo a. </p>
                </div>
            
            </div>
        </div>
    </div>
</section>

<section class="subpage__testimonitals">
  <div class="container-fluid">
      <div class="row m-0 p-0">
          <h3 class="subpage__testimonitals--title col-lg-3" data-aos="fade-right" data-aos-duration="800">who we are</h3>
          <p class="subpage__testimonitals--text col-lg-9" data-aos="fade-up" data-aos-duration="800">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae veritatis blanditiis ratione doloribus, laudantium sunt harum ea! Necessitatibus, obcaecati soluta. Vel fugiat eos ratione exercitationem.</p>
      </div>

      <div class="subpage__testimonitals__boxes slider-aboutpage" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">

          <?php
        
        $subpageOffer = new WP_Query(array(
          'posts_per_page' => 4,
          'post_type' => 'team'
        ));
        
        while($subpageOffer->have_posts()) {
          $subpageOffer->the_post(); ?>

        <div class="subpage__testimonitals__boxes__box">

                     <div class="subpage__testimonitals__boxes__box__img">
                        <div class="subpage__testimonitals__boxes__box__img--img">
                            <img src="<?php $teamImg = get_field('team_img'); echo $teamImg['url'] ?>" class="" alt="...">
                        </div>
                        <div class="subpage__testimonitals__boxes__box__img--info">
                            <p class="name"><?php the_field('team_name') ?></p>
                            <p class="position"><?php the_field('team_position') ?></p>
                        </div>
                    </div>

                    <div class="subpage__testimonitals__boxes__box__text">
                        <p class="card-text"><?php the_field('team_text') ?></p>
                    </div>
                    <button class="main__services__content__single--btn btn">learn more</button>
                </div>
       
            <?php }
           ?>
      
  </div>

  </div>
</section>


<section class="main__socials py-5">
        <div class="container">

            <div class="main__socials__text-box">
            <h3 class="main__socials__text-box--title col-lg-3">instagram</h3>
            <p class="main__socials__text-box--text col-lg-7">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis ullam, corrupti non pariatur tenetur unde fugiat consequuntur atque sed rerum obcaecati nesciunt tempora deleniti quisquam?</p>
            </div>
        </div>

        <div class="row m-0 p-0">
            <div class="main__socials__boxes slick-slider">


                <div class="main__socials__boxes__box">
                    <div class="main__socials__boxes__box--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_1.jpg" class="card-img-top" alt="...">                
                    </div>
                </div>

                <div class="main__socials__boxes__box">
                    <div class="main__socials__boxes__box--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_2.jpg" class="card-img-top" alt="...">                
                    </div>
                </div>

                <div class="main__socials__boxes__box">
                    <div class="main__socials__boxes__box--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_3.jpg" class="card-img-top" alt="...">                
                    </div>
                </div>

                <div class="main__socials__boxes__box">
                    <div class="main__socials__boxes__box--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_4.jpg" class="card-img-top" alt="...">                
                    </div>
                </div>

                <div class="main__socials__boxes__box">
                    <div class="main__socials__boxes__box--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_2.jpg" class="card-img-top" alt="...">                
                    </div>
                </div>

                <div class="main__socials__boxes__box">
                    <div class="main__socials__boxes__box--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_1.jpg" class="card-img-top" alt="...">                
                    </div>
                </div>

                <div class="main__socials__boxes__box">
                    <div class="main__socials__boxes__box--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_3.jpg" class="card-img-top" alt="...">                
                    </div>
                </div>

                <div class="main__socials__boxes__box">
                    <div class="main__socials__boxes__box--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_4.jpg" class="card-img-top" alt="...">                
                    </div>
                </div>

            </div>
        </div>

    </section>


</div>


    <?php do_action('get_footer') ?>
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php wp_footer() ?>
  </body>
</html>