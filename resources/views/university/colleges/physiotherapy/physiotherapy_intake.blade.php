@extends('layouts.university.colleges.physiotherapy_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">
        <div class="banner text-white text-center p-4 rounded" style="height: 20vh; background-color: #001055;">
            <h2 style="color: #fff; padding:1.5rem!important;">Sanctioned Intake</h2>
        </div>

        <section class="about-section mt-4">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Sl. No.</th>
                                <th>Programmes</th>
                                <th class="text-center">Sanctioned Intake</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1.</td>
                                <td>BPT (Bachelor of Physiotherapy)</td>
                                <td class="text-center">160</td>
                            </tr>
                            <tr>
                                <td class="text-center">2.</td>
                                <td>MPT (Master of Physiotherapy)</td>
                                <td class="text-center">40</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->


@endsection