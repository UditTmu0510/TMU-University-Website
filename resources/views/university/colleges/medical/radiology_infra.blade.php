@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">

        <div class="text-content p-3">
            <h1 class="tmu-text-primary tmu-page-heading"><span>Geo Tagged </span><span> Infrastructure </span></h1>
        </div>


        <div class="container p-3">

            <h3 class="tmu-text-primary mb-2"><span>Research </span><span> Room</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/research_lab1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/research_lab1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/research_lab2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/research_lab2.jpg')}}" alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/research_lab3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/research_lab3.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Museum </span><span></span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/museum1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/museum1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/museum2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/museum2.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/museum3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/museum3.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Seminar </span><span> Room </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/seminar_room1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/seminar_room1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/seminar_room2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/seminar_room2.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Ultrasound </span><span>Room </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/ultrasound_room1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/ultrasound_room1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/ultrasound_room2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/ultrasound_room2.jpg')}}" alt="Gallery Thumb 2"></a>

            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>X-RAY </span><span> Room</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/XRAY_ROOM1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/XRAY_ROOM1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/XRAY_ROOM2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/XRAY_ROOM2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>MRI </span><span> Room </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/mri1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/mri1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/mri2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/mri2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>CT SCAN </span><span> Room</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/ctscan1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/ctscan1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/ctscan2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/ctscan2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>HOD  </span><span> Room</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/hod_room1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/hod_room1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/hod_room2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/hod_room2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>DSA  </span><span> Unit </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/dsa1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/dsa1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/dsa2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/dsa2.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Mamography </span><span>  </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/mammography1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/mammography1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/radiology/mammography2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/radiology/mammography2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
        </div>
        <div class="container mt-4">
            <h2 class="tmu-text-primary text-center mb-2 mt-2 "><span>List of </span><span>Equipments</span></h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td>S.No.</td>
                            <td>Name of Equipment</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>MRI Scan (1.5 Tesla) &ndash; 1&nbsp;</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>CT Scan&nbsp; (128 Slice) &ndash; 1&nbsp;</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mammography &ndash; 1&nbsp;</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ultrasound with Doppler &ndash; 3</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>X-ray 1000 mA with DR &ndash; 1</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>X-Ray 800 mA with IITV + Fluoroscopy &ndash; 2&nbsp;</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>X-Ray 600 mA with IITV &ndash; 1</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>X-Ray 300 mA - 2</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Mobile X-Ray 100 mA - 6</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>CR System - 2</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>DSA machine</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Cath Lab with DSA</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

@endsection