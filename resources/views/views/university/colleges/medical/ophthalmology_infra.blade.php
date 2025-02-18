@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">

        <div class="text-content p-4">
            <h1 class="tmu-text-primary tmu-page-heading"><span>Geo Tagged </span><span> Infrastructure </span></h1>
        </div>


        <div class="container p-3">

            <h3 class="tmu-text-primary mb-2"><span>Library Cum </span><span> Seminar Room</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/library1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/library1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/library2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/library2.jpg')}}" alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/library3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/library3.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Museum & </span><span> Research Lab</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/museum1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/museum1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/museum2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/museum2.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Eye  </span><span> Bank</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/eye_bank1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/eye_bank1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/eye_bank2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/eye_bank2.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/eye_bank3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/eye_bank3.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>HOD</span><span> Room</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/hod_room1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/hod_room1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/hod_room2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/hod_room2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>IPD </span><span> - I </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/IPD_I_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/IPD_I_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/IPD_I_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/IPD_I_2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>OPD </span><span> - I</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/OPD_I_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/OPD_I_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/OPD_I_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/OPD_I_2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>OPD </span><span> - II</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/OPD_II_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/OPD_II_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/OPD_II_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/OPD_II_2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>OPD </span><span> - III</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/OPD_III_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/OPD_III_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/OPD_III_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/OPD_III_2.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Refraction </span><span> Room </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/refraction_room1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/refraction_room1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/refraction_room2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/refraction_room2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Retina </span><span> Room </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/retina_room1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/retina_room1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ophthalmology/retina_room1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ophthalmology/retina_room1.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            
        </div>
        <div class="container mt-4">
        <h2 class="tmu-text-primary text-center mb-2 mt-2 "><span>List of </span><span>Equipments</span></h2>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td>
                                <center><b>LIST OF EQUIPMENTS&nbsp;</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><b>(i) O.P.D.</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Snellen Chart/Snellen drum with or without remote control</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Bjerrum Screen</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Perimeter</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Direct Ophthalmoscope</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Retinoscope</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Colour vision chart</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Near vision chart with different language</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>REST EQUIPMENTS ARE AVAILABLE AS PER MCI NORMS Common equipments in the OPD</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Slit lamp</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Applanation tonometer</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Keratometer</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Indirect ophthalmoscope</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Synoptophore</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Schiotz tonometer</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Autorefractometer with Autokeratometer</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>ND Yag Laser</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Non Contact Tonopachymeter</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Automated Perimeter( Humphrey's)</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Argon Green laser (retinal laser)</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Fundus Flourescein Angiography unit(FFA)</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Ocular Coherence Tomography(OCT)</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>A Scan</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>B Scan</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>REST EQUIPMENTS ARE AVAILABLE AS PER MCI NORMS</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><b>(ii) MAJOR Operation Theatre</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Operating microscope (Zeiss)</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Operating microscope with side view with TV Unit with camera (Zeiss)</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Operating Microscope with BIOM</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Vitrectomy with Phaco (Zeice)</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Phaco Machine with Vitrectomy (Ortelli)</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Cryo Unit</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Cataract set</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Glaucoma set</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>DCR set</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Entropian set</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Enucleation set</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Evisceration set</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Squint set</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Electric Cautery</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>REST EQUIPMENTS ARE AVAILABLE AS PER MCI NORMS</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><b>(iii) GENERAL OPHTHALMIC EQUIPMENTS</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Operation Theatre Table</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Operation Theatre Light</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><b>(iv) MINOR Operation Theatre:</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Minor O.T. should have the equipment for the removal of the foreign body, sutures and chalazion or stye etc.</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>REST EQUIPMENTS ARE AVAILABLE AS PER MCI NORMS</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><b>(v) WARD</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Slit lamp</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>*Snellen Chart/Snellen drum with or without remote control</center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Dressing Trolley &amp; drum</center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

@endsection