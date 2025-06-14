@extends('layouts.university.iqac_with_sidebar')
@section('content')



<div class="col-12 col-md-9 col-lg-10 mt-3 mt-sm-0 pt-3 pt-md-5 px-4">
<section id="contact" class="contact">
                        <div class="container" data-aos="fade-up">
                        <h1 class="tmu-text-primary tmu-page-heading"><span> Contact </span><span> Us</span></h1>
                            <div class="container">
                                <div class="row">
                                    <h3 class="mb-2 pb-0 tmu-text-primary"><span>Contact </span><span> Person</span></h3>
                                    <h4 class="pb-0 mb-0 tmu-text-primary"><b>Dr. Nishith Kumar </b></h4>
                                    <p> Director- IQAC Cell</p>
                                    <p>
                                        <i class="fa-solid fa-location-dot"></i> &nbsp<b>Location:</b> Teerthanker
                                        Mahaveer University, Moradabad (U.P.) 244001 <br>
                                        <i class="fa-solid fa-phone"></i> &nbsp<b>Email:</b> director.iqac@tmu.ac.in<br>
                                        <i class="fa-solid fa-envelope"></i> &nbsp<b>Call:</b> +91-591-2476813,
                                        +91-9997501313<br>
                                    </p>
                                </div>
                            </div>
                            <div class="row gx-lg-0 gy-4 mt-3">
                                <div class="col-lg-12">
                                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                        <h3 class="text-left mt-1 mb-4 tmu-text-primary"><span> NEED MORE </span><span>
                                            INFORMATION? </span></h3>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Your Name" required>
                                            </div>
                                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Your Email" required>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="contact" id="contact"
                                                placeholder="Enter your Number" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control" name="message" rows="7" placeholder="Message"
                                                required></textarea>
                                        </div>
                                        <div style="text-align: center;">
                                            <button class="tmu-btn btn-1 py-2 mt-4">Send Us!</button>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End Contact Form -->
                        </div>
                    </section><!-- End Contact Section -->
                </div>
            </div>
        </div>
    </div>
</section><!-- #content end -->





@endsection