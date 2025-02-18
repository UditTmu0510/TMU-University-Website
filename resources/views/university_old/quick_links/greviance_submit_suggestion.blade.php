@extends('layouts.university.departments.greviances_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/portal.css')}}" >


<div class="main-content">
  <div class="container">
    <div class="row justify-content-center">
      <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Write to</span><span> Us</span></h1>
      <div class="col-lg-12">
        <div class="card shadow-sm">
          <div class="card-body p-4">
            <div class="formbold-main-wrapper">
              <div class="formbold-form-wrapper">
                <form action="" method="POST">
                  <div class="row">
                    <div class="col-lg-12">
                      <h3 class="tmu-text-primary"><span>Need More </span><span> Information?</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-3">
                      <div class="formbold-mb-5">
                        <label for="name" class="formbold-form-label">Your Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your Full Name" class="formbold-form-input" />
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-3">
                      <div class="formbold-mb-5">
                        <label for="name" class="formbold-form-label">Father's Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your Father's Name" class="formbold-form-input" />
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-3">
                      <div class="formbold-mb-5">
                        <label for="name" class="formbold-form-label">Your Enrolment</label>
                        <input type="text" name="text" id="text" placeholder="Enter your Enrolment No" class="formbold-form-input" />
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-3">
                      <div class="formbold-mb-5">
                        <label for="name" class="formbold-form-label">Programme Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your programme Name" class="formbold-form-input" />
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-3">
                      <div class="formbold-mb-5">
                        <label for="phone" class="formbold-form-label">Phone Number</label>
                        <input type="number" name="phone" id="phone" placeholder="Enter your phone number" class="formbold-form-input" />
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-3">
                      <div class="formbold-mb-5">
                        <label for="email" class="formbold-form-label">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" class="formbold-form-input" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 mb-3">
                      <div class="formbold-mb-5">
                        <label for="text" class="formbold-form-label">College Name</label>
                        <input type="text" name="text" id="name" placeholder="Enter your College Name" class="formbold-form-input" />
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-3">
                      <div class="formbold-mb-5">
                        <label for="text" class="formbold-form-label">Subject</label>
                        <input type="text" name="text" id="subject" placeholder="Enter the Subject" class="formbold-form-input" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 mb-3">
                      <div class="formbold-mb-5">
                        <label for="text" class="formbold-form-label">Message</label>
                        <input type="message" name="message" id="message " placeholder="write your message" class="formbold-form-input" />
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <button type="submit" class="tmu-btn btn-1 py-2 mt-3 text-center">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



@endsection