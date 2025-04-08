@extends('layouts.university.departments.about_tmu_with_sidebar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University Website Feedback Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
    }
    .feedback-form {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 500px;
      margin: 50px auto;
    }
    .form-check-label {
      font-size: 14px;
    }
    .thank-you-popup {
      display: none;
      text-align: center;
      padding: 30px;
      border-radius: 10px;
      background-color: #d4edda;
      color: #155724;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 50%;
      max-width: 400px;
      z-index: 9999;
    }
    .thank-you-popup h4 {
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

  <!-- Feedback Form -->
  <div class="feedback-form">
    <h2 class="text-center">University Website Feedback</h2>
    <form id="feedbackForm">
      
      <!-- Mobile Number Field (Compulsory) -->
      <div class="mb-4">
        <label for="mobileNumber" class="form-label">Mobile Number</label>
        <input type="text" id="mobileNumber" name="mobileNumber" class="form-control" placeholder="Enter your mobile number" required>
      </div>
      
      <!-- Website Design Rating -->
      <div class="mb-4">
        <label class="form-label">How would you rate the overall design of the website?</label>
        <div class="d-flex justify-content-between">
          <input type="radio" id="designExcellent" name="design" value="Excellent" class="form-check-input">
          <label for="designExcellent" class="form-check-label">Excellent</label>
          
          <input type="radio" id="designGood" name="design" value="Good" class="form-check-input">
          <label for="designGood" class="form-check-label">Good</label>
          
          <input type="radio" id="designAverage" name="design" value="Average" class="form-check-input">
          <label for="designAverage" class="form-check-label">Average</label>
          
          <input type="radio" id="designPoor" name="design" value="Poor" class="form-check-input">
          <label for="designPoor" class="form-check-label">Poor</label>
        </div>
      </div>

      <!-- Website Navigation Rating -->
      <div class="mb-4">
        <label class="form-label">Was the website easy to navigate?</label>
        <div class="d-flex justify-content-between">
          <input type="radio" id="navEasy" name="navigation" value="Very Easy" class="form-check-input">
          <label for="navEasy" class="form-check-label">Very Easy</label>
          
          <input type="radio" id="navNormal" name="navigation" value="Easy" class="form-check-input">
          <label for="navNormal" class="form-check-label">Easy</label>
          
          <input type="radio" id="navNeutral" name="navigation" value="Neutral" class="form-check-input">
          <label for="navNeutral" class="form-check-label">Neutral</label>
          
          <input type="radio" id="navDifficult" name="navigation" value="Difficult" class="form-check-input">
          <label for="navDifficult" class="form-check-label">Difficult</label>
          
          <input type="radio" id="navVeryDifficult" name="navigation" value="Very Difficult" class="form-check-input">
          <label for="navVeryDifficult" class="form-check-label">Very Difficult</label>
        </div>
      </div>

      <!-- Information Finding -->
      <div class="mb-4">
        <label class="form-label">Did you find the information you were looking for?</label>
        <div class="form-check">
          <input type="radio" id="infoFoundYes" name="infoFound" value="Yes" class="form-check-input">
          <label class="form-check-label" for="infoFoundYes">Yes</label>
        </div>
        <div class="form-check">
          <input type="radio" id="infoFoundNo" name="infoFound" value="No" class="form-check-input">
          <label class="form-check-label" for="infoFoundNo">No</label>
        </div>
      </div>

      <!-- Content Clarity Rating -->
      <div class="mb-4">
        <label class="form-label">How clear was the content on the website?</label>
        <div class="d-flex justify-content-between">
          <input type="radio" id="contentClear" name="contentClarity" value="Very Clear" class="form-check-input">
          <label for="contentClear" class="form-check-label">Very Clear</label>
          
          <input type="radio" id="contentClearer" name="contentClarity" value="Clear" class="form-check-input">
          <label for="contentClearer" class="form-check-label">Clear</label>
          
          <input type="radio" id="contentSomewhatClear" name="contentClarity" value="Somewhat Clear" class="form-check-input">
          <label for="contentSomewhatClear" class="form-check-label">Somewhat Clear</label>
          
          <input type="radio" id="contentUnclear" name="contentClarity" value="Unclear" class="form-check-input">
          <label for="contentUnclear" class="form-check-label">Unclear</label>
        </div>
      </div>

      <!-- Missing Information -->
      <div class="mb-4">
        <label class="form-label">Were there any missing or hard-to-find information?</label>
        <div class="form-check">
          <input type="radio" id="missingInfoYes" name="missingInfo" value="Yes" class="form-check-input">
          <label class="form-check-label" for="missingInfoYes">Yes</label>
        </div>
        <div class="form-check">
          <input type="radio" id="missingInfoNo" name="missingInfo" value="No" class="form-check-input">
          <label class="form-check-label" for="missingInfoNo">No</label>
        </div>
        <div id="missingInfoDetail" style="display:none;">
          <label for="missingInfoDetailInput" class="form-label">If Yes, please specify:</label>
          <input type="text" id="missingInfoDetailInput" class="form-control" placeholder="Enter missing information">
        </div>
      </div>

      <!-- Feedback Text Area -->
      <div class="mb-4">
        <label for="userFeedback" class="form-label">Your feedback</label>
        <textarea id="userFeedback" name="userFeedback" class="form-control" rows="4" placeholder="Anything you'd like to add? Your input is valuable to us."></textarea>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary w-100">Send Feedback</button>
    </form>
  </div>

  <!-- Thank You Popup -->
  <div id="thankYouPopup" class="thank-you-popup">
    <h4>Thank You!</h4>
    <p>Your feedback has been submitted successfully.</p>
    <button onclick="closePopup()" class="btn btn-success">Close</button>
  </div>

  <script>
    // Show or hide specific fields based on user's choice
    document.querySelectorAll('input[name="missingInfo"]').forEach(input => {
      input.addEventListener('change', function() {
        document.getElementById('missingInfoDetail').style.display = this.value === 'Yes' ? 'block' : 'none';
      });
    });

    // Show thank you popup after form submission
    document.getElementById('feedbackForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission

      // Show thank you popup
      document.getElementById('thankYouPopup').style.display = 'block';

      // Reset the form fields
      document.getElementById('feedbackForm').reset();
    });

    // Close the thank you popup
    function closePopup() {
      document.getElementById('thankYouPopup').style.display = 'none';
    }
  </script>

</body>
</html>



</div>

@endsection