@extends('layouts.app')


@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ URL::to('citylab-old') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('citylab-old') }}">
@endsection

@section('title', 'News')

@section('content')

    <!-- News -->

    <div class="news">
        <div class="container">
            <div class="row">

                <!-- News Posts -->
                <div class="col-lg-8">
                    <div class="news_posts">

                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_image"><img src="citylab/images/news_1.jpg" alt=""></div>
                            <div class="news_post_content">
                                <div class="news_post_date"><a href="#">17 April, 2018</a></div>
                                <div class="news_post_title"><a href="#">10 Tips on how to live a healthy life</a></div>
                                <div class="news_post_info">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="#">by Jane Smith</a></li>
                                        <li><a href="#">April 25, 2018</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Donec lorem maximus malesuada lorem max imus mauris. Proin vitae tortor nec risus tristiq ue efficitur. Aliquam luctus est urna, id aliqu am orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris.</p>
                                </div>
                                <div class="button news_post_button"><a href="#"><span>read more</span><span>read more</span></a></div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_image"><img src="citylab/images/news_2.jpg" alt=""></div>
                            <div class="news_post_content">
                                <div class="news_post_date"><a href="#">17 April, 2018</a></div>
                                <div class="news_post_title"><a href="#">New lab tests that could save your life</a></div>
                                <div class="news_post_info">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="#">by Jane Smith</a></li>
                                        <li><a href="#">April 25, 2018</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Donec lorem maximus malesuada lorem max imus mauris. Proin vitae tortor nec risus tristiq ue efficitur. Aliquam luctus est urna, id aliqu am orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris.</p>
                                </div>
                                <div class="button news_post_button"><a href="#"><span>read more</span><span>read more</span></a></div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_image"><img src="citylab/images/news_3.jpg" alt=""></div>
                            <div class="news_post_content">
                                <div class="news_post_date"><a href="#">17 April, 2018</a></div>
                                <div class="news_post_title"><a href="#">Maternity can be a wonderful thing</a></div>
                                <div class="news_post_info">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="#">by Jane Smith</a></li>
                                        <li><a href="#">April 25, 2018</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Donec lorem maximus malesuada lorem max imus mauris. Proin vitae tortor nec risus tristiq ue efficitur. Aliquam luctus est urna, id aliqu am orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris.</p>
                                </div>
                                <div class="button news_post_button"><a href="#"><span>read more</span><span>read more</span></a></div>
                            </div>
                        </div>

                        <div class="pagination">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <li class="active"><a href="#">01.</a></li>
                                <li><a href="#">02.</a></li>
                                <li><a href="#">03.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="news_sidebar">

                        <!-- Search -->
                        <div class="sidebar_search">
                            <form action="#" id="sidebar_search" class="sidebar_search">
                                <input type="text" class="sidebar_search_input" placeholder="Search" required="required">
                                <button class="sidebar_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Latest News -->
                        <div class="sidebar_latest">
                            <div class="sidebar_title">Latest News</div>
                            <div class="sidebar_latest_container">

                                <!-- Latest News Post -->
                                <div class="latest d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="latest_image"><img src="citylab/images/latest_1.jpg" alt=""></div></div>
                                    <div class="latest_content">
                                        <div class="latest_title"><a href="news.html">A simple blog post</a></div>
                                        <div class="latest_info">
                                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                                <li><a href="#">by Jane Smith</a></li>
                                                <li><a href="#">April 25, 2018</a></li>
                                            </ul>
                                        </div>
                                        <div class="latest_comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </div>

                                <!-- Latest News Post -->
                                <div class="latest d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="latest_image"><img src="citylab/images/latest_2.jpg" alt=""></div></div>
                                    <div class="latest_content">
                                        <div class="latest_title"><a href="news.html">A new way to see things</a></div>
                                        <div class="latest_info">
                                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                                <li><a href="#">by Jane Smith</a></li>
                                                <li><a href="#">April 25, 2018</a></li>
                                            </ul>
                                        </div>
                                        <div class="latest_comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </div>

                                <!-- Latest News Post -->
                                <div class="latest d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="latest_image"><img src="citylab/images/latest_3.jpg" alt=""></div></div>
                                    <div class="latest_content">
                                        <div class="latest_title"><a href="news.html">Why is Pharma industry so big?</a></div>
                                        <div class="latest_info">
                                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                                <li><a href="#">by Jane Smith</a></li>
                                                <li><a href="#">April 25, 2018</a></li>
                                            </ul>
                                        </div>
                                        <div class="latest_comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar_categories">
                            <div class="sidebar_title">Categories</div>
                            <div class="categories">
                                <ul>
                                    <li><a href="#"><div class="d-flex flex-row align-items-center justify-content-start">
                                                <div>Medicine</div>
                                                <div class="ml-auto">(11)</div>
                                            </div></a></li>
                                    <li><a href="#"><div class="d-flex flex-row align-items-center justify-content-start">
                                                <div>Pharmacy</div>
                                                <div class="ml-auto">(23)</div>
                                            </div></a></li>
                                    <li><a href="#"><div class="d-flex flex-row align-items-center justify-content-start">
                                                <div>Uncategorized</div>
                                                <div class="ml-auto">(6)</div>
                                            </div></a></li>
                                    <li><a href="#"><div class="d-flex flex-row align-items-center justify-content-start">
                                                <div>Doctors</div>
                                                <div class="ml-auto">(9)</div>
                                            </div></a></li>
                                    <li><a href="#"><div class="d-flex flex-row align-items-center justify-content-start">
                                                <div>Innovations</div>
                                                <div class="ml-auto">(15)</div>
                                            </div></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Appointment -->
                        <div class="info_form_container">
                            <div class="info_form_title">Make an Appointment</div>
                            <form action="#" class="info_form" id="info_form">
                                <select name="info_form_dep" id="info_form_dep" class="info_form_dep info_input info_select">
                                    <option>Department</option>
                                    <option>Department</option>
                                    <option>Department</option>
                                </select>
                                <select name="info_form_doc" id="info_form_doc" class="info_form_doc info_input info_select">
                                    <option>Doctor</option>
                                    <option>Doctor</option>
                                    <option>Doctor</option>
                                </select>
                                <input type="text" class="info_input" placeholder="Name" required="required">
                                <input type="text" class="info_input" placeholder="Phone No">
                                <button class="info_form_button">make an appointment</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('scripts')

    <script src="citylab/js/jquery-3.3.1.min.js"></script>
    <script src="citylab/styles/bootstrap4/popper.js"></script>
    <script src="citylab/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="citylab/plugins/greensock/TweenMax.min.js"></script>
    <script src="citylab/plugins/greensock/TimelineMax.min.js"></script>
    <script src="citylab/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="citylab/plugins/greensock/animation.gsap.min.js"></script>
    <script src="citylab/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="citylab/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="citylab/plugins/easing/easing.js"></script>
    <script src="citylab/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="citylab/js/news.js"></script>



@endsection