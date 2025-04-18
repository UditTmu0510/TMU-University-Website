@extends('layouts.university.departments.iqac_with_sidebar')
@section('content')

<style>
  .feedback-form {
    background-color: white;
    border-radius: 8px;
    padding: 30px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .feedback-form h5 {
    font-weight: bold;
  }

  .form-control {
    background-color: #f7f9fc;
  }

  .btn-primary {
    background-color: #fe8d00;
    border-color: #fe8d00;
  }

  .was-validated .form-control:invalid,
  .was-validated .form-select:invalid {
    border-color: #dc3545;
  }

  .required-label::after {
    content: "*";
    color: red;
    margin-left: 5px;
    font-size: 16px;
    vertical-align: top;
  }
</style>



<div class="main-content">
  <div class="container">

    <h1 class="tmu-text-primary tmu-page-heading"><span>External Experts Feedback Form </span><span>on Curriculum</span></h1>
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <form action="{{ route('store.expert.feedback.form') }}" method="POST" class="feedback-form p-4 needs-validation" novalidate>



          <hr>
          @csrf
          <!-- College Name -->

          @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif

          <!-- Employers Name -->
          <div class="mb-3">
            <label for="facultyName" class="form-label required-label">Name</label>
            <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" name="name" required>
            <div class="invalid-feedback">Please enter your name.</div>
          </div>

          <!-- Designation  Name -->
          <div class="mb-3">
            <label for="facultyName" class="form-label required-label">Designation</label>
            <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" name="current_designation" required>
            <div class="invalid-feedback">Please enter your Designation.</div>
          </div>

          <!-- Organization  Name -->
          <div class="mb-3">
            <label for="facultyName" class="form-label required-label">Name of the Organization of Expert</label>
            <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" name="current_organization" required>
            <div class="invalid-feedback">Please enter Organization Name.</div>
          </div>

          <!-- Contact Number (Whatsapp) -->
          <div class="mb-3">
            <label for="phone_no" class="form-label required-label">Contact Number (Whatsapp)</label>
            <input type="text" class="form-control" id="phone_no" placeholder="Enter your name" name="contact_no" required>
            <div class="invalid-feedback">Please enter Contact Number.</div>
          </div>

          <!-- email id -->
          <div class="mb-3">
            <label for="email" class="form-label required-label">Email ID</label>
            <input type="text" class="form-control" id="email" placeholder="Enter your name" name="email" required>
            <div class="invalid-feedback">Please enter Email ID.</div>
          </div>

          <!-- College Name -->
          <div class="mb-3">
            <label for="college" class="form-label required-label">Employer Feedback is for the</label>

            <select class="form-select" id="college" name="cd_id" required>
              <option value="" disabled selected>Select your college</option>
              @foreach($colleges as $college)
              <option value="{{ $college->cd_id }}">{{ $college->cd_name }}</option>
              @endforeach
            </select>

            <div class="invalid-feedback">Please select college.</div>
          </div>

          <!-- Academic Year -->
          <div class="mb-3">
            <label for="academicYear" class="form-label required-label">Academic Year</label>
            <select class="form-select" id="academicYear" name="academic_year" required>
              <option value="" disabled selected>Select academic year</option>
              <option>2024-25 (Odd Semester)</option>
              <option>2024-25 (Even Semester)</option>
              <option>2024-25 (Yearly Programme)</option>
            </select>
            <div class="invalid-feedback">Please select the academic year.</div>
          </div>

          <div class="mb-3">
            <p>
              <strong> Instructions: Please indicate your level of satisfaction with the following statement by choosing as per the guidelines given below: </strong>
            </p>
            <ul style="list-style-type: upper-alpha;" class="ps-3">
              <li>Strongly Agree</li>
              <li>Agree</li>
              <li>Neutral</li>
              <li>Disagree</li>
              <li>Strongly Disagree</li>
            </ul>
          </div>

          <!-- Questions (Multi Choice) -->
          <div class="mb-3">
            <label class="form-label required-label">The curriculum aligns with global academic and industry standards in the respective discipline.</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" value="Strongly Disagree" required>
              <label class="form-check-label">Strongly Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" value="Disagree" required>
              <label class="form-check-label">Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" value="Neutral" required>
              <label class="form-check-label">Neutral</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" value="Agree" required>
              <label class="form-check-label">Agree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" value="Strongly Agree" required>
              <label class="form-check-label">Strongly Agree</label>
            </div>
            <div class="invalid-feedback">Please select an option.</div>
          </div>

          <div class="mb-3">
            <label class="form-label required-label">The curriculum integrates contemporary topics and emerging trends effectively.</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" value="Strongly Disagree" required>
              <label class="form-check-label">Strongly Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" value="Disagree" required>
              <label class="form-check-label">Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" value="Neutral" required>
              <label class="form-check-label">Neutral</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" value="Agree" required>
              <label class="form-check-label">Agree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" value="Strongly Agree" required>
              <label class="form-check-label">Strongly Agree</label>
            </div>
            <div class="invalid-feedback">Please select an option.</div>
          </div>

          <div class="mb-3">
            <label class="form-label required-label">The balance between core and elective courses in the curriculum is appropriate.</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" value="Strongly Disagree" required>
              <label class="form-check-label">Strongly Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" value="Disagree" required>
              <label class="form-check-label">Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" value="Neutral" required>
              <label class="form-check-label">Neutral</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" value="Agree" required>
              <label class="form-check-label">Agree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" value="Strongly Agree" required>
              <label class="form-check-label">Strongly Agree</label>
            </div>
            <div class="invalid-feedback">Please select an option.</div>
          </div>

          
          <div class="mb-3">
            <label class="form-label required-label">The curriculum offers sufficient opportunities for interdisciplinary learning and innovation.</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" value="Strongly Disagree" required>
              <label class="form-check-label">Strongly Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" value="Disagree" required>
              <label class="form-check-label">Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" value="Neutral" required>
              <label class="form-check-label">Neutral</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" value="Agree" required>
              <label class="form-check-label">Agree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" value="Strongly Agree" required>
              <label class="form-check-label">Strongly Agree</label>
            </div>
            <div class="invalid-feedback">Please select an option.</div>
          </div>


          <div class="mb-3">
            <label class="form-label required-label">Practical components such as lab work, internships, or projects are well-integrated into the curriculum.</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" value="Strongly Disagree" required>
              <label class="form-check-label">Strongly Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" value="Disagree" required>
              <label class="form-check-label">Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" value="Neutral" required>
              <label class="form-check-label">Neutral</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" value="Agree" required>
              <label class="form-check-label">Agree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" value="Strongly Agree" required>
              <label class="form-check-label">Strongly Agree</label>
            </div>
            <div class="invalid-feedback">Please select an option.</div>
          </div>


          <div class="mb-3">
            <label class="form-label required-label">The curriculum is effective in fostering problem-solving, critical thinking, and analytical skills.</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" value="Strongly Disagree" required>
              <label class="form-check-label">Strongly Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" value="Disagree" required>
              <label class="form-check-label">Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" value="Neutral" required>
              <label class="form-check-label">Neutral</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" value="Agree" required>
              <label class="form-check-label">Agree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" value="Strongly Agree" required>
              <label class="form-check-label">Strongly Agree</label>
            </div>
            <div class="invalid-feedback">Please select an option.</div>
          </div>


          <div class="mb-3">
            <label class="form-label required-label">The curriculum addresses the skills and knowledge necessary to meet industry or professional demands.</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" value="Strongly Disagree" required>
              <label class="form-check-label">Strongly Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" value="Disagree" required>
              <label class="form-check-label">Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" value="Neutral" required>
              <label class="form-check-label">Neutral</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" value="Agree" required>
              <label class="form-check-label">Agree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" value="Strongly Agree" required>
              <label class="form-check-label">Strongly Agree</label>
            </div>
            <div class="invalid-feedback">Please select an option.</div>
          </div>


          <div class="mb-3">
            <label class="form-label required-label">Ethical considerations, sustainability, and professional responsibility are adequately incorporated in the curriculum.</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q8" value="Strongly Disagree" required>
              <label class="form-check-label">Strongly Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q8" value="Disagree" required>
              <label class="form-check-label">Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q8" value="Neutral" required>
              <label class="form-check-label">Neutral</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q8" value="Agree" required>
              <label class="form-check-label">Agree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q8" value="Strongly Agree" required>
              <label class="form-check-label">Strongly Agree</label>
            </div>
            <div class="invalid-feedback">Please select an option.</div>
          </div>


          <div class="mb-3">
            <label class="form-label required-label">The reference materials and resources suggested in the curriculum are relevant and up-to-date.</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q9" value="Strongly Disagree" required>
              <label class="form-check-label">Strongly Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q9" value="Disagree" required>
              <label class="form-check-label">Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q9" value="Neutral" required>
              <label class="form-check-label">Neutral</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q9" value="Agree" required>
              <label class="form-check-label">Agree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q9" value="Strongly Agree" required>
              <label class="form-check-label">Strongly Agree</label>
            </div>
            <div class="invalid-feedback">Please select an option.</div>
          </div>


          <div class="mb-3">
            <label class="form-label required-label">Overall, the curriculum is robust, comprehensive, and meets the expectations of a world-class academic program.</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q10" value="Strongly Disagree" required>
              <label class="form-check-label">Strongly Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q10" value="Disagree" required>
              <label class="form-check-label">Disagree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q10" value="Neutral" required>
              <label class="form-check-label">Neutral</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q10" value="Agree" required>
              <label class="form-check-label">Agree</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q10" value="Strongly Agree" required>
              <label class="form-check-label">Strongly Agree</label>
            </div>
            <div class="invalid-feedback">Please select an option.</div>
          </div>

          <!-- Overall Rating -->
          <div class="mb-3">
            <label for="rating" class="form-label required-label">Give Overall rating for the syllabus between 1 and 5 (5 being the highest and 1 lowest)</label>
            <select class="form-select" id="rating" name="overall_rating" required>
              <option value="" disabled selected>Select a rating</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <div class="invalid-feedback">Please select an overall rating.</div>
          </div>

          <!-- Textareas for suggestions -->
          <div class="mb-3">
            <label for="topicsBeyondSyllabus" class="form-label required-label">How can the university improve the syllabus to better meet the needs of employers and students?</label>
            <textarea class="form-control" id="topicsBeyondSyllabus" rows="2" name="improve_syllabus" required></textarea>
            <div class="invalid-feedback"></div>
          </div>

          <div class="mb-3">
            <label for="topicsToDelete" class="form-label required-label">Addition of new content in the existing syllabus</label>
            <textarea class="form-control" id="topicsToDelete" rows="2" name="new_content_existing_syllabus" required></textarea>
            <div class="invalid-feedback"></div>
          </div>

          <div class="mb-3">
            <label for="suggestions" class="form-label required-label">Deletion of existing content / portion from the syllabus</label>
            <textarea class="form-control" id="suggestions" rows="2" name="topics_to_delete" required></textarea>
            <div class="invalid-feedback"> </div>
          </div>

          <div class="mb-3">
            <label for="suggestions" class="form-label required-label">Addition of new course in the programme</label>
            <textarea class="form-control" id="suggestions" rows="2" name="addition_of_new_course" required></textarea>
            <div class="invalid-feedback"> </div>
          </div>

          <div class="mb-3">
            <label for="suggestions" class="form-label required-label">Any emerging trend in the subject area which you would like to mention</label>
            <textarea class="form-control" id="suggestions" rows="2" name="any_emerging_trend" required></textarea>
            <div class="invalid-feedback"> </div>
          </div>

          @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <div class="g-recaptcha" data-sitekey="6LeIuvYqAAAAADGg4bMbK1MYjiFjIxHdvUg1yH_Q"></div>
          <br />

          <!-- Submit Button -->
          <button class="tmu-btn btn-4 w-100" type="submit">Submit Feedback</button>
        </form>
      </div>
    </div>



  </div>
</div>
</div>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
  // Example JavaScript to enable Bootstrap's client-side validation
  (function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
  })()

  // email Validation

  document.getElementById('email').addEventListener('input', function() {
    const emailPattern = /@.+\./; // Regex to check for "@" followed by at least one character and then a "."

    // Validate if the input contains "@" and "." in the correct format
    if (!emailPattern.test(this.value)) {
      this.setCustomValidity("Please enter a valid email address with '@' and '.' characters.");
    } else {
      this.setCustomValidity(""); // Clear the error message if valid
    }
  });

  // Phone number Valiation
  document.getElementById('phone_no').addEventListener('input', function() {
    // Remove any non-numeric characters
    this.value = this.value.replace(/\D/g, '');

    // Limit the input to a maximum of 10 digits
    if (this.value.length > 10) {
      this.value = this.value.slice(0, 10);
    }

    // Validate if the input is exactly 10 digits
    if (this.value.length !== 10) {
      this.setCustomValidity("Please enter exactly 10 numeric digits.");
    } else {
      this.setCustomValidity(""); // Clear the error message if valid
    }
  });
</script>

@endsection