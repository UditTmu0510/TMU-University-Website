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

        <h1 class="tmu-text-primary tmu-page-heading"><span>Alumni Feedback Form </span><span>on Curriculum</span></h1>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <form action="{{ route('store.alumni.feedback.form') }}" method="POST" class="feedback-form p-4 needs-validation" novalidate>

                    <hr>
                    @csrf
                    <!-- College Name -->

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif


                    <!-- Alumni Name -->
                    <div class="mb-3">
                        <label for="facultyName" class="form-label required-label">Name of the Alumni</label>
                        <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" name="name" required>
                        <div class="invalid-feedback">Please enter your name.</div>
                    </div>

                    <!-- Organization  Name -->
                    <div class="mb-3">
                        <label for="facultyName" class="form-label required-label">Name of the Current Organization
                            Employed
                            in</label>
                        <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" name="current_organization" required>
                        <div class="invalid-feedback">Please enter your Organization Name.</div>
                    </div>

                    <!-- Designation -->
                    <div class="mb-3">
                        <label for="facultyName" class="form-label required-label">Designation in the
                            Organization</label>
                        <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" name="current_designation" required>
                        <div class="invalid-feedback">Please enter your Designation.</div>
                    </div>

                    <!-- College Name -->
                    <div class="mb-3">
                        <label for="college" class="form-label required-label">Name of the College the Alumni
                            studied in
                            TMU</label>
                        <select class="form-select" id="college" name="cd_id" required>
                            <option value="" disabled selected>Select your college</option>
                            @foreach($colleges as $college)
                            <option value="{{ $college->cd_id }}">{{ $college->cd_name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Please select college.</div>
                    </div>

                    <!-- Programme Name -->
                    <div class="mb-3">
                        <label for="facultyName" class="form-label required-label">Name of the Programme the Alumni
                            studied
                            in TMU</label>
                        <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" name="prog_studied_in_tmu" required>
                        <div class="invalid-feedback">Programme Name.</div>
                    </div>

                    <!-- Passing Year -->
                    <div class="mb-3">
                        <label for="passing_year" class="form-label required-label">Year of Passing Out form the
                            Programme</label>
                        <input type="text" class="form-control" id="passing_year" placeholder="Enter your name" name="prog_passout_year" required>
                        <div class="invalid-feedback">Passing Year.</div>
                    </div>

                    <!-- Enrolment Number -->
                    <div class="mb-3">
                        <label for="enroll_num" class="form-label required-label">Enrolment Number</label>
                        <input type="text" class="form-control" id="enroll_num" placeholder="Enter your name" name="cd_enroll_no" required>
                        <div class="invalid-feedback">Enter your Enrolment Number.</div>
                    </div>

                    <!-- email id -->
                    <div class="mb-3">
                        <label for="email" class="form-label required-label">Email ID</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your name" name="email" required>
                        <div class="invalid-feedback">Please enter Email ID.</div>
                    </div>

                    <!-- Mobile No -->
                    <div class="mb-3">
                        <label for="phone_no" class="form-label required-label">Mobile No</label>
                        <input type="text" class="form-control" id="phone_no" placeholder="Enter your name" name="contact_no" required>
                        <div class="invalid-feedback">Please enter Mobile No.</div>
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
                        <label class="form-label required-label">The curriculum provided a strong foundation in my field of study.</label>
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
                        <label class="form-label required-label">The curriculum was relevant to the skills and knowledge required in my current profession.</label>
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
                        <label class="form-label required-label">The curriculum incorporated emerging trends and technologies during my study period.</label>
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
                        <label class="form-label required-label">The curriculum offered a good balance between theoretical knowledge and practical applications.</label>
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
                        <label class="form-label required-label">The elective courses allowed me to explore areas of interest and specialize effectively.</label>
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
                        <label class="form-label required-label">The curriculum prepared me adequately for challenges in the industry or higher education.</label>
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
                        <label class="form-label required-label">The curriculum fostered critical thinking, problem-solving, and interdisciplinary learning.</label>
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
                        <label class="form-label required-label">Internship, project work, or industry exposure as part of the curriculum was beneficial for my career.</label>
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
                        <label class="form-label required-label">The curriculum offered sufficient opportunities to build transferable skills like communication and teamwork.</label>
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
                        <label class="form-label required-label">I am satisfied with the overall quality and relevance of the curriculum for my professional development.</label>
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

                    <!-- Textareas for suggestions -->
                    <div class="mb-3">
                        <label for="topicsBeyondSyllabus" class="form-label required-label">Suggestions for
                            modifications in
                            the syllabus (Mention the course name/code)</label>
                        <textarea class="form-control" id="topicsBeyondSyllabus" rows="2" name="topics_beyond_syllabus" required></textarea>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label for="topicsToDelete" class="form-label required-label">Any other
                            comments/suggestions</label>
                        <textarea class="form-control" id="topicsToDelete" rows="2" name="suggestions" required></textarea>
                        <div class="invalid-feedback"></div>
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

    // Passing Year validation
    document.getElementById('passing_year').addEventListener('input', function() {
        // Remove any non-numeric characters
        this.value = this.value.replace(/\D/g, '');

        // Limit the input to a maximum of 4 characters
        if (this.value.length > 4) {
            this.value = this.value.slice(0, 4);
        }

        // Validate if the input is exactly 4 digits
        if (this.value.length !== 4) {
            this.setCustomValidity("Please enter exactly 4 numeric digits for the year.");
        } else {
            this.setCustomValidity(""); // Clear the error message if valid
        }
    });

    // Enrollment Validation


    document.getElementById('enroll_num').addEventListener('input', function() {
        // Convert the input to uppercase
        this.value = this.value.toUpperCase();

        // Remove any non-alphanumeric characters
        this.value = this.value.replace(/[^A-Z0-9]/g, '');

        // Limit the input to a maximum of 10 characters
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10);
        }

        // Validate if the input is exactly 10 characters
        if (this.value.length !== 10) {
            this.setCustomValidity("Please enter exactly 10 characters (uppercase letters and numbers only).");
        } else {
            this.setCustomValidity(""); // Clear the error message if valid
        }
    });


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