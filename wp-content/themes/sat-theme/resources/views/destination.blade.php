<?php /* Template Name: Destination - Hotel */?>

<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    @include('partials.header-mobile')


<div class="section-banner">
  <img style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['url'] ?>);"/>
      <div class="section-banner__text">
        <div class="container">
          <h1 class="section-banner__text--heading" data-aos="fade-up" data-aos-duration="800">Popular Places</h1>
          <button class="btn-section btn-outline" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">See video</button>
        </div>
      </div>
      <div class="section-banner__shadow"></div>
</div>
    
    
<div class="top-shadow"></div>

<div class="subpage">
  <section class="subpage__destination py-5">
    <div class="container">
      <h2 class="subpage__destination--heading">special offers & discounts</h2>
      <p class="subpage__destination--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint pariatur voluptate non molestiae earum possimus illo voluptates animi vero rerum maxime error omnis aliquam tenetur accusamus dolore optio, temporibus quos. Aut nemo dignissimos tenetur voluptatem.</p>

      <div class="subpage__destination__content">

        <div class="row m-0 p-0 d-flex justfiy-content-between">

          <?php
        
        $subpageOffer = new WP_Query(array(
          'posts_per_page' => 8,
          'post_type' => 'offer'
        ));
        
        while($subpageOffer->have_posts()) {
          $subpageOffer->the_post(); ?>
       
       <div class="subpage__destination__content__box col-sm-6 col-md-6 col-lg-3">
         <div class="subpage__destination__content__box__img">
          <img src="<?php $offerImg = get_field('offer_img'); echo $offerImg['url'] ?>"alt=""></div>
          <div class="subpage__destination__content__box__text">
            <h3 class="subpage__destination__content__box__text--heading"><?php the_field('offer_name') ?></h3>
            <p class="subpage__destination__content__box__text--price"><sup><i class="fa-solid fa-dollar-sign"></i></sup><?php the_field('offer_cost') ?></p>
          </div>
          <div class="subpage__destination__content__box__place">
            <p class="subpage__destination__content__box__place--icon"><i class="fa-solid fa-location-dot"></i><?php the_field('offer_place') ?></p>
          </div>
        </div>
       
            <?php }
           ?>

      </div>
        
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



    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
