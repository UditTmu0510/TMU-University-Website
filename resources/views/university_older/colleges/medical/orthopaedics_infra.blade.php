@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">

        <div class="text-content p-4">
            <h1 class="tmu-text-primary tmu-page-heading"><span>Geo Tagged </span><span> Infrastructure </span></h1>
        </div>


        <div class="container p-3">

            <h3 class="tmu-text-primary mb-2"><span>Library </span><span></span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/library1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/library1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/library2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/library2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Museum </span><span> </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/museum1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/museum1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/museum2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/museum2.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>Seminar </span><span> Room</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/seminar1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/seminar1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/seminar2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/seminar2.jpg')}}" alt="Gallery Thumb 2"></a>

            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>HOD</span><span> Room</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/hod_room1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/hod_room1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/hod_room2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/hod_room2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>IPD </span><span> - I </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/IPD_I_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/IPD_I_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/IPD_I_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/IPD_I_2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            <h3 class="tmu-text-primary mb-2"><span>IPD </span><span> - II </span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/IPD_II_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/IPD_II_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/IPD_II_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/IPD_II_2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>OPD </span><span> - I</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_I_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_I_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_I_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_I_2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>OPD </span><span> - II</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_II_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_II_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_II_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_II_2.jpg')}}" alt="Gallery Thumb 3"></a>
            </div>
            </br>
            <h3 class="tmu-text-primary mb-2"><span>OPD </span><span> - III</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_III_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_III_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_III_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_III_2.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>
            <br>
            <h3 class="tmu-text-primary mb-2"><span>OPD </span><span> - IV</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_IV_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_IV_1.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_IV_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/orthopaedics/OPD_IV_2.jpg')}}" alt="Gallery Thumb 3"></a>

            </div>

        </div>
        <div class="container mt-4">
            <h2 class="tmu-text-primary text-center mb-2 mt-2 "><span>List of </span><span>Equipments</span></h2>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <center><b>List of following Equipment available in the Dept. of Orthopaedics</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>Sr. No.</td>
                            <td>Equipment Name</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>C &ndash; Arm</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Arthroscope with shaver system &amp; Hand instruments</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Pneumatic drill and trauma reconstruction system (synthes)</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Electric Drill with reaming &amp; saw attachment</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Electronic and pneumatic tourniquet</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Manual pneumatic tourniquet</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Orthopaedics O.T. Table with attachment</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Electric Plaster cutter</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>LCD Projector</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Portable X-ray machine</td>
                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>Portable X-ray machine</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <center><b>List of equipment available in Orthopaedics wards</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>Sr. no.</td>
                            <td>Equipment Name</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>B.B. Splint</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Thomas Splint</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Bohler Stirrup</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Buck&rsquo;s Extension</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>B.P. Instrument</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>View Box</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Stethoscope</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Needle Cutter</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Curtain</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Oxygen Cylinder</td>
                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>Emergency Drug Tray</td>
                        </tr>
                        <tr>
                            <td>12.</td>
                            <td>Resuscitation Kit</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <center><b>List of equipment in Ortho O.P.D</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>Sr. no.</td>
                            <td>Equipment Name</td>
                        </tr>
                        <tr>
                            <td>1. </td>
                            <td>Dressing Trolley</td>
                        </tr>
                        <tr>
                            <td>2. </td>
                            <td>Hammer</td>
                        </tr>
                        <tr>
                            <td>3. </td>
                            <td>View Box</td>
                        </tr>
                        <tr>
                            <td>4. </td>
                            <td>Plaster cutting Instrument</td>
                        </tr>
                        <tr>
                            <td>5. </td>
                            <td>Plaster cutting Machine</td>
                        </tr>
                        <tr>
                            <td>6. </td>
                            <td>Dressing tray</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center><b>List of Orthopaedics instruments sets available in the O.T.</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>Sr. No.</td>
                            <td>Type of sets</td>
                        </tr>
                        <tr>
                            <td>1) </td>
                            <td>General Instrument sets</td>
                        </tr>
                        <tr>
                            <td>2) </td>
                            <td>Hip Arthroplasty</td>
                        </tr>
                        <tr>
                            <td>3) </td>
                            <td>Knee Arthroplasty</td>
                        </tr>
                        <tr>
                            <td>4) </td>
                            <td>Basic Trauma instruments sets</td>
                        </tr>
                        <tr>
                            <td>5) </td>
                            <td>Small fragment sets</td>
                        </tr>
                        <tr>
                            <td>6) </td>
                            <td>Narrow fragment sets</td>
                        </tr>
                        <tr>
                            <td>7) </td>
                            <td>Large fragment sets</td>
                        </tr>
                        <tr>
                            <td>8) </td>
                            <td>Hemiarthroplasty sets DHS/DCS/ sets</td>
                        </tr>
                        <tr>
                            <td>9) </td>
                            <td>Intramedullary Nail sets Femur</td>
                        </tr>
                        <tr>
                            <td>10) </td>
                            <td>Intramedullary Nail Sets Tibia</td>
                        </tr>
                        <tr>
                            <td>11) </td>
                            <td>PFN set</td>
                        </tr>
                        <tr>
                            <td>12) </td>
                            <td>Bone Grafting set</td>
                        </tr>
                        <tr>
                            <td>13) </td>
                            <td>Spine surgery set</td>
                        </tr>
                        <tr>
                            <td>14) </td>
                            <td>Cancellous cannulated screw 6.5 mm</td>
                        </tr>
                        <tr>
                            <td>15) </td>
                            <td>Cancellous cannulated screw 4.0 mm</td>
                        </tr>
                        <tr>
                            <td>16) </td>
                            <td>External fixator set</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center><b>List of following instruments available in the Ortho O.T.</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>SR. No.</td>
                            <td>Instrument&rsquo;s Name</td>
                        </tr>
                        <tr>
                            <td>1) </td>
                            <td>DHS/DCS SET</td>
                        </tr>
                        <tr>
                            <td>2) </td>
                            <td>1. Angle guide</td>
                        </tr>
                        <tr>
                            <td>3) </td>
                            <td>2. Screw driver 4.5mm</td>
                        </tr>
                        <tr>
                            <td>4) </td>
                            <td>3. Impactor</td>
                        </tr>
                        <tr>
                            <td>5) </td>
                            <td>4. Triple reamer</td>
                        </tr>
                        <tr>
                            <td>6) </td>
                            <td>5. DHS bone tap</td>
                        </tr>
                        <tr>
                            <td>7) </td>
                            <td>6. Bone tap 4.5 mm</td>
                        </tr>
                        <tr>
                            <td>8) </td>
                            <td>7. Drill bit 3.2 mm</td>
                        </tr>
                        <tr>
                            <td>9) </td>
                            <td>Hemiarthroplasty set</td>
                        </tr>
                        <tr>
                            <td>10) </td>
                            <td>1. Murphy&rsquo;s skid</td>
                        </tr>
                        <tr>
                            <td>11) </td>
                            <td>2. Judet head Extractor</td>
                        </tr>
                        <tr>
                            <td>12) </td>
                            <td>3. Head Guage</td>
                        </tr>
                        <tr>
                            <td>13) </td>
                            <td>4. Teflon impactor</td>
                        </tr>
                        <tr>
                            <td>14) </td>
                            <td>5. Box Chisel</td>
                        </tr>
                        <tr>
                            <td>15) </td>
                            <td>6. Rasp for Austin Moore&rsquo;s prosthesis with tommy bar</td>
                        </tr>
                        <tr>
                            <td>16) </td>
                            <td>7. Putty Rasp</td>
                        </tr>
                        <tr>
                            <td>17) </td>
                            <td>8. AMP Extractor with hooks</td>
                        </tr>
                        <tr>
                            <td>18) </td>
                            <td>9. Judet Retractor</td>
                        </tr>
                        <tr>
                            <td>19) </td>
                            <td>10. AMP Hook</td>
                        </tr>
                        <tr>
                            <td>20) </td>
                            <td>11. Aluminium Impactor without Teflon head</td>
                        </tr>
                        <tr>
                            <td>21) </td>
                            <td>12. Rasp for bipolar prosthesis</td>
                        </tr>
                        <tr>
                            <td>22) </td>
                            <td>Spinal surgery Instruments:</td>
                        </tr>
                        <tr>
                            <td>23) </td>
                            <td>1. Cobb&rsquo;s spinal elevator</td>
                        </tr>
                        <tr>
                            <td>24) </td>
                            <td>2. Intervertebral spreader</td>
                        </tr>
                        <tr>
                            <td>25) </td>
                            <td>3. Self retaining retractors</td>
                        </tr>
                        <tr>
                            <td>26) </td>
                            <td>4. Disc removing forceps</td>
                        </tr>
                        <tr>
                            <td>27) </td>
                            <td>&middot; Straight</td>
                        </tr>
                        <tr>
                            <td>28) </td>
                            <td>&middot; upward</td>
                        </tr>
                        <tr>
                            <td>29) </td>
                            <td>&middot; Downward</td>
                        </tr>
                        <tr>
                            <td>30) </td>
                            <td>5. Cervical self retaining retractor</td>
                        </tr>
                        <tr>
                            <td>31) </td>
                            <td>6. Nerve root retractor</td>
                        </tr>
                        <tr>
                            <td>32) </td>
                            <td>7. Watson jones</td>
                        </tr>
                        <tr>
                            <td>33) </td>
                            <td>8. Mac Donald</td>
                        </tr>
                        <tr>
                            <td>34) </td>
                            <td>9. Spine cutter</td>
                        </tr>
                        <tr>
                            <td>35) </td>
                            <td>10. Yanker suction cannula canula</td>
                        </tr>
                        <tr>
                            <td>36) </td>
                            <td>kerrison rongeurs</td>
                        </tr>
                        <tr>
                            <td>37) </td>
                            <td>1. Upward 45<sup>0</sup></td>
                        </tr>
                        <tr>
                            <td>38) </td>
                            <td>2. Upward 90<sup>0</sup></td>
                        </tr>
                        <tr>
                            <td>39) </td>
                            <td>3. Downward 45<sup>0</sup></td>
                        </tr>
                        <tr>
                            <td>40) </td>
                            <td>4. Downward 90<sup>0</sup></td>
                        </tr>
                        <tr>
                            <td>41) </td>
                            <td>Cancellous cannulated screw set</td>
                        </tr>
                        <tr>
                            <td>42) </td>
                            <td>a) Cannulated drill bits</td>
                        </tr>
                        <tr>
                            <td>43) </td>
                            <td>b) Cannulated screw driver</td>
                        </tr>
                        <tr>
                            <td>44) </td>
                            <td>c) Guide wire</td>
                        </tr>
                        <tr>
                            <td>45) </td>
                            <td>d) Multi angle guide</td>
                        </tr>
                        <tr>
                            <td>46) </td>
                            <td>SFDCP Set</td>
                        </tr>
                        <tr>
                            <td>47) </td>
                            <td>1. Plate holding clamp</td>
                        </tr>
                        <tr>
                            <td>48) </td>
                            <td>2. Reduction clamp</td>
                        </tr>
                        <tr>
                            <td>49) </td>
                            <td>3. Bone nibbler</td>
                        </tr>
                        <tr>
                            <td>50) </td>
                            <td>4. Hohman&rsquo;s retractor</td>
                        </tr>
                        <tr>
                            <td>51) </td>
                            <td>5. Drill guide</td>
                        </tr>
                        <tr>
                            <td>52) </td>
                            <td>6. Tap sleeve</td>
                        </tr>
                        <tr>
                            <td>53) </td>
                            <td>7. Periosteal elevator</td>
                        </tr>
                        <tr>
                            <td>54) </td>
                            <td>8. Bone tap 3.5 mm</td>
                        </tr>
                        <tr>
                            <td>55) </td>
                            <td>9. Screw driver 3.5 mm</td>
                        </tr>
                        <tr>
                            <td>56) </td>
                            <td>10. Depth gauge 3.5 mm</td>
                        </tr>
                        <tr>
                            <td>57) </td>
                            <td>11. Counter sink for 3.5 mm screw</td>
                        </tr>
                        <tr>
                            <td>58) </td>
                            <td>12. Bone lever</td>
                        </tr>
                        <tr>
                            <td>59) </td>
                            <td>13. Plate bender</td>
                        </tr>
                        <tr>
                            <td>60) </td>
                            <td>14. Bone awl</td>
                        </tr>
                        <tr>
                            <td>61) </td>
                            <td>15. Bone curette</td>
                        </tr>
                        <tr>
                            <td>62) </td>
                            <td>16. Drill bit 2.5 mm</td>
                        </tr>
                        <tr>
                            <td>63) </td>
                            <td>NFDCP set</td>
                        </tr>
                        <tr>
                            <td>64) </td>
                            <td>1. Reduction clamp</td>
                        </tr>
                        <tr>
                            <td>65) </td>
                            <td>2. Plate holding clamp</td>
                        </tr>
                        <tr>
                            <td>66) </td>
                            <td>3. Pointed reduction clamp</td>
                        </tr>
                        <tr>
                            <td>67) </td>
                            <td>4. Bristow elevator</td>
                        </tr>
                        <tr>
                            <td>68) </td>
                            <td>5. Hohman&rsquo;s retractor</td>
                        </tr>
                        <tr>
                            <td>69) </td>
                            <td>6. Depth gauge 4.5 mm</td>
                        </tr>
                        <tr>
                            <td>70) </td>
                            <td>7. Periosteal elevator</td>
                        </tr>
                        <tr>
                            <td>71) </td>
                            <td>8. Screw driver 4.5 mm</td>
                        </tr>
                        <tr>
                            <td>72) </td>
                            <td>9. Bone tap 4.5 mm</td>
                        </tr>
                        <tr>
                            <td>73) </td>
                            <td>10. Drill guide 3.5 mm</td>
                        </tr>
                        <tr>
                            <td>74) </td>
                            <td>11. Counter sink for 4.5 mm screw</td>
                        </tr>
                        <tr>
                            <td>75) </td>
                            <td>12. Bone awl</td>
                        </tr>
                        <tr>
                            <td>76) </td>
                            <td>13. Bone nibbler</td>
                        </tr>
                        <tr>
                            <td>77) </td>
                            <td>14. Bone curette</td>
                        </tr>
                        <tr>
                            <td>78) </td>
                            <td>15. Lowman&rsquo;s Bone clamp</td>
                        </tr>
                        <tr>
                            <td>79) </td>
                            <td>16. Bone lever</td>
                        </tr>
                        <tr>
                            <td>80) </td>
                            <td>Broad DCP (Large Fragment)</td>
                        </tr>
                        <tr>
                            <td>81) </td>
                            <td>1. Plate holding clamp</td>
                        </tr>
                        <tr>
                            <td>82) </td>
                            <td>2. Reduction clamp</td>
                        </tr>
                        <tr>
                            <td>83) </td>
                            <td>3. Hohman&rsquo;s retractor</td>
                        </tr>
                        <tr>
                            <td>84) </td>
                            <td>4. Depth gauge</td>
                        </tr>
                        <tr>
                            <td>85) </td>
                            <td>5. Bone tap 4.5 mm</td>
                        </tr>
                        <tr>
                            <td>86) </td>
                            <td>6. Bone nibbler</td>
                        </tr>
                        <tr>
                            <td>87) </td>
                            <td>7. Bristow Elevator</td>
                        </tr>
                        <tr>
                            <td>88) </td>
                            <td>8. Bone lever</td>
                        </tr>
                        <tr>
                            <td>89) </td>
                            <td>9. Bone curette</td>
                        </tr>
                        <tr>
                            <td>90) </td>
                            <td>10. Drill guide 3.2 mm</td>
                        </tr>
                        <tr>
                            <td>91) </td>
                            <td>11. Periosteal elevator</td>
                        </tr>
                        <tr>
                            <td>92) </td>
                            <td>12. Lowman&rsquo;s Bone clamp</td>
                        </tr>
                        <tr>
                            <td>93) </td>
                            <td>13. Screw driver 4.5 mm</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center><b>Bone Grafting Sets</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>1) </td>
                            <td>Osteotome straight Fine</td>
                        </tr>
                        <tr>
                            <td>2) </td>
                            <td>Osteotome Curved Fine</td>
                        </tr>
                        <tr>
                            <td>3) </td>
                            <td>chisel</td>
                        </tr>
                        <tr>
                            <td>4) </td>
                            <td>Osteotome straight broad</td>
                        </tr>
                        <tr>
                            <td>5) </td>
                            <td>Osteotome Curved Broad</td>
                        </tr>
                        <tr>
                            <td>6) </td>
                            <td>Bone Gauge Straight</td>
                        </tr>
                        <tr>
                            <td>7) </td>
                            <td>Bone Gauge Curved</td>
                        </tr>
                        <tr>
                            <td>8) </td>
                            <td>Periosteum Elevator</td>
                        </tr>
                        <tr>
                            <td>9) </td>
                            <td>Hammer</td>
                        </tr>
                        <tr>
                            <td>10) </td>
                            <td>Basic Trauma instruments sets</td>
                        </tr>
                        <tr>
                            <td>11) </td>
                            <td>Jumbo Cutter</td>
                        </tr>
                        <tr>
                            <td>12) </td>
                            <td>Roller Type Plate Bender</td>
                        </tr>
                        <tr>
                            <td>13) </td>
                            <td>Hand reamers Cannulated</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <center><b>List of specimen available in department of Orthopaedics</b></center>
                            </td>
                        </tr>
                        <tr>
                            <td>Sr. No.</td>
                            <td>Name of specimen</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Knee Joint</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Superficial dissection of foot</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Hand and forearm deep dissection</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Elbow &amp; wrist joint</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Superficial dissection of dorsum of foot</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Hip Joint</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Dorsum of hand</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Superficial dissection of Palm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

@endsection