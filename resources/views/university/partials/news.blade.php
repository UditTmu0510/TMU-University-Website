<section id="content" class="lazy-load-section" data-loaded="false">
    <div class="content-wrap">
        <div class="container" style="margin-bottom: 10px;">


            <div class="row justify-content-center ">
                <div class="col-xl-10 col-lg-10 text-center">
                    <h2 class="tmu-text-primary my-4 mb-5"><span>TMU </span> <span>HIGHLIGHTS</span></h2>
                </div>
            </div>
            <div class="row col-mb-37">
                <main class="postcontent col-lg-8 col-md-12">
                    <div class="row g-4">


                        <div class=" mb-0 entry col-lg-12 col-md-12">
                            <div class="owl-carousel" id="owl-carousel2">


                                @foreach ($news as $event)
                                <div class="item">

                                    <div class="grid-inner shadow-sm card newsheight" style="height: 300px;">
                                        <a href="{{ url('news/' . $event->n_slug) }}" target="_blank">
                                            <div class="entry-image mb-0">
                                                <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                                    <div class="flexslider">
                                                        <div class="slider-wrap">
                                                            <div class="slide" style="background: url('{{ $event->monaco_image_path }}') no-repeat center bottom; background-size: cover; height: 200px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>


                                        <div class="p-2">
                                            <div class="entry-title">
                                                <a href="{{'news/'.$event->n_slug}}" target="_blank" style="font-size: 18px; font-weight: 500; ">{{ Str::limit($event->event_title, 70) }}</a>
                                            </div>
                                            <div class="entry-meta pt-2">
                                                <ul>
                                                    <li><i class="uil uil-schedule"></i> {{$event->event_date}}</li>
                                                    <li><a href="{{'news/'.$event->n_slug}}" target="_blank">Read More</a></li>
                                                    {{-- <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 13</a></li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach





                            </div>
                        </div>
                    </div>

                    <!-- Blog Carousel Starts Here -->

                    <div class="row g-4 mb-0 d-none d-sm-block mt-4 ">

                        <div class="owl-carousel" id="owl-carousel3">
                            @foreach($activeBlogs as $blog)
                            <div class="item">
                                <article class="mb-0 entry event col-12">
                                    <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
                                        <div class="col-md-5 mb-md-0">
                                            <a href="{{ url('blog/' . $blog->n_slug) }}" class="entry-image mb-0 h-100">
                                                <img src="{{ asset($blog->monaco_image_path) }}" alt="{{ $blog->post_title }}" class="rounded-2 w-100 object-cover" loading="lazy">
                                                <div class="bg-overlay">
                                                    <div class="bg-overlay-content justify-content-start align-items-start">
                                                        <div class="badge bg-light text-dark rounded-pill">Latest Blog</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-7 p-4 pt-0 pb-0">
                                            <div class="entry-meta no-separator mb-1 mt-0">
                                                <ul>
                                                    <li><a href="#" class="text-uppercase fw-medium">{{ $blog->formatted_date }}</a></li>
                                                </ul>
                                            </div>

                                            <div class="entry-title nott">
                                                <a href="{{ url('blog/' . $blog->n_slug) }}" style="font-size: 18px; font-weight: 500;">{{ Str::limit($blog->post_title, 70) }}</a>
                                            </div>

                                            <div class="entry-content my-3">
                                                <p style="font-size: 14px;">{{ Str::limit($blog->post_description, 90) }}</p>
                                            </div>
                                            <div class="entry-meta no-separator">
                                                <ul>
                                                    <li><a href="#" class="fw-normal"><i class="uil uil-map-marker"></i>
                                                            TMU,
                                                            Moradabad</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach


                        </div>
                    </div>
                    <!-- 
														Blog Carousel Starts Here
														-->



                </main>


                <aside class="sidebar col-md-12 d-block d-sm-none" style="margin-bottom: 35px;">
                    <div class="sidebar-widgets-wrap bg-white rounded-5 p-4 shadow-sm">

                        <div class="widget">

                            <h4>Latest Blogs</h4>
                            <hr>
                            <div class="posts-sm row col-mb-30" id="post-list-sidebar" style="margin-top: -0.25rem;">

                                @foreach($activeBlogs as $blog)
                                <div class="entry col-12">
                                    <div class="grid-inner row g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="{{ url('blog/' . $blog->n_slug) }}"><img src="{{ asset($blog->monaco_image_path) }}" alt="Image" loading="lazy"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4><a href="{{ url('blog/' . $blog->n_slug) }}">{{$blog->post_title}}</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>{{ $blog->formatted_date }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </aside>

                <aside class="sidebar col-lg-4 col-md-12">
                    <div class="notice-board">
                        <div class="notice-header">NOTICE BOARD</div>
                        <div class="notice-body">

                            <div class="notice">
                                <div class="notice-pub">
                                    <span>20, October</span>
                                </div>
                                <div class="notice-content">
                                    <p>The Alumni Relations Cell is organising a session on 'Future Investment Insights: Grow Your Wealth Wisely,' featuring esteemed alumni and industry experts. All faculty members and students of CCSIT and FoE are invited to attend.</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                        CCSIT</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 22, October</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>17, October</span>
                                </div>
                                <div class="notice-content">
                                    <p>CCSIT is organising IEEE Day TechnoFest 2k24, a 3-day event featuring expert sessions & competitions. Students from all disciplines are invited to participate and learn various technical and professional skills.</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                        CCSIT</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 19 to 22, October</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>09, September</span>
                                </div>
                                <div class="notice-content">
                                    <p>CCSIT is organising a fest to celebrate Navratri. All faculty and staff members are cordially invited to attend the event.</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                        CCSIT</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 11, October</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>08, October</span>
                                </div>
                                <div class="notice-content">
                                    <p>CCSIT is organising a Poster/Animation Competition to celebrate 'Colours of Vijayadashami'. All CCSIT students and members are invited to participate.</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                        CCSIT </span>
                                    <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 10, October</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>03, October</span>
                                </div>
                                <div class="notice-content">
                                    <p>CCSIT is organising a Drawing Competition with the theme 'Anime Character.' All CCSIT students are invited to participate and win exciting prizes. For any queries, contact 9410253656.</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                        CCSIT</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 05, October</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>20, September</span>
                                </div>
                                <div class="notice-content">
                                    <p>IQAC, FOE is organising an Information Session on GATE & JAM Exams for Masters, in collaboration with IIT Roorkee, featuring Prof. Ankik Kumar Giri, Dept. of Mathematics, IIT Roorkee. All 3rd & final-year B.Tech/B.Sc students are invited.</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                        CCSIT</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 20, September</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>20, September</span>
                                </div>
                                <div class="notice-content">
                                    <p>The Department of BCA and MCA, CCSIT is organising an online guest lecture on 'Digital Marketing & Social Media Strategies' by Mr Vikas Nain, Co-Founder of The Triad and Assistant Professor of Digital Marketing at PIET.</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                        CCSIT</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 20, September</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>15, September</span>
                                </div>
                                <div class="notice-content">
                                    <a href="https://www.youtube.com/live/oIbTICMMljY?si=2q6wM_GInealA63g">
                                        <p>Sri Sri Ravi Shankar is Live from Teerthanker Mahaveer University. Watch the live event.</p>
                                    </a>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                        TMU Campus</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 16, September</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>12, September</span>
                                </div>
                                <div class="notice-content">
                                    <p>CCSIT is organising a Mentorship-Mentee Programme in various skills, featuring Master Classes under the banner of the IEEE Student Branch, to promote IEEE awareness and skill development among students.</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px" loading="lazy">
                                        CCSIT</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 13 to 17, September</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>14, September</span>
                                </div>
                                <div class="notice-content">
                                    <p>Teerthanker Mahaveer University is honoured to host Gurudev Sri Sri Ravi Shankar for a transformative Youth Meet in association with The Art of Living. Contact for more information: +91 9259 33 7831.</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                        TMU Campus </span>
                                    <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 16,
                                        September </span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>29, August</span>
                                </div>
                                <div class="notice-content">
                                    <p>The Department of Forensic Science is organising a guest lecture on 'Innovation in Crime Scene Investigation and Future Prospects of Forensic Science' by Dr Harsh Sharma, Retd. Director, State Forensic Science Laboratory, MP.</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                        Paramedical College</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 29, August</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>14, August</span>
                                </div>
                                <div class="notice-content">
                                    <p>TMU's NSS Unit is organising the 3rd Tiranga Yatra at 01:30 pm to celebrate India's 78th Independence Day. All students, teaching and non-teaching staff are requested to participate and make the event memorable.</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                        TMU Campus</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 14, August</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>14, August</span>
                                </div>
                                <div class="notice-content">
                                    <p>The Department of Physiotherapy is organising an event titled 'AI & Independence Extravaganza,' featuring Mr Shivam Kashyap, a Soft Skill Trainer, as the speaker.</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                        Dept. of Physiotherapy </span>
                                    <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 14, August</span>
                                </div>
                            </div>
                            <hr class="notice-separator">
                            <div class="notice">
                                <div class="notice-pub">
                                    <span>08, August</span>
                                </div>
                                <div class="notice-content">
                                    <p>The Free Thinkers Club, Department of Humanities, is organising a Speech Competition and Poem Recitation on the occasion of Independence Day. Register by 8th August. Contact us for more details.</p>
                                </div>
                                <div class="notice-meta">
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                        CCSIT Campus</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 10, August</span>
                                </div>
                            </div>
                            <hr class="notice-separator">

                        </div>
                    </div>
                </aside>



            </div>
            <!-- 
												Side Menu Code Ends Here
											 -->


        </div>
    </div>
</section><!-- #content end -->