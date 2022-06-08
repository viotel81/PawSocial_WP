<?php /* Template Name: Home */?>

<?php
get_header();
?>
<section class="showcase text-center text-md-start">
    <div class="container pb-sm-3 py-md-5">
        <div class="row g-5 align-items-center justify-content-between">
            <div class="col-md-7 mb-md-3">
                <?php
                the_content();
                ?>
                <button id="modalBtn" class="btn-lg">Subscribe</button>
                <div id="simpleModal" class="modal">
                    <div class="modal-content">
                        <span id="closeBtn">&times;</span><br />
                        <p>
                            Subscribe to our newsletter and stay updated with Paw Social
                            news and promotions!
                        </p>
                        <form class="newsletter">
                            <div class="mb-3">
                                <input type="email" class="newsletter-email" id="email" name="email" placeholder="Enter email" required>
                            </div>
                            <div>
                                <input type="submit" class="newsletter-btn" id="submit" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img class="img-fluid d-none d-sm-block" src="<?php the_post_thumbnail_url(); ?>">
            </div>
        </div>
    </div>
</section>

<section class="services py-5">
    <div class="container">
        <h2 class="text-center">Our Services</h2>
        <p class="lead text-center mb-5">
            We have an extensive list of services we provide at Paw Social and in
            the comfort of your homes.
        </p>
        <div class="cards row text-center g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="fa fa-paw"></i>
                        </div>
                        <h3 class="card-title mb-3">Call Us In</h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, delectus velit? Quasi, enim. Sequi at, temporibus quis eum nemo vero!
                        </p>
                        <a href="services.php#call-us-in" class="btn-lg">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="fa fa-paw"></i>
                        </div>
                        <h3 class="card-title mb-3">Bring Them In</h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic aliquam, iusto assumenda vitae voluptates quas consequatur excepturi alias laudantium soluta.
                        </p>
                        <a href="services.php#bring-them-in" class="btn-lg">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="fa fa-paw"></i>
                        </div>
                        <h3 class="card-title mb-3">Fancy Pampering?</h3>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, qui.
                        </p>
                        <a href="services.php#pampering" class="btn-lg">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="fa fa-paw"></i>
                        </div>
                        <h3 class="card-title mb-3">Paw Lodgings</h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, delectus velit? Quasi, enim. Sequi at, temporibus quis eum nemo vero!
                        </p>
                        <a href="services.php#call-us-in" class="btn-lg">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials py-5 px-sm-5">
    <div class="container">
        <h2 class="text-center pb-4">What Our Paw Owners Say</h2>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="card px-4">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="fa fa-paw fa-x"></i>
                            </div>
                            <h4 class="card-title pt-2">My saviours during long business trips!</h4>
                            <p class="card-text"></p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam voluptatum impedit repellendus ex quo et, obcaecati vero magnam iure unde architecto quos id ut fuga eos repellat minima magni laboriosam!
                            </p>
                            <div class="author">
                                <img src="https://randomuser.me/api/portraits/men/50.jpg" class="rounded-circle m-2" alt="" />
                            </div>
                            <div class="card-author">
                                <strong class="">Patrick Black,</strong>
                                <small class="">Contractor</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="20000">
                    <div class="card px-4">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="fa fa-paw fa-x"></i>
                            </div>
                            <h4 class="card-title pt-2">Best friends of Fluffy!</h4>
                            <p class="card-text"></p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam voluptatum impedit repellendus ex quo et, obcaecati vero magnam iure unde architecto quos id ut fuga eos repellat minima magni laboriosam!
                            </p>
                            <div class="author">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle m-2" alt="" />
                            </div>
                            <div class="card-author">
                                <strong class="">Jenny Stark,</strong>
                                <small class="">CEO</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="30000">
                    <div class="card px-4">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="fa fa-paw fa-x"></i>
                            </div>
                            <h3 class="card-title pt-2">Hopelessly in Love!</h3>
                            <p class="card-text"></p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam voluptatum impedit repellendus ex quo et, obcaecati vero magnam iure unde architecto quos id ut fuga eos repellat minima magni laboriosam!
                            </p>
                            <div class="author">
                                <img src="https://randomuser.me/api/portraits/men/25.jpg" class="rounded-circle m-2" alt="" />
                            </div>
                            <div class="card-author">
                                <strong class="">John Doe,</strong>
                                <small class="">IT Project Manager</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card px-4">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="fa fa-paw fa-x"></i>
                            </div>
                            <h4 class="card-title pt-2">Can't live without these guys!</h4>
                            <p class="card-text"></p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint sunt, asperiores amet laboriosam facilis dolorem laborum neque officiis! Placeat, esse!
                            </p>
                            <div class="author">
                                <img src="https://randomuser.me/api/portraits/women/55.jpg" class="rounded-circle m-2" alt="" />
                            </div>
                            <div class="card-author">
                                <strong class="">Kelly Strong,</strong>
                                <small class="">Architect</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section class="entertainers py-5 px-sm-5">
    <div class="container">
        <h2 class="text-center">Entertainers</h2>
        <p class="lead text-center mb-5">
            Our entertainers are trained on all the basic and extended needs of
            cats and dogs of all breeds and have worked in the field for 2+ years.
        </p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/22.jpg" class="rounded-circle mb-3" alt="" />
                        <h3 class="card-title mb-3">John Smith</h3>
                        <p class="card-text">
                            John is primarily focused on daycare for dogs and is a
                            seasoned dog entertainer and coach.
                        </p>
                        <a href="#"><i class="bi bi-twitter mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram mx-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/women/30.jpg" class="rounded-circle mb-3" alt="" />
                        <h3 class="card-title mb-3">Helen Doe</h3>
                        <p class="card-text">
                            Helen has a vet degree and can respond to all unusual
                            pet needs that can arise while in our care.
                        </p>
                        <a href="#"><i class="bi bi-twitter mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram mx-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/20.jpg" class="rounded-circle mb-3" alt="" />
                        <h3 class="card-title mb-3">David Black</h3>
                        <p class="card-text">
                            David brings extensive experience from police force and can
                            make friends even with the naughtiest of pets.
                        </p>
                        <a href="#"><i class="bi bi-twitter mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram mx-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/women/40.jpg" class="rounded-circle mb-3" alt="" />
                        <h3 class="card-title mb-3">Sarah White</h3>
                        <p class="card-text">
                            Sarah is an avid cat lover and knows all the play techniques
                            to keep your fur balls occupied.
                        </p>
                        <a href="#"><i class="bi bi-twitter mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram mx-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>