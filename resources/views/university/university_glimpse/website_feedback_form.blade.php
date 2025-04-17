@extends('layouts.university.departments.about_tmu_with_sidebar')
@section('content')


<!-- Feedback Form -->
<div class="feedback-form">
  <h2 class="text-center tmu-text-primary"> <span> Website Feedback</span> <span> Form</span></h2>
  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif

  <form id="feedbackForm" action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Name Field (Required) -->
    <div class="mb-4">
      <label for="userName" class="form-label">Name <span style="color: red;">*</span></label>
      <input type="text" id="userName" name="name" class="form-control" placeholder="Enter your name" required>
    </div>

    <!-- Phone Field (Optional) -->
    <div class="mb-4">
      <label for="userPhone" class="form-label">Phone Number (Optional)</label>
      <input type="text" id="userPhone" name="phone" class="form-control" placeholder="Enter your phone number ">
    </div>

    <!-- Feedback Text Area -->
    <div class="mb-4">
      <label for="userFeedback" class="form-label">Your feedback <span style="color: red;">*</span></label>
      <textarea id="userFeedback" name="feedback" class="form-control" rows="4" placeholder="Anything you'd like to add? Your input is valuable to us." required></textarea>
    </div>

    <!-- Image Uploads (Optional) -->
    <div class="mb-4">
      <label for="userImage1" class="form-label">Upload Screenshot (Optional)</label>
      <input type="file" id="userImage1" name="image_1" class="form-control">
    </div>
    <div class="mb-4">
      <input type="file" id="userImage2" name="image_2" class="form-control">
    </div>

    <!-- Submit Button -->
    <div class="text-center">
      <button type="submit" class="tmu-btn btn-1 py-1 px-3 py-xl-2">Send Feedback</button>
    </div>
  </form>

  <p class="mt-4 text-center">
    If you have any additional suggestions, or if you would like to discuss any specific issues regarding the website, please feel free to get in touch with our website team at:
    <br>
    <strong>Email: website@tmu.ac.in</strong>
  </p>
</div>

<!-- Thank You Popup -->
<div id="thankYouPopup" class="thank-you-popup">
  <h4>Thank You!</h4>
  <p>Your feedback has been submitted successfully.</p>
  <button onclick="closePopup()" class="btn btn-success">Close</button>
</div>

</div>

@endsection