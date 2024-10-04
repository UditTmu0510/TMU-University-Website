@extends('layouts.university.research_cell_with_sidebar')
@section('content')




<div class="col-12 col-md-9 col-lg-10 mt-3 mt-sm-0 pt-3 pt-md-5 px-4">

  <div class="row mx-0">
    <h1 class="tmu-text-primary tmu-page-heading"><span> Result of </span><span> Ph.D. Programme</span></h2>



      <div class="container my-2 py-2">
        <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button" role="tab" aria-controls="Tab1" aria-selected="true"> TRAT Result</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button" role="tab" aria-controls="Tab2" aria-selected="false"> Course Work Result</button>
          </li>
        </ul>
        <div class="tab-content second ps-5 px-md-5" id="myTabContent">
          <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
            <object data="https://www.tmu.ac.in/uploads/announcement/TRAT_03_Jan_2024_Result_0001.pdf" type="application/pdf" width="100%" height="1120px">
              <p>Your web browser doesn't have a PDF plugin. Instead you can
              </p>
              <center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/uploads/announcement/TRAT_03_Jan_2024_Result_0001.pdf" download="" data-uw-pdf-br="2" data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here
                  to download PDF
                  file.</a></center>
            </object>
          </div>
          <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
            <object data="https://www.tmu.ac.in/uploads/announcement/Coursework&re_appearResult_Jan_2024.pdf" type="application/pdf" width="100%" height="1120px">
              <p>Your web browser doesn't have a PDF plugin. Instead you can
              </p>
              <center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/uploads/announcement/Coursework&re_appearResult_Jan_2024.pdf" download="" data-uw-pdf-br="2" data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here
                  to download PDF
                  file.</a></center>
            </object>
          </div>

        </div>
      </div>

  </div>
</div>
</div>
</div>
</div>
</section><!-- #content end -->


@endsection