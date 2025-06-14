@extends('layouts.university.main')
@section('content')


<style>
    .form-container {
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    .form-section {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.05);
    }

    .qualification-box {
        background-color: #e9ecef;
        padding: 15px;
        padding-bottom: 1px;
        border-radius: 8px;
        margin-bottom: 15px;
        position: relative;
    }

    .red-btn {
        background-color: #dd0000;
        height: 36px;
        width: 36px;
        border-radius: 5px;
    }

    .highlight {
        border: 2px solid #007bff;
        box-shadow: 0px 4px 12px rgba(0, 123, 255, 0.3);
    }

    .delete-btn {
        cursor: pointer;
        margin-top: 32px;
        font-size: 15px;
        color: #fff;
        margin-left: 10px;
    }

    .delete-btn-exam-qualified {
        cursor: pointer;
        margin-top: 32px;
        font-size: 15px;
        color: #fff;
        margin-left: 10px;
    }

    .form-check-input {
        width: 80px;
        height: 30px;
        margin: 0 10px;
        border-radius: .25em;
    }

    .form-check-input[type=checkbox] {
        border-radius: .25em;
        margin: 0 10px;
        width: 50px;
        height: 30px;
    }

    /* ::placeholder {
        font-size: 10px;
    } */
</style>

<div class="container my-5">
    <div class="form-container">
        <h1 class="tmu-text-primary tmu-page-heading mb-3"><span></span><span>Teerthanker Mahaveer University</span></h1>
        <h4 class="text-center mb-3">Interviewee Details Form</h4>



        <form id="interviewForm" action="{{ route('submitJobForm') }}" method="POST" enctype="multipart/form-data">
            @csrf


            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}} <br>
                Please carefully note this Reference number: {{ session('application_id') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
            @endif


            <!-- Personal Details Section -->
            <div class="form-section mb-4">
                <h5>Openings Details</h5>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="category" class="form-label">Colleges</label>
                        <select class="form-select" id="colleges" name="colleges" required>
                            <option value="">Choose...</option>
                            @foreach ($colleges as $college)
                            <option value="{{ $college->cd_id }}">{{ $college->cd_name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">College is required</div>
                    </div>
                    <div class="col-md-6">
                        <label for="category" class="form-label">Department</label>
                        <select class="form-select" id="departments" name="departments" required>
                            <option value="">Choose...</option>

                        </select>
                        <div class="invalid-feedback">Department is required</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="category" class="form-label">Designation </label>
                        <select class="form-select" id="designations" name="designations" required>
                            <option value="">Choose...</option>
                        </select>
                        <div class="invalid-feedback">Department is required</div>
                    </div>

                    <div id="facultyDiv" class="col-md-6" style="display: none;">
                        <label for="faculty" class="form-label">Faculty</label>
                        <select class="form-select" id="faculty" name="faculty" required>
                            <option value="">Choose...</option>

                        </select>
                    </div>

                </div>




            </div>


            <!-- Personal Details Section -->
            <div class="form-section mb-4">
                <h5>Personal Details</h5>
                <div class="row mb-3">
                    <div class="col-md-6 col-lg-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
                        <div class="invalid-feedback">Name is required</div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="mobile_no" class="form-label">Mobile No.</label>
                        <input type="tel" class="form-control" placeholder="Mobile No." id="mobile" name="mobile_no" pattern="[0-9]{10}" minlength="10" maxlength="10"
                            required>
                        <div class="invalid-feedback">Mobile number is required</div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                        <div class="invalid-feedback">Email is required</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 col-lg-4">
                        <label for="pan" class="form-label">PAN</label>
                        <input type="text" class="form-control" placeholder="PAN" id="pan" name="pan" style="text-transform:uppercase;"
                            pattern="[A-Z0-9]+" required>
                        <div class="invalid-feedback">PAN is required</div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="aadhar" class="form-label">Aadhar No.</label>
                        <input type="tel" class="form-control" placeholder="Aadhar No." id="aadhar" name="aadhar" maxlength="12" minlength="12" pattern="\d{12}"
                            required>
                        <div class="invalid-feedback">Aadhar number is required</div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <label for="religion" class="form-label">Religion</label>
                        <input type="text" class="form-control" placeholder="Religion" id="religion" name="religion"
                            required>
                        <div class="invalid-feedback">Religion is required</div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <label for="maritalStatus" class="form-label">Marital Status</label>

                        <select class="form-select" id="maritalStatus" name="marital_status" required>
                            <option value="" disabled selected>Choose...</option>
                            <option>Single</option>
                            <option>Married</option>
                        </select>
                        <div class="invalid-feedback">Marital Status is required</div>
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="dob" class="form-label">Date of Birth (DD/MM/YYYY)</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                        <div class="invalid-feedback">Date of Birth is required</div>
                    </div>
                    <div class="col-md-6">
                        <label for="category" class="form-label">Category (GEN/OBC/SC/ST)</label>
                        <select class="form-select" id="category" name="category" required>
                            <option value="" disabled selected>Choose...</option>
                            <option value="GEN">GEN</option>
                            <option value="OBC">OBC</option>
                            <option value="SC">SC</option>
                            <option value="ST">ST</option>
                        </select>
                        <div class="invalid-feedback">Category is required</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-5">
                        <label for="presentAddress" class="form-label">Present Address</label>
                        <textarea class="form-control" id="presentAddress" placeholder="Present Address"
                            name="present_address" rows="2" required></textarea>
                        <div class="invalid-feedback">Present address is required</div>
                    </div>
                    <div class="col-md-2">
                        <input type="checkbox" id="same_address">
                        <label for="same_address">Permanent Address same as Present Address</label><br>
                    </div>
                    <div class="col-md-5">
                        <label for="permanentAddress" class="form-label">Permanent Address</label>
                        <textarea class="form-control" id="permanentAddress" placeholder="Permanent Address"
                            name="permanent_address" rows="2" required></textarea>
                        <div class="invalid-feedback">Permanent address is required</div>
                    </div>
                </div>
            </div>



            <!-- Qualifications Section -->
            <div class="form-section mb-4">
                <h5>Qualifications</h5>
                <div id="qualifications-section">
                    <!-- First Qualification Field -->
                    <div class="qualification-box">
                        <div class="row mb-3">

                            <div class="col-md-2 col-sm-6">
                                <label for="examDegree" class="form-label">Mode type</label>
                                <select class="form-select" id="Mode_type" name="mode_type[]" required>
                                    <option value="" disabled selected>Select Mode</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Distance">Distance</option>
                                    <option value="Online">Online</option>
                                </select>
                                <div class="invalid-feedback">Mode is required</div>
                            </div>

                            <div class="col-md-2 col-sm-6">
                                <label for="examDegree" class="form-label">Exam/Degree</label>
                                <select class="form-select" id="Mode_type" name="exam_degree[]" required>
                                    <option value="" disabled selected>Select Exam / Degree</option>
                                    <option value="10th">10th</option>
                                    <option value="12th">12th</option>
                                    <option value="UGH">UG</option>
                                    <option value="PG">PG</option>
                                    <option value="M.Phil./Ph.D">M.Phil./Ph.D</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="invalid-feedback">Exam/Degree is required</div>
                            </div>

                            <div class="col-md-2 col-sm-6">
                                <label for="qualification_specialization" class="form-label">Programme / Specialization</label>
                                <input type="text" class="form-control qualification_specialization" placeholder="Specialization" name="qualification_specialization[]" id="qualification_specialization">
                                <div class="invalid-feedback">Specialization is required</div>
                            </div>

                            <div class="col-md-2 col-sm-6">
                                <label for="boardUniversity" class="form-label">Board/University</label>
                                <input type="text" class="form-control" placeholder="Board/University" name="board_university[]" required>
                                <div class="invalid-feedback">Board/University name is required</div>
                            </div>

                         
                            <div class="col-md-2 col-sm-6">
                                <label for="yearPassing" class="form-label">Year of Passing</label>
                                <input type="text" class="form-control year-passing-qualification" placeholder="Year of Passing" name="year_of_passing[]" required>
                                <div class="invalid-feedback">Year of passing is required</div>
                            </div>
                            <div class="col-md-1 col-sm-6">
                                <label for="percentage" class="form-label">Percentage/CGPA</label>
                                <input type="text" class="form-control qualifiation-percentage" placeholder="" name="percentage[]" required>
                                <div class="invalid-feedback">Percentage/CGPA is required</div>
                            </div>

                        </div>
                    </div>
                </div>
                <button type="button" class="tmu-btn btn-4 btn-success add-field-btn" id="addQualificationField">Add
                    Qualification</button>


            </div>


            <!-- Exam Qualification -->
            <div class="form-section mb-4">
                <h5>Exams Qualified</h5>
                <div id="exam-qualified-section">
                    <!-- First Qualification Field -->
                    <div class="qualification-box">
                        <div class="row mb-3">

                            <div class="col-md-3 col-sm-6">
                                <label for="exam_qualified_name" class="form-label">Exam Qualified</label>
                                <select class="form-select" id="exam_qualified_name" name="exam_qualified_name[]">
                                    <option value="" disabled selected>Select Exam</option>
                                    <option value="NET">NET</option>
                                    <option value="SLET">SLET</option>
                                    <option value="CSIR">CSIR</option>
                                    <option value="Other">Other</option>

                                </select>
                                <div class="invalid-feedback">Exam is required</div>
                            </div>

                            <div class="col-md-3 col-sm-6" id="other-exam-name-field" style="display: none;">
                                <label for="other_exam_name" class="form-label">Other Exam Name</label>
                                <input type="text" class="form-control" placeholder="Enter Exam Name" name="other_exam_name" id="other_exam_name">
                                <div class="invalid-feedback">Exam name is required</div>
                            </div>
                     

                            <div class="col-md-3 col-sm-6">
                                <label for="exam_qualified_passing_year" class="form-label">Passing Year</label>
                                <input type="text" class="form-control exam-passing-year" placeholder="Year of Passing" name="exam_qualified_passing_year[]" id="exam_qualified_passing_year">
                                <div class="invalid-feedback">Passing Year is required</div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <label for="exam_qualified_subject" class="form-label">Subject</label>
                                <input type="text" class="form-control exam-subject" placeholder="Subject" name="exam_qualified_subject[]" id="exam_qualified_subject">
                                <div class="invalid-feedback">Subject name is required</div>
                            </div>


                        </div>
                    </div>
                </div>
                <button type="button" class="tmu-btn btn-4 btn-success add-field-btn" id="addExamQualifiedField">Add Exam</button>


            </div>




            <!-- Current job Section -->
            <div class="form-section mb-4">
                <h5>Current/Last Emloyment</h5>
                <div class="row mb-3">
                    <div class="col-md-6 col-lg-4">
                        <label for="name" class="form-label">University/Institute/company Name</label>
                        <input type="text" class="form-control" placeholder="Name" id="cname" name="curent_comp_name" required>
                        <div class="invalid-feedback">Company Name is required</div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <label for="mobile" class="form-label">Category</label>
                        <select class="form-select" id="Category" name="current_comp_category" required>
                            <option value="" disabled selected>Select Teaching / Non-Teaching</option>
                            <option value="Teaching">Teaching</option>
                            <option value="Non-Teaching">Non-Teaching</option>
                        </select>

                        <div class="invalid-feedback">Category is required</div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <label for="mobile" class="form-label">Type of Appointment (Regular/Contracual)</label>

                        <select class="form-select" id="appointment" name="current_comp_appointment" required>
                            <option value="" disabled selected>Select Regular / Contracual</option>
                            <option value="Regular">Regular</option>
                            <option value="Contracual">Contracual</option>
                        </select>

                        <div class="invalid-feedback">Appointment type is required</div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="name" class="form-label">Designation</label>
                        <input type="text" class="form-control" placeholder="Designation" id="designation" name="current_comp_designation"
                            required>
                        <div class="invalid-feedback">Designation is required</div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="row">
                            <div class="col-6">
                        <label for="mobile" class="form-label">Date of Joining</label>
                        <input type="date" class="form-control" placeholder="" id="joining" name="current_comp_date_of_joining" required>
                        <div class="invalid-feedback">Date of Joining is required</div>
                    </div>

                        <div class="col-6">
                            <label for="currently_employed">Currently Employed</label>
                            <input type="checkbox" id="currently_employed" name="currently_employed" value="Y" checked>
                           
                        </div>

                    </div>
                    </div>

               
                    
                    <div class="col-md-6 col-lg-4">
                        
                        <div class="row">
                            <!-- Checkbox to control visibility of the fields with value "Y" when checked -->
                          
                    
                            <!-- Date of Leaving field, initially hidden -->
                            <div class="col-6 leavingFields" style="display:none;">
                                <label for="leaving">Date of Leaving</label>
                                <input type="date" class="form-control" placeholder="" id="leaving" name="current_comp_date_of_leaving">
                                <div class="invalid-feedback">Date of Leaving is required</div>
                               
                            </div>
                    
                            <!-- Reason field, initially hidden -->
                            <div class="col-6 leavingFields" style="display:none;">
                                <label for="leaving_reason">Reason for Leaving</label>
                                <input type="text" class="form-control" placeholder="Reason" id="leaving_reason" name="current_comp_date_of_leaving_reason">
                                <div class="invalid-feedback">Reason is required</div>
                              
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <!-- Experience Section -->
            <div class="form-section mb-4">
                <h5>Experience</h5>
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="totalExp" class="form-label">Total Experience (Years)</label>
                        <input type="text" class="form-control" placeholder="" id="totalExp" name="total_experience" required>
                        <div class="invalid-feedback">Total experience is required</div>
                    </div>
                    <div class="col-4">
                        <label for="academicExp" class="form-label">Academic Experience (Years)</label>
                        <input type="text" class="form-control" placeholder="" id="academicExp" name="academic_experience"
                            required>
                        <div class="invalid-feedback">Academic experience is required</div>
                    </div>
                    <div class="col-4">
                        <label for="academicExp" class="form-label">Industrial Experience (Years)</label>
                        <input type="text" class="form-control" placeholder="" id="industrialExp" name="industrial_experience"
                            required>
                        <div class="invalid-feedback">Industrial experience is required</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="currentSalary" class="form-label">Current/Last Salary (PA) (in INR)</label>
                        <input type="text" class="form-control" placeholder="" id="currentSalary" name="current_salary"
                            required>
                        <div class="invalid-feedback">Current salary is required</div>
                    </div>
                    <div class="col-6">
                        <label for="currentSalary" class="form-label">Expected Salary (PA) (in INR)</label>
                        <input type="text" class="form-control" placeholder="" id="expectedSalary" name="expected_salary"
                            required>
                        <div class="invalid-feedback">Expected salary is required</div>
                    </div>
                </div>
            </div>

            <!-- Resume Upload Field -->
            <div class="form-section row mb-3">
                <div class="col-md-12">
                    <label for="Resume" class="form-label">Upload Resume</label>
                    <input class="form-control" type="file" id="Resume" name="applicant_resume_path" accept=".pdf" required>
                    <div class="form-text text-muted">Only PDF files are accepted.</div>
                    <div class="invalid-feedback">Please upload a PDF resume file.</div>
                </div>
            </div>
            

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="tmu-btn btn-4">Submit</button>
            </div>
        </form>
    </div>
</div>




<script>

    const checkbox = document.getElementById('currently_employed');
    const leavingFields = document.querySelectorAll('.leavingFields'); 
    const dateOfLeaving = document.querySelector('[name="current_comp_date_of_leaving"]');
    const reason = document.querySelector('[name="current_comp_date_of_leaving_reason"]');

    
    function toggleLeavingFields() {
       
        if (checkbox.checked && checkbox.value === 'Y') {
            leavingFields.forEach(field => field.style.display = 'none');
            dateOfLeaving.removeAttribute('required');
            reason.removeAttribute('required');
        } else {
            leavingFields.forEach(field => field.style.display = 'block');
            dateOfLeaving.setAttribute('required', 'true');
            reason.setAttribute('required', 'true');
        }
    }

    toggleLeavingFields();
    checkbox.addEventListener('change', toggleLeavingFields);


    let qualificationCounter = 1;

    // Function to highlight a new qualification field
    function highlightNewField(newField) {
        newField.classList.add('highlight');
        setTimeout(() => {
            newField.classList.remove('highlight');
        }, 100); // Highlight fades out after 2 seconds
    }

    // Add a new qualification field
    document.getElementById('addQualificationField').addEventListener('click', function() {
        qualificationCounter++;
        const qualificationsSection = document.getElementById('qualifications-section');
        const newField = document.createElement('div');
        newField.classList.add('qualification-box');
        newField.innerHTML = `
            <div class="row mb-3">

                            <div class="col-md-2 col-sm-6">
                                <label for="examDegree" class="form-label">Mode type</label>
                                <select class="form-select" id="Mode_type" name="mode_type[]" required>
                                    <option value="" disabled selected>Select Mode</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Distance">Distance</option>
                                    <option value="Online">Online</option>
                                </select>
                                <div class="invalid-feedback">Mode is required</div>
                            </div>

                            <div class="col-md-2 col-sm-6">
                                <label for="examDegree" class="form-label">Exam/Degree</label>
                                <select class="form-select" id="Mode_type" name="exam_degree[]" required>
                                    <option value="" disabled selected>Select Exam / Degree</option>
                                    <option value="10th">10th</option>
                                    <option value="12th">12th</option>
                                    <option value="UGH">UG</option>
                                    <option value="PG">PG</option>
                                    <option value="M.Phil./Ph.D">M.Phil./Ph.D</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="invalid-feedback">Exam/Degree is required</div>
                            </div>
                                                <div class="col-md-2 col-sm-6">
                    <label for="qualification_specialization" class="form-label">Programme / Specialization</label>
                    <input type="text" class="form-control qualification_specialization" placeholder="Specialization" name="qualification_specialization[]" id="qualification_specialization">
                    <div class="invalid-feedback">Specialization is required</div>
                </div>
                            <div class="col-md-2 col-sm-6">
                                <label for="boardUniversity" class="form-label">Board/University</label>
                                <input type="text" class="form-control" placeholder="Board/University" name="board_university[]" required>
                                <div class="invalid-feedback">Board/University name is required</div>
                            </div>
              

                            <div class="col-md-2 col-sm-6">
                                <label for="yearPassing" class="form-label">Year of Passing</label>
                                <input type="text" class="form-control year-passing-qualification" placeholder="Year of Passing" name="year_of_passing[]" required>
                                <div class="invalid-feedback">Year of passing is required</div>
                            </div>
                            <div class="col-md-1 col-sm-6">
                                <label for="percentage" class="form-label per321">Percentage/CGPA</label>
                                <input type="text" class="form-control qualifiation-percentage" placeholder="" name="percentage[]" required>
                                <div class="invalid-feedback">Percentage/CGPA is required</div>
                            </div>

                        
                                   <div class="col-md-1">
                    <button type="button" class="red-btn delete-btn">X</button>
                </div></div>`;

        qualificationsSection.appendChild(newField);
        highlightNewField(newField); // Highlight the newly added field

        newField.querySelectorAll('.year-passing-qualification').forEach(function(input) {
            input.addEventListener('input', function(e) {
                e.target.value = e.target.value.replace(/\D/g, '').slice(0, 4);
            });
        });

        newField.querySelectorAll('.qualifiation-percentage').forEach(function(input) {
            input.addEventListener('input', function(e) {
                e.target.value = e.target.value
                    .replace(/[^0-9.]/g, '') // Remove any character that is not a digit or decimal
                    .replace(/(\..*?)\..*/g, '$1') // Ensure only one decimal point is allowed
                    .slice(0, 5); // Limit input to 5 characters
            });
        });



        // Add event listener for the delete button
        newField.querySelector('.delete-btn').addEventListener('click', function() {
            newField.remove();
        });
    });

    // Exam Qualified

    document.addEventListener('DOMContentLoaded', function() {
        // Function to handle the "Other" option selection
        function handleOtherExamOption(examSelect) {
            examSelect.addEventListener('change', function(e) {
                const selectedValue = e.target.value;
                const qualificationBox = e.target.closest('.qualification-box');
                let otherExamField = qualificationBox.querySelector('.other-exam-name-container');

                if (selectedValue === 'Other') {
                    // Create a new input field for "Other" exam name if it doesn't exist
                    if (!otherExamField) {
                        otherExamField = document.createElement('div');
                        otherExamField.classList.add('row', 'mb-3', 'col-md-12', 'other-exam-name-container');
                        otherExamField.innerHTML = `
                        <div class="col-md-3 col-sm-6">
                            <label for="other_exam_name" class="form-label">Other Exam Name</label>
                            <input type="text" class="form-control other-exam-name" placeholder="Enter Exam Name" name="other_exam_name[]" required>
                            <div class="invalid-feedback">Exam name is required</div>
                        </div>
                    `;
                        // Append the new field after the current row
                        e.target.closest('.row').after(otherExamField);
                    }
                } else if (otherExamField) {
                    // Remove the "Other" exam field if it exists
                    otherExamField.remove();
                }
            });
        }

        // Add the event listener to the initial dropdown
        const initialExamSelect = document.getElementById('exam_qualified_name');
        if (initialExamSelect) {
            handleOtherExamOption(initialExamSelect);
        }

        // Add event listener for the "Add Exam" button
        document.getElementById('addExamQualifiedField').addEventListener('click', function() {
            qualificationCounter++;
            const qualificationsSection = document.getElementById('exam-qualified-section');
            const newFieldExamQualified = document.createElement('div');
            newFieldExamQualified.classList.add('qualification-box');
            newFieldExamQualified.innerHTML = `
            <div class="row mb-3 col-md-12">
                <div class="col-md-3 col-sm-6">
                    <label for="exam_qualified_name" class="form-label">Exam Qualified</label>
                    <select class="form-select exam-qualified-name" name="exam_qualified_name[]" >
                        <option value="" disabled selected>Select Exam</option>
                        <option value="NET">NET</option>
                        <option value="SLET">SLET</option>
                        <option value="CSIR">CSIR</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="invalid-feedback">Exam is required</div>
                </div>

            
                <div class="col-md-3 col-sm-6">
                    <label for="exam_qualified_passing_year" class="form-label">Passing Year</label>
                    <input type="text" class="form-control exam-passing-year" placeholder="Year of Passing" name="exam_qualified_passing_year[]" id="exam_qualified_passing_year">
                    <div class="invalid-feedback">Passing Year is required</div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <label for="exam_qualified_subject" class="form-label">Subject</label>
                    <input type="text" class="form-control exam-subject" placeholder="Subject" name="exam_qualified_subject[]" id="exam_qualified_subject">
                    <div class="invalid-feedback">Subject name is required</div>
                </div>
                <div class="col-md-2">
                    <button type="button" class="red-btn delete-btn-exam-qualified">X</button>
                </div>
            </div>`;

            qualificationsSection.appendChild(newFieldExamQualified);
            highlightNewField(newFieldExamQualified); // Highlight the newly added field

            // Apply validation for the dynamically added exam passing year fields
            newFieldExamQualified.querySelectorAll('.exam-passing-year').forEach(function(input) {
                input.addEventListener('input', function(e) {
                    e.target.value = e.target.value.replace(/\D/g, '').slice(0, 4); // Allow only digits and limit to 4 characters
                });
            });

            // Add the event listener for the "Other" option in the newly added dropdown
            const examSelect = newFieldExamQualified.querySelector('.exam-qualified-name');
            handleOtherExamOption(examSelect);

            // Add event listener for the delete button
            newFieldExamQualified.querySelector('.delete-btn-exam-qualified').addEventListener('click', function() {
                newFieldExamQualified.remove();
            });
        });
    });




    // Form validation
    (() => {
        'use strict'
        const forms = document.querySelectorAll('#interviewForm')
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })();


    // Mobile Number Validation
    document.getElementById('mobile').addEventListener('input', function(e) {
        const mobileInput = e.target;
        const mobileValue = mobileInput.value;

        // Allow only numbers
        mobileInput.value = mobileValue.replace(/\D/g, '');

        // Display error message for invalid input
        if (mobileValue.length !== 10) {
            mobileInput.setCustomValidity("Mobile number must be exactly 10 digits.");
        } else {
            mobileInput.setCustomValidity(""); // Clears error message
        }
    });


    // Email Validation
    document.getElementById('email').addEventListener('input', function(e) {
        const emailInput = e.target;
        const emailValue = emailInput.value;

        // Basic regex for email validation
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        // Check if the email matches the pattern
        if (!emailPattern.test(emailValue)) {
            emailInput.setCustomValidity("Please enter a valid email address.");
        } else {
            emailInput.setCustomValidity(""); // Clears error message if valid
        }
    });

    // PAN VAlidation
    document.getElementById('pan').addEventListener('input', function(e) {
        e.target.value = e.target.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
    });

    // Aadhar validation
    document.getElementById('aadhar').addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 12);
    });


    // Address (Present/Parmanent) Valaidation

    document.getElementById('presentAddress').addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/[^a-zA-Z0-9\s]/g, '');
    });

    document.getElementById('permanentAddress').addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/[^a-zA-Z0-9\s]/g, '');
    });

    // Year of passing Qualification Validation

    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.year-passing-qualification').forEach(function(input) {
            input.addEventListener('input', function(e) {
                e.target.value = e.target.value.replace(/\D/g, '').slice(0, 4);
            });
        });
    });

    // Year of passing Exam Validation

    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.exam-passing-year').forEach(function(input) {
            input.addEventListener('input', function(e) {
                e.target.value = e.target.value.replace(/\D/g, '').slice(0, 4);
            });
        });
    });

    // Percentage Validation

    document.querySelectorAll('input[name="percentage[]"]').forEach(function(input) {
        input.addEventListener('input', function(e) {
            // Allow only digits and a single decimal point
            e.target.value = e.target.value
                .replace(/[^0-9.]/g, '') // Remove any character that is not a digit or decimal
                .replace(/(\..*?)\..*/g, '$1') // Ensure only one decimal point is allowed
                .slice(0, 5); // Limit input to 5 characters
        });
    });


    // EXP VALIDATION (Total EXp)
    document.getElementById('totalExp').addEventListener('input', function(e) {
        // Replace any non-digit character and limit input to 2 digits
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 2);
    });

    // Academic Experience - Restrict to 2 numeric digits
    document.getElementById('academicExp').addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 2);
    });

    // Industrial Experience - Restrict to 2 numeric digits
    document.getElementById('industrialExp').addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 2);
    });


    // Salary Validation and Formating
    // Format number in Indian currency format
    function formatToIndianCurrency(value) {
        // Remove non-digit characters
        value = value.replace(/\D/g, '');

        // Restrict input to 7 digits
        value = value.slice(0, 7);

        // Apply Indian number format
        let lastThree = value.slice(-3);
        let otherNumbers = value.slice(0, -3);
        if (otherNumbers != '') {
            lastThree = ',' + lastThree;
        }
        let formattedValue = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;

        return formattedValue;
    }

    // Apply Indian currency formatting to Current Salary field
    document.getElementById('currentSalary').addEventListener('input', function(e) {
        e.target.value = formatToIndianCurrency(e.target.value);
    });

    // Apply Indian currency formatting to Expected Salary field
    document.getElementById('expectedSalary').addEventListener('input', function(e) {
        e.target.value = formatToIndianCurrency(e.target.value);
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Faculty -->


<script>
    document.addEventListener("DOMContentLoaded", function() {
        let designationDropdown = document.getElementById("designations");
        let facultyDropdown = document.getElementById("faculty");
        let facultyDiv = document.getElementById("facultyDiv"); // Faculty container div

        // Ensure faculty field is initially hidden and disabled
        facultyDiv.style.display = "none";
        facultyDropdown.disabled = true;

        designationDropdown.addEventListener("change", function() {
            let selectedDesignationId = this.value; // Get the selected designation ID
            console.log("Selected Designation ID:", selectedDesignationId); // Debugging

            if (selectedDesignationId === "59") { // Check for ID 59
                facultyDiv.style.display = "block"; // Show faculty field
                facultyDropdown.disabled = false;
                fetchFaculties(selectedDesignationId);
            } else {
                facultyDiv.style.display = "none"; // Hide faculty field
                facultyDropdown.disabled = true;
                facultyDropdown.innerHTML = '<option value="">Choose...</option>'; // Reset options
            }
        });

        function fetchFaculties(designationId) {
            let facultiesUrl = `{{ route('get.faculties') }}?designation_id=${designationId}`;
            console.log("Fetching faculties from:", facultiesUrl); // Debugging

            fetch(facultiesUrl)
                .then(response => response.json())
                .then(data => {
                    console.log("Faculties received:", data); // Debugging
                    facultyDropdown.innerHTML = '<option value="">Choose...</option>'; // Reset options

                    data.forEach(faculty => {
                        let option = new Option(faculty.fy_name, faculty.fy_id);
                        facultyDropdown.appendChild(option);
                    });
                })
                .catch(error => console.error("Error fetching faculties:", error));
        }
    });
</script>


<!-- Departments -->

<script>
    document.getElementById("same_address").addEventListener("change", function() {
        let presentAddress = document.getElementById("presentAddress").value;
        let permanentAddress = document.getElementById("permanentAddress");

        if (this.checked) {
            permanentAddress.value = presentAddress;
            permanentAddress.setAttribute("readonly", true);
        } else {
            permanentAddress.value = "";
            permanentAddress.removeAttribute("readonly");
        }
    });

    document.getElementById("presentAddress").addEventListener("input", function() {
        let checkbox = document.getElementById("same_address");
        if (checkbox.checked) {
            document.getElementById("permanentAddress").value = this.value;
        }
    });
</script>

<script>

    
    $(document).ready(function() {
        // Fetch departments on college selection
        $('#colleges').change(function() {
            let collegeId = $(this).val();
            if (collegeId) {
                $.ajax({
                    url: "{{ route('get.departments') }}",
                    type: "POST",
                    data: {
                        college_id: collegeId,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        $('#departments').empty().append('<option value="">Choose...</option>');
                        $.each(data, function(key, value) {
                            $('#departments').append('<option value="' + value.department_id + '">' + value.department_name + '</option>');
                        });
                        $('#designations').empty().append('<option value="">Choose...</option>'); // Reset designations
                    },
                    error: function(xhr) {
                        console.error("Error fetching departments:", xhr.responseText);
                    }
                });
            } else {
                $('#departments').empty().append('<option value="">Choose...</option>');
                $('#designations').empty().append('<option value="">Choose...</option>');
            }
        });

        // Fetch designations on department selection
        $('#departments').change(function() {
            let departmentId = $(this).val();
            if (departmentId) {
                $.ajax({
                    url: "{{ route('get.designations') }}",
                    type: "POST",
                    data: {
                        department_id: departmentId,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        $('#designations').empty().append('<option value="">Choose...</option>');
                        $.each(data, function(key, value) {
                            $('#designations').append('<option value="' + value.designation_id + '">' + value.designation_name + '</option>');
                        });
                    },
                    error: function(xhr) {
                        console.error("Error fetching designations:", xhr.responseText);
                    }
                });
            } else {
                $('#designations').empty().append('<option value="">Choose...</option>');
            }
        });
    });
</script>


@endsection