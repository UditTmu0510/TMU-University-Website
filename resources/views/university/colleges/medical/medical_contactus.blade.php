@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">
        <div class="banner text-white text-center p-4 rounded" style="background-color: #001055;">
            <h1 class="tmu-page-heading"><span> Get In Touch </span></h1>
            <h3 class="text-white">For any query related to Teerthanker Mahaveer Medical College & Research Centre., you may drop message or contact the
                officials at college.</h3>
        </div>

        @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
        @endif


        @if ($errors->has('captcha'))
        <span class="text-danger">{{ $errors->first('captcha') }}</span>
        @endif

        <div class="container contact-section">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="tmu-text-primary"><span>Need more</span><span> Information</span></h3>
                    <p>Have questions or feedback?</p>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="first_name" placeholder="First name" required>
                            </div>
                            <div class="col">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Last name" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="emailAddress" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="emailAddress" name="email" placeholder="Email address" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Leave us a message" required></textarea>
                        </div>

                        <!-- Hidden field to capture college name -->
                        <input type="hidden" name="cd_id" value="2" />

                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="privacyPolicy" required>
                            <label class="form-check-label" for="privacyPolicy">I agree to the privacy policy</label>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6LeIuvYqAAAAADGg4bMbK1MYjiFjIxHdvUg1yH_Q"></div>
                        <br />


                        <button type="submit" class="tmu-btn btn-4">Send</button>
                    </form>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-center">
                    <div class="contact-image"
                        style="background-image: url('https://img.freepik.com/free-photo/top-view-chat-bubbles-with-telephone-receiver-copy-space_23-2148796078.jpg');">
                    </div>
                    <div class="contact-info w-100 mt-3">
                        <div>
                            <!-- <img src="email-icon.png" alt="Email Icon"> -->
                            <div>
                                <span>Email</span>
                                <span class="text-break">principal.medical@tmu.ac.in</span>
                            </div>
                        </div>
                        <div>
                            <div>
                                <span>Phone</span>
                                <span>(+91) 591-2476815</span>
                            </div>
                        </div>
                        <div>
                            <div>
                                <span>Address</span>
                                <span>Delhi Road, Moradabad 244001, UP</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info w-100 mt-3">
                        <div>
                            <div>
                                <span>Monday - Friday</span>
                                <span>09:00 Am to 05:00 Pm</span>
                            </div>
                        </div>
                        <div>
                            <div>
                                <span>Saturday</span>
                                <span>09:00 Am to 02:00 Pm</span>
                            </div>
                        </div>
                        <div>
                            <div>
                                <span>Sunday</span>
                                <span>Closed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>

@endsection