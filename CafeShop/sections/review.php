<section class="review" id="review">

    <h3 class="sub-heading" data-aos="fade-up"> customer's review </h3>
    <h1 class="heading" data-aos="fade-up"> what they say </h1>

    <!-- Static rating overview -->
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- Average rating and stars -->
                    <div class="col-sm-4 text-center">
                        <h1 class="text-warning mt-4 mb-4">
                            <b><span id="average_rating">4.5</span> / 5</b>
                        </h1>
                        <div class="mb-3">
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star-half-alt text-warning mr-1"></i>
                        </div>
                        <h3><span id="total_review">25</span> Reviews</h3>
                    </div>

                    <!-- Progress bars for star ratings -->
                    <div class="col-sm-4">
                        <p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress-label-right">(18)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width: 72%"></div>
                            </div>
                        </p>
                        <p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress-label-right">(5)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width: 20%"></div>
                            </div>
                        </p>
                        <p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress-label-right">(1)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width: 4%"></div>
                            </div>
                        </p>
                        <p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress-label-right">(0)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width: 0%"></div>
                            </div>
                        </p>
                        <p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress-label-right">(1)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width: 4%"></div>
                            </div>
                        </p>
                    </div>

                  
                    <div class="col-sm-4 text-center">
                        <h3 class="mt-4 mb-3" name="add_review" id="add_review" class="btn">Reviews Here</h3>
                        <!-- <button type="button" name="add_review" id="add_review" class="btn">Review</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Static reviews slider -->
    <div class="swiper-container review-slider">
        <div class="swiper-wrapper" id="reviews_swiper">
            <!-- Static review 1 -->
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <div class="col-sm-2">
                        <div class="rounded-circle pt-2 pb-2">
                            <h2 class="text-center">J</h2>
                        </div>
                    </div>
                    <div class="user-info">
                        <h3>Akash Kumar</h3>
                        <div class="stars">
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star-half-alt text-warning mr-1"></i>
                        </div>
                        <h4>2024-09-15</h4>
                    </div>
                </div>
                <p>The service was excellent and the support team was always there to help. Highly recommend!</p>
            </div>

            <!-- Static review 2 -->
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <div class="col-sm-2">
                        <div class="rounded-circle pt-2 pb-2">
                            <h2 class="text-center">M</h2>
                        </div>
                    </div>
                    <div class="user-info">
                        <h3>Siddharth Menon</h3>
                        <div class="stars">
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star text-warning mr-1"></i>
                        </div>
                        <h4>2024-10-01</h4>
                    </div>
                </div>
                <p>Amazing experience, and I received everything on time. Couldn't ask for better!</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <div class="col-sm-2">
                        <div class="rounded-circle pt-2 pb-2">
                            <h2 class="text-center">M</h2>
                        </div>
                    </div>
                    <div class="user-info">
                        <h3>Nilabh Anand</h3>
                        <div class="stars">
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star text-warning mr-1"></i>
                            <i class="fas fa-star text-warning mr-1"></i>
                        </div>
                        <h4>2024-10-01</h4>
                    </div>
                </div>
                <p>Amazing experience, and I received everything on time. Couldn't ask for better!</p>
            </div>

            <!-- Add more static reviews as needed -->
        </div>
    </div>
</section>

<!-- Pop-up modal for review submission -->
<div id="review_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Submit Review</h5>
            </div>
            <div class="modal-body">
                <h4 class="text-center mt-2 mb-4 star_rating">
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                </h4>
                <div class="form-group review_input">
                    <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
                </div>
                <div class="form-group review_input">
                    <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
                </div>
                <div class="form-group text-center mt-4">
                    <button type="button" class="btn" id="save_review">Submit</button>
                    <button type="button" class="btn btn-default" id="cancel_review">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
