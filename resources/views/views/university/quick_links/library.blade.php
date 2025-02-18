@extends('layouts.university.main')
@section('content')

<!-- <link rel="stylesheet" href="{{asset('/assets/css/tmu-testimonial.css')}}"> -->
<!-- <link rel="stylesheet" href="{{asset('/assets/css/tmimt.css')}}"> -->
<!-- <link rel="stylesheet" href="{{asset('/assets/css/college.css')}}"> -->




<style>
.li-card-custom {
    width: 300px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.li-card-custom img {
    width: 100%;
    height: auto;
}

.li-card-custom:hover {
    transform: scale(1.1);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
}
</style>

<section id="content">
    <div class="content-wrap py-0">

        <div class="container-fluid  my-0 px-2">
            <div class="row ps-4">
                <div class="col-md-6 pt-0 pt-md-4 ps-md-5 mb-4">
                    <h1 class=" mt-5 mb-5 d-none d-md-block "
                        style="font-weight:700!important; font-size:48px!important;">Welcome to Teerthanker Mahaveer
                        <br> <span>Central Library and Knowledge Resourse Centre </span>
                    </h1>
                    <h1 class=" mt-5 mb-3 d-block d-md-none"
                        style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">
                        Welcome to Teerthanker Mahaveer <br> <span>Central Library and Knowledge Resourse Centre </span>
                    </h1>

                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
                            <img src="{{asset('assets/img/banner/library/library.webp')}}" alt="" class="p-0 m-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-3 d-none d-md-block">
            <div class="row justify-content-center">
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>302890</span>
                            <br>
                            <span class="d-block pt-1">Books</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>11768</span>
                            <br>
                            <span class="d-block pt-1">E-Books</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>343</span>
                            <br>
                            <span class="d-block pt-1">Journals</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>8825</span>
                            <br>
                            <span class="d-block pt-1">E-Journals</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-2 d-block d-md-none">
            <div id="under-banner-carouselExample" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#under-banner-carouselExample" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#under-banner-carouselExample" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>302890</span>
                                        <br>
                                        <span class="d-block pt-1">Books</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>11768</span>
                                        <br>
                                        <span class="d-block pt-1">E-Books</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>343</span>
                                        <br>
                                        <span class="d-block pt-1">Journals</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>8825</span>
                                        <br>
                                        <span class="d-block pt-1">E-Journals</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="box-container">
            <div class="box">
                <h2 class="college-main-heading d-none d-md-block">Welcome to Central Library</h2>
                <h3 class="tmu-text-primary d-block d-md-none"><span>Welcome to the </span><span> Central Library</span>
                </h3>

                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p style="text-align: justify;">The Knowledge Resource Centre (KRC) of Teerthanker Mahaveer
                            University consists of a Central Library with four major branches situated in different
                            Academic Blocks. These are well established modern libraries catering to the information
                            needs of the academic community. For a closer view of advances in technology, new
                            discoveries in the fields of medical and engineering, These libraries have more than two
                            lakh books on varied subjects and have subscription to print version of 289 national and
                            international journals besides access to a host of e-journals. The University has subscribed
                            the EBSCOhost, lexis Nexis and DELNET database providing access to full text research
                            articles and sector specific reports in different disciplines.</p>
                        <div class="read-more-content mt-0">
                            <p style="text-align: justify;"> The Central Library is fully automated with KOHA open
                                source library management software which connects all computers of the library and the
                                different departments, colleges, and faculty of the University. Books are issued through
                                bar-coded membership cards to the students and faculty members of the University from
                                the circulation section. The books and other reading materials are issued to the
                                students for reading room study from the issue counter. The Catalogue of the Central
                                Library is available on internet/intranet for search. The CCTV cameras are installed to
                                ensure safety of the Library materials. The Central Library is also equipped with Fire
                                Alarm Control Panel and manually operated fire extinguishers. Approx. 1200 students,
                                teachers and other members visit the Library almost every day. A register is maintained
                                in the library and the visitor must show his valid identity card at the entrance.</p>
                        </div>
                        <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2"
                            title="Read More">Read More</a>

                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-auto">
                    <div class="card li-card-custom">
                        <a href="https://search.ebscohost.com/Community.aspx?community=y&ugt=62E771363C1635973716353632453E6228E364D36213689361E324E334133603&authtype=ip&stsug=AnYAv5oc1OBnluR1S_E9sz_JW4eoQLMda9unHOmfUg4t5qaWw5lGJELiRaNqYq6HoeAv00rEgdhNOA9j-x6NVOzsHWAPDxJ-apPq0OBzbVThc_Ts2REPOkpQJtdspdxsFuWqlrv_ixdlaZf10nU2tyyhq69LdtaNEGCG1OayhJmsCnk&IsAdminMobile=N&encid=22D731563C5635973746359632553C07387374C372C378C371C374C374C376C33013&selectServicesToken=A3YORUNvLqecGTd3z48Fs1csrT-8Gcutshyu5PDkgCGzUDGan6v8hhIED6Uk7ZKzeN2sWL8Vc3FHkcgPqAZTp2CtrUa3lKOZInR6154TbaeKPijxsR7ukNenOxETMTapy0TMcQKvFUdmd7uDNDuQyecJ5zAxm7CNGSFFZmgKQdel8Y-QNp9WU5Mv2UnW_CA57qL-4wYNzEx8TrT98zqbuUczG59BHkMLrwmgFse0n2Ab5ZMapYc-Dekf2JU5pkjPA7tC4-TufRBkpD5ZB0naZW9HG2lQOCEO"
                            target="_blank">
                            <img src="{{asset('assets/img/infrastructure/library/EBSCOhost_Flat.png')}}" class="card-img-top"
                                alt="Image 1">
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-auto">
                    <div class="card li-card-custom">
                        <a href="https://advance.lexis.com/in?identityprofileid=ZQ2FJT60079" target="_blank">
                            <img src="{{asset('assets/img/infrastructure/library/manupatra.png')}}" class="card-img-top" alt="Image 2">
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-auto">
                    <div class="card li-card-custom">
                        <a href="https://delnet.in/" target="_blank">
                            <img src="{{asset('assets/img/infrastructure/library/delnet.jpg')}}" class="card-img-top" alt="Image 3">
                        </a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-auto">
                    <div class="card li-card-custom">
                        <a href="https://delnet.in/" target="_blank">
                            <img src="{{asset('assets/img/infrastructure/library/up_to_date.jpg')}}" class="card-img-top"
                                alt="Image 4">
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <h2 Class="tmu-text-primary mb-2 mt-5"><span>Library </span></h2>
            <div class="row justify-content-center">
                <div class="col-lg-12 text-justify mb-2 mt-3">
                    <p class="text-justify mb-2 mt-1">
                        <!-- The Library Collection also includes a large section of expensive encyclopedias, reference books
                        and a large number of text books related to the courses being run in the University. Besides
                        this, the students/ faculty/ staff can access the resources of National Digital Library of India
                        (NDL) which consist of > 7 lakh books, 3 lakh research papers, 95.000 + theses. Can be accessed
                        at <a href="https://ndl.iitkgp.ac.in/" target="blank">https://ndl.iitkgp.ac.in/</a> -->
                        At TMU, our library is a hub of knowledge and discovery. With a vast collection of books, journals, and digital resources, students have access to a world of information at their fingertips. The library offers quiet spaces for focused study, along with group discussion areas that encourage interactive learning. Equipped with high-speed internet and advanced technology, students can seamlessly conduct research and study. Our dedicated staff and modern facilities create a comfortable and enriching learning experience, ensuring a welcoming and supportive environment for all students.
                    </p>
                </div>
            </div>
        </div>


        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <div class="p-5 bg-light border rounded text-center">
                        <h2 class="mb-3 tmu-text-primary"><span>E-Resources </span><span> remote access</span> </h2>
                        <a href="https://idp.tmu.ac.in/#res" target="blank"><button type="button"
                                class="tmu-btn btn-4 btn-lg w-100">Click Me</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5 py-2">
            <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1"
                        type="button" role="tab" aria-controls="Tab1" aria-selected="true"><i
                            class="fas fa-lightbulb"></i> KRC Objective</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button"
                        role="tab" aria-controls="Tab2" aria-selected="false"><i class="fas fa-briefcase"></i>
                        Library Rules</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Tab3" type="button"
                        role="tab" aria-controls="Tab3" aria-selected="false"><i class="fas fa-book"></i>
                        Library Service</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#Tab4" type="button"
                        role="tab" aria-controls="Tab4" aria-selected="false"><i class="fas fa-building"></i>
                        KRC Collection</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#Tab5" type="button"
                        role="tab" aria-controls="Tab5" aria-selected="false"><i class="fas fa-building"></i>
                        Digital Resource</button>
                </li>
            </ul>
            <div class="tab-content second ps-5 px-md-5" id="myTabContent">
                <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <h3>KRC Objective</h3>
                    <p>The Knowledge Resource Centre (KRC) of Teerthanker Mahaveer University consists of a Central
                        Library with various major branches situated in different Academic Blocks. These are well
                        established modern libraries catering to the information needs of the academic community. For a
                        closer view of advances in technology, new discoveries in the fields of medical and engineering,
                        These libraries have more than three lakh books on varied subjects and have subscription to
                        print version of 289 national and international journals besides access to a host of e-journals.
                        The University has subscribed the EBSCOhost, Manupatra, UptoDate and DELNET database providing
                        access to full text research articles and sector specific reports in different disciplines.</p>
                    <div class="read-more-content m-0">
                        <p class="mt-3">The Central Library is fully automated with KOHA open source library management software
                            which connects all computers of the library and the different departments, colleges, and
                            faculty of the University. Books are issued through bar-coded membership cards to the
                            students and faculty members of the University from the circulation section. The books and
                            other reading materials are issued to the students for reading room study from the issue
                            counter. The Catalogue of the Central Library is available on internet/intranet for search.
                            The CCTV cameras are installed to ensure safety of the Library materials. The Central
                            Library is also equipped with Fire Alarm Control Panel and manually operated fire
                            extinguishers. Approx. 1800 students, teachers and other members visit the Library almost
                            every day. Automated footfall recorded is maintained in the library and the visitor must
                            scan his/her valid identity card at the entrance.</p>
                    </div>
                    <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2"
                        title="Read More">Read More</a>


                </div>
                <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <h3>Library Rules</h3>



                    <div class="container mb-5 mt-5">
                        <hr class="horizontal-line">

                        <button class="careers-accordion">General Library Rules<span class="icon">+</span></button>
                        <div class="panel">
                            <h4>ADMISSION TO LIBRARY</h4>
                            <ul>
                                <li>Membership/identity cards are required to be shown at the entrance on demand.</li>
                                <li>Personal belongings are not allowed to be taken inside the library. Such belongings
                                    should
                                    be deposited at the baggage counter. It should be clearly understood that the
                                    belongings
                                    left at the property counter are at the personal risk of readers. They should be
                                    collected
                                    back on the same day. The library does not accept any responsibility for loss etc.
                                </li>
                                <li>Members are permitted to take inside the library their personal books for
                                    consultation
                                    subject to necessary checking each time while taking in and taking out the personal
                                    books.
                                </li>
                            </ul>

                            <div class="read-more-content m-0">

                                <h4>LIBRARY DISCIPLINE</h4>
                                <ul>
                                    <li>Readers are required to handle the library reading materials and property very
                                        carefully
                                        and not to (i) Write in or mark (ii) Tear-away pages or mutilate (iii) Disfigure
                                        or
                                        otherwise cause damage in anyway.</li>
                                    <li>In case damage is caused to any library reading materials or property the person
                                        concerned shall be liable to pay the replacement cost. In addition, his
                                        membership may
                                        be cancelled at the discretion of the University librarian.</li>
                                    <li>Members are expected to maintain strict silence & conduct themselves with
                                        dignity
                                        conducive to congenial atmosphere for study & research.</li>
                                    <li>Anyone found guilty of misbehaviour will render his/ her membership liable to be
                                        cancelled at the sole discretion of the University librarian.</li>
                                    <li>No library reading material can be taken out without getting it properly issued.
                                        Any
                                        found violently this rule will be considered liable to such action as may be
                                        deemed
                                        necessary by the University librarian.</li>
                                    <li>Library premises are completely a NO SMOKING ZONE.</li>
                                </ul>

                                <h4>CIRCULATION</h4>
                                <p>This section in face of the library as library main counter is known as Circulation
                                    Counter
                                    or Circulation Section. This section extends issue and return facility of library
                                    documents.
                                    This section further responsible for generating membership, providing no-dues
                                    certificate,
                                    collection of overdue or other library fines. This section also extends document
                                    reservation
                                    service, sending reservation service-related alerts and collecting advance payments
                                    of
                                    students for photocopy facility.</p>

                                <p>Every student shall be issued one library card on which student shall be entitled to
                                    get
                                    specified number of book(s) issued from the library. The book shall have to be
                                    returned to
                                    the library on or before the due date and in case due date falls on nonworking day
                                    the book
                                    can be returned on the next working day without fine.</p>
                                <p>The librarian reserves the right to ask any student to return the book(s) back to the
                                    library
                                    any time.</p>
                                <h4 class="mt-3">USER’S PRIVILEGES:</h4>
                                <h3>Books:</h3>
                                <ul>
                                    <li>Borrowing facilities are given only to the members of the KRC against the Non-
                                        Transferable Identity Card issued by the Central Library to the member.
                                        Borrowing is
                                        permitted only through the Circulation Counter.</li>
                                    <li>Every student shall be issued one library card on which student shall be
                                        entitled to get
                                        specified number of book(s) issued from the library. The book shall have to be
                                        returned
                                        to the library on or before the due date.</li>
                                    <li>Books belonging to Rare, Reference, Reports, and Competition Sections are not
                                        ordinarily
                                        issued except with special permission of the librarian, besides this Journals &
                                        Thesis
                                        are also not issued.</li>

                                </ul>

                                <h3>Periodicals:</h3>
                                <ul>
                                    <li>Current Journals/Magazines/Newspapers are strictly for reference purposes in the
                                        KRC and
                                        will not be issued to anyone. If there is an urgent need, then the back issues
                                        of a few
                                        journals/magazines can be issued for over-night against the library membership
                                        card
                                        through special permission.</li>
                                </ul>

                                <h3>CONDITIONS OF LOAN</h3>
                                <ul>
                                    <li>Each student (College Topper only) will be given two extra library tickets for a
                                        period
                                        of one academic year for circulation of books according to CGPA. After the
                                        completion of
                                        the academic year, student must return these two tickets in the library.</li>
                                    <li>Overdue charges are levied if a book is kept beyond the due date as per rules.
                                    </li>
                                    <li>The librarian may remit are exempt any person from payment of overdue charge at
                                        his
                                        discretion.</li>
                                    <li>Those members who are found to be in the habit of detaining, Library material
                                        will be
                                        dealt with strictness. If anyone is found to have detained library materials
                                        beyond one
                                        month after the due date thrice in a year, his/her membership of the library
                                        will be
                                        liable to be cancelled at the discretion of the librarian. For this purpose,
                                        proper
                                        record of each default will be maintained at the counter.</li>
                                    <li>Book on loan is subject to recall by librarian at any time.</li>
                                    <li>Reminders for overdue books are usually sent. However non-receipt of a reminder
                                        cannot
                                        be taken as a ground for late return of books.</li>
                                    <li>A book once issued will be allowed inside the library for return purpose only.
                                    </li>
                                    <li>Books having same title will not be issued simultaneously.</li>
                                </ul>

                                <h3>LOSS OF BOOKS</h3>
                                <ul>
                                    <li>In case of loss of library reading material, the reader concerned shall be
                                        required to
                                        pay replacement price prevailing at the time of payment as per rules.</li>
                                    <li>Double amount will be charged for the loss of book to recover the cost of book &
                                        procurement cost.</li>
                                    <li>In case of loss of rare and out of print books, and bound volumes of
                                        periodicals, the
                                        replacement cost shall be fixed by the librarian in each case as per rules.</li>
                                    <li>In case loss of loose issues of periodicals, replacement cost for the whole
                                        volume shall
                                        be ordinarily required to be paid.</li>
                                </ul>
                                <h3>LOSS OF LIBRARY CARD</h3>
                                <ul>
                                    <li>The loss of library card should be immediately reported to the librarian in
                                        writing.
                                    </li>
                                    <li>Due care will be taken by the library to prevent misuse of lost card. But the
                                        library
                                        does not accept any responsibility for this. The reader concerned shall continue
                                        to be
                                        responsible for any loss, due to the misuse of the lost card even after having
                                        formally
                                        reported the loss and having been issued duplicate card.</li>
                                    <li>On request, duplicate ticket may be issued after period of 2 days after the
                                        report of
                                        loss was made. However, the member shall pay Rs. 100/- for one duplicate library
                                        ticket.
                                    </li>
                                </ul>

                                <h3>GENERAL RULES</h3>
                                <ul>
                                    <li>The membership card is not transferable.</li>
                                    <li>Any constructive suggestion from readers will be most welcome.</li>
                                    <li>Strict discipline and decorum of the library shall be maintained all the time.
                                    </li>
                                    <li>No one should remove any part of library, any newspaper, or current issues of
                                        periodical
                                        on display.</li>
                                    <li>No one should enter the counter or use library telephones without prior
                                        permission.</li>
                                    <li>The borrowers shall satisfy themselves about the physical condition of the books
                                        before
                                        borrowing. No plea that book was already damaged will be entertained at the time
                                        of
                                        return</li>
                                    <li>A member against whom overdue charges pending shall not be allowed to borrow or
                                        withdraw
                                        security deposit.</li>
                                    <li>The librarian may grant special permission to any person to borrow books at his
                                        discretion.</li>
                                    <li>Notwithstanding, the librarian may at his/her discretion relax any of the rules.
                                    </li>
                                    <li>Leave the book in the stack section counter after use rather than restoring it
                                        on the
                                        shelf.</li>
                                    <li>Help in keeping the library neat and clean.</li>
                                    <li>Do not use Mobile Phone in the library or switched it off.</li>
                                    <li>Make the best use of your library. The library staff members are there to assist
                                        you.
                                        Cooperate with them, to be get cooperation.</li>
                                </ul>
                            </div>
                            <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2"
                                title="Read More">Read More</a>
                        </div>
                        <!-- Add the horizontal line here -->
                        <hr class="horizontal-line">
                        <button class="careers-accordion">KRC Working Hours<span class="icon">+</span></button>
                        <div class="panel">
                            <div class="container mt-5">
                                <!-- Library Hours Table -->
                                <div class="card">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Library Hours</h5>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Section</th>
                                                    <th>Days</th>
                                                    <th>Timings</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td rowspan="2">Central Library Wing A: Medical</td>
                                                    <td>Monday to Saturday</td>
                                                    <td>8:30 AM to 12:00 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td>10:00 AM to 08:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Central Library Wing B: Non Medical</td>
                                                    <td>Monday to Saturday</td>
                                                    <td>8:30 AM to 8:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Central Library Wing C: TMIIMT</td>
                                                    <td>Monday to Saturday</td>
                                                    <td>9:00 AM to 5:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Central Library Wing D: Agriculture</td>
                                                    <td>Monday to Saturday</td>
                                                    <td>9:00 AM to 5:00 PM</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <p class="mb-1"><strong>The LRC opens all days of the week under the following
                                                timings:</strong></p>
                                        <ul style="margin-left: 20px;">
                                            <li>KRC (except Medical) will remain closed on Holidays listed in the
                                                Academic Calendar of the Teerthanker Mahaveer University.</li>
                                            <li>All online resources can be accessed.</li>
                                            <li>Any change in the KRC timings will be notified in advance.</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Librarian Contact Details -->
                                <div class="mt-4">
                                    <h5>Dr. Vineeta Jain</h5>
                                    <p class="text-muted">UNIVERSITY LIBRARIAN</p>
                                    <p class="mb-1"><strong>Address:</strong> Teerthanker Mahaveer University, Moradabad
                                        (U.P.) 244001</p>
                                    <p class="mb-1"><strong>Mobile:</strong> +91 - 9997560099</p>
                                    <p class="mb-1"><strong>Email:</strong> <a
                                            href="mailto:university.librarian@tmu.ac.in">university.librarian@tmu.ac.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Add the horizontal line here -->
                        <hr class="horizontal-line">
                    </div>



                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <h3>Library Management System:</h3>
                    <p><a href="#" target="blank">Library Management Software (LMS)</a> The Teerthanker
                        Mahaveer University's Library uses a comprehensively featured, scalable library management
                        system, i.e. KOHA, an integrated multi-user library management system that supports the in-house
                        operations. The software encompasses acquisition, cataloguing, circulation, serials, and OPAC
                        modules. The library updates its database daily with information about the latest procurement.
                        All the faculty and staff members have migrated to the latest computerized circulation system.
                        With KOHA, the management has become impeccable and streamlined.</p>
                    <h3>Learning Management System (LMS):</h3>
                    <p>The Teerthanker Mahaveer University’s Digital Library is an Institutional Repository. The library
                        system is equipped with 140 high-performance computer systems. Besides, it contains the research
                        articles along with faculty members’ PPTs. This facility is open 24 hours a day, seven days a
                        week on the University campus.</p>

                    <div class="read-more-content m-0">

                        <h3>Digital Library:</h3>
                        <p>Digital Library is a <a href="#" target="blank">Swadhyay Institutional
                                Repository</a> of Teerthanker Mahaveer University. We have 140 Computer systems in
                            digital
                            library including all departmental unit of Central Library. It contains scanned copy of
                            previous
                            years question papers.</p>
                        <h3>OPAC:</h3>
                        <p><a href="#" target="blank">Online Public Access Catalogue (OPAC)</a> allows
                            students
                            to access books, journals, magazines, and other materials online. It’s a collection of books
                            that contains all the most recent curricular books, with fresh additions made regularly. To
                            issue the book, one must be familiar with the list of books borrowed, as well as their due
                            dates. It allows for the rapid search of the library catalogue.</p>
                        <h3>Online Information Search:</h3>
                        <p>For Research scholars, KRC is an outstanding service. It allows students easy access to
                            previous
                            projects, paper-writing, journals, etc. The KRC staff is quite welcoming and is always ready
                            to
                            assist the scholars in delivering crucial information.</p>
                        <h3>Sodhganga:</h3>
                        <p><a href="https://shodhganga.inflibnet.ac.in/simple-search?query=Teerthanker+Mahaveer+University&go="
                                target="blank">"Shodhganga"</a> is the title given to the INFLIBNET Centre’s digital
                            repository of Indian Electronic Theses and Dissertations. The Shodhganga@INFLIBNET Centre
                            allows
                            research scholars to deposit their PhD theses and make them open access to the entire
                            scholarly
                            community. The repository can capture, indexing, storing, disseminating, and preserving ETDs
                            submitted by researchers.</p>
                        <h3>SodhSindhu:</h3>
                        <p>The <a href="https://ess.inflibnet.ac.in/" target="blank">e-ShodhSindhu</a> primarily caters
                            to
                            the needs of Research Scholars. It provides current and archival access to over 10,000 core
                            and
                            peer-reviewed journals. Besides this, it serves a variety of bibliographic, citation, and
                            factual databases in numerous disciplines, from a large number of publishers and aggregators
                            to
                            its member institutions. It majorly includes centrally funded technical institutions,
                            universities, and colleges.</p>
                        <h3>Inflibnet:</h3>
                        <p>The Gandhinagar based <a href="https://www.inflibnet.ac.in/index.php"
                                target="blank">Information
                                and Library Network (INFLIBNET) Centre</a> is an Autonomous Inter-University Center
                            (IUC) of
                            the University Grants Commission in New Delhi (Ministry of Education, Govt. of India). It is
                            a
                            significant National Programme launched by the UGC in March 1991 as a project under the
                            IUCAA.
                            In June 1996, it also became an independent Inter-University Center. INFLIBNET is involved
                            in
                            the modernization of university libraries in India by utilizing innovative technologies for
                            optimal information utilization.</p>
                        <h3>NMEICT/ NPTEL:</h3>
                        <p>The <a href="https://nptel.ac.in/" target="blank">National Mission on Education through
                                Information and Communication Technology (NMEICT)</a> is envisioned as a Centrally
                            Sponsored
                            Scheme, to leverage the potential of ICT in the teaching and learning process for the
                            benefit of
                            all learners in Higher Education Institutions. It can be accessed while sitting on a couch.
                        </p>
                        <p>Along with this, in 2003, seven Indian Institutes of Technology including Bombay, Delhi,
                            Kanpur,
                            Kharagpur, Madras, Guwahati, and Roorkee along with the Indian Institute of Science,
                            Bangalore
                            launched the National Programme on Technology Enhanced Learning (NPTEL). It is the world’s
                            largest online repository of courses for engineering, basic sciences, selected humanities
                            and
                            social sciences students.</p>
                        <h3>SWAYAM:</h3>
                        <p>SWAYAM, a government-initiated effort that aims to meet the three cardinal principles of
                            education policy which involve accessibility, equity, and quality. The goal of this
                            initiative
                            is to render the finest teaching and learning resources available to everyone, including the
                            most disadvantaged.</p>
                        <p>This platform facilitates the transmission of all classroom-taught courses, from Class 9 to
                            post-graduation, to anywhere in the world. All the courses are interactive, designed by the
                            best
                            professors in the country, and are open to learners for no cost. Over 1,000 qualified
                            academics
                            and instructors from around the country assisted in the development of these courses. To
                            ensure
                            high quality delivery and production of materials, nine national coordinators are appointed.
                        </p>
                        <p>To expand your knowledge, visit <a href="https://swayam.gov.in/" target="blank">Swayam</a>
                            now!
                        </p>
                        <h3>e-PG Pathshala:</h3>
                        <p>To avail Study-At-Home facility amid the Corona outbreak, the MHRD along with UGC started
                            E-PG
                            Pathshala, an initiative under National Mission on Education through ICT (NME-ICT). It is a
                            one-stop shop for all postgraduate courses.</p>
                        <p>The content and quality are its key components. The interactive e-content is available in 70
                            subjects encompassing disciplines of social sciences, arts, fine arts, humanities, natural &
                            mathematical sciences, linguistics and languages. Subject experts working in universities
                            and
                            other R & D organizations throughout the country designed these courses. Every subject
                            comprised
                            a team of principal investigators, paper coordinators, content writers, content reviewers,
                            language editors, etc.</p>
                        <p>So, level up your knowledge by utilizing an excellent learning platform. Visit <a
                                href="https://epathshala.nic.in/" targey="blank">e-PG Pathshala</a> right now.</p>
                        <h3>Lending Service:</h3>
                        <p>This is the key feature of library services. To issue/return the books, the students need to
                            reveal their University Identity Card. The KRC lending service allows freedom from this. It
                            is
                            completely computerized, using Barcode technology and a library management software system.
                            With
                            this, the books can be checked out and returned using an uncomplicated Barcode technology.
                        </p>

                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Text Books / General Books</td>
                                            <td>Issued for 15 days</td>
                                        </tr>
                                        <tr>
                                            <td>Reference Books: Competition & Rare Books</td>
                                            <td>Not allowed (Reference collection may be referred inside the library
                                                premises only)</td>
                                        </tr>
                                        <tr>
                                            <td>Periodicals (Back)</td>
                                            <td>Not allowed (Reference collection may be referred inside the library
                                                premises only)</td>
                                        </tr>
                                        <tr>
                                            <td>CDs/DVDs</td>
                                            <td>Overnight issue only</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2"
                        title="Read More">Read More</a>

                </div>
                <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <h3>KRC Collections</h3>
                    <p>The KRC has been pooling quality resources in all formats from across the world. Broadly
                        following resources are the highlights of the library collection.</p>

                    <p><strong>KRC Collection (As on 31st January, 2022)</strong></p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="table-light">
                                <tr>
                                    <th>Documents</th>
                                    <th>Scope</th>
                                    <th>Titles</th>
                                    <th>Total Volumes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Books</td>
                                    <td>All areas</td>
                                    <td>1,00,667</td>
                                    <td>2,43,943</td>
                                </tr>
                                <tr>
                                    <td>Rare Books</td>
                                    <td>All areas</td>
                                    <td>331</td>
                                    <td>331</td>
                                </tr>
                                <tr>
                                    <td>E-Books</td>
                                    <td>All areas</td>
                                    <td>38,808</td>
                                    <td>38,808</td>
                                </tr>
                                <tr>
                                    <td>E-Journals</td>
                                    <td>All areas</td>
                                    <td>9,163</td>
                                    <td>9,163</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">Print Periodicals</td>
                                    <td>International Journals</td>
                                    <td>127</td>
                                    <td rowspan="3">376</td>
                                </tr>
                                <tr>
                                    <td>National Journals</td>
                                    <td>234</td>
                                </tr>
                                <tr>
                                    <td>Magazines</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>Theses</td>
                                    <td>Ph.D Theses</td>
                                    <td>85</td>
                                    <td>85</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Dissertations</td>
                                    <td>M.Tech</td>
                                    <td rowspan="2">3,517</td>
                                    <td rowspan="2">3,517</td>
                                </tr>
                                <tr>
                                    <td>B.Tech</td>
                                </tr>
                                <tr>
                                    <td>Bound Volumes (Journals)</td>
                                    <td></td>
                                    <td>1,500</td>
                                    <td>1,500</td>
                                </tr>
                                <tr>
                                    <td>Newspapers</td>
                                    <td>All areas</td>
                                    <td>8</td>
                                    <td>200</td>
                                </tr>
                                <tr>
                                    <td>Special Reports</td>
                                    <td>All areas</td>
                                    <td>6</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>Conference Proceedings</td>
                                    <td>All areas</td>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>CDs and DVDs</td>
                                    <td>All areas</td>
                                    <td>1,716</td>
                                    <td>1,716</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="tab-pane fade" id="Tab5" role="tabpanel" aria-labelledby="tab5-tab">
                    <h3>Digital Resources</h3>
                    <p><strong>E-Journals & E-Books Database:</strong></p>
                    <p>The Library subscribes to a range of online database to help users with their research and
                        academic pursuits. The KRC is institutional member of Medline Complete EBSCO,DynaMed Plus EBSCO
                        Health, Dentistry& Oral Sciences Source EBSCO, Business Source Elite EBSCO, Academic Search
                        Elite EBSCO, Lexis Nexis and DELNET Databases which can be accessed campus wide though IP
                        authentication. You can access high speed internet access at workstations or use Wi-Fi, to read
                        the e-books through online databases subscribed by the KRC available at the Reference Desk.</p>
                    <p><strong>E-Journal & E-Books Portals Access:</strong></p>

                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Name of Databases</th>
                                <th>Coverage Area</th>
                                <th>URL Link</th>
                                <th>Access Mode / Availability</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Medline Complete EBSCO</td>
                                <td>Medical and allied subject</td>
                                <td><a href="https://search.ebscohost.com"
                                        target="_blank">https://search.ebscohost.com</a></td>
                                <td>IP Based: Campus wide and remote access</td>
                            </tr>
                            <tr>
                                <td>Dentistry & Oral Sciences Source EBSCO</td>
                                <td>Dental and allied subject</td>
                                <td><a href="https://search.ebscohost.com"
                                        target="_blank">https://search.ebscohost.com</a></td>
                                <td>IP Based: Campus wide and remote access</td>
                            </tr>
                            <tr>
                                <td>Business Source Elite EBSCO</td>
                                <td>Management and allied subject</td>
                                <td><a href="https://search.ebscohost.com"
                                        target="_blank">https://search.ebscohost.com</a></td>
                                <td>IP Based: Campus wide and remote access</td>
                            </tr>
                            <tr>
                                <td>Academic Search Elite EBSCO</td>
                                <td>Social Science, Education, Physical Education, Nursing, Paramedical, Physiotherapy,
                                    Pharmacy, and allied subjects</td>
                                <td><a href="https://search.ebscohost.com"
                                        target="_blank">https://search.ebscohost.com</a></td>
                                <td>IP Based: Campus wide and remote access</td>
                            </tr>
                            <tr>
                                <td>Lexis Nexis</td>
                                <td>Law and allied subject</td>
                                <td><a href="http://advance.lexis.com" target="_blank">http://advance.lexis.com</a></td>
                                <td>IP Based: Campus wide and remote access</td>
                            </tr>
                            <tr>
                                <td>DELNET</td>
                                <td>Various Discipline</td>
                                <td><a href="https://delnet.in" target="_blank">https://delnet.in</a></td>
                                <td>IP Based: Campus wide and remote access</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

        <div class="container mb-4">
            <div class="mb-3 mt-2">
                <!-- <h3 class="tmu-text-primary ps-2"><span>Gallery </span></h3> -->
            </div>
            <div class="container mt-2 px-0">
                <!-- Image Grid for Desktop and Tablet -->
                <div class="d-flex flex-wrap">

                    <div class="col-md-4 img-grid p-2">
                        <img src="{{asset('/assets/img/infrastructure/library/1.webp')}}" class="img-fluid"
                            alt="Image 1">
                    </div>
                    <div class="col-md-4 img-grid p-2">
                        <img src="{{asset('/assets/img/infrastructure/library/2.webp')}}" class="img-fluid"
                            alt="Image 1">
                    </div>
                    <div class="col-md-4 img-grid p-2">
                        <img src="{{asset('/assets/img/infrastructure/library/3.webp')}}" class="img-fluid"
                            alt="Image 1">
                    </div>
                    <div class="col-md-4 img-grid p-2">
                        <img src="{{asset('/assets/img/infrastructure/library/4.webp')}}" class="img-fluid"
                            alt="Image 1">
                    </div>
                    <div class="col-md-4 img-grid p-2">
                        <img src="{{asset('/assets/img/infrastructure/library/5.webp')}}" class="img-fluid"
                            alt="Image 1">
                    </div>
                    <div class="col-md-4 img-grid p-2">
                        <img src="{{asset('/assets/img/infrastructure/library/6.webp')}}" class="img-fluid"
                            alt="Image 1">
                    </div>
                    <div class="col-md-4 img-grid p-2">
                        <img src="{{asset('/assets/img/infrastructure/library/8.webp')}}" class="img-fluid"
                            alt="Image 1">
                    </div>


                </div>
            </div>
            <!-- Grid row -->
        </div>
    </div>
</section>
@endsection