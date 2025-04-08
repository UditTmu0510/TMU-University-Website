@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container">

        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Phd</span><span> Fee Structure</span></h1>

            <div class="container my-2 py-2">
                <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button"
                            role="tab" aria-controls="Tab1" aria-selected="true"> Faculty of Medicine</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button"
                            role="tab" aria-controls="Tab2" aria-selected="false">Faculty of Dentistry</button>
                    </li>
                    <!--<li class="nav-item" role="presentation">-->
                    <!--  <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Tab3" type="button"-->
                    <!--    role="tab" aria-controls="Tab3" aria-selected="false">Jain-->
                    <!--    Studies</button>-->
                    <!--</li>-->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#Tab4" type="button"
                            role="tab" aria-controls="Tab4" aria-selected="false">
                            Faculty of Nursing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#Tab5" type="button"
                            role="tab" aria-controls="Tab5" aria-selected="false"> Other
                            Programmes</button>
                    </li>
                </ul>
                <div class="tab-content second ps-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <h3 class="tmu-text-primary text-center mb-3 mt-3"><span>(Applicable From </span><span> July 2025 TRAT Onwards)</span></h3>
                        <p class="mb-2 text-justify">The fee payable by the research scholar enrolled for the Ph.D. programme shall be as under:</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl. No.</th>
                                        <th>Description</th>
                                        <th>Schedule of Payment</th>
                                        <th>Amount (<i class="fa fa-inr"></i>)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td>
                                            Application-cum-Processing Fee
                                        </td>
                                        <td>
                                            With application form
                                        </td>
                                        <td>
                                            2,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            2
                                        </td>
                                        <td>
                                            Registration Fee
                                        </td>
                                        <td>
                                            At the time of registration
                                        </td>
                                        <td>
                                            2,00,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            3
                                        </td>
                                        <td>
                                            1st Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the first year of registration
                                        </td>
                                        <td>
                                            1,00,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            4
                                        </td>
                                        <td>
                                            2nd Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the second year of registration
                                        </td>
                                        <td>
                                            1,00,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            5
                                        </td>
                                        <td>
                                            3rd Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the third year of registration
                                        </td>
                                        <td>
                                            1,00,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            6
                                        </td>
                                        <td>
                                            4th Instalment of Fee
                                        </td>
                                        <td>
                                            At the time of thesis submission
                                        </td>
                                        <td>
                                            1,00,000.00
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="alert alert-success">
                            <p>1. If a scholar submits his final thesis within thirty-six (36) months from the date of his registration a discount of Rs. 30,000/- shall be granted in his thesis submission fees. However, this discount shall not be applicable for the internal faulty members enrolled as research scholars in the Ph.D. Programme.&nbsp;</p>
                            <p>2. An extension fee of Rs. 2,00,000.00 per year will be charged after the completion of the third year of registration.</p>
                            <p>2.1. The above extension fee will not apply to female scholars who fall under the purview of Clause 13.3.1 of the Ph.D. Ordinance of the University.</p>
                            <p>3. Late fee fine at the rate of 9% per annum.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <h3 class="tmu-text-primary text-center mb-3 mt-3"><span>(Applicable From </span><span> July 2025 TRAT Onwards)</span></h3>
                        <p class="mb-2 text-justify">The fee payable by the research scholar enrolled for the Ph.D. programme shall be as under:</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl. No.</th>
                                        <th>Description</th>
                                        <th>Schedule of Payment</th>
                                        <th>Amount (<i class="fa fa-inr"></i>)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td>
                                            Application-cum-Processing Fee
                                        </td>
                                        <td>
                                            With application form
                                        </td>
                                        <td>
                                            2,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            2
                                        </td>
                                        <td>
                                            Registration Fee
                                        </td>
                                        <td>
                                            At the time of registration
                                        </td>
                                        <td>
                                            1,00,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            3
                                        </td>
                                        <td>
                                            1st Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the first year of registration
                                        </td>
                                        <td>
                                            70,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            4
                                        </td>
                                        <td>
                                            2nd Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the second year of registration
                                        </td>
                                        <td>
                                            70,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            5
                                        </td>
                                        <td>
                                            3rd Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the third year of registration
                                        </td>
                                        <td>
                                            70,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            6
                                        </td>
                                        <td>
                                            4th Instalment of Fee
                                        </td>
                                        <td>
                                            At the time of thesis submission
                                        </td>
                                        <td>
                                            90,000.00
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="alert alert-success">
                            <p>1. If a scholar submits his final thesis within thirty-six (36) months from the date of his registration a discount of Rs. 30,000/- shall be granted in his thesis submission fees. However, this discount shall not be applicable for the internal faulty members enrolled as research scholars in the Ph.D. Programme.</p>
                            <p>2. An extension fee of Rs. 50,000.00 per year will be charged after the completion of the third year of registration.</p>
                            <p>2.1. The above extension fee will not apply to female scholars who fall under the purview of Clause 13.3.1 of the Ph.D. Ordinance of the University.</p>
                            <p>3. Late fee fine at the rate of 9% per annum.</p>
                        </div>
                    </div>
                    <!--<div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">-->
                    <!--  <p class="text-justify mb-3">The fee payable by the candidate/research scholar-->
                    <!--    enrolled for the Ph.D. program shall be as under:</p>-->
                    <!--  <div class="table-responsive">-->
                    <!--    <table class="table table-bordered table-striped table-condensed mb-none">-->
                    <!--      <thead>-->
                    <!--        <tr>-->
                    <!--          <th class="text-center">Sl. No.</th>-->
                    <!--          <th>Description</th>-->
                    <!--          <th>Schedule of Payment</th>-->
                    <!--          <th>Amount (<i class="fa fa-inr"></i>)</th>-->
                    <!--        </tr>-->
                    <!--      </thead>-->
                    <!--      <tbody>-->
                    <!--        <tr>-->
                    <!--          <td class="text-center">1</td>-->
                    <!--          <td>Application-cum-Processing Fee</td>-->
                    <!--          <td>With Application Form </td>-->
                    <!--          <td>2,000/-</td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--          <td class="text-center">2</td>-->
                    <!--          <td>Registration Fee</td>-->
                    <!--          <td>At the time of Registration</td>-->
                    <!--          <td>50,000/-</td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--          <td class="text-center">3</td>-->
                    <!--          <td>1<sup>st</sup> Installment of Fee</td>-->
                    <!--          <td>15 days before the expiry of first year of Registration</td>-->
                    <!--          <td>40,000/-</td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--          <td class="text-center">4</td>-->
                    <!--          <td>2<sup>nd</sup> Installment of Fee</td>-->
                    <!--          <td>15 days before the expiry of second year of Registration</td>-->
                    <!--          <td>40,000/-</td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--          <td class="text-center">5</td>-->
                    <!--          <td>3<sup>rd</sup> Installment of Fee</td>-->
                    <!--          <td>15 days before the expiry of third year of Registration</td>-->
                    <!--          <td>40,000/-</td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--          <td class="text-center">6</td>-->
                    <!--          <td>4<sup>th</sup> Installment of Fee</td>-->
                    <!--          <td>At the time of thesis submission </td>-->
                    <!--          <td>30,000/-</td>-->
                    <!--        </tr>-->
                    <!--      </tbody>-->
                    <!--    </table>-->
                    <!--  </div>-->
                    <!--  <br>-->
                    <!--  <div class="alert alert-success">-->
                    <!--    <ol class="m-ol-list ps-3">-->
                    <!--      <li>An extension fee of <i class="fa fa-inr"></i> 15,000 per year will be-->
                    <!--        charged after the completion of third year of registration</li>-->
                    <!--<li >Late Fee of <i class="fa fa-inr"></i> 2,000/- will be charged if the candidate exceeds the deadline by 15 days and <i class="fa fa-inr"></i> 1,000/- per 15 days or part thereof for any further delay.</li>-->
                    <!--      <li>As per the updated guidelines released on February 01, 2022, a late fee-->
                    <!--        fine at the rate of 9% p.a., on the tuition fee will be charged if the-->
                    <!--        candidate exceeds the deadline.</li>-->
                    <!--      <li>The above extension fee will not be applicable to women who fall under-->
                    <!--        the purview of Clause 13.3 of the <a href="https://www.tmu.ac.in/tmu/phd-ordinance-2017"-->
                    <!--          target="_blank">Ph.D. Ordinance</a> of the University.</li>-->
                    <!--      <li>These guildelines will be effected from <strong> January TRAT-->
                    <!--          2024.</strong></li>-->
                    <!--    </ol>-->
                    <!--  </div>-->
                    <!--</div>-->
                    <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                        <h3 class="tmu-text-primary text-center mb-3 mt-3"><span>(Applicable From </span><span> July 2025 TRAT Onwards)</span></h3>
                        <p class="mb-2 text-justify">The fee payable by the Research Scholar enrolled for the <span class="highlight p-0">Regular Ph.D.</span> programme shall be as under:</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl .No.</th>
                                        <th>Description</th>
                                        <th>Schedule of Payment</th>
                                        <th>Amount <br> (<i class="fa fa-inr"></i>)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td>
                                            Application-cum-Processing Fee
                                        </td>
                                        <td>
                                            With application form
                                        </td>
                                        <td>
                                            2,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            2
                                        </td>
                                        <td>
                                            Registration Fee
                                        </td>
                                        <td>
                                            At the time of registration
                                        </td>
                                        <td>
                                            1,00,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            3
                                        </td>
                                        <td>
                                            1st Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the first year of registration
                                        </td>
                                        <td>
                                            80,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            4
                                        </td>
                                        <td>
                                            2nd Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the second year of registration
                                        </td>
                                        <td>
                                            80,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            5
                                        </td>
                                        <td>
                                            3rd Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the third year of registration
                                        </td>
                                        <td>
                                            80,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            6
                                        </td>
                                        <td>
                                            4th Instalment of Fee
                                        </td>
                                        <td>
                                            At the time of thesis submission
                                        </td>
                                        <td>
                                            60,000.00
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="alert alert-success">
                            <p>1. If a scholar submits his final thesis within thirty-six (36) months from the date of his registration a discount of Rs. 30,000/- shall be granted in his thesis submission fees. However, this discount shall not be applicable for the internal faulty members enrolled as research scholars in the Ph.D. Programme.</p>
                            <p>2. An extension fee of Rs. 15,000.00 per year will be charged after the completion of the third year of registration.</p>
                            <p>2.1. The above extension fee will not apply to female scholars who fall under the purview of Clause 13.3.1 of the Ph.D. Ordinance of the University.</p>
                            <p>3. Late fee fine at the rate of 9% per annum.</p>
                        </div>
                        <br>
                        <p class="text-justify mb-3">The fee payable by the Research Scholar enrolled for the <span class="highlight p-0">Part-Time</span> Ph.D. programme shall be as under w.e.f. TRAT July 2025:
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl. No.</th>
                                        <th>Description</th>
                                        <th>Schedule of Payment</th>
                                        <th>Amount <br> (<i class="fa fa-inr"></i>)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td>
                                            Application-cum-Processing Fee
                                        </td>
                                        <td>
                                            With application form
                                        </td>
                                        <td>
                                            2,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            2
                                        </td>
                                        <td>
                                            Registration Fee
                                        </td>
                                        <td>
                                            At the time of registration
                                        </td>
                                        <td>
                                            1,00,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            3
                                        </td>
                                        <td>
                                            1st Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the first year of registration
                                        </td>
                                        <td>
                                            50,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            4
                                        </td>
                                        <td>
                                            2nd Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the second year of registration
                                        </td>
                                        <td>
                                            50,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            5
                                        </td>
                                        <td>
                                            3rd Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the third year of registration
                                        </td>
                                        <td>
                                            50,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            6
                                        </td>
                                        <td>
                                            4th Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the fourth year of registration
                                        </td>
                                        <td>
                                            50,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            7
                                        </td>
                                        <td>
                                            5th Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the five year of registration
                                        </td>
                                        <td>
                                            50,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            8
                                        </td>
                                        <td>
                                            6th Instalment of Fee
                                        </td>
                                        <td>
                                            At the time of thesis submission
                                        </td>
                                        <td>
                                            50,000.00
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="alert alert-success">
                            <p>1. If a scholar submits his final thesis within thirty-six (36) months from the date of his registration a discount of Rs. 30,000/- shall be granted in his thesis submission fees. However, this discount shall not be applicable for the internal faulty members enrolled as research scholars in the Ph.D. Programme.</p>
                            <p>2. An extension fee of Rs. 15,000.00 per year will be charged after the completion of the third year of registration.</p>
                            <p>2.1. The above extension fee will not apply to female scholars who fall under the purview of Clause 13.3.1 of the Ph.D. Ordinance of the University.</p>
                            <p>3. Late fee fine at the rate of 9% per annum.</p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Tab5" role="tabpanel" aria-labelledby="tab5-tab">
                        <h3 class="tmu-text-primary text-center mb-3 mt-3"><span>(Applicable From </span><span> July 2025 TRAT Onwards)</span></h3>
                        <p class="fw-bold mb-2">(All Ph.D. Programmes except the Faculty of Medicine, Faculty of Dentistry & Faculty of Nursing)</p>
                        <p class="mb-2 text-justify">The fee payable by the research scholar enrolled for the Ph.D. programme shall be as under:</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl. No.</th>
                                        <th>Description</th>
                                        <th>Schedule of Payment</th>
                                        <th>Amount (<i class="fa fa-inr"></i>)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td>
                                            Application-cum-Processing Fee
                                        </td>
                                        <td>
                                            With application form
                                        </td>
                                        <td>
                                            2,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            2
                                        </td>
                                        <td>
                                            Registration Fee
                                        </td>
                                        <td>
                                            At the time of registration
                                        </td>
                                        <td>
                                            55,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            3
                                        </td>
                                        <td>
                                            1st Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the first year of registration
                                        </td>
                                        <td>
                                            55,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            4
                                        </td>
                                        <td>
                                            2nd Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the second year of registration
                                        </td>
                                        <td>
                                            55,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            5
                                        </td>
                                        <td>
                                            3rd Instalment of Fee
                                        </td>
                                        <td>
                                            15 days before the expiry of the third year of registration
                                        </td>
                                        <td>
                                            55,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            6
                                        </td>
                                        <td>
                                            4th Instalment of Fee
                                        </td>
                                        <td>
                                            At the time of thesis submission
                                        </td>
                                        <td>
                                            30.000.00
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="alert alert-success">
                            <p> 1. If a scholar submits his final thesis within thirty-six (36) months from the date of his registration his thesis submission fees of Rs. 30,000/- shall be waived off. However, this discount shall not be applicable for the internal faulty members enrolled as research scholars in the Ph.D. Programme.&nbsp;</p>
                            <p>2. An extension fee of Rs. 40,000 per year will be charged after the completion of the third year of registration.</p>
                            <p>2.1. The above extension fee will not apply to female scholars who fall under the purview of Clause 13.3.1 of the Ph.D. Ordinance of the University.</p>
                            <p>3. Late fee fine at the rate of 9% per annum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container ends -->
        </div>
    </div>
</div>
</div>

@endsection