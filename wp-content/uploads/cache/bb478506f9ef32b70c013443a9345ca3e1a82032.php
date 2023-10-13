<main class="main py-5">

    <section class="main__services py-5">

        <div class="container">
            <h2 class="section-heading" data-aos="fade-up" data-aos-duration="800">our services</h2>
        </div>

        <div class="main__services__content" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">

            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">

                        <li class="splide__slide">

                            <div class="main__services__content__single">
                                <div class="main__services__content__single--icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trekking.png" class=""
                                        alt="...">
                                </div>
                                <h3 class="main__services__content__single--title">Lorem 1</h3>
                                <p class="main__services__content__single--text">Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Sed repellat, magni facere expedita laudantium nam odio harum
                                    alias suscipit quam.</p>
                                <button class="main__services__content__single--btn btn">learn more</button>
                            </div>

                        </li>
                        <li class="splide__slide">

                            <div class="main__services__content__single">
                                <div class="main__services__content__single--icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trekking.png" class=""
                                        alt="...">
                                </div>
                                <h3 class="main__services__content__single--title">Lorem 2</h3>
                                <p class="main__services__content__single--text">Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Sed repellat, magni facere expedita laudantium nam odio harum
                                    alias suscipit quam.</p>
                                <button class="main__services__content__single--btn btn">learn more</button>
                            </div>

                        </li>

                        <li class="splide__slide">
                            <div class="main__services__content__single">
                                <div class="main__services__content__single--icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trekking.png" class=""
                                        alt="...">
                                </div>
                                <h3 class="main__services__content__single--title">Lorem3 </h3>
                                <p class="main__services__content__single--text">Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Sed repellat, magni facere expedita laudantium nam odio harum
                                    alias suscipit quam.</p>
                                <button class="main__services__content__single--btn btn">learn more</button>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="main__services__content__single">
                                <div class="main__services__content__single--icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trekking.png" class=""
                                        alt="...">
                                </div>
                                <h3 class="main__services__content__single--title">Lorem4</h3>
                                <p class="main__services__content__single--text">Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Sed repellat, magni facere expedita laudantium nam odio harum
                                    alias suscipit quam.</p>
                                <button class="main__services__content__single--btn btn">learn more</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

        </div>
    </section>

    <section class="main__aboutus py-5">
        <div class="container-fluid">
            <div class="main__aboutus__content">
                <div class="row m-0 p-0">

                    <div class="main__aboutus__content__bg"></div>

                    <div class="main__aboutus__content__img col-sm-12 col-md-12 col-lg-7" data-aos="fade-right"
                        data-aos-duration="800">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-sec.jpg" class="" alt="...">
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-1"></div>
                    <div class="main__aboutus__content__right col-sm-12  col-md-12 col-xl-4" data-aos="fade-up"
                        data-aos-duration="800">
                        <h3 class="main__aboutus__content__right--title">about hotel</h3>
                        <p class="main__aboutus__content__right--text text-muted">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Molestiae voluptatibus adipisci rem ex! Perferendis voluptatibus, at
                            eligendi ab provident vitae minima similique, saepe adipisci, deleniti illo a. </p>
                        <p class="main__aboutus__content__right--text text-muted">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Molestiae voluptatibus adipisci rem ex! Perferendis voluptatibus, at
                            eligendi ab provident vitae minima similique, saepe adipisci, deleniti illo a. </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="main__blog-post py-5">
        <div class="container">
            <h3 class="main__blog-post--heading" data-aos="fade-up" data-aos-duration="800">blog posts</h3>

            <div class="main__blog-post__boxes slider-blog" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="50">

                <?php
            
                    $islandsPost = new WP_Query(array(
                    'posts_per_page' => 4,
                    'post_type' => 'islands'
                    ));
                    
                    while($islandsPost->have_posts()) {
                    $islandsPost->the_post(); ?>

                <div class="card">
                    <img src="<?php $testimonitalImg = get_field('island_img');
                    echo $testimonitalImg['url']; ?>" class="" alt="...">
                    <a class="blog-btn" href="#"><button class="blog-pencil"><i
                                class="fa-solid fa-pencil"></i></button></a>
                    <div class="card-body">
                        <p class="card-text"><?php the_field('island_text'); ?></p>
                        <a href="#" class="card-btn">read more</a>
                    </div>
                </div>


                <?php }
                 ?>



            </div>
        </div>
    </section>

    <section class="main__faqs py-5">
        <div class="container">
            <div class="main__faqs__content">
                <div class="row m-0 p-0">

                    <div class="main__faqs__content__left col-lg-3">
                        <h3 class="main__faqs__content__left--heading">
                            FREQUENTLY ASKED QUESTIONS
                        </h3>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="main__faqs__content__right col-lg-8">
                        <?php echo do_shortcode('[sp_easyaccordion id="53"]'); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="main__testimonitals">
        <div class="container">
            <div class="row m-0 p-0">
                <h3 class="main__testimonitals--title col-lg-3">testimonitals</h3>
                <p class="main__testimonitals--text col-lg-9">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Recusandae veritatis blanditiis ratione doloribus, laudantium sunt harum ea! Necessitatibus,
                    obcaecati soluta. Vel fugiat eos ratione exercitationem.</p>
            </div>



            <div class="main__testimonitals__boxes">

                <?php
        
        $testimonitalsCards = new WP_Query(array(
          'posts_per_page' => 4,
          'post_type' => 'testimonitals'
        ));
        
        while($testimonitalsCards->have_posts()) {
          $testimonitalsCards->the_post(); ?>


                <div class="main__testimonitals__boxes__box">
                    <div class="main__testimonitals__boxes__box__text">
                        <a class="testimonitals-btn" href="#"><button class="blog-pencil"><i
                                    class="fa-solid fa-quote-left"></i></button></a>
                        <p class="card-text"><?php the_field('testimonitals_text'); ?></p>
                    </div>
                    <div class="main__testimonitals__boxes__box__img">
                        <div class="row">

                            <div class="main__testimonitals__boxes__box__img--img">
                                <img src="<?php $testimonitalImg = get_field('testimonital_thumbnail');
                                echo $testimonitalImg['url']; ?>" class="" alt="...">
                            </div>
                            <div class="main__testimonitals__boxes__box__img--info">
                                <p class="name"><?php the_field('testimonital_name'); ?></p>
                                <p class="position"><?php the_field('testimonital_position'); ?></p>
                            </div>

                        </div>
                    </div>
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
                <p class="main__socials__text-box--text col-lg-7">Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit. Omnis ullam, corrupti non pariatur tenetur unde fugiat consequuntur atque sed rerum obcaecati
                    nesciunt tempora deleniti quisquam?</p>
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


</main>
