@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')




<div class="main-content">
    <div class="container">
      <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Application Form for </span><span> Admission in Ph.D.
          Programme</span></h1>


      <!-- Information Section
					============================================= -->
      <div class="row mt-2 text-center g-5 mb-3 m-0 p-0">
        <div class="section-contact col-lg-4 col-md-6">
          <div class="rounded-6">
            <i class="i-plain i-large mx-auto mb-4 icon-featured fa fa-keyboard-o"></i>
            <h3 class="mb-2" style="font-size:16px; font-family:'poppins';">APPLY ONLINE</h3>
            <span class="mb-4">Apply Online, Upload Documents, Pay Online</span><br>
            <a href="https://admissions.tmu.ac.in/" class="tmu-btn btn-1 py-2 mt-4 mb-4 ms-2 mt-4">
             <span>Apply Online</span></a>
          </div>
        </div>

        <div class="section-contact col-lg-4 col-md-6">
          <div class=" rounded-6">
            <i class="i-plain i-large mx-auto mb-4 uil-download-alt"></i>
            <h3 class="mb-2" style="font-size:16px; font-family:'poppins';">Download Form</h3>
            <span class="mb-4">Download Application Form for offline submission</span><br><br>
            <a href="#" class="tmu-btn btn-1 py-2 mt-4 mb-4 ms-2 mt-4"> <span>Download Form</span></a>
          </div>
        </div>

        <div class="section-contact col-lg-4 col-md-6">
          <div class=" rounded-6">
            <i class="i-plain i-large mx-auto mb-4 icon-featured fa fa-inr"></i>
            <h3 class="mb-2" style="font-size:16px; font-family:'poppins';">BUY APPLICATION PACK</h3>
            <span class="mb-4">Buy application pack from Campus/Information Centers</span><br>
            <a href="#" class="tmu-btn btn-1 py-2 mt-4 mb-4 ms-2 mt-4"> <span>BUY APPLICATION PACK</span></a>
          </div>
        </div>

        <div class="section-contact col-lg-4 col-md-6">
          <div class=" rounded-6">
            <i class="i-plain i-large mx-auto mb-4 fa fa-undo"></i>
            <h3 class="mb-5" style="font-size:16px; font-family:'poppins';">Application Form Fee Refund Policy</h3>
            <br>
            <a href="#" class="tmu-btn btn-1 py-2 mt-4 mb-4 ms-2 mt-4"> <span>Refund Policy</span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Container End -->

    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-9">
          <div class="modal fade" id="refundPolicyModal" tabindex="-1" role="dialog"
            aria-labelledby="refundPolicyModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="refundPolicyModalLabel">Application Form Fee Refund Policy</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Your refund policy content goes here -->
                  <p class="mb-0">The downloaded form should be duly filled-up and can be forwarded to Director
                    (Admissions), Teerthanker Mahaveer University, Delhi Road, Moradabad (U.P.) - 244 001 alongwith a
                    demand draft of Rs 1,000/- favoring 'Teerthanker Mahaveer University', payable at Moradabad.
                    <br><br><strong>Note:</strong> For online payments, it is important for candidates to note the
                    transaction number for future reference and request for any type of Refund, for whatsoever reason,
                    will be at the sole discretion of the University.
                  </p>
                </div>
                <div class="modal-footer">
                  <!-- Optional: Add buttons in the footer -->
                  <button type="button" class="btn btn-secondary btn-center" style="background-color:#FF7900;"
                    data-bs-dismiss="modal">No Thanks!</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade text-start bs-example-modal-sm" id="contactUsModal" tabindex="-1" role="dialog"
            aria-labelledby="contactUsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="contactUsModalLabel">Download Form</h4>
                  <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                  <p class="mb-0">The downloaded form should be duly filled-up and can be forwarded to Joint Registrar,
                    Administrative Block, Teerthanker Mahaveer University, Delhi Road, Moradabad (U.P.) - 244 001
                    alongwith a demand draft of <b style="color:#FF7900;">2,000/-</b> favoring 'Teerthanker Mahaveer
                    University', payable at Moradabad.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary custom-btn" style="background-color:#FF7900;"
                    data-bs-dismiss="modal">Close</button>
                  <a href="{{asset('/assets/pdf/research/phd_application_form.pdf"><button type="button"
                      class="btn btn-secondary custom-btn"Get it <i
                        class="uil-download-alt"></i></button></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Small modal -->
          <div class="modal fade text-start bs-example-modal-sm" id="signUpModal" tabindex="-1" role="dialog"
            aria-labelledby="signUpModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="signUpModalLabel">Buy Application Form</h4>
                  <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                  <p class="mb-0">Duly fill-in the required details completely, affix recent passport size photo and
                    submit along with photocopy of Class-X mark sheet at following centres.</p>
                  <b>University Campus</b><br>
                  Delhi Road, Moradabad - 244001 (Uttar Pradesh)
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary custom-btn" style="background-color:#FF7900;"
                    data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    </div>
  </div>

@endsection