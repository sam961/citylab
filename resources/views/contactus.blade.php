@extends('layouts.app')


@section('stylesheets')

@endsection

@section('title', 'Contact us')


@section('content')



    <section class="home-slider inner-page owl-carousel">
        <div class="slider-item" style="background-image: url('citylab/img/slider-2.jpg');">

            <div class="container">
                <div class="row slider-text align-items-center">
                    <div class="col-md-7 col-sm-12 element-animate">
                        <h1>Contact Us</h1>
                        <p>Our goal is to provide you with quality radiology services in a comfortable and convenient setting. We are striving to improve the service we offer and welcome your feedback and suggestions. Please send us your comments and/or suggestions, provide us with your feedback, by filling out the form below.</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- END slider -->


    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 element-animate">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control form-control-lg" id="fname">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control form-control-lg" id="lname">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Write Message</label>
                                <textarea name="message" id="message" class="form-control form-control-lg" cols="30" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-lg btn-block">
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 element-animate">

                    <h5 class="text-uppercase mb-3">Address</h5>

                    <p class="mb-5">Ground floor<br> Yassmine building <br> Behind Galaxy Mall,Joseph Jabre street <br>Hazmieh,Gallery Semaan</p>

                    <h5 class="text-uppercase mb-3">Email Us At</h5>
                    <p class="mb-5"><a href="/cdn-cgi/l/email-protection#5e373038311e27312b2c3a31333f3730703d3133"><span class="__cf_email__" data-cfemail="177e797178576e78626573787a767e793974787a">ziadkd@citylablb.com</span></a></p>

                    <h5 class="text-uppercase mb-3">Call Us</h5>
                    <p class="mb-5">Phone: +961 1 27 27 14 <br> Mobile: +961 1 27 27 14 <br> Fax: +961 1 27 27 14</p>

                </div>
            </div>
        </div>
    </section>



    {{--<a href="#" class="cta-link element-animate" data-aniamte-effect="fadeIn" data-toggle="modal" data-target="#modalAppointment">--}}
        {{--<span class="sub-heading">Ready to Visit?</span>--}}
        {{--<span class="heading">Make an Appointment</span>--}}
    {{--</a>--}}
    <!-- END cta-link -->


    <!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAppointmentLabel">Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <label for="appointment_name" class="text-black">Full Name</label>
                            <input type="text" class="form-control" id="appointment_name">
                        </div>
                        <div class="form-group">
                            <label for="appointment_email" class="text-black">Email</label>
                            <input type="text" class="form-control" id="appointment_email">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="appointment_date" class="text-black">Date</label>
                                    <input type="text" class="form-control" id="appointment_date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="appointment_time" class="text-black">Time</label>
                                    <input type="text" class="form-control" id="appointment_time">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="appointment_message" class="text-black">Message</label>
                            <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')


@endsection