@extends('layouts.university.departments.quicklinks_with_sidebar')
@section('content')

<style>
    .home-about-section {
        padding-bottom: 10px;
    }

    .ha-pic {
        -webkit-box-shadow: 0px 0px 30px rgba(11, 12, 48, 0.15);
        box-shadow: 0px 0px 30px rgba(11, 12, 48, 0.15);
        margin-right: 30px;
    }

    .ha-pic img {
        min-width: 100%;
        border-radius: 2px;
    }

    .ha-text {
        padding-top: 0px;
    }

    .ha-text h2 {
        color: #171822;
        font-size: 40px;
        font-weight: 700;
        margin-bottom: 32px;
    }

    .ha-text p {
        margin-bottom: 21px;
    }

    .ha-text ul {
        margin-bottom: 27px;
    }

    .ha-text ul li {
        list-style: none;
        font-size: 16px;
        line-height: 30px;
        color: #6a6b7c;
    }

    .ha-text ul li span {
        color: #f44949;
    }

    .ha-text .ha-btn {
        font-size: 16px;
        color: #171822;
        font-weight: 600;
        position: relative;
    }

    .ha-text .ha-btn:before {
        position: absolute;
        left: 0;
        bottom: -6px;
        height: 2px;
        width: 100%;
        background: #f44949;
        content: "";
    }
</style>


    <div class="main-content">
        <div class="container">
            <h1 class="tmu-text-primary tmu-page-heading"><span> TMU Education </span><span> Loan</span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-justify">
                    <p class="mb-3 fw-bold px-5 py-3 fs-14">At TMU University, we value and
                        celebrate the diverse financial backgrounds of our students. We understand
                        that each individual may face unique financial challenges, and our dedicated
                        team is here to provide personalized support. Our mission is to ensure you
                        have access to the necessary resources and assistance to pursue your
                        education without interruption. By addressing and alleviating financial
                        barriers, we strive to empower you to achieve your academic goals seamlessly
                        and without compromise.</p>
                    <p class="fs-16 px-5 py-3">TMU has tied up with Punjab National Bank to make easy education loans
                        available to the students.</p>    
                    <div class="table-responsive px-5 py-3">
                        <table class="table table-bordered" id="loan-table">
                            <thead>
                                <tr>
                                    <th>Bank Name</th>
                                    <th>Contact Person</th>
                                    <th>Mobile No.</th>
                                    <th>Email ID</th>
                         
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="highlight p-0 m-0">PNB</span></td>
                                    <td>Data Fill Soon</td>
                                    <td>Data Fill Soon</td>
                                    <td>Data Fill Soon</td>
                   
                                </tr>
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>

            
            <!-- Home About Section Begin -->
            <section class="custom-bg mb-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 ps-4 pe-4">
                            <div class="row g-3">
                                <div class="col-12">
                                    <img src="{{asset('assets/img/loan/Doctoral-programmes-4.jpg')}}"
                                        class="img-fluid" style="height: 350px; width: 100%;" alt="Property 1">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 d-flex flex-column justify-content-center p-4 ps-4 pe-4">
                            <div class="">
                                <h2 class="tmu-text-primary mb-1"><span>Benefits of the </span><span> education
                                        loan</span></h2>
                                <p>The grant of loan covers all courses of TMU. Speedy disposal of the loan application.
                                    The Branch of PNB, where the campus of TMU is located irrespective of the location
                                    of the student, can accord sanction. For example, a student
                                    applying to Punjab National Bank, TMU Campus, Moradabad (Uttar Pradesh) but staying
                                    at Dehradun, can apply to the PNB Branch at TMU Campus and communicate to the
                                    Dehradun Branch for disbursement after due verification and signing of documents.
                                    Loans are being sanctioned at a concessional rate of interest as compared to the
                                    normal scheme of PNB.
                                    The student can cover all his expenses e.g. hostel, stationary etc. while applying
                                    for a loan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-7 d-flex flex-column justify-content-center p-3 ps-4 pe-4">
                            <div class="">
                                <h2 class="tmu-text-primary"><span>Government of India </span><span> Education Loan
                                        Assistance</span></h2>
                                <button class="tmu-btn btn-3 py-2 d-block mb-2 tmu-fs-14"><a
                                        href="https://www.vidyalakshmi.co.in/Students/index" target="blank">Vidhya
                                        Lakshmi Yojna <i class="bi-arrow-right"></i></a></button>
                            </div>
                        </div>
                        <div class="col-lg-5 ps-4 pe-4">
                            <div class="row g-3">
                                <div class="col-12">
                                    <img src="{{asset('assets/img/loan/Postgraduate-programmes-thumb-1.jpg')}}"
                                        class="img-fluid" style="height: 350px; width: 100%;" alt="Property 1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container mb-4">
                <div class="row mt-0 mb-3">
                    <h3 class="tmu-text-primary ps-4 pe-4"><span>Illustrative List of Papers /
                            Documents </span><span> Required for Education Loan</span></h3>
                    <div class="col-md-6">
                        <ol class="m-ol-list ps-5">
                            <li>Admission letter of the University giving details of year wise fee,
                                boarding and lodging expenses. Letter confirming scholarship, if any.</li>
                            <li>Attested copies of documents for proof of age/date of birth and proof of residential
                                address.</li>
                            <li>Passport-size photo of the applicant, co-obligates, and guarantors.</li>
                            <li>Copy of mark sheet/degree certificates of previous academic qualifications.</li>
                            <li>Income proof/latest income tax return of parents/co-obligates, guarantors. (if any)</li>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <ol class="m-ol-list ps-5">
                            <li>Details of collateral security along with valuation certificate of Govt approved valuer
                                (if any).</li>
                            <li>Details / statements of Bank accounts held with State Bank of India / other banks by the
                                student applicant / co-obligant (s) /guarantors
                                (if any) for the last six months</li>
                            <li>Copy of Passport/Visa, cost of airfare (documentary detail) in case of studies abroad.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap JS and dependencies -->
@endsection