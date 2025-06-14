@extends('layouts.university.departments.about_tmu_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container">
      <section class="about-section bg-light mt-3">
        <div class="container">
          <div class="text-content p-2">
            <h1 class="mb-2 tmu-text-primary tmu-page-heading pt-md-3"><span>TMU Approvals:  </span><span> 'Statutory Compliance Details'</span>
            </h1>
            <p class="about-p mb-3">The Teerthanker Mahaveer University, established by an 'Act' of the
              Government of
              Uttar Pradesh, and approved by the <strong class="fs-14"><a
                  href="http://www.ugc.ac.in/" target="_blank">University
                  Grants Commission
                  (UGC)</a></strong>, since its inception in 2008, is the preferred destination for
              students of modern
              sciences and myriad subjects in languages and arts.</p>
          </div>
          <div class="container p-1">
            <h3 class="tmu-text-primary mb-1"><span>State Government </span><span> Recognition</span></h3>
            <p class="mb-2">Teerthanker Mahaveer University is a Jain Minority State Private University
              established by
              Act No. 30 of 2008 of the Government of Uttar Pradesh.</p>
            <div class="row  mx-0">
              <ul class="list-group">
                <li class="list-group-item">
                  <a href="{{asset('/assets/img/aboutus/statutory_approvals/govt_letters/1.jpg')}}" class="text-decoration-none" data-bs-toggle="modal"
                    data-bs-target="#lightboxModal1">
                    Notification (Hindi)
                  </a>
                </li>
                <li class="list-group-item">
                  <a href="{{asset('/assets/img/aboutus/statutory_approvals/govt_letters/2.jpg')}}" class="text-decoration-none" data-bs-toggle="modal"
                    data-bs-target="#lightboxModal2">
                    Notification (English)
                  </a>
                </li>
                <li class="list-group-item">
                  <a href="{{asset('/assets/img/aboutus/statutory_approvals/govt_letters/3.jpg')}}" class="text-decoration-none" data-bs-toggle="modal"
                    data-bs-target="#lightboxModal3">
                    Authorization Letter from Government of Uttar Pradesh
                  </a>
                </li>
              </ul>

              <!-- Lightbox Modals -->
              <div class="modal fade" id="lightboxModal1" tabindex="-1" aria-labelledby="lightboxModal1Label"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="lightboxModal1Label">Notification (Hindi)</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="{{asset('/assets/img/aboutus/statutory_approvals/govt_letters/1.jpg')}}" alt="Notification (Hindi)" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="lightboxModal2" tabindex="-1" aria-labelledby="lightboxModal2Label"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="lightboxModal2Label">Notification (English)</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="{{asset('/assets/img/aboutus/statutory_approvals/govt_letters/2.jpg')}}" alt="Notification (English)"
                        class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="lightboxModal3" tabindex="-1" aria-labelledby="lightboxModal3Label"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="lightboxModal3Label">Authorization Letter from
                        Government of Uttar
                        Pradesh</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="{{asset('/assets/img/aboutus/statutory_approvals/govt_letters/3.jpg')}}"
                        alt="Authorization Letter from Government of Uttar Pradesh" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <div class="container mt-3">
        <div class="row">
          <div class="card">
            <div class="row g-0">
              <div class="col-lg-10 p-3">
                <div class="card-body">
                  <h3 class="tmu-text-primary mb-2"><span>UGC </span><span> Recognition</span></h3>
                  <p class="text-justify">To be a World Leader in the integration of teaching and learning, the advancement
                    of the knowledge base through research and leadership in service and outreach. The UGC has visited
                    Teerthanker Mahaveer University to assess and evaluate its progress in accordance with the UGC
                    (Establishment and Maintenance of Standards in Private University) Regulations, 2003.</p>
                </div>
              </div>
              <div class="col-12 col-lg-2 d-flex align-items-center justify-content-center p-3">
                <img src="{{asset('/assets/img/aboutus/statutory_approvals/ugc.png')}}" alt="TMU approved by UGC" class="img-fluid"
                style="max-height: 150px;">
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="iqac-container">
            <div class="iqac-card">
              <div class="card-pdf">
                <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                <p class="description">Letter of UGC recognition for Teerthanker Mahaveer University</p>
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/img/aboutus/pdf/approvals/5.pdf')}}">View
                  PDF</a>
              </div>
              <div class="card-pdf">
                <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                <p class="description">The UGC's Letter of 12B status was granted to Teerthanker Mahaveer University.
                </p>
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/img/aboutus/pdf/approvals/4.pdf')}}">View
                  PDF</a>
              </div>
            </div>

          </div>
        </div>


          <div class="col-md-12">
            <h3 class="tmu-text-primary mt-1 mb-0"><span>Approval by </span><span> Regulatory Bodies</span></h3>
            <p class="text-justify mb-2">The University has the necessary approvals of all the regulatory bodies
              governing different programmes detailed as under:</p>
            <div class="table-responsive mb-4">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Programmes</th>
                    <th>Approving Regulatory Authority</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>MBBS, MD, MS</td>
                    <td>Medical Council of India</td>
                  </tr>
                  <tr>
                    <td>B.D.S., M.D.S.</td>
                    <td>Dental Council of India</td>
                  </tr>
                  <tr>
                    <td>DMLT, DXRT, D.OPTOM., Diploma in Blood Transfusion, Diploma in C.T. Technician, Diploma in
                      Emergency & Trauma Care, Diploma in Cardiology Technician, Diploma in Dialysis Technician,
                      Diploma in O.T. Technician, Diploma in Anaesthesia and Critical Care Technician, Diploma in
                      X-Ray Technician, Diploma in MRI Technician, Diploma in Orthopaedic and Plaster Technician,
                      Diploma in Audio and Speech Therapy Technician, Diploma in Neonatal Care Technician, Diploma
                      in Invention Radiology, BRIT, BMLT, B.OPTOM, BPT, MPT, MMLT, M.OPTOM. & MRIT</td>
                    <td>U.P. State Medical Faculty</td>
                  </tr>
                  <tr>
                    <td>ANM, GNM, B.Sc, Post Basic B.Sc & M.Sc Nursing</td>
                    <td>Indian Nursing Council & U.P. State Medical Faculty</td>
                  </tr>
                  <tr>
                    <td>D.Pharm., B.Pharm., B.Pharm. (Lateral Entry), Pharm.D & Pharm.D (PB), M.Pharm
                      -(Pharmaceutics, Pharmacology, Pharmacognosy & Pharmaceutical Analysis)</td>
                    <td>Pharmacy Council of India (PCI)</td>
                  </tr>
                  <tr>
                    <td>B.Ed., M.Ed., B.Sc. - B.Ed (Integrated), B.A. - B.Ed. (Integrated), B.P.Ed., M.P.Ed., & BTC.
                    </td>
                    <td>National Council for Teachers Education (NCTE) & SCERT, Lucknow</td>
                  </tr>
                  <tr>
                    <td>B.A-LL.B. (Hons.), B.B.A-LL.B. (Hons.) & B.Com.-LL.B. (Hons.), LLM</td>
                    <td>Bar Council of India (BCI)</td>
                  </tr>
                  <tr>
                    <td>B.Tech. Computer Science & Engineering</td>
                    <td>National Board of Accreditation (NBA)
                    </td>
                  </tr>

                  <tr>
                    <td>B.Tech. (Mechanical, Civil, Electrical, Electronics & Communication)</td>
                    <td>All India Council for Technical Education (AICTE)
                    </td>
                  </tr>
                  <tr>
                    <td>B.Sc (H) Agriculture</td>
                    <td>Indian Council of Agricultural Research (ICAR)</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
<script>
  document.addEventListener('hidden.bs.modal', function () {
    document.body.classList.remove('modal-open'); // Ensure scroll is enabled
    document.body.style.overflowY = "scroll"; // Restore scroll behavior
  });
</script>
@endsection