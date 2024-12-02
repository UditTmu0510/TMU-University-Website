@extends('layouts.university.colleges.pharmacy_tjpbs_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">
        <div class="banner text-white text-center p-4 rounded" style="background-color: #001055;">
            <h1 class="tmu-page-heading"><span> Manuscript Submission Form </span></h1>
            <h3 class="text-white fs-16">Divide your article into clearly defined sections. Heading should be typed in upper case, bold. Sub-headings should be typed in sentence case, italics. Each heading should appear on its own separate section.</h3>



        </div>


        <div class="container contact-section">
            <div class="row">
                <div class="col-md-12">

                    <div class="tmu-text-primary">
                        <h3 style="text-align: justify;"> <a href="{{ route('tjpbs.authors.guidelines') }}" target="_blank"> [Click here] </a> to view the complete Manuscript Submission Form guidelines.</h3>
                    </div>

                    <form action="{{ route('manuscript_form.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Display Custom Error -->
                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        <!-- Display Success Message -->
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif


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
                        <div class="row mb-3">

                            <div class="col">
                                <label for="emailAddress" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="emailAddress" name="email" placeholder="Email address" required>
                            </div>

                            <div class="col">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phoneNumber" name="phone_number" placeholder="Phone number" required>
                            </div>

                        </div>

                        <div class="form-section row mb-3">
                            <div class="col-md-12">
                                <label for="uploadImage" class="form-label">Upload File</label>
                                <input class="form-control" type="file" id="applicantfilepath" name="applicant_file_path" required>
                                <div class="invalid-feedback">Please upload Manuscript file</div>
                            </div>
                        </div>

                        <!-- Hidden field to capture college name -->
                        <input type="hidden" name="cd_id" value="5">

                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="privacyPolicy" required>
                            <label class="form-check-label" for="privacyPolicy">I hereby confirm that all guidelines for manuscript submission have been thoroughly reviewed and fully complied with.</label>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LdIV1AqAAAAAAsXbbYGGZSQF2fkL-QbjH43GOPh"></div>
                        <br />
                        <button type="submit" class="tmu-btn btn-4">Send</button>



                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection