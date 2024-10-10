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

        <h1 class="tmu-text-primary tmu-page-heading"><span>Alumni Feedback Form </span><span>on Syllabus</span></h1>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <form class="feedback-form p-4 needs-validation" novalidate>

                    <hr>
                    <!-- Alumni Name -->
                    <div class="mb-3">
                        <label for="facultyName" class="form-label required-label">Name of the Alumni</label>
                        <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" required>
                        <div class="invalid-feedback">Please enter your name.</div>
                    </div>

                    <!-- Organization  Name -->
                    <div class="mb-3">
                        <label for="facultyName" class="form-label required-label">Name of the Current Organization
                            Employed
                            in</label>
                        <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" required>
                        <div class="invalid-feedback">Please enter your Organization Name.</div>
                    </div>

                    <!-- Designation -->
                    <div class="mb-3">
                        <label for="facultyName" class="form-label required-label">Designation in the
                            Organization</label>
                        <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" required>
                        <div class="invalid-feedback">Please enter your Designation.</div>
                    </div>

                    <!-- College Name -->
                    <div class="mb-3">
                        <label for="college" class="form-label required-label">Name of the College the Alumni
                            studied in
                            TMU</label>
                        <select class="form-select" id="college" required>
                            <option value="" disabled selected>Select college</option>
                            <option>Teerthanker Mahaveer Medical College & Research Centre</option>
                            <option>Teerthanker Mahaveer Dental College & Research Centre</option>
                            <option>Teerthanker Mahaveer College of Nursing</option>
                            <option>Teerthanker Mahaveer College of Pharmacy</option>
                            <option>College of Paramedical Sciences</option>
                            <option>Department of Physiotherapy</option>
                            <option>TMIMT College of Management</option>
                            <option>College of Law & Legal Studies</option>
                            <option>College of Computing Sciences & IT</option>
                            <option>Faculty of Engineering</option>
                            <option>College of Fine Arts</option>
                            <option>Faculty of Education</option>
                            <option>TMIMT College of Physical Education</option>
                            <option>College of Agriculture Sciences</option>
                            <option>Teerthanker Parshvnath College of Nursing</option>
                            <option>Centre for Jain Studies</option>
                            <option>Centre for Teaching Learning & Development</option>
                        </select>
                        <div class="invalid-feedback">Please select college.</div>
                    </div>

                    <!-- Programme Name -->
                    <div class="mb-3">
                        <label for="facultyName" class="form-label required-label">Name of the Programme the Alumni
                            studied
                            in TMU</label>
                        <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" required>
                        <div class="invalid-feedback">Programme Name.</div>
                    </div>

                    <!-- Passing Year -->
                    <div class="mb-3">
                        <label for="facultyName" class="form-label required-label">Year of Passing Out form the
                            Programme</label>
                        <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" required>
                        <div class="invalid-feedback">Passing Year.</div>
                    </div>

                    <!-- Enrolment Number -->
                    <div class="mb-3">
                        <label for="facultyName" class="form-label required-label">Enrolment Number</label>
                        <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" required>
                        <div class="invalid-feedback">Enter your Enrolment Number.</div>
                    </div>

                    <!-- email id -->
                    <div class="mb-3">
                        <label for="facultyName" class="form-label required-label">Email ID</label>
                        <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" required>
                        <div class="invalid-feedback">Please enter Email ID.</div>
                    </div>

                    <!-- Mobile No -->
                    <div class="mb-3">
                        <label for="facultyName" class="form-label required-label">Mobile No</label>
                        <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" required>
                        <div class="invalid-feedback">Please enter Mobile No.</div>
                    </div>

                    <!-- Academic Year -->
                    <div class="mb-3">
                        <label for="academicYear" class="form-label required-label">Academic Year</label>
                        <select class="form-select" id="academicYear" required>
                            <option value="" disabled selected>Select academic year</option>
                            <option>2024-25 (Odd Semester)</option>
                            <option>2024-25 (Even Semester)</option>
                            <option>2024-25 (Yearly Programme)</option>
                        </select>
                        <div class="invalid-feedback">Please select the academic year.</div>
                    </div>

                    <!-- Questions (Multi Choice) -->
                    <div class="mb-3">
                        <label class="form-label required-label">How would you rate the curriculum prescribed for
                            your
                            degree during your term in the college?</label>
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
                        <label class="form-label required-label">How would you rate the quality of education
                            imparted in the
                            college?</label>
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
                        <label class="form-label required-label">How would you rate the course content
                            delivery?</label>
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
                        <label class="form-label required-label">How would you rate the Innovative Teaching
                            Learning
                            methodologies on course curriculum for fulfilling your expectations?</label>
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
                        <label class="form-label required-label">How do you rate the academic initiatives taken by
                            the
                            college to bridge the gap between industry & academia?</label>
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
                        <label class="form-label required-label">How would you rate any new skills learnt in the due
                            course
                            of your study (Other than syllabus)?</label>
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
                        <label class="form-label required-label">How do you rate the relevance of your degree to
                            your
                            present job?</label>
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
                        <label class="form-label required-label">How would you rate the supporting academic
                            initiatives like
                            Seminars, Workshops, Projects, Study Tours, etc. taken by the college to improve your
                            competence
                            as student?</label>
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
                        <label class="form-label required-label">How do you rate development activities organized by
                            the
                            college for your overall development?</label>
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
                        <label class="form-label required-label">How would you rate the motivation created by the
                            syllabus
                            to pursue higher education?</label>
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
                            the syllabi (Mention the course name/code)</label>
                        <textarea class="form-control" id="topicsBeyondSyllabus" rows="2" required></textarea>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label for="topicsToDelete" class="form-label required-label">Any other
                            comments/suggestions</label>
                        <textarea class="form-control" id="topicsToDelete" rows="2" required></textarea>
                        <div class="invalid-feedback"></div>
                    </div>

                    <!-- Submit Button -->
                    <button class="tmu-btn btn-4 w-100" type="submit">Submit Feedback</button>
                </form>
            </div>
        </div>



    </div>
</div>
</div>

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
</script>

@endsection