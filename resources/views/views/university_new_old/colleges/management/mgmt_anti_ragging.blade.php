@extends('layouts.university.colleges.tmimt_with_sidebar')
@section('content')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ddd;
    }

    @media screen and (max-width: 600px) {

        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
            text-align: center;
        }

        th,
        td {
            box-sizing: border-box;
            display: block;
            width: 100%;
        }

        th,
        td:before {
            content: attr(data-label);
            float: left;
            font-weight: bold;
        }

        tr {
            margin-bottom: 1em;
        }
    }
</style>

<div class="main-content">


    <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Anti Ragging </span><span> Committee</span></h1>

    <div class="container">
        <div class="row mb-3">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Sl. No.</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Contact No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1.</td>
                            <td>Prof.(Dr.) Vipin Jain</td>
                            <td>Chairperson</td>
                            <td>9917200216</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Dr. Chanchal Chawla</td>
                            <td>Proctor</td>
                            <td>9808358721</td>

                        </tr>

                        <tr>
                            <td class="text-center">3</td>
                            <td>Dr. K.K.Pandey</td>
                            <td>Member</td>
                            <td>--</td>

                        </tr>

                        <tr>
                            <td class="text-center">4</td>
                            <td>Dr. Amit Kansal</td>
                            <td>Member</td>
                            <td>--</td>

                        </tr>

                        <tr>
                            <td class="text-center">5</td>
                            <td>Ms. Anshu Chauhan</td>
                            <td>Member</td>
                            <td>9720008334</td>

                        </tr>

                        <tr>
                            <td class="text-center">6</td>
                            <td>Dr. Anshul Sharma</td>
                            <td>Member</td>
                            <td>--</td>

                        </tr>

                        <tr>
                            <td class="text-center">7</td>
                            <td>Dr. Rajeev Verma</td>
                            <td>Member Secretary & FIP</td>
                            <td>9412483454</td>

                        </tr>

                        <tr>
                            <td class="text-center">8</td>
                            <td>Dr. Mohit Rastogi</td>
                            <td>Member</td>
                            <td>9456078204</td>

                        </tr>

                        <tr>
                            <td class="text-center">9</td>
                            <td>Ms. Pankhuri Agarwal</td>
                            <td>Member</td>
                            <td>8958096842</td>

                        </tr>

                        <tr>
                            <td class="text-center">10</td>
                            <td>Mr. Anand Joshi</td>
                            <td>Member</td>
                            <td>7599017428</td>

                        </tr>

                        <tr>
                            <td class="text-center">11</td>
                            <td>Dr. Manoj Agarwal</td>
                            <td>Member</td>
                            <td>7417606465</td>

                        </tr>

                        <tr>
                            <td class="text-center">12</td>
                            <td>Dr. Pratibha Sharma</td>
                            <td>Member</td>
                            <td>--</td>

                        </tr>

                        <tr>
                            <td class="text-center">13</td>
                            <td>Dr. Nitin Kumar Agarwal</td>
                            <td>Member</td>
                            <td>--</td>

                        </tr>

                        <tr>
                            <td class="text-center">14</td>
                            <td>Dr. Ankit Kumar</td>
                            <td>Member</td>
                            <td>--</td>

                        </tr>

                        <tr>
                            <td class="text-center">15</td>
                            <td>Dr. Rahul</td>
                            <td>Member</td>
                            <td>9412145230</td>

                        </tr>

                        <tr>
                            <td class="text-center">16</td>
                            <td>Dr. Avinash Raj Kumar</td>
                            <td>Member</td>
                            <td>--</
                                    </tbody>
                </table>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mb-5 mt-5">
                <div class="col-md-8 mb-3 mb-sm-0" style="background-color: #001055;">
                    <div class="card border-light my-3">
                        <div class="card-body text-center">
                            <h3 class="card-title tmu-text-primary display-6"><span>ANTI RAGGING TOLL FREE</span></h3>
                            <p class="card-text h1 tmu-color">HELPLINE NO. 1800-180-5522 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <h2 class="tmu-text-primary tmu-page-heading"><span> Proctorial </span><span>Board</span></h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Sl. No. </th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Contact No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Prof.(Dr.) Vipin Jain</td>
                            <td>Chairperson</td>
                            <td>9917200216</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Dr. Chanchal Chawla</td>
                            <td>Proctor</td>
                            <td>9808358721</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Dr. K.K.Pandey</td>
                            <td>Member</td>
                            <td>--</td>

                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Dr. Amit Kansal</td>
                            <td>Member</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Ms. Anshu Chauhan</td>
                            <td>Member</td>
                            <td>9720008334</td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>Dr. Anshul Sharma</td>
                            <td>Member</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td>Dr. Mohit Rastogi</td>
                            <td>Member</td>
                            <td>9456078204</td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td>Dr. Rajeev Verma</td>
                            <td>Member Secretary & FIP</td>
                            <td>9412483454</td>
                        </tr>
                        <tr>
                            <td class="text-center">9</td>
                            <td>Mr. Anand Joshi</td>
                            <td>Member</td>
                            <td>7599017428</td>
                        </tr>
                        <tr>
                            <td class="text-center">10</td>
                            <td>Dr. Nitin Kumar Agarwal</td>
                            <td>Member</td>
                            <td>8171798907</td>
                        </tr>
                        <tr>
                            <td class="text-center">11</td>
                            <td>Dr. Rahul Malhotra</td>
                            <td>Member</td>
                            <td>9412145230</td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td>Ms. Pankhuri Agarwal</td>
                            <td>Member</td>
                            <td>8958096842</td>
                        </tr>
                        <tr>
                            <td class="text-center">13</td>
                            <td>Dr. Manoj Agarwal</td>
                            <td>Member</td>
                            <td>7417606465</td>
                        </tr>
                        <tr>
                            <td class="text-center">14</td>
                            <td>Dr. Pratibha Sharma</td>
                            <td>Member</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <td class="text-center">15</td>
                            <td>Dr. Ankit Kumar</td>
                            <td>Member</td>
                            <td>--</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

@endsection