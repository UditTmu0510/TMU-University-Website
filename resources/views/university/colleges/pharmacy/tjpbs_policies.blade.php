@extends('layouts.university.colleges.pharmacy_tjpbs_with_sidebar')
@section('content')

<style>
    html {
        scroll-behavior: smooth !important;
    }

    .h3size {
        font-size: 20px;
    }

    hr {
        width: 40%;
        /* Sets the width to 30% of the parent container */
        margin: 20px auto;
        /* Centers the <hr> horizontally */
        border: 1px solid #000000b5;
        /* Optional: defines the thickness and color */
    }
</style>
<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">


<div class="main-content">
    <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>TJPBS </span><span> Policies</span></h1>
    <section class="about-section bg-light mt-4 p-3">
        <div class="container">
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size" id="oapolicy"><span>Open Access</span> <span> Policy</span></h3>
            <p class="about-p text-justify mb-4">All the published manuscripts in TJPBS are freely available to view, download and share
                without taking prior permission from the publisher or the author. However, duly
                acknowledgement to the original author must be given. Author(s) retain the copyright of their
                work, with articles licensed to <b>TJPBS</b>. All the published articles are licensed under a <b>Creative
                    Commons License CC BY-NC</b>.</p>
            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size" id="prpolicy"><span>Peer-Review</span> <span> Policy</span></h3>
            <p class="about-p text-justify mb-4">All the submitted manuscripts shall be checked for plagiarism/ similarity index, manuscripts
                having less than 10 percent of the similarity index will be subjected to the editorial review.
                Once manuscript is found satisfactory after editorial review then it will be subjected to a
                double-blinded peer-review process. <span class="highlight">Each paper will be evaluated by one external reviewer
                    and one internal reviewer.</span>
                In accordance with COPE (Committee on Publication Ethics) guidelines on ethical editing for
                Editors, the submissions of the editors and editorial board members will not be handled by
                themselves however; a guest editor or other editorial board members will be assigned for
                such manuscripts</p>

        </div>
    </section>

</div>
</div>

@endsection