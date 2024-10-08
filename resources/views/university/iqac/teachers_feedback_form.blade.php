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

        <h1 class="tmu-text-primary tmu-page-heading"><span>Teachers Feedback Form </span><span>on Syllabus</span></h1>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <form class="feedback-form p-4 needs-validation" novalidate>

                    <hr>

                    <!-- College Name -->
                    <div class="mb-3">
                        <label for="college" class="form-label required-label">Name of the College</label>
                        <select class="form-select" id="college" required>
                            <option value="" disabled selected>Select your college</option>
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
                        <div class="invalid-feedback">Please select your college.</div>
                    </div>

                    <!-- Faculty Name -->
                    <div class="mb-3">
                        <label for="facultyName" class="form-label required-label">Name of the Faculty</label>
                        <input type="text" class="form-control" id="facultyName" placeholder="Enter your name" required>
                        <div class="invalid-feedback">Please enter your name.</div>
                    </div>

                    <!-- Designation -->
                    <div class="mb-3">
                        <label for="designation" class="form-label required-label">Designation</label>
                        <select class="form-select" id="designation" required>
                            <option value="" disabled selected>Select your designation</option>
                            <option>Professor</option>
                            <option>Associate Professor</option>
                            <option>Assistant Professor</option>
                            <option>Tutor</option>
                            <option>Research Fellow</option>
                            <option>Other</option>
                        </select>
                        <div class="invalid-feedback">Please select your designation.</div>
                    </div>

                    <!-- Employee Code -->
                    <div class="mb-3">
                        <label for="employeeCode" class="form-label required-label">Employee Code</label>
                        <input type="text" class="form-control" id="employeeCode" placeholder="Enter employee code"
                            required>
                        <div class="invalid-feedback">Please enter your employee code.</div>
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
                        <label class="form-label required-label">Aims and objectives of the syllabus are well defined
                            and clear to teachers.</label>
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
                        <label class="form-label required-label">Syllabus is sufficient to bridge the gap between
                            industry standards /current global scenarios and academics.</label>
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
                        <label class="form-label required-label">Learning value (in terms of skills, concepts,
                            knowledge, analytical abilities or broadening perspectives).</label>
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
                        <label class="form-label required-label">Applicability/relevance to real life
                            situations.</label>
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
                        <label class="form-label required-label">Extent of effort required by the students</label>
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
                        <label class="form-label required-label">Syllabus has flexibility to adopt new
                            techniques/strategies of teaching such as presentations, group discussions and learners’
                            participations.</label>
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
                        <label class="form-label required-label">Timely coverage of syllabus is possible in the
                            mentioned number of hours.</label>
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
                        <label class="form-label required-label">The evaluation methods mentioned in the syllabus are
                            sufficient for providing proper assessment.</label>
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
                        <label class="form-label required-label">The books prescribed/listed as reference materials are
                            relevant, updated and appropriate.</label>
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

                    <!-- Continue adding the remaining questions similarly -->

                    <!-- Overall Rating -->
                    <div class="mb-3">
                        <label for="rating" class="form-label required-label">Overall Rating</label>
                        <select class="form-select" id="rating" required>
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
                        <label for="topicsBeyondSyllabus" class="form-label required-label">Topics proposed beyond the
                            syllabus</label>
                        <textarea class="form-control" id="topicsBeyondSyllabus" rows="2" required></textarea>
                        <div class="invalid-feedback">Please provide topics proposed beyond the syllabus.</div>
                    </div>

                    <div class="mb-3">
                        <label for="topicsToDelete" class="form-label required-label">Topics obsolete & to be
                            deleted</label>
                        <textarea class="form-control" id="topicsToDelete" rows="2" required></textarea>
                        <div class="invalid-feedback">Please provide obsolete topics to be deleted.</div>
                    </div>

                    <div class="mb-3">
                        <label for="suggestions" class="form-label required-label">Any further suggestion</label>
                        <textarea class="form-control" id="suggestions" rows="2" required></textarea>
                        <div class="invalid-feedback">Please provide further suggestions.</div>
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