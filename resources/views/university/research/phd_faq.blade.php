@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')






<div class="main-content">
    <div class="container">
      <div class="row mx-0 mb-3">
        <h1 class="mb-2 tmu-text-primary tmu-page-heading pt-md-5"><span>Frequently Asked </span><span> Questions</span></h1>

        <hr class="horizontal-line">
        <button class="careers-accordion">What is the selection process for admission to Ph.D.? <span
            class="icon">+</span></button>
        <div class="panel active">
          <p>Based on the information provided by the applicant, the eligible candidates will be called for
            <b>Teerthanker Mahaveer University Research Aptitude Test (TRAT)</b>. The TRAT qualified candidates would be
            required to first complete the coursework as specified in the Ph.D. Ordinance and give the presentation of their
            research plan to the Research Committee on a later date communicated by the concerned college of the
            university.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion"> What is TRAT?<span class="icon">+</span> </button>
        <div class="panel">
          <p>The Teerthanker Mahaveer University Research Aptitude Test (TRAT) judges an applicant on the basis of
            his/her quantitative, analytical, language and research skills. The question paper is divided into two parts
            viz. <b>Part A</b> and <b>Part B</b>. Part A of the TRAT is designed to assess the research aptitude of the
            candidate and consists of multiple choice type questions. Part B of the RAT is designed to assess the
            subject specific knowledge of the candidate and consists of descriptive type questions.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion"> What is the purpose of presentation of research plan?<span
            class="icon">+</span> </button>
        <div class="panel">
          <p>University attaches high importance to applicant's motivation and research capability. Therefore it is
            natural to examine the applicant's motivation for a research career, either in academia or in industry.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion"> How do I crack TRAT?<span class="icon">+</span> </button>
        <div class="panel">
          <p>The syllabus, scheme of examination, and sample/model test paper for all subjects are available in <a href="{{route('phd.overview')}}">overview</a> on the
            university’s website under the link “Research” that can be referred to for preparation for the TRAT.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion"> Can I get exemption from TRAT? If yes, shall my application be considered
          straight for registration?<span class="icon">+</span> </button>
        <div class="panel">
          <p>UGC-NET (including JRF)/CSIR UGC-NET (including JRF)/SLET/GATE/GPAT/CEED/ICAR/Teacher fellowship holder or have passed M. Phil. Programme and similar National level tests qualified applicants are exempt from appearing in the TRAT.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion">How often is the TRAT conducted? <span class="icon">+</span> </button>
        <div class="panel">
          <p>The University conducts TRAT twice a year provided there are sufficient numbers of applications.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion">How shall I get information about the TRAT after submitting my application?
          <span class="icon">+</span> </button>
        <div class="panel">
          <p>The schedule for the TRAT is mentioned in Annexure P of the Ph.D Ordinance. However, it is in the interest
            of the applicant to remain in touch with the university for the purpose.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion">How much time does it take to complete Ph.D.? <span class="icon">+</span>
        </button>
        <div class="panel">
          <p>One can submit his/her thesis on completion of three years of registration. The maximum time allowed to
            complete PhD is six years.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion"> Is there scope to do interdisciplinary research?<span class="icon">+</span>
        </button>
        <div class="panel">
          <p>Yes, in fact, most of the research work done these days is interdisciplinary in nature.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion"> Can I apply even if I don’t have a guide of my own? <span
            class="icon">+</span></button>
        <div class="panel">
          <p>The University has requisite manpower and shall allot a supervisor to the candidate from its own pool of
            guides after a candidate has qualified the TRAT.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion"> Am I supposed to pay for the services of the guide?<span
            class="icon">+</span> </button>
        <div class="panel">
          <p>No.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion">From where can I draw guidance about the SOP, fee structure, process, etc.?
          <span class="icon">+</span> </button>
        <div class="panel">
          <p style="text-align:justify">The Ph.D. Ordinance
            given on the website of the University provides complete guidance regarding the Ph.D. programme. Besides this,
            for any clarification, please mail your query at <a href="mailto:asso.dean.phd@tmu.ac.in"
              aria-label="send an email to asso.dean.phd@tmu.ac.in"
              uw-rm-vague-link-id="mailto:asso.dean.phd@tmu.ac.in$send an email to asso.dean.phd@tmu.ac.in"
              data-uw-rm-vglnk="">asso.dean.phd@tmu.ac.in</a> or call on +91-9837016031.</p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection