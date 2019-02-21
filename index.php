
<?php get_header(); ?>

<!-- carousel start-->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/slider-img-1.png" alt="First slide">
            <div class="carousel-overlay">
                    <div class="container d-flex">
                            <div class="carousel-caption d-none d-md-block">
                            <h1>Sed ut perspiciatis</h1>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo 
                                    ligula eget dolor. Aenean massa.</p>
                            <a href="#" class="btn btn-accent">Learn More</a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/slider-img-2.png" alt="Second slide">
            <div class="carousel-overlay">
                <div class="container d-flex">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Sed ut perspiciatis</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo 
                                ligula eget dolor. Aenean massa.</p>
                        <a href="#" class="btn btn-secondary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/slider-img-3.png" alt="Third slide">
            <div class="carousel-overlay">
                <div class="container d-flex">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Sed ut perspiciatis</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo 
                                ligula eget dolor. Aenean massa.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <div class="icon-wrapper">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </div>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <div class="icon-wrapper">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </div>
        <span class="sr-only">Next</span>
    </a>
</div> <!-- carousel end-->

<!-- first article -->
<div class="container right-container">
    <div class="article">
        <h3>Sed ut perspiciatis unde</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla...</p>
        <a href="#" class="btn btn-primary">Read More</a>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/article1-img.png" class="image-right img-fluid">
</div> <!-- first article end -->

<!-- services section -->
<div id="services-section">
    <div class="container text-center">
        <h3 class="text-white">We can help you with</h3>
    </div>
</div> <!-- services section end -->
<!-- services carousel -->
<div id="services-carousel" class="carousel slide" data-ride="carousel" slides="5">
    <div class="services-carousel-inner">
        <div class="services-carousel-item-wrapper">
            <div class="services-col">
                <div class="service-item">
                    <div class="service-overlay" id="service1"></div>
                    <div class="service-caption">
                        <h4>Event Consulting</h4>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-overlay" id="service2"></div>
                    <div class="service-caption">
                        <h4>Venue selection & management</h4>
                    </div>
                </div>
            </div>
            <div class="services-col">
                <div class="service-item">
                    <div class="service-overlay" id="service3"></div>
                    <div class="service-caption">
                        <h4>Creative</h4>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-overlay" id="service4"></div>
                    <div class="service-caption">
                        <h4>Event Production</h4>
                    </div>
                </div>
            </div>
            <div class="services-col">
                <div class="service-item">
                    <div class="service-overlay" id="service5"></div>
                    <div class="service-caption">
                        <h4>Design, print, fabrication & set up</h4>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-overlay" id="service6"></div>
                    <div class="service-caption">
                        <h4>Photography & videography</h4>
                    </div>
                </div>
            </div>
            <div class="services-col">
                <div class="service-item">
                    <div class="service-overlay" id="service7"></div>
                    <div class="service-caption">
                        <h4>Event Marketing & pr</h4>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-overlay" id="service8"></div>
                    <div class="service-caption">
                        <h4>Entertainment & talent booking</h4>
                    </div>
                </div>
            </div>
            <div class="services-col">
                <div class="service-item">
                    <div class="service-overlay" id="service9"></div>
                    <div class="service-caption">
                        <h4>Travel & Transportation</h4>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-overlay" id="service10"></div>
                    <div class="service-caption">
                        <h4>Post Production</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev services-carousel-controls" href="#services-carousel" role="button" data-slide="prev" id="prev">
        <div class="icon-wrapper">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </div>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next services-carousel-controls" href="#services-carousel" role="button" data-slide="next" id="next">
            <div class="icon-wrapper">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </div>
        <span class="sr-only">Next</span>
    </a>
</div> <!-- services carousel end -->

<div id="post-service-section">
    <div class="container">
        <div>
            <h3 class="mb-3">Sed ut perspiciatis unde</h3>
            <p>Natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid</p>
            <a href="#" class="btn btn-transparent border-white mt-2">Read More</a>
        </div>
    </div>
</div>

<!-- second article -->
<div class="container right-container">
    <div class="article">
        <h3>Sed ut perspiciatis unde</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla...</p>
        <a href="#" class="btn btn-primary">Read More</a>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/article2-img.png" class="image-right img-fluid">
</div> <!-- second article end -->

<div id="pre-footer-section">
    <div class="container">
        <span class="pre-footer-text m-2">Learn More about our Services</span>
        <a href="#" class="btn m-2 btn-default bg-white text-accent d-inline-block">Click Here</a>
    </div>
</div>

<?php get_footer(); ?>