@extends('layouts.university.departments.quicklinks_with_sidebar')
@section('content')



<div class="main-content">
    <div class="container">
        <div>
            <div class="row mx-0">
                <h1 class="mb-2 tmu-text-primary tmu-page-heading"><span>Admission Rules & </span><span
                        class="d-block d-sm-inline">Regulations</span></h1>
                        <div class="volunteer p-5">
                <p class="text-justify mb-2 mt-1">The University invites applications from eligible candidates for
                    admission tod different professional programmes. Admission to these programmes will be made based on
                    merit determined as per the following procedure.</p>
                <ul style="text-align:justify;list-style:disc">
                    <li>If you have appeared in a qualifying examination and the result is awaited, you can take
                        provisional admission. However, in all circumstances, you shall have to submit the result in the
                        university <strong>latest by October 31</strong>, except where the Regulatory Council’s norms
                        prescribed otherwise.</li>
                    <li>Attach self-certified copies of your mark sheets/testimonials with the application form. At this
                        stage, do not send any original copies of mark-sheets / testimonials.</li>
                    <li>Paste your latest photograph in the space provided in the Application Form.</li>
                    <li>Before submitting / mailing the duly filled-up application form, go through all the points
                        contained in the form.</li>
                    <li>The merit list declared by the University shall be final and binding.</li>
                    <li>If any document / declaration submitted by the candidate is found to be false / forged at any
                        stage, his or her admission shall be cancelled and he / she may be liable for prosecution under
                        law.</li>
                    <li>The selection to the programme will be provisional until the candidate furnishes the required
                        documents and testimonials, including the final results of the qualifying examination at the
                        time of admission.</li>
                    <li>Involvement of a candidate in any form of criminal activities debars the candidate from seeking
                        admission in any programme of the university. Concealment of information on this account will
                        lead to cancellation of admission, if detected subsequently.</li>
                    <li>If the University is not satisfied with the character, past behaviour or antecedents of a
                        candidate, it may refuse to admit him/her to any programme of study in the University.</li>
                    <li>It is advisable that students seeking admission in the University should visit along with their
                        parents/guardians to see the infrastructural facilities such as classrooms, laboratories,
                        library, hostel, and transportation. This may facilitate their decision at the time of
                        counselling / admission.</li>
                    <li>At the time of admission, students are required to submit an affidavit duly signed by him/her
                        along with their parents/guardians with regard to disciplinary behaviour during the entire
                        period of the programme. If any violation is found, he/she shall be subjected to the punishment
                        / suspension / rustication as per the University rules and regulations.</li>
                    <li>In case of any legal dispute, the jurisdiction will be limited to Moradabad courts only.</li>
                </ul>
                <div class="alert alert-info">
                    <p style="text-align:justify;color:#000"><strong>Note: </strong>Payment of fee in 'Cash' is accepted
                        only at the designated cash counter(s) at the university campus. Students are advised to obtain
                        the receipt for the same from the cash counter immediately after making the cash payment.</p>
                </div>
                <div class="alert alert-danger">
                    <p style="text-align:justify;color:#000">In case of any inconvenience in the Admission Process,
                        please contact the <strong>Joint Director (Admissions)</strong> in his office at
                        <strong>Admission Cell, Administrative Block, Moradabad (Mob: +91-9837848862)</strong>.
                    </p>
                </div>
                
                <div class="iqac-container mt-5">
                        <div class="card-pdf">
                            <!-- <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon"> -->
                            <i style="font-size:40px;line-height:0px; background-color:lightgray; padding: 2.4rem 1.4rem; border-radius:50%;"
                                class="icon-featured fa-solid fa-file-invoice"></i>
                            <h5 class="mt-4 mb-2 fw-bold tmu-color">APPLY ONLINE</h5>
                            <p class="description mt-0 pt-0">Availability of Application Form</p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{ route('application.form') }}">APPLY HERE</a>
                        </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS and dependencies -->
    </div>
</div>
</div>

@endsection