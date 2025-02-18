@extends('layouts.university.colleges.physical_education_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">
       <div class="banner text-white text-center p-4 rounded" style="background-color: #001055;">
            <h1 class="tmu-page-heading"><span> Get In Touch </span></h1>
            <h3 class="text-white">For any query related to College of Physical Education, you may drop message or contact the
                officials at college.</h3>
        </div>


        @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
        @endif

        <div class="container contact-section">
            <div class="row">
                <div class="col-md-6">
            <h3 class="tmu-text-primary"><span>Need more</span><span> Information</span></h3>
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
                        <input type="hidden" name="cd_id" value="18" />

                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="privacyPolicy" required>
                            <label class="form-check-label" for="privacyPolicy">I agree to the privacy policy</label>
                        </div>
                               <div class="g-recaptcha" data-sitekey="6LdIV1AqAAAAAAsXbbYGGZSQF2fkL-QbjH43GOPh"></div>
                              <br />
                        <button type="submit" class="tmu-btn btn-4">Send</button>
                    </form>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-center">
                    <div class="contact-image">
                        <img class="contact-image" src="https://img.freepik.com/free-photo/top-view-chat-bubbles-with-telephone-receiver-copy-space_23-2148796078.jpg">
                    </div>
                    <div class="contact-info w-100 mt-3">
                        <div>
                            <!-- <img src="email-icon.png" alt="Email Icon"> -->
                            <div>
                                <span>Email</span>
                                <span class="text-break">principal.physicaleducation@tmu.ac.in</span>
                            </div>
                        </div>
                        <div>
                            <!-- <img src="phone-icon.png" alt="Phone Icon"> -->
                            <div>
                                <span>Phone</span>
                                <span>+91-9837469801</span>
                            </div>
                        </div>
                        <div>
                            <!-- <img src="address-icon.png" alt="Address Icon"> -->
                            <div>
                                <span>Address</span>
                                <span>Delhi Road, Moradabad - 244001 (Uttar Pradesh)</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info w-100 mt-3">
                        <div>
                            <div>
                                <span>Working Hours</span>
                            </div>
                        </div>
                        <div>
                            <div>
                                <span> Monday - Saturday 9:00am to 4:45pm </span>
                            </div>
                        </div>
                        <div>
                            <div>Sunday - Closed</div>
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