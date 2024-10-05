@extends('layouts.university.main')
@section('content')

<style>
    .modal-open {
  overflow: visible !important;
}

/* Ensure modal content stays scrollable */
.modal {
  overflow: auto;
}
</style>

<section id="content">

    <div class="container-fluid px-0">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- First Slide -->
                <div class="carousel-item active">
                    <img src="{{asset('/assets/img/facilities/teaching_facilities/1.jpg')}}" class="d-block w-100 carousel-img" alt="Alumni Banner 1">
                </div>
                <!-- Add more slides here -->
                <div class="carousel-item">
                    <img src="{{asset('/assets/img/facilities/teaching_facilities/2.jpg')}}" class="d-block w-100 carousel-img" alt="Alumni Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/assets/img/facilities/teaching_facilities/3.jpg')}}" class="d-block w-100 carousel-img" alt="Alumni Banner 3">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/assets/img/facilities/teaching_facilities/4.jpg')}}" class="d-block w-100 carousel-img" alt="Alumni Banner 4">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/assets/img/facilities/teaching_facilities/5.jpg')}}" class="d-block w-100 carousel-img" alt="Alumni Banner 5">
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="box-container">
        <div class="box">
            <h1 class="tmu-text-primary tmu-page-heading"><span>Classroom / L.T. / Demonstration Room / Tutorial Room</span><span> / Laboratories / Workshops / Museum</span> </h1>
            <div class="row">
                <div class="col-12 px-2 px-md-5">
                    <p style="text-align: justify;">The University has well spacious 234 Classrooms equipped with ICT facilities, 23 Smart Classroom, 6 Conference Room, 28 Lecture Theatre, 27 Seminar Hall and 5 Committee Room. The University has adequate number of laboratories equipped with major and minor equipment as prescribed by the concerned statutory council/body. </p>
                    <div class="read-more-content mt-0">
                        <p style="text-align: justify;">The University has established four state-of-the-art language labs having 240 computer terminals with hi-tech software having provision for developing basic, intermediate and business level language skills. These labs have attached uniquely designed personality development cabins and group discussion rooms.</p>
                    </div>
                    <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2" title="Read More">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-10 pt-3">
                <h2 class="tmu-text-primary mb-2 mt-2 text-center"><span>Class </span><span>Rooms</span></h2>
                <div class="table-responsive mb-5">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width:2%;text-align:center;vertical-align:middle" rowspan="2">Sl.No.</th>
                                <th style="text-align:center;vertical-align:middle" rowspan="2">College / Department Name</th>
                                <th style="text-align:center;vertical-align:middle" colspan="2">Class Room with LCD Projector</th>
                                <th style="text-align:center;vertical-align:middle" colspan="2">Interactive Class (Smart Class Room)</th>
                                <th style="text-align:center;vertical-align:middle" colspan="2">Conference Room</th>
                                <th style="text-align:center;vertical-align:middle" rowspan="2">Lecture Theatre</th>
                                <th style="text-align:center;vertical-align:middle" colspan="2">Seminar Hall</th>
                                <th style="text-align:center;vertical-align:middle" colspan="2">Committee Room</th>
                            </tr>
                            <tr>
                                <th style="text-align:center;vertical-align:middle">Room No.</th>
                                <th style="text-align:center;vertical-align:middle">No. of Rooms</th>
                                <th style="text-align:center;vertical-align:middle">Room No.</th>
                                <th style="text-align:center;vertical-align:middle">No. of Rooms</th>
                                <th style="text-align:center;vertical-align:middle">Room No.</th>
                                <th style="text-align:center;vertical-align:middle">No. of Rooms</th>
                                <th style="text-align:center;vertical-align:middle">Room No.</th>
                                <th style="text-align:center;vertical-align:middle">No. of Rooms</th>
                                <th style="text-align:center;vertical-align:middle">Room No.</th>
                                <th style="text-align:center;vertical-align:middle">No. of Rooms</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Medical College &amp; Research Centre<br><a href="{{route('class.room.medical')}}" target="_blank"><span class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3">View Here</span></a></td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/2.jpg')}}" class="single-image">A-101</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/1.jpg')}}" class="single-image">A-111</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/4.jpg')}}" class="single-image">A-112</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/3.jpg')}}" class="single-image">A-203</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/5.jpg')}}" class="single-image">A-204</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/6.jpg')}}" class="single-image">A-207</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/7.jpg')}}" class="single-image">A-214</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/8.jpg')}}" class="single-image">B-207</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/9.jpg')}}" class="single-image">B-208</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/10.jpg')}}" class="single-image">B-307</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/11.jpg')}}" class="single-image">B-308</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/1.jpg')}}" class="single-image">B-309</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/9.jpg')}}" class="single-image">B-310</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/2.jpg')}}" class="single-image">A-408</b>,
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/3.jpg')}}" class="single-image">A-418</a>,
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/4.jpg')}}" class="single-image">B-408</a>,
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/5.jpg')}}" class="single-image">B-409</a>,
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/6.jpg')}}" class="single-image">A-408</a>,
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/7.jpg')}}" class="single-image">A-505</a>,
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/8.jpg')}}" class="single-image">A-511</a>,
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/9.jpg')}}" class="single-image">A-113</a>,
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/12.jpg')}}" class="single-image">B-508</a>,
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/13.jpg')}}" class="single-image">B-509</a>,
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/10.jpg')}}" class="single-image">B-515</a>,
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/medical/11.jpg')}}" class="single-image">B-518</a>
                                </td>
                                <td class="text-center">25</td>
                                <td class="text-center">A-214, A-501</td>
                                <td class="text-center">2</td>
                                <td class="text-center">A-304</td>
                                <td class="text-center">1</td>
                                <td class="text-center">5</td>
                                <td class="text-center">A-103, A-212, B-211, A-305, A-409, B412, A-503, B-501, 545,328,123, 412,451,441, 304,531,462, 219,47,23</td>
                                <td class="text-center">20</td>
                                <td class="text-center">530</td>
                                <td class="text-center">1</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">College of Nursing<br><a href="{{route('class.room.nursing')}}" target="_blank"><span class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3">View Here</span></a></td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/1.jpg')}}" class="single-image">01</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/2.jpg')}}" class="single-image">09</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/4.jpg')}}" class="single-image">112</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/3.jpg')}}" class="single-image">113</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/5.jpg')}}" class="single-image">209</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/6.jpg')}}" class="single-image">210</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/7.jpg')}}" class="single-image">212</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/9.jpg')}}" class="single-image">301</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/10.jpg')}}" class="single-image">302</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/11.jpg')}}" class="single-image">303</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/19.jpg')}}" class="single-image">304</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/13.jpg')}}" class="single-image">306</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/14.jpg')}}" class="single-image">307</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/15.jpg')}}" class="single-image">309</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/nursing/17.jpg')}}" class="single-image">311</a>
                                </td>
                                <td class="text-center">15</td>
                                <td class="text-center">312, 315</td>
                                <td class="text-center">2</td>
                                <td class="text-center">115-B</td>
                                <td class="text-center">1</td>
                                <td class="text-center">1</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">College of Paramedical Sciences<br><a href="{{route('class.room.paramedical')}}" target="_blank"><span class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3">View Here</span></a></td>
                                </td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/1.jpg')}}" class="single-image">401</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/2.jpg')}}" class="single-image">402</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/3.jpg')}}" class="single-image">403</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/4.jpg')}}" class="single-image">404</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/5.jpg')}}" class="single-image">406</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/6.jpg')}}" class="single-image">407</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/7.jpg')}}" class="single-image">408</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/1.jpg')}}" class="single-image">410</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/2.jpg')}}" class="single-image">412</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/3.jpg')}}" class="single-image">501</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/4.jpg')}}" class="single-image">502</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/5.jpg')}}" class="single-image">503</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/6.jpg')}}" class="single-image">507</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/7.jpg')}}" class="single-image">508</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/1.jpg')}}" class="single-image">511</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/2.jpg')}}" class="single-image">515</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/3.jpg')}}" class="single-image">809</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/4.jpg')}}" class="single-image">811</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/paramedical/5.jpg')}}" class="single-image">813</a>
                                </td>
                                <td class="text-center">19</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td class="text-center">TMIMT College of Physical Education<br><a href="{{route('class.room.physicaleducation')}}" target="_blank"><span class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3">View Here</span></a></td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/physical_education/1.jpg')}}" class="single-image">101</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/physical_education/2.jpg')}}" class="single-image">402</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/physical_education/3.jpg')}}" class="single-image">403</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/physical_education/1.jpg')}}" class="single-image">404
                                </td>
                                <td class="text-center">4</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td class="text-center">Department of Physiotherapy<br><a href="{{route('class.room.physiotherapy')}}" target="_blank"><span class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3">View Here</span></a></td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/physiotheraphy/1.jpg')}}" class="single-image">615</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/physiotheraphy/2.jpg')}}" class="single-image">608</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/physiotheraphy/3.jpg')}}" class="single-image">610</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/physiotheraphy/4.jpg')}}" class="single-image">612</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/physiotheraphy/5.jpg')}}" class="single-image">602</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/physiotheraphy/6.jpg')}}" class="single-image">601</a>
                                </td>
                                <td class="text-center">6</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">603-604</td>
                                <td class="text-center">1</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td class="text-center">College of Pharmacy<br><a href="{{route('class.room.pharmacy')}}" target="_blank"><span class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3">View Here</span></a></td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/pharmacy/1.jpg')}}" class="single-image">101</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/pharmacy/2.jpg')}}" class="single-image">301</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/pharmacy/3.jpg')}}" class="single-image">302</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/pharmacy/4.jpg')}}" class="single-image">401</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/pharmacy/5.jpg')}}" class="single-image">402</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/pharmacy/6.jpg')}}" class="single-image">501</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/pharmacy/7.jpg')}}" class="single-image">502</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/pharmacy/8.jpg')}}" class="single-image">601</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/pharmacy/9.jpg')}}" class="single-image">602</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/pharmacy/10.jpg')}}" class="single-image">603</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/pharmacy/1.jpg')}}" class="single-image">604</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/pharmacy/2.jpg')}}" class="single-image">605</a>
                                </td>
                                <td class="text-center">12</td>
                                <td class="text-center">201, 401, 604</td>
                                <td class="text-center">3</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">3203</td>
                                <td class="text-center">1</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td class="text-center">7</td>
                                <td class="text-center">Faculty of Education<br><a href="{{route('class.room.education')}}" target="_blank"><span class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3">View Here</span></a></td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/1.jpg')}}" class="single-image">702</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/2.jpg')}}" class="single-image">707</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/3.jpg')}}" class="single-image">708</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/4.jpg')}}" class="single-image">709</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/5.jpg')}}" class="single-image">711</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/6.jpg')}}" class="single-image">713</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/7.jpg')}}" class="single-image">706</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/8.jpg')}}" class="single-image">715</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/9.jpg')}}" class="single-image">716</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/10.jpg')}}" class="single-image">718</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/11.jpg')}}" class="single-image">719</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/12.jpg')}}" class="single-image">721</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/13.jpg')}}" class="single-image">723</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/14.jpg')}}" class="single-image">725</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/15.jpg')}}" class="single-image">724</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/education/17.jpg')}}" class="single-image">727</a>
                                </td>
                                <td class="text-center">16</td>
                                <td class="text-center">706, 712, 722, 726</td>
                                <td class="text-center">4</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">716-717</td>
                                <td class="text-center">1</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td class="text-center">8</td>
                                <td class="text-center">College of Agriculture Sciences<br><a href="{{route('class.room.agriculture')}}" target="_blank"><span class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3">View Here</span></a></td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/agricultue/1.jpg')}}" class="single-image">10</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/agricultue/2.jpg')}}" class="single-image">107</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/agricultue/3.jpg')}}" class="single-image">108</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/agricultue/1.jpg')}}" class="single-image">207</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/agricultue/2.jpg')}}" class="single-image">208</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/agricultue/3.jpg')}}" class="single-image">209</a>
                                </td>
                                <td class="text-center">6</td>
                                <td class="text-center">109</td>
                                <td class="text-center">1</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">1</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">103</td>
                                <td class="text-center">1</td>
                            </tr>
                            <tr>
                                <td class="text-center">9</td>
                                <td class="text-center">College of Fine Arts<br><a href="{{route('class.room.finearts')}}" target="_blank"><span class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3">View Here</span></a></td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/fine_arts/1.jpg')}}" class="single-image">6247</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/fine_arts/2.jpg')}}" class="single-image">6248</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/fine_arts/3.jpg')}}" class="single-image">6249</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/fine_arts/1.jpg')}}" class="single-image">6252</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/fine_arts/2.jpg')}}" class="single-image">6253</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/fine_arts/3.jpg')}}" class="single-image">6255</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/fine_arts/1.jpg')}}" class="single-image">6257</a>
                                </td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td class="text-center">10</td>
                                <td class="text-center">College of Management (TMIMT)<br>
                                    <a href="{{route('class.room.management')}}" target="_blank">
                                        <span class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3">View Here</span>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/1.jpg">A008</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/2.jpg">A011</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/3.jpg">A107</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/4.jpg">A108</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/5.jpg">A118</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/6.jpg">A119</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/7.jpg">A207</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/8.jpg">A208</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/9.jpg">A217</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/10.jpg">A218</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/11.jpg">A219</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/12.jpg">A307</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/13.jpg">A308</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/14.jpg">A311</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/15.jpg">A313</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/16.jpg">A316</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/17.jpg">A317(A)</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/18.jpg">A317(B)</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/19.jpg">A318</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/20.jpg">B201</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/21.jpg">B202(A)</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/22.jpg">B202(B)</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/23.jpg">B204</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/24.jpg">B205</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/25.jpg">B206</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/26.jpg">B301</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/27.jpg">B302(A)</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/28.jpg">B302(B)</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/29.jpg">B304</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/30.jpg">B305(A)</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/31.jpg">B305(B)</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://www.tmu.ac.in/img/facilities/classroom/tmimt/31.jpg">B306</a>
                                </td>
                                <td class="text-center">32</td>
                                <td class="text-center">A307, A308, A009, A314(A), B303(A), B303(B), B203</td>
                                <td class="text-center">7</td>
                                <td class="text-center">A319</td>
                                <td class="text-center">1</td>
                                <td class="text-center">16</td>
                                <td class="text-center">A-016</td>
                                <td class="text-center">1</td>
                                <td class="text-center">A-103</td>
                                <td class="text-center">1</td>

                            </tr>
                            <tr>
                                <td class="text-center">11</td>
                                <td class="text-center">College of Computing Sciences &amp; IT<br><a href="{{route('class.room.ccsit')}}" target="_blank"><span class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3 ">View Here</span></a></td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/1.jpg')}}" class="single-image">2101</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/2.jpg')}}" class="single-image">2103</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/3.jpg')}}" class="single-image">3101</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/4.jpg')}}" class="single-image">3113</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/5.jpg')}}" class="single-image">3115</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/6.jpg')}}" class="single-image">3117</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/7.jpg')}}" class="single-image">4101</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/8.jpg')}}" class="single-image">4103</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/9.jpg')}}" class="single-image">4106</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/10.jpg')}}" class="single-image">4112</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/11.jpg')}}" class="single-image">4113</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/12.jpg')}}" class="single-image">4115</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/13.jpg')}}" class="single-image">4117</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/14.jpg')}}" class="single-image">4119</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/15.jpg')}}" class="single-image">4138</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/16.jpg')}}" class="single-image">4139</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/17.jpg')}}" class="single-image">4141</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/18.jpg')}}" class="single-image">4144</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/19.jpg')}}" class="single-image">4146</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/20.jpg')}}" class="single-image">4147</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/21.jpg')}}" class="single-image">5101</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/22.jpg')}}" class="single-image">5103</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/23.jpg')}}" class="single-image">5105</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/24.jpg')}}" class="single-image">5112</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/25.jpg')}}" class="single-image">5113</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/26.jpg')}}" class="single-image">5115</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/27.jpg')}}" class="single-image">5117</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/28.jpg')}}" class="single-image">5119</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/29.jpg')}}" class="single-image">5121</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/30.jpg')}}" class="single-image">5123</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/31.jpg')}}" class="single-image">5131</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/1.jpg')}}" class="single-image">5133</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/2.jpg')}}" class="single-image">5135</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/3.jpg')}}" class="single-image">5139</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/4.jpg')}}" class="single-image">5141</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/5.jpg')}}" class="single-image">5144</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/6.jpg')}}" class="single-image">5145</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/7.jpg')}}" class="single-image">5146</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/ccsit/8.jpg')}}" class="single-image">5147</a>
                                </td>
                                <td class="text-center">39</td>
                                <td class="text-center">3103, 3106</td>
                                <td class="text-center">2</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">1</td>
                                <td class="text-center">2nd Floor</td>
                                <td class="text-center">1</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td class="text-center">12</td>
                                <td class="text-center">Faculty of Engineering<br /><a href="{{route('class.room.engineering')}}" target="_blank"><span class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3">View Here</span></a></td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/1.jpg')}}" class="single-image">3119</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/2.jpg')}}" class="single-image">3121</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/3.jpg')}}" class="single-image">3132</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/4.jpg')}}" class="single-image">3133</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/5.jpg')}}" class="single-image">3135</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/6.jpg')}}" class="single-image">3137</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/7.jpg')}}" class="single-image">3143</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/8.jpg')}}" class="single-image">3144</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/9.jpg')}}" class="single-image">3145</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/10.jpg')}}" class="single-image">3146</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/11.jpg')}}" class="single-image">3147</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/12.jpg')}}" class="single-image">4121</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/13.jpg')}}" class="single-image">4123</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/14.jpg')}}" class="single-image">4131</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/15.jpg')}}" class="single-image">4132</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/16.jpg')}}" class="single-image">4133</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/17.jpg')}}" class="single-image">4135</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/18.jpg')}}" class="single-image">4239</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/19.jpg')}}" class="single-image">4243</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/20.jpg')}}" class="single-image">4245</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/21.jpg')}}" class="single-image">4246</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/22.jpg')}}" class="single-image">4201</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/23.jpg')}}" class="single-image">4203</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/24.jpg')}}" class="single-image">5205</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/25.jpg')}}" class="single-image">5229</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/26.jpg')}}" class="single-image">6237</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/27.jpg')}}" class="single-image">6259</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/28.jpg')}}" class="single-image">4228</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/29.jpg')}}" class="single-image">4229</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/1.jpg')}}" class="single-image">5203</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/2.jpg')}}" class="single-image">5201</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/3.jpg')}}" class="single-image">5237</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/4.jpg')}}" class="single-image">5235</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/engineering/5.jpg')}}" class="single-image">5233</a>
                                </td>
                                <td class="text-center">34</td>
                                <td class="text-center">3131, 4248</td>
                                <td class="text-center">2</td>
                                <td class="text-center">3227</td>
                                <td class="text-center">1</td>
                                <td class="text-center">2</td>
                                <td class="text-center">3rd Floor, 5251-52</td>
                                <td class="text-center">2</td>
                                <td class="text-center">1118</td>
                                <td class="text-center">1</td>
                            </tr>
                            <tr>
                                <td class="text-center">13</td>
                                <td class="text-center">Dental College &amp; Research Centre<br><a href="{{route('class.room.dental')}}" target="_blank"><span class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3">View Here</span></a></td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/dental/1.jpg')}}" class="single-image">502</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/dental/2.jpg')}}" class="single-image">602</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/dental/3.jpg')}}" class="single-image">702</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/dental/4.jpg')}}" class="single-image">802</a>
                                </td>
                                <td class="text-center">4</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td class="text-center">14</td>
                                <td class="text-center">College of Law &amp; Legal Studies<br><a href="{{route('class.room.law')}}" target="_blank"><span class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3">View Here</span></a></td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/1.jpeg')}}" class="single-image">B005</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/2.jpeg')}}" class="single-image">B006</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/3.jpeg')}}" class="single-image">B101</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/4.jpeg')}}" class="single-image">B102(A)</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/5.jpeg')}}" class="single-image">B102(B)</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/6.jpeg')}}" class="single-image">B104</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/7.jpeg')}}" class="single-image">B105(A)</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/8.jpeg')}}" class="single-image">B105(B)</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/1.jpeg')}}" class="single-image">B106</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/2.jpeg')}}" class="single-image">C201</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/3.jpeg')}}" class="single-image">C202</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/4.jpeg')}}" class="single-image">C204</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/5.jpeg')}}" class="single-image">C301</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/6.jpeg')}}" class="single-image">C302</a>,
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{asset('/assets/img/facilities/classroom/law/7.jpeg')}}" class="single-image">C304</a>
                                </td>
                                <td class="text-center">15</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">A319</td>
                                <td class="text-center">1</td>
                                <td class="text-center">2</td>
                                <td class="text-center">A-016</td>
                                <td class="text-center">1</td>
                                <td class="text-center">A103</td>
                                <td class="text-center">1</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center"><b>TOTAL</b></td>
                                <td class="text-center"><b>234</b></td>
                                <td class="text-center"></td>
                                <td class="text-center"><b>23</b></td>
                                <td class="text-center"></td>
                                <td class="text-center"><b>6</b></td>
                                <td class="text-center"><b>28</b></td>
                                <td class="text-center"></td>
                                <td class="text-center"><b>27</b></td>
                                <td class="text-center"></td>
                                <td class="text-center"><b>5</b></td>
                            </tr>
                            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imageModalLabel">Classroom Image</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="modalImage" src="" class="img-fluid" alt="Classroom Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                    </table>
                </div>


                <div class="row gutter-30 col-mb-5 justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                                <img src="{{asset('/assets/img/facilities/cisf-2.jpg')}}" alt="" height="180">
                            </div>
                            <div class="team-desc p-2">
                                <div class="team-title pt-0">
                                    <h4 class="fs-14 mb-2">Central Instrument Facilities</h4>
                                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/cisf.jpg')}}"> Download Geo Tag Image</div>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 mt-3" href="{{route('central.instrument.facility')}}" target="_blank"> View More!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                                <img src="{{asset('/assets/img/facilities/rdc/head.jpeg')}}"
                                    alt="" height="180">
                            </div>
                            <div class="team-desc p-2">
                                <div class="team-title pt-0">
                                    <h4 class="fs-14 mb-2">Research & Development Centre</h4>
                                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/rdc/rdc1.jpeg')}}"> Download Geo Tag Image</div>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2" href="{{route('rdc.infrastructure')}}" target="_blank"> View More!</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                                <img src="{{asset('/assets/img/facilities/tmimt_lab/head.jpeg')}}"
                                    alt="" height="180">
                            </div>
                            <div class="team-desc p-2">
                                <div class="team-title pt-0">
                                    <h4 class="fs-14 mb-2">TMIMT eResources Studio Lab</h4>
                                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/tmimt_lab/tmimt_01.jpeg')}}"> Download Geo Tag Image</div>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2" href="{{route('eresources.studio.lab')}}" target="_blank"> View More!</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                                <img src="{{asset('/assets/img/facilities/e_content_cell/head.jpg')}}" alt="" height="180">
                            </div>
                            <div class="team-desc p-2">
                                <div class="team-title pt-0">
                                    <h4 class="fs-14 mb-2">Media Laboratories Studio</h4>
                                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/e_content_cell/9.jpg')}}"> Download Geo Tag Image</div>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2" href="{{route('media.laboratory.studio')}}" target="_blank"> View More!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                                <img src="{{asset('/assets/img/facilities/skill_lab/head.jpeg')}}" alt="" height="180">
                            </div>
                            <div class="team-desc p-2">
                                <div class="team-title pt-0">
                                    <h4 class="fs-14 mb-2">Skill Lab</h4>
                                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/skill_lab/1.jpeg')}}"> Download Geo Tag Image</div>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2" href="{{route('skill.lab')}}" target="_blank"> View More!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                                <img src="{{asset('/assets/img/facilities/simulation_lab/head-1.jpeg')}}" alt="" height="180">
                            </div>
                            <div class="team-desc p-2">
                                <div class="team-title pt-0">
                                    <h4 class="fs-14 mb-2">Simulation Lab</h4>
                                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/simulation_lab/head.jpeg')}}"> Download Geo Tag Image</div>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2" href="{{route('simulation.lab')}}" target="_blank"> View More!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                                <img src="{{asset('/assets/img/facilities/museum/medical/head.jpeg')}}"
                                    alt="" height="180">
                            </div>
                            <div class="team-desc p-2">
                                <div class="team-title pt-0">
                                    <h4 class="fs-14 mb-2">Museum</h4>
                                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/museum/medical/1.jpeg')}}"> Download Geo Tag Image</div>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2" href="{{route('museum')}}" target="_blank"> View More!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                                <img src="{{asset('/assets/img/facilities/animal_house/head.jpg')}}"
                                    alt="" height="180">
                            </div>
                            <div class="team-desc p-2">
                                <div class="team-title pt-0">
                                    <h4 class="fs-14 mb-2">Animal House</h4>
                                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/animal_house/head-2.jpg')}}"> Download Geo Tag Image</div>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12  mb-2" href="{{route('animal.house')}}" target="_blank"> View More!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                                <img src="{{asset('/assets/img/facilities/business_lab/head-2.jpg')}}"
                                    alt="" height="180">
                            </div>
                            <div class="team-desc p-2">
                                <div class="team-title pt-0">
                                    <h4 class="fs-14 mb-2">Business Lab</h4>
                                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/business_lab/head.jpg')}}"> Download Geo Tag Image</div>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12  mb-2" href="{{route('business.lab')}}" target="_blank"> View More!</a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                                <img src="{{asset('/assets/img/facilities/tmimt_lab/head.jpeg')}}"
                                    alt="" height="180">
                            </div>
                            <div class="team-desc p-2">
                                <div class="team-title pt-0">
                                    <h4 class="fs-14 mb-2">TMIMT Business Lab</h4>
                                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/tmimt_lab/tmimt_01.jpeg')}}"> Download Geo Tag Image</div>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2" href="{{route('tmimt.business.lab')}}" target="_blank"> View More!</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                                <img src="{{asset('/assets/img/facilities/nenotechnology_lab/head.jpeg')}}"
                                    alt="" height="180">
                            </div>
                            <div class="team-desc p-2">
                                <div class="team-title pt-0">
                                    <h4 class="fs-14 mb-2">DST Nanotechnology Lab</h4>
                                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/nenotechnology_lab/neno_01.jpeg')}}"> Download Geo Tag Image</div>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2" href="{{route('dst.nanotechnology.lab')}}" target="_blank"> View More!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
</div>



<!-- <script>
    var imageModal = document.getElementById('imageModal');
    imageModal.addEventListener('show.bs.modal', function(event) {
        var link = event.relatedTarget; 
        var imageSrc = link.getAttribute('data-bs-image'); 

        var modalImage = document.getElementById('modalImage');
        modalImage.src = imageSrc; 
    });
</script> -->

<script>
  var imageModal = document.getElementById('imageModal');

  // Handle showing the modal
  imageModal.addEventListener('show.bs.modal', function (event) {
    var link = event.relatedTarget;
    var imageSrc = link.getAttribute('data-bs-image');
    var modalImage = document.getElementById('modalImage');
    modalImage.src = imageSrc;

    // Allow scrolling while the modal is open
    document.body.classList.remove('modal-open');
    document.body.style.overflow = 'auto'; // Ensure body overflow is set to auto
  });

  // Handle closing the modal
  imageModal.addEventListener('hide.bs.modal', function () {
    document.body.style.overflow = ''; // Reset overflow when modal is closed
  });
</script>


@endsection