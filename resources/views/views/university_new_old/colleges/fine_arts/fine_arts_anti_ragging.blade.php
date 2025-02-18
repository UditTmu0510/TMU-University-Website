@extends('layouts.university.colleges.fine_arts_with_sidebar')
@section('content')

<style>
    table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 8px;
  text-align: left;
  border: 1px solid #ddd;
}

@media screen and (max-width: 600px) {
  table, thead, tbody, th, td, tr {
    display: block;
    text-align:center;
  }

  th, td {
    box-sizing: border-box;
    display: block;
    width: 100%;
  }

  th, td:before {
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
										<td class="text-center">1</td>
										<td>Mr. Ravindra Dev</td>
										<td >Principal</td>
										<td>9411970851</td>

									</tr>

									<tr>
										<td class="text-center">2</td>
										<td>Dr. Farha Deeba</td>
										<td >Assistant Professor </td>
										<td >9045395032</td>

									</tr>

									<tr>
										<td class="text-center">3</td>
										<td>Mr. Ankur Dev</td>
										<td >Assistant Professor </td>
										<td >9837435792</td>

									</tr>

									<tr>
										<td class="text-center">4</td>
										<td>Mr. Pravesh Chandra Verma</td>
										<td >Assistant Professor </td>
										<td >9336150676</td>

									</tr>
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
                                            <th >Name</th>
                                            <th >Designation</th>
                                            <th >Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
										<td class="text-center">1</td>
										<td>Mr. Ravindra Dev</td>
										<td >Chairperson</td>
										<td>9411970851</td>
									</tr>

									<tr>
										<td class="text-center">2</td>
										<td>Dr. Farha Deeba</td>
										<td >Member</td>
										<td >9045395032</td>
									</tr>

									<tr>
										<td class="text-center">3</td>
										<td>Mr. Anup Kumar Pandey</td>
										<td >Member</td>
										<td>9873362133</td>
									</tr>

									<tr>
										<td class="text-center">4</td>
										<td>Mr. Rajesh Kumar</td>
										<td >First Information Person-I</td>
										<td>9971913176</td>
									</tr>

									<tr>
										<td class="text-center">5</td>
										<td>Mr. Vaibhav Jha</td>
										<td >First Information Person-II</td>
										<td>7523906969</td>

									</tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

    @endsection