@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">

        <div class="text-content p-3">
            <h1 class="tmu-text-primary tmu-page-heading"><span>Geo Tagged </span><span> Infrastructure </span></h1>
        </div>


        <div class="container p-3">

            <h3 class="tmu-text-primary mb-2"><span>Library,Seminar</span><span> & Research Lab</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/library1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/library1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/library2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/library2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Museum </span><span></span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/museum1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/museum1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/museum2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/museum2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            
            <h3 class="tmu-text-primary mb-2"><span>Plain  </span><span> Clinic</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/pain_clinic1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/pain_clinic1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/pain_clinic2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/pain_clinic2.jpg')}}" alt="Gallery Thumb 2"></a>

            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Post Operative </span><span> Room - I </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/post_operative_I_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/post_operative_I_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/post_operative_I_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/post_operative_I_2.jpg')}}" alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/post_operative_I_3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/post_operative_I_3.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            </br>
            
            <h3 class="tmu-text-primary mb-2"><span>Post Operative </span><span> Room - II </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/post_operative_II_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/post_operative_II_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/post_operative_II_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/post_operative_II_2.jpg')}}" alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/post_operative_II_3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/post_operative_II_3.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Pre Operative </span><span> Room </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/pre_operative1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/pre_operative1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/pre_operative2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/pre_operative2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>RICU</span><span> </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/RICU1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/RICU1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/RICU2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/RICU2.jpg')}}" alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/RICU3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/RICU3.jpg')}}" alt="Gallery Thumb 1"></a>

            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>SICU </span><span> </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/SICU1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/SICU1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/SICU2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/SICU2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>ICCU </span><span> </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/ICCU1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/ICCU1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/ICCU2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/ICCU2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>HOD </span><span> Room</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/hod_room1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/hod_room1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/hod_room2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/hod_room2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            
        </div>
        <div class="container mt-4">
            <h2 class="tmu-text-primary text-center mb-2 mt-2 "><span>List of </span><span>Equipments</span></h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <center><b>LIST OF EQUIPMENTS IN MAJOR OPERATION THEATRE</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>S NO</td>
                            <td>MAJOR LOCATION</td>
                            <td>EQUIPMENT</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>(A)&nbsp; OPD Anesthesia Clinic&nbsp;</td>
                            <td>Patient examination table</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>(A)&nbsp; OPD Anesthesia Clinic&nbsp;</td>
                            <td>Blood Pressure Instrument (Non-invasive)</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>(A)&nbsp; OPD Anesthesia Clinic&nbsp;</td>
                            <td>Height Measurement Scale</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>(A)&nbsp; OPD Anesthesia Clinic&nbsp;</td>
                            <td>Weighing machine</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>OT Tables</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>Anesthesia machine and accessories like laryngoscope, all size endotracheal tubes, nasal and oral airways, Magill&rsquo;s forceps</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>Multipara monitor- with P, NIBP, ECG facility,SpO2 .</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>Electrical Suction apparatus .</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>LMA / PLMA of all sizes .</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>Spinal epidural set .</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>EtCO2 monitor .</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>Defibrillator .</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>Mechanical ventilator Separate or with anesthesia machine.</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>Fibre optic bronchoscope</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>USG machine .</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>PNS .</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>Resuscitation equipment (CPR)- Ambu bag with face mask .</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>a) Adult Manikin</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>b) Pediatric Manikin</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>Multimedia Projector with screen</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>Computer with Printer &amp; Scanner</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>Photocopier</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>(B) MAJOR Operation Theatre&nbsp;</td>
                            <td>High definition TV</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>(C)&nbsp; Postoperative Recovery Room&nbsp;</td>
                            <td>Oxygen therapy unit</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>(C)&nbsp; Postoperative Recovery Room&nbsp;</td>
                            <td>Blood Pressure Monitor (digital/Electronic)</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>(C)&nbsp; Postoperative Recovery Room&nbsp;</td>
                            <td>Pulse oximeter</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>(C)&nbsp; Postoperative Recovery Room&nbsp;</td>
                            <td>E.C.G. Monitor</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>(C)&nbsp; Postoperative Recovery Room&nbsp;</td>
                            <td>Suction Machine</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>(C)&nbsp; Postoperative Recovery Room&nbsp;</td>
                            <td>Provision for resuscitation equipment and CPR Algorithms</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>(C)&nbsp; Postoperative Recovery Room&nbsp;</td>
                            <td>Airway crash cart</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>(C)&nbsp; Postoperative Recovery Room&nbsp;</td>
                            <td>TOF monitor (PNS)</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
                            <td>Radio frequency ablation machine</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
                            <td>Fluoroscopy machine (e-ARM)(may be shared with other department)</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
                            <td>Ultrasound machine</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
                            <td>Patients controlled analgesia system (portable)</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
                            <td>Styleted Epidural catheter</td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
                            <td>Pain assessment chart</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
                            <td>OT Table fluoroscopy compatible</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
                            <td>Nerve locator</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
                            <td>Computer</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
                            <td>Anesthetic machine with resuscitation equipment</td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
                            <td>Crash cart</td>
                        </tr>
                        <tr>
                            <td>43</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
                            <td>Monitors for vital signs (NIBP, P.R, ECG, SPO2, Temperature, R.R)</td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
                            <td>Nerve stimulator</td>
                        </tr>
                        <tr>
                            <td>45</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
                            <td>18 G epidural needle</td>
                        </tr>
                        <tr>
                            <td>46</td>
                            <td>(D)&nbsp; Pain Clinic&nbsp;</td>
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