@extends('layouts.university.main')
@section('content')

<section id="content">
    <div class="content-wrap py-0">

        <section class="hero-section">
            <div id="campusCarousel" class="carousel slide hero-slider" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active hero-slide">
                        <img src="{{asset('/assets/img/footer_pages/banner/campus.webp')}}"
                            class="hero-image" alt="Campus View">
                        <div class="content-overlay">
                            <div class="container">
                                <h1 class="section-title d-none d-lg-block" style="color: white;">Contact <span>Us</span></h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <h2 Class="tmu-text-primary d-block d-lg-none text-center mt-3 mb-2"><span>Contact </span><span> Us</span></h2>
            
        </div>


        <!-- Contact Info -->
        <section>

            <style>
                .contact-info .tmu-text-primary>span:nth-child(2){
                    color: #000;
                } 
                .content-overlay{
                    background: rgba(0, 0, 0, 0.5);
                }
                .contact-info{
                    margin-top: 0;
                    background-color: transparent;
                    padding:0px;
                }
                .carousel-item img{
                    max-height: 400px;
                    object-position: bottom;
                }

                .table-responsive table th,
    .table-responsive table td {
        max-width: 25vw;
        white-space: normal;
        word-wrap: break-word; 
    }


                @media (max-width: 767px) {
    /* Hide the first column (S.No) */
    .table-responsive table th:nth-child(1),
    .table-responsive table td:nth-child(1) {
        display: none;
    }
    .table-responsive th{
        vertical-align: middle;
        text-align: center;
    }

}
            </style>


<div class="container">
    <p class="mb-4 mt-lg-4">Before reaching out to Teerthanker Mahaveer University (TMU), we recommend checking our <strong><a href="https://www.tmu.ac.in/tmu/faq">Frequently Asked Questions (FAQ)</a></strong> page to see if your query has already been addressed. If your question is specific to a particular program, department, or faculty, please contact them directly for a quicker response.</p>

    

    

    <div class="contact-info m-0">
        <p><span class="fs-18 fw-bold">Univeristy Address: </span><span>N.H.-9, Delhi Road, Moradabad - 244001,
            Uttar Pradesh</span></p>
        <p><span class="fs-18 fw-bold">Admissions Contact Number: </span><span>1800-270-1490</span></p>
        <p><span class="fs-18 fw-bold">Admissions Email: </span><span>admissions@tmu.ac.in</span></p>
        </div>
</div>


            <div>
                

                <div class="gallery-header">
                    <h2 Class="tmu-text-primary mb-4 mt-5 text-center"><span>Contact </span><span>Information</span></h2>
                </div> 

                {{-- Contact Table  --}}
                <div class="table-responsive mx-2 mx-lg-5 px-lg-5">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Department / College</th>
                                <th>Email</th>
                                <th>Phone No.</th>
                                <th>Online Form</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Hospital</td>
                                <td>tmuhospital@tmu.ac.in</td>
                                <td>(+91) 95688-65444</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Alumni</td>
                                <td>alumni@tmu.ac.in</td>
                                <td>(+91) 591-2476806</td>
                                <td><a href="https://www.tmu.ac.in/alumni/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Library</td>
                                <td>university.librarian@tmu.ac.in</td>
                                <td>(+91) 99975 60099</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Research (For Phd)</td>
                                <td>asso.dean.phd@tmu.ac.in</td>
                                <td>0591-2476800 (Extension No - 3708)</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Research (For Patents, Research Paper, Publication, Journals, IPR, Financial Assistance for Research, Seed Money and Research Incentives)</td>
                                <td>associatedean.rd@tmu.ac.in</td>
                                <td>(+91) 96342-32666</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Campus Visit</td>
                                <td>admissions@tmu.ac.in</td>
                                <td>1800-270-1490</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Student Welfare</td>
                                <td>studentswelfare@tmu.ac.in</td>
                                <td>0591-2476800 (Extension No - 4015)</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Sports Management</td>
                                <td>principal.physicaleducation@tmu.ac.in</td>
                                <td>(+91) 9837469801</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Event Management</td>
                                <td></td>
                                <td></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Examination Department</td>
                                <td>coe@tmu.ac.in</td>
                                <td>(+91) 9837004522</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Placement Cell</td>
                                <td>sidharth.crc@tmu.ac.in</td>
                                <td>(+91) 7055317317</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Chancellor Office</td>
                                <td>secretary.chancellor@tmu.ac.in</td>
                                <td>0591-2476800 (Extension No - 3600)</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Vice Chancellor Office</td>
                                <td>vicechancelloroffice@tmu.ac.in</td>
                                <td>0591-2476800 (Extension No - 3600)</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Registrar Office</td>
                                <td>ro@tmu.ac.in</td>
                                <td>0591-2476800 (Extension No - 3605)</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Dean Academics Office</td>
                                <td>ado@tmu.ac.in</td>
                                <td>0591-2476800 (Extension No - 3607)</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Business Incubation Center</td>
                                <td>ado@tmu.ac.in</td>
                                <td>0591-2476800 (Extension No - 3607)</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Hostel Accommodation (Chief Warden Office)</td>
                                <td>dy.dir.hh@tmu.ac.in</td>
                                <td>(+91) 9837763888</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Outreach & Extension Activities</td>
                                <td>studentswelfare@tmu.ac.in</td>
                                <td>0591-2476800 (Extension No - 4015 / 4016)</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>IQAC</td>
                                <td>director.iqac@tmu.ac.in</td>
                                <td>(+91) 591-2476813, (+91) 9997501313</td>
                                <td><a href="https://www.tmu.ac.in/tmu/iqac-cell/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Teerthanker Mahaveer Medical College and Research Centre</td>
                                <td>principal.medical@tmu.ac.in</td>
                                <td>(+91) 591-2476815</td>
                                <td><a href="https://www.tmu.ac.in/medical-college-and-research-centre/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Teerthanker Mahaveer Dental College & Research Centre</td>
                                <td>principal.dental@tmu.ac.in</td>
                                <td>(+91) 591-2476823</td>
                                <td><a href="https://www.tmu.ac.in/dental-college-and-research-centre/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Teerthanker Mahaveer College of Nursing</td>
                                <td>principal.nursing@tmu.ac.in</td>
                                <td>(+91) 591-2476844</td>
                                <td><a href="https://www.tmu.ac.in/college-of-nursing/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Teerthanker Mahaveer College of Pharmacy</td>
                                <td>principal.pharmacy@tmu.ac.in</td>
                                <td>(+91) 591-2476825</td>
                                <td><a href="https://www.tmu.ac.in/college-of-pharmacy/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Teerthanker Mahaveer University College of Paramedical Sciences</td>
                                <td>principal.paramedical@tmu.ac.in</td>
                                <td>(+91) 591-2476847</td>
                                <td><a href="https://www.tmu.ac.in/college-of-paramedical-sciences/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Department of Physiotherapy</td>
                                <td>principal.physiotherapy@tmu.ac.in</td>
                                <td>(+91) 591-2476812</td>
                                <td><a href="https://www.tmu.ac.in/department-of-physiotherapy/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>TMIMT College of Management</td>
                                <td>principal.management@tmu.ac.in</td>
                                <td>(+91) 591-2476847</td>
                                <td><a href="https://www.tmu.ac.in/tmimt-college-of-management/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Teerthanker Mahaveer College of Law & Legal Studies</td>
                                <td>principal.law@tmu.ac.in</td>
                                <td>(+91) 9568118000, (+91) 9568119000</td>
                                <td><a href="https://www.tmu.ac.in/college-of-law-and-legal-studies/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>College of Computing Sciences & IT</td>
                                <td>dean.engineering@tmu.ac.in</td>
                                <td>(+91) 591-2476832, 9568516000, 9568517000, 7351418000</td>
                                <td><a href="https://www.tmu.ac.in/college-of-computing-sciences-and-it/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Teerthanker Mahaveer University College of Engineering</td>
                                <td>dean.engineering@tmu.ac.in</td>
                                <td>(+91) 591-2476832, 9568516000, 9568517000, 7351418000</td>
                                <td><a href="https://www.tmu.ac.in/faculty-of-engineering/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>College of Fine Arts</td>
                                <td>principal.finearts@tmu.ac.in</td>
                                <td>(+91) 591-2476836</td>
                                <td><a href="https://www.tmu.ac.in/college-of-fine-arts/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Faculty of Education</td>
                                <td>principal.education@tmu.ac.in</td>
                                <td>(+91) 9568717000, (+91) 9568418000</td>
                                <td><a href="https://www.tmu.ac.in/faculty-of-education/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>TMIMT College of Physical Education</td>
                                <td>principal.physicaleducation@tmu.ac.in</td>
                                <td>(+91) 9837469801</td>
                                <td><a href="https://www.tmu.ac.in/tmimt-college-of-physical-education/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Teerthanker Mahaveer College of Agriculture Sciences</td>
                                <td>principal.agriculture@tmu.ac.in</td>
                                <td>(+91) 591-2476831</td>
                                <td><a href="https://www.tmu.ac.in/college-of-agriculture-sciences/contact-us">Link</a></td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>IQAC</td>
                                <td>director.iqac@tmu.ac.in</td>
                                <td>(+91) 591-2476813, (+91) 9997501313</td>
                                <td><a href="https://www.tmu.ac.in/tmu/iqac-cell/contact-us">Link</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <div class="lightbox">
            <span class="lightbox-close">&times;</span>
            <button class="lightbox-prev">&lt;</button>
            <img src="" alt="Enlarged Image">
            <div class="lightbox-caption"></div>
            <button class="lightbox-next">&gt;</button>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');
        const lightbox = document.querySelector('.lightbox');
        const lightboxImg = lightbox.querySelector('img');
        const lightboxClose = document.querySelector('.lightbox-close');
        const lightboxNext = document.querySelector('.lightbox-next');
        const lightboxPrev = document.querySelector('.lightbox-prev');
        const lightboxCaption = document.querySelector('.lightbox-caption');

        let currentIndex = 0;

        // Filtering functionality
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const filter = button.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Lightbox functionality
        galleryItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                const imgSrc = item.querySelector('img').src;
                const imgTitle = item.querySelector('.gallery-item-title').textContent; // Get the image title
                currentIndex = index;

                lightboxImg.src = imgSrc;
                lightboxCaption.textContent = imgTitle; // Set the title in the caption
                lightbox.classList.add('active');
            });
        });

        lightboxClose.addEventListener('click', () => {
            lightbox.classList.remove('active');
        });

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                lightbox.classList.remove('active');
            }
        });

        // Lightbox navigation
        const updateLightboxImage = () => {
            const visibleItems = Array.from(galleryItems).filter(item => item.style.display !== 'none');
            if (visibleItems.length > 0) {
                currentIndex = (currentIndex + visibleItems.length) % visibleItems.length; // Wrap around
                const imgSrc = visibleItems[currentIndex].querySelector('img').src;
                const imgTitle = visibleItems[currentIndex].querySelector('.gallery-item-title').textContent;

                lightboxImg.src = imgSrc;
                lightboxCaption.textContent = imgTitle; // Update caption when navigating
            }
        };

        lightboxNext.addEventListener('click', () => {
            currentIndex++;
            updateLightboxImage();
        });

        lightboxPrev.addEventListener('click', () => {
            currentIndex--;
            updateLightboxImage();
        });
    });
</script>
@endsection