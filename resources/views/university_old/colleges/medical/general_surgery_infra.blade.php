@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">

        <div class="text-content p-4">
            <h1 class="tmu-text-primary tmu-page-heading"><span>Geo Tagged </span><span> Infrastructure </span></h1>
        </div>


        <div class="container p-3">

            <h3 class="tmu-text-primary mb-2"><span>Library Cum </span><span>Seminar Room</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/library1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/library1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/library2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/library2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Museum </span><span> </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/museum1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/museum1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/museum2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/museum2.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Research </span><span> Room</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/research1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/research1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/research2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/research2.jpg')}}" alt="Gallery Thumb 2"></a>

            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>HOD</span><span> Room</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/hod_room1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/hod_room1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/hod_room2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/hod_room2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>IPD </span><span> - I </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/IPD_I_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/IPD_I_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/IPD_I_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/IPD_I_2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            <h3 class="tmu-text-primary mb-2"><span>IPD </span><span> - II </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/IPD_II_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/IPD_II_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/IPD_II_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/IPD_II_2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>OPD </span><span> - I</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_I_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_I_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_I_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_I_2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>OPD </span><span> - II</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_II_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_II_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_II_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_II_2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>OPD </span><span> - III</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_III_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_III_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_III_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_III_2.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            <br>
            <h3 class="tmu-text-primary mb-2"><span>OPD </span><span> - IV</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_IV_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_IV_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_IV_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_IV_2.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            <br>
            <h3 class="tmu-text-primary mb-2"><span>OPD </span><span> - V</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_V_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_V_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_V_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_V_2.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            <br>
            <h3 class="tmu-text-primary mb-2"><span>OPD </span><span> - VI</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_VI_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_VI_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_VI_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_VI_2.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            <br>
            <h3 class="tmu-text-primary mb-2"><span>OPD </span><span> - VII</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_VII_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_VII_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_VII_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_VII_2.jpg')}}" alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_VII_3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_VII_3.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_VII_4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/OPD_VII_4.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            <br>
            <h3 class="tmu-text-primary mb-2"><span>Operation </span><span> Theatre - I</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_I_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_I_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_I_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_I_2.jpg')}}" alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_I_3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_I_3.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_I_4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_I_4.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            <br>
            <h3 class="tmu-text-primary mb-2"><span>Operation </span><span> Theatre - II</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_II_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_II_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_II_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_II_2.jpg')}}" alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_II_3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_II_3.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            <br>
            <h3 class="tmu-text-primary mb-2"><span>Operation </span><span> Theatre - III</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_III_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_III_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_III_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_III_2.jpg')}}" alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_III_3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/generalsurgery/Operation_Theatre_III_3.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>

        </div>
        <div class="container mt-4">
            <h2 class="tmu-text-primary text-center mb-2 mt-2 "><span>List of </span><span>Equipments</span></h2>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <center><b>List of Equipment in Surgery Department</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>S.No.</td>
                            <td>Name of the items&nbsp;</td>
                        </tr>
                        <tr>
                            <td>(A)</td>
                            <td>OPD</td>
                        </tr>
                        <tr>
                            <td>(A)1</td>
                            <td>Digital/Electronic BP Apparatus</td>
                        </tr>
                        <tr>
                            <td>(A) 2</td>
                            <td>Weighing Machine</td>
                        </tr>
                        <tr>
                            <td>(A) 3</td>
                            <td>Stethoscpe</td>
                        </tr>
                        <tr>
                            <td>(A) 4</td>
                            <td>Height Scale</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>X-Ray viewing box 4 in 1</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Proctoscope</td>
                        </tr>
                        <tr>
                            <td>(B)</td>
                            <td>Minor O.T.</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Operation Theratre Table</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Operation Theratre ceilling light</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Pedestal lights</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Electro-surgical cautery unit</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Suction</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Pulse oximeter</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Anesthesia Equipment</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Resuscitation kit</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Assorted surgical instrument for minor operation sets</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Autoclave</td>
                        </tr>
                        <tr>
                            <td>(C)</td>
                            <td>Wards</td>
                        </tr>
                        <tr>
                            <td>14 (A)</td>
                            <td>Digital/Electronic BP Apparatus,</td>
                        </tr>
                        <tr>
                            <td>14 (B)</td>
                            <td>Stethoscpe</td>
                        </tr>
                        <tr>
                            <td>15(A)</td>
                            <td>Weighing Machine</td>
                        </tr>
                        <tr>
                            <td>15 (B)</td>
                            <td>Height Scale</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Proctoscope</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Non invasive Multi Para Monitors</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>ECG Machine</td>
                        </tr>
                        <tr>
                            <td>(D)</td>
                            <td>Operation Theatre</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>CC Camera for student demonstration for OT</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Operation Theratre Table</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Operation Theratre ceilling light</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Pedestal lights</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Electro-surgical cautery unit</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Suction Machine</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Pulse oximeter</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Anesthesia Equipment (as per requirement of dept.)</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>general Sets including open Urological surgery (4 for each operation Theatre</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Pediatric surgical instrument set</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Burr hoel set with electric craniotome</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>vascular set</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Diagnostic and operative laparoscope including one high definition with all accessories and hand instuments</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Cystoscope &amp; Resectoscope</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Flexible Video Colonoscope</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Flexible Video side viewing Gastroduodenoscope for ERCP</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>Flexible Video End viewing oesophago-Gastroduodenoscope</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>Flexible video Sigmoidoscope</td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>Flexible video Bronchoscope</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>C-arm image intensifier</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>Operative ultrasound</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>Harmonic Scalpel</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td>Assorted open &amp; Laparoscopic Stapling devices</td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td>Multimedia Projector with screen</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

@endsection