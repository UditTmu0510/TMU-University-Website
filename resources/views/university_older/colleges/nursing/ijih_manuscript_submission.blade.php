@extends('layouts.university.colleges.nursing_with_sidebar')

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
    .tmu-btn {
        background-color: #ff6800;
        color: #fff;
    }
    .tmu-btn-link {
        color: #ff6800;
    }
    .tmu-btn-link:hover {
        color: #03228B;
    }
    .tmu-btn:hover {
        background-color: #fff;
        color: #ff6800;
    }
</style>

<div class="main-content">
    <div class="container">
    <h1 class="tmu-text-primary tmu-page-heading"><span> IJIH Manuscript</span><span> Submission Form</span></h1>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <form action="" method="POST" enctype="multipart/form-data" class="feedback-form p-4 needs-validation" novalidate>
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

                    @if (session('success_msg'))
                        <div class="alert alert-success">
                            {{ session('success_msg') }}
                        </div>
                    @endif

                    
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name" placeholder="First name" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Last name" required>
                        </div>
                        <div class="mb-3">
                            <label for="emailAddress" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="emailAddress" name="email" placeholder="Email address" required>
                        </div>
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phone_number" placeholder="Phone number" required>
                        </div>
                    

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="applicantfilepath" class="form-label">Upload File</label>
                            <input class="form-control" type="file" id="applicantfilepath" name="applicant_file_path" required>
                        </div>
                    </div>

                    <input type="hidden" name="cd_id" value="5">

                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="privacyPolicy" required>
                        <label class="form-check-label" for="privacyPolicy">I confirm all guidelines have been reviewed and complied with.</label>
                    </div>

                    <button type="submit" class="tmu-btn form-control w-100">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection