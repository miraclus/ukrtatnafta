<?php 
/*
 Template Name: Home-Page-Template
 */
get_header();
?>
<div id="carouselSliderUTN" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <ol class="carousel-indicators">
                    <li data-target="#carouselSliderUTN" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselSliderUTN" data-slide-to="1"></li>
                    <li data-target="#carouselSliderUTN" data-slide-to="2"></li>
                </ol>
                <div class="carousel-item active">
                    <div class="cover-dark"></div>
                    <img src="<?php bloginfo('template_url'); ?>/img/slider/1_1.jpg" alt="First slide" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                            <h5 class="">Лучшие в своем деле</h5>
                            <p class="">Обратись и убедись</p>
                          </div>
                </div>
                <div class="carousel-item">
                    <div class="cover-dark"></div>
                    <img src="<?php bloginfo('template_url'); ?>/img/slider/2_2.jpg" alt="Second slide" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="">Самая вкусная нефть</h5>
                        <p class="">Первая бочка бесплатно</p>
                    </div>
                    
                </div>
                <div class="carousel-item">
                    <div class="cover-dark"></div>
                    <img src="<?php bloginfo('template_url'); ?>/img/slider/3_3.jpg" alt="Third slide" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="">Без нас нет движения</h5>
                        <p class="">Двигайся с нами!</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselSliderUTN" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselSliderUTN" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <section class="section_news">
            <h2 class="news-h2" id="news-h2">
                <!-- <a name="news"></a> -->
                Реализация
            </h2>
            <div class="container news">
                <!-- <div class="row">
                    <div class="col-12">
                        
                    </div>
                </div> -->
                <!-- <ul class="nav-btn-news" data-toggle="collapse" data-target=".news-pub-collapse" aria-expanded="false" aria-controls="newsCollapse publicationCollapse" id="nav-btn-news"> -->
                <ul class="nav-btn-news" id="nav-btn-news">
                    <li class="news-activ li-realization news-menu" id="li-realization">Реализация</li>
                    <li class="li-news news-menu" id="li-news">Новости</li>
                    <li class="li-publication news-menu" id="li-publication">Публикации</li>
                </ul>

                <div class="show newsSection" id="realizationCollapse">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="news-wrap">
                                <a href="#" class="news-link-wrap"></a>
                                <div class="news-img-section">
                                    <img src="<?php bloginfo('template_url'); ?>/img/car.jpg" alt="Новости">
                                    <div class="news-bg-img"><img src="<?php bloginfo('template_url'); ?>/img/zoom-icon.svg" alt=""></div>
                                </div>                            
                                <span>30.01.2019</span>
                                <h3>«Укртатнафта»: Ситуація у сфері забезпечення авіаперевезень нормалізована</h3>                            
                            </div>                    
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="news-wrap">
                                <a href="#" class="news-link-wrap"></a>
                                <div class="news-img-section">
                                    <img src="<?php bloginfo('template_url'); ?>/img/ecology_2.jpg" alt="Новости">
                                    <div class="news-bg-img"><img src="<?php bloginfo('template_url'); ?>/img/zoom-icon.svg" alt=""></div>
                                </div>                            
                                <span>30.01.2019</span>
                                <h3>«Укртатнафта»: Ситуація </h3>                            
                            </div>                    
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="news-wrap">
                                <a href="#" class="news-link-wrap"></a>
                                <div class="news-img-section">
                                    <img src="<?php bloginfo('template_url'); ?>/img/news_2.jpg" alt="Новости">
                                    <div class="news-bg-img"><img src="<?php bloginfo('template_url'); ?>/img/zoom-icon.svg" alt=""></div>
                                </div>                            
                                <span>30.01.2019</span>
                                <h3>«Укртатнафта»: Ситуація у сфері забезпечення авіаперевезень нормалізована</h3>                            
                            </div>                    
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="news-wrap">
                                <a href="#" class="news-link-wrap"></a>
                                <div class="news-img-section">
                                    <img src="<?php bloginfo('template_url'); ?>/img/news_2.jpg" alt="Новости">
                                    <div class="news-bg-img"><img src="<?php bloginfo('template_url'); ?>/img/zoom-icon.svg" alt=""></div>
                                </div>                            
                                <span>30.01.2019</span>
                                <h3>«Укртатнафта»: Ситуація у сфері забезпечення авіаперевезень нормалізована</h3>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row justify-content-end" id="#all-news">
                        <a href="news.html"><div class="btn-all-news animated bounceInLeft">Вся реализация</div></a>                    
                    </div>
                </div>

                <div class="newsSection" id="newsCollapse">
                    <div class="row justify-content-between">
                        
                    <?php
                        $args=array(
                        'category__in' => 3, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
                        'showposts'=>4, //сколько показать статей
                        'orderby'=>data, //сортировка по дате
                        'caller_get_posts'=>1);
                        $my_query = new wp_query($args);
                        if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) {
                        $my_query->the_post();
                    ?>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="news-wrap">
                            <a href="<?php echo get_permalink($post->ID); ?>" class="news-link-wrap"></a>
                            <div class="news-img-section">
                                <img src="<?php if(get_the_post_thumbnail_url($post->ID, array(370, 217))) echo get_the_post_thumbnail_url($post->ID, array(370, 217)); else echo(bloginfo('template_url').'/img/news_2.jpg'); ?>" alt="Новости">
                                <div class="news-bg-img"><img src="<?php bloginfo('template_url'); ?>/img/zoom-icon.svg" alt=""></div>
                            </div>                            
                            <span><?php echo $post->post_date; ?></span>
                            <h3><?php echo $post->post_title; ?></h3>                            
                        </div>                    
                    </div>                    

                    <?php } }
                    wp_reset_query(); ?>
                        <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="news-wrap">
                                <a href="#" class="news-link-wrap"></a>
                                <div class="news-img-section">
                                    <img src="<?php bloginfo('template_url'); ?>/img/car.jpg" alt="Новости">
                                    <div class="news-bg-img"><img src="<?php bloginfo('template_url'); ?>/img/zoom-icon.svg" alt=""></div>
                                </div>                            
                                <span>30.01.2019</span>
                                <h3>«Укртатнафта»: Ситуація у сфері забезпечення авіаперевезень нормалізована</h3>                            
                            </div>                    
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="news-wrap">
                                <a href="#" class="news-link-wrap"></a>
                                <div class="news-img-section">
                                    <img src="<?php bloginfo('template_url'); ?>/img/ecology_2.jpg" alt="Новости">
                                    <div class="news-bg-img"><img src="<?php bloginfo('template_url'); ?>/img/zoom-icon.svg" alt=""></div>
                                </div>                            
                                <span>30.01.2019</span>
                                <h3>«Укртатнафта»: Ситуація </h3>                            
                            </div>                    
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="news-wrap">
                                <a href="#" class="news-link-wrap"></a>
                                <div class="news-img-section">
                                    <img src="<?php bloginfo('template_url'); ?>/img/news_2.jpg" alt="Новости">
                                    <div class="news-bg-img"><img src="<?php bloginfo('template_url'); ?>/img/zoom-icon.svg" alt=""></div>
                                </div>                            
                                <span>30.01.2019</span>
                                <h3>«Укртатнафта»: Ситуація у сфері забезпечення авіаперевезень нормалізована</h3>                            
                            </div>                    
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="news-wrap">
                                <a href="#" class="news-link-wrap"></a>
                                <div class="news-img-section">
                                    <img src="<?php bloginfo('template_url'); ?>/img/news_2.jpg" alt="Новости">
                                    <div class="news-bg-img"><img src="<?php bloginfo('template_url'); ?>/img/zoom-icon.svg" alt=""></div>
                                </div>                            
                                <span>30.01.2019</span>
                                <h3>«Укртатнафта»: Ситуація у сфері забезпечення авіаперевезень нормалізована</h3>                            
                            </div>                    
                        </div> -->
                    </div>
                    <div class="row justify-content-end" id="#all-news">
                        <a href="news.html"><div class="btn-all-news animated bounceInLeft">Все новости</div></a>                    
                    </div>
                </div>
                
                <div class="newsSection" id="publicationCollapse">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="news-wrap">
                                <a href="#" class="news-link-wrap"></a>
                                <div class="news-img-section">
                                    <img src="<?php bloginfo('template_url'); ?>/img/smi_2.jpg" alt="Новости">
                                    <div class="news-bg-img"><img src="<?php bloginfo('template_url'); ?>/img/zoom-icon.svg" alt=""></div>
                                </div>                            
                                <span>30.01.2019</span>
                                <h3>«Укртатнафта»: Ситуація у сфері забезпечення авіаперевезень нормалізована</h3>                            
                            </div>                    
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="news-wrap ">
                                <a href="#" class="news-link-wrap"></a>
                                <div class="news-img-section">
                                    <img src="<?php bloginfo('template_url'); ?>/img/smi_2.jpg" alt="Новости">
                                    <div class="news-bg-img"><img src="<?php bloginfo('template_url'); ?>/img/zoom-icon.svg" alt=""></div>
                                </div>                            
                                <span>30.01.2019</span>
                                <h3>«Укртатнафта»: Ситуація </h3>                            
                            </div>                    
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="news-wrap ">
                                <a href="#" class="news-link-wrap"></a>
                                <div class="news-img-section">
                                    <img src="<?php bloginfo('template_url'); ?>/img/smi_2.jpg" alt="Новости">
                                    <div class="news-bg-img"><img src="<?php bloginfo('template_url'); ?>/img/zoom-icon.svg" alt=""></div>
                                </div>                            
                                <span>30.01.2019</span>
                                <h3>«Укртатнафта»: Ситуація у сфері забезпечення авіаперевезень нормалізована</h3>                            
                            </div>                    
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="news-wrap ">
                                <a href="#" class="news-link-wrap"></a>
                                <div class="news-img-section">
                                    <img src="<?php bloginfo('template_url'); ?>/img/smi_2.jpg" alt="Новости">
                                    <div class="news-bg-img"><img src="<?php bloginfo('template_url'); ?>/img/zoom-icon.svg" alt=""></div>
                                </div>                            
                                <span>30.01.2019</span>
                                <h3>«Укртатнафта»: Ситуація у сфері забезпечення авіаперевезень нормалізована</h3>                            
                            </div>                    
                        </div>
                        <div class="row justify-content-end" id="all-publication">
                            <a href="#"><div class="btn-all-news  animated bounceInLeft">Все публикации</div></a>                     
                        </div>
                    </div> 
                </div>                       
            </div>
        </section>

<?php
get_footer();
