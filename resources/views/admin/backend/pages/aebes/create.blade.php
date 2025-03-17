@extends('layouts.adminlayout_new')

@section('content')
<div class="pagetitle">
    <h1>Add AEBES Attendance</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('aebes.view') }}">AEBES</a></li>
            <li class="breadcrumb-item active">Add Attendance</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add New Attendance</h5>

                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {!! session('success') !!}
                        </div>
                    @endif

                    <!-- Error Message -->
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {!! session('error') !!}
                        </div>
                    @endif

                    <form action="{{ route('aebes.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Attendance Date -->
                        <div class="mb-3">
                            <label for="date" class="form-label">Attendance Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>

                        <!-- PDF Upload -->
                        <div class="mb-3">
                            <label for="pdf_path" class="form-label">Upload Attendance PDF</label>
                            <input type="file" class="form-control" id="pdf_path" name="pdf_path" accept="application/pdf" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success">Submit Attendance</button>
                        <a href="{{ route('aebes.view') }}" class="btn btn-secondary">Back to List</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
