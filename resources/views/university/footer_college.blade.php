<script>
    document.addEventListener('DOMContentLoaded', () => {
        const searchIcon = document.getElementById('searchIcon');
        const searchModal = document.getElementById('searchModal');
        const closeModal = document.getElementById('closeModal');
        const searchInput = document.getElementById('searchInput');
        const suggestions = document.getElementById('suggestions');

        searchIcon.addEventListener('click', () => {
            searchModal.style.display = 'block';
            searchInput.focus();
        });

        closeModal.addEventListener('click', () => {
            searchModal.style.display = 'none';
        });

        window.addEventListener('click', (event) => {
            if (event.target == searchModal) {
                searchModal.style.display = 'none';
            }
        });




    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var activePanel = document.querySelector('.panel.active');
        if (activePanel) {
            var activeAccordion = activePanel.previousElementSibling;
            activePanel.style.display = "block";
            activeAccordion.querySelector(".icon").innerHTML = "-";
            activeAccordion.classList.add("clicked");
        }
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        let searchRequest = null; // Store the current AJAX request

        $('#searchInput').on('keyup', function() {
            let query = $(this).val();
            console.log(query);

            let suggestions = $('#suggestions');
            suggestions.empty(); // Clear suggestions immediately

            // If query length is 0, stop further processing
            if (query.length === 0) {
                suggestions.empty(); // Clear results
                return;
            }

            // Abort previous request if it's still in progress
            if (searchRequest !== null) {
                searchRequest.abort();
            }

            if (query.length > 2) {
                searchRequest = $.ajax({
                    url: '{{ route("search") }}',
                    type: 'post',
                    data: {
                        _token: '{{ csrf_token() }}',
                        query: query
                    },
                    dataType: 'json',
                    success: function(response) {
                        // Check if input value still matches query before showing results
                        if ($('#searchInput').val() !== query) {
                            return;
                        }

                        if (response.error) {
                            console.error('Search Error:', response.error);
                        } else {
                            $.each(response, function(index, data) {
                                let url = 'https://tmuhospital.com/';
                                let final_slug;
                                let slug1 = data.slug1;
                                let slug2 = data.slug2;
                                let slug3 = data.slug3;
                                let slug4 = data.slug4;
                                let slug5 = data.slug5;

                                function isValidSlug(slug) {
                                    return slug !== undefined && slug !== null && slug !== '' && slug !== 'na';
                                }

                                if (isValidSlug(slug1) && !isValidSlug(slug2)) {
                                    final_slug = `${url}${slug1}`;
                                } else if (isValidSlug(slug1) && isValidSlug(slug2) && !isValidSlug(slug3)) {
                                    final_slug = `${url}${slug1}/${slug2}`;
                                } else if (isValidSlug(slug1) && isValidSlug(slug2) && isValidSlug(slug3) && !isValidSlug(slug4)) {
                                    final_slug = `${url}${slug1}/${slug2}/${slug3}`;
                                } else if (isValidSlug(slug1) && isValidSlug(slug2) && isValidSlug(slug3) && isValidSlug(slug4) && !isValidSlug(slug5)) {
                                    final_slug = `${url}${slug1}/${slug2}/${slug3}/${slug4}`;
                                }

                                if (final_slug) {
                                    if ($.trim(data.disp_attribute_1) !== '' && $.trim(data.disp_attribute_2) !== '') {
                                        suggestions.append(`<a href="${final_slug}"><div style="font-weight:600">${data.disp_attribute_1}<br><span style="font-size:12px;font-weight:400">${data.disp_attribute_2}</span></div></a>`);
                                    }
                                }
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        if (status !== 'abort') {
                            console.error('AJAX Error:', error);
                        }
                    }
                });
            }
        });
    });
</script>

{{-- <a href="javascript:void(0);" onclick="loadUserWayScript()" id="userway-widget786">
    <div class="sticky-widget786">
        <div class="widget-content786">
            <img src="https://cdn.userway.org/widgetapp/images/wheel_right_bl.svg" width="43" height="43" alt="Widget Image">
        </div>
    </div>
</a> --}}

<a href="https://api.whatsapp.com/send/?phone=919258112544&text&type=phone_number&app_absent=0" target="_blank">
    <div class="sticky-wtsap">
        <div class="widget-content786">
            <img src="assets/img/icons/wtsapp.png" width="38" height="38" alt="Widget Image">
        </div>
    </div>
</a>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentUrl = window.location.pathname;

        // Regular expression to match /blog or /blog/anything
        var blogPattern = /^\/blog(\/.*)?$/;

        if (!blogPattern.test(currentUrl)) {
            // Load the widget only if the condition is not met
            var widget = document.createElement("a");
            widget.href = "javascript:void(0);";
            widget.onclick = loadNiaScript;
            widget.id = "nia-widget786";
            widget.innerHTML = `
        <div class="sticky-nia-widget786">
          <div class="nia-widget-content786">
            <img class="ticky-nia-widget786s" src="https://chatcdn.npfs.co/static/backend/img/niaa.png" width="43" height="43" alt="Widget Image">
          </div>
        </div>
      `;
            document.body.appendChild(widget);
        }
    });

    function loadNiaScript() {
        console.log("Widget clicked! Load your script here.");
    }
</script>

<div class="npf_chatbots" data-w="682ca82a0e534a72adfabb52a87dfac8" style="display:none;"></div>


<footer id="footer" class="dark" style="background-color: #001055;margin-top:0 !important;">
    <div class="container">
        <!-- Footer Widgets
										============================================= -->
        <div class="footer-widgets-wrap">

            <div class="row col-mb-50">
                <div class="col-md-12">
                    <div class="widget">

                        <!-- <img src="https://www.smart2020.tmu.ac.in/image/tmu-logo.png" alt="Image" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A; height: 120px;">
						
														<p>Teerthanker Mahaveer University, the Best Private University in UP, established by an 'Act' (No. 30) of 2008 of the Government of Uttar Pradesh, approved by the University Grants Commission (UGC) in 2008, vide letter No. F. 9-31/2008 (CPP-1) dated October 2008. <br> On National Highway 9, 144 Km from New Delhi, TMU stands committed to the ideals of Lord Mahaveer - Right Philosophy, Right Knowledge and Right Conduct in all spheres of activity and aspires to be the ultimate destination for world-class education.</p> -->

                        <div class="line" style="margin: 30px 0;"></div>

                        <div class="row col-mb-30">


                            <div class="col-lg-4 widget_links">
                                <div class="widget">

                                    <img style="width: 40%;" alt="Teerthanker mahaveer university logo with name" class="img-fluid" src="{{asset('images/logo/logo-footer.png')}}" loading="lazy">


                                    <!-- <div style="background: url('') no-repeat center center; background-size: 100%;">
																		<address>
																			<strong>Delhi Office</strong>
																		</address>
																		<abbr title="Address"><strong>Address:</strong></abbr> 1004-1005-1006, 10th Floor, <br> Mercantile House, <br> 15 Kasturba Gandhi Marg, <br> New Delhi-110001<br>
																		<abbr title="contactus"><strong>Contact Us:</strong></abbr> 1800-270-1490<br>
																		<abbr title="Email Address"><strong>Email:</strong></abbr> admissions@tmu.ac.in
																	</div> -->
                                    <br>
                                    <div style="margin-top:30px;">
                                        <address>
                                            <strong style="font-weight: 300;">TMU is committed to the ideals of Lord Mahaveer "Right Philosophy, Right Knowledge, and Right Conduct" in all spheres of activity and aspires to be the ultimate destination for world-class education.</strong>

                                        </address>
                                        <p style="margin-bottom: 0px;"><strong
                                                style="font-size: 16px; font-weight: 600; color:#FF7900;">Address:
                                            </strong> N.H.-9, Delhi
                                            Road, Moradabad - 244001, <br> Uttar Pradesh</p>

                                        <p style="margin-bottom: 0px;"><strong
                                                style="font-size: 16px; font-weight: 600; color:#FF7900;">Email:
                                            </strong></abbr>
                                            university@tmu.ac.in</p>

                                        <p style="margin-bottom: 0px;"><strong
                                                style="font-size: 16px; font-weight: 600; color:#FF7900;">Admissions Contact Number:
                                            </strong></abbr>
                                            1800-270-1490</p>

                                        <p style="margin-bottom: 0px;"><strong
                                                style="font-size: 16px; font-weight: 600; color:#FF7900;">Admissions Email:
                                            </strong></abbr>
                                            admissions@tmu.ac.in
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 widget_links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><a href="{{route('tmu.convocation')}}" target="_blank">Convocation</a></li>

                                    <li><a href="{{route('all_news')}}" target="_blank">News</a></li>
                                    <li><a href="{{route('tmu.careers')}}" target="_blank">Join TMU</a></li> <!--- CAREERS -->
                                    <!-- <li><a href="#">About City</a></li> -->
                                    <li><a href="{{route('iqac.about')}}" target="_blank">IQAC</a></li>
                                    <li><a href="https://incubator.tmu.ac.in" target="_blank">Business Incubation Centre</a></li>
                                    <li><a href="http://portal.tmu.ac.in/" target="_blank">ERP Login</a></li>
                                    <li><a href="{{route('all_blogs')}}" target="_blank">Blogs</a></li>
                                    <!-- <li><a href="#">Sitemap</a></li> -->
                                    <li><a href="{{route('iqac.student.feedback')}}" target="_blank">Feedback</a></li>
                                    <li><a href="{{route('teaching.facility')}}" target="_blank">Teaching Facility</a></li>

                                </ul>
                            </div>

                            <div class="col-6 col-lg-2 widget_links">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="{{route('application.form')}}" target="_blank">Application Form</a></li>
                                    <!--<li><a href="#">Entrance Test</a></li>-->
                                    <li><a href="{{route('tmu.loan')}}" target="_blank">Education Loan</a></li>
                                    <li><a href="{{route('tmu.scholarship')}}" target="_blank">Scholarships</a></li>
                                    <li><a href="{{route('how.to.apply')}}" target="_blank">How to Apply</a></li>
                                    <li><a href="{{route('tmu.privacy.policy')}}" target="_blank">Privacy Policy</a></li>
                                    <li><a href="{{route('campus.view')}}" target="_blank">Campus View</a></li>
                                    <li><a href="{{route('tmu.faqs')}}" target="_blank">FAQs</a></li>

                                </ul>
                            </div>

                            <!--<div class="col-6 col-lg-2 widget_links">-->
                            <!--	<h4>Programmes</h4>-->
                            <!--	<ul>-->
                            <!--		<li><a href="#">Under Graduate</a></li>-->
                            <!--		<li><a href="#">Post Graduate</a></li>-->
                            <!--		<li><a href="#">Doctratre Programs</a></li>-->
                            <!--		<li><a href="#">Diploma Programs</a></li>-->
                            <!--	</ul>-->
                            <!--</div>-->

                            <div class="col-6 col-lg-2 widget_links">
                                <h4>Campus Facilities</h4>
                                <ul>

                                    <li><a href="{{route('faculty.accomodation')}}" target="_blank">Faculty Accommodation</a></li>
                                    <li><a href="{{route('guest.house')}}" target="_blank">Guest House</a></li>
                                    <li><a href="{{route('banking.facility')}}" target="_blank">Banking Facility</a></li>
                                    <li><a href="{{route('tmu.hospital')}}" target="_blank">Hospital</a></li>
                                    <li><a href="{{route('sports')}}" target="_blank">Sports</a></li>
                                    <li><a href="{{route('auditorium')}}" target="_blank">Auditorium</a></li>
                                    <li><a href="{{route('tmu.hostel')}}" target="_blank">Hostel</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-lg-2 widget_links">
                                <h4>Student Life</h4>
                                <ul>
                                    <li><a href="{{route('auditorium')}}" target="_blank">Auditorium</a></li>
                                    <li><a href="{{route('jinalaya')}}" target="_blank">Mahaveer Ji Jinalaya</a></li>
                                    <li><a href="{{route('yoga.and.meditation')}}" target="_blank">Yoga and Meditation</a></li>
                                    <li><a href="{{route('sports')}}" target="_blank">Sports</a></li>
                                    <li><a href="{{route('library')}}" target="_blank">Library</a></li>
                                    <li><a href="{{route('music.and.dance.room')}}" target="_blank">Music and Dance</a></li>
                                    <li><a href="{{route('tmu.transport')}}" target="_blank">Transport</a></li>
                                    <li><a href="{{route('gym')}}" target="_blank">GYM</a></li>

                                </ul>
                            </div>


                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget">

                        <div class="row col-mb-30">

                        </div>

                    </div>


                </div>
            </div><!-- .footer-widgets-wrap end -->
        </div>

    </div>
    <!-- Copyrights
									============================================= -->
    <div id="copyrights">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-12 col-lg-auto text-center text-lg-start">
                    <div class="copyrights-menu copyright-links">
                        <a href="{{route('university.anti.ragging.committee')}}" target="_blank">Anti-Ragging</a>/<a href="{{route('nirf.home')}}" target="_blank">NIRF</a>/<a href="{{route('naac.home')}}" target="_blank">NAAC</a>/<a href="{{route('ctld.home')}}" target="_blank">CTLD</a>/<a href="{{route('crc.home')}}" target="_blank">Placement</a>/<a href="{{route('iqac.about')}}" target="_blank">IQAC</a>/<a href="{{route('tmu.disclaimer')}}" target="_blank">Disclaimer</a>
                    </div>
                    Copyrights &copy; 2025 All Rights Reserved by Teerthanker Mahaveer University, Moradabad.
                </div>

                <div class="col-md-6 text-center text-md-end pb-5 pb-md-2 mb-5 mb-md-0">
                    <div class="d-flex justify-content-center justify-content-md-end mb-2">
                        <a target="_blank" href="https://www.facebook.com/tmumbd/" class="social-icon border-transparent si-small h-bg-facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>



                        <a target="_blank" href="https://x.com/Tmumbd" class="social-icon border-transparent si-small h-bg-twitter">
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-twitter"></i>
                        </a>

                        <a target="_blank" href="https://www.linkedin.com/school/tmuuni/" class="social-icon border-transparent si-small me-0 h-bg-linkedin">
                            <i class="fa-brands fa-linkedin"></i>
                            <i class="fa-brands fa-linkedin"></i>
                        </a>



                        <a target="_blank" href="https://www.youtube.com/channel/UCSdJPj_8DCXkGY6SOmo_0ow" class="social-icon border-transparent si-small me-0 h-bg-youtube">
                            <i class="fa-brands fa-youtube"></i>
                            <i class="fa-brands fa-youtube"></i>
                        </a>

                        <a target="_blank" href="https://www.instagram.com/tmu.updates/"
                            class="social-icon border-transparent si-small me-0 h-bg-youtube">
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- #copyrights end -->
</footer><!-- #footer end -->





</div><!-- #wrapper end -->

<!-- Go To Top============================================= -->
<div id="gotoTop" class="uil uil-angle-up"></div>





<!-- JavaScripts
							============================================= -->


<script src="{{asset('js/functions.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/swipe-content.js')}}"></script>
<script src="{{asset('assets/js/util.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/swiper@8.4.7/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
{{-- <script src="{{asset('assets/js/owl_slider.js')}}"></script> --}}
<script src="{{asset('js/components/bs-datatable.js')}}"></script>

<script src="{{asset('assets/js/college_menubar.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var activePanel = document.querySelector('.panel.active');
        if (activePanel) {
            var activeAccordion = activePanel.previousElementSibling;
            activePanel.style.display = "block";
            activeAccordion.querySelector(".icon").innerHTML = "-";
            activeAccordion.classList.add("clicked");
        }
    });

    // 


    const reviews = [{
            name: "Speaks about College of Computing Sciences & IT",
            text: "TMU, as a University is the cornerstone of my success as a Technical Architect. The transformative education equipped me with vital skills and mentorship from faculty. Practical learning and industry exposure provided confidence to excel in my profession. Grateful for TMU's profound impact on my career journey.",
            img: "{{asset('/assets/img/department/alumni/people/2.png')}}",
            profile: {
                img: "{{asset('/assets/img/department/alumni/people/1.png')}}",
                name: "Rajeev Mishra",
                link: "https://www.linkedin.com/in/rajeevmishra20/",
                designation: "Technology Architect",
                company: "Bearing Point, Germany",
                course: "B.Tech CSE",
                graduationYear: "2014",
            },
        },
        {
            name: "Speaks about TMIMT College of Management",
            text: "Teerthanker Mahaveer University (TMU) played a vital role in my success as Head of Saudi German Hospitals Group in Dubai. The transformative MBA experience provided essential skills and support from faculty mentors. Practical learning and industry exposure instilled confidence for leadership, and I am forever grateful for TMU's impact on my career.",
            img: "{{asset('/assets/img/department/alumni/people/1.png')}}",
            profile: {
                img: "{{asset('/assets/img/department/alumni/people/2.png')}}",
                name: "Shobhit Jain",
                link: "https://www.linkedin.com/in/shobhit-jain-49197ba0",
                designation: "Group Director - Talent Acquisition",
                company: "Saudi German Hospitals Group",
                course: "MBA",
                graduationYear: "2011",
            },
        },
        {
            name: "Speaks about Medical College & Research Centre",
            text: "TMU, Medical College & Research Centre has been the bedrock of my success as an MBBS doctor. The comprehensive medical education and mentorship from faculty have honed my skills and knowledge. With practical training and industry exposure, TMU empowered me to make a meaningful impact in healthcare. Forever grateful to TMU.",
            img: "{{asset('/assets/img/department/alumni/people/3.png')}}",
            profile: {
                img: "{{asset('/assets/img/department/alumni/people/3.png')}}",
                name: "Radhika Mathur",
                designation: "Resident Physician",
                company: "HCA Florida Oak Hill Hospital",
                course: "MBBS",
                graduationYear: "2019",
            },
        },
        {
            name: "Speaks about Engineering College",
            text: "I am deeply grateful to TMU for laying the foundation of my academic and professional journey. Graduating with a Master of Computer Applications in 2005 as a First Division Honors topper, I can confidently say that the education and mentorship I received at TMU were pivotal in shaping my career. The institute’s strong curriculum and emphasis on practical learning equipped me with the skills necessary to excel in the technology field. Today, as a Senior Software Architect at HCL Software in Noida, I often reflect on the solid foundation and critical thinking skills I developed at TMU. The institute will always hold a special place in my heart, and I am proud to be an alumnus of such a distinguished institution. ",
            img: "{{asset('/assets/img/department/alumni/people/4.png')}}",
            profile: {
                img: "{{asset('/assets/img/department/alumni/people/4.png')}}",
                name: "Ashish Bhatnagar",
                link: "https://www.linkedin.com/in/abhatnagar83",
                designation: "Senior Software Architect",
                company: "HCL Software, Noida",
                course: "MCA",
                graduationYear: "2005",
            },
        },
        {
            name: "Speaks about Dental College & Research Centre",
            text: "I am incredibly thankful to TMU for playing a pivotal role in shaping my journey as a dental professional. Pursuing my Master’s in Conservative Dentistry and Endodontics at this renowned university in 2016 was a transformative experience that equipped me with the expertise and confidence to excel in my field. Today, as the proprietor of Khoriya Multispeciality Dental Clinic and a consultant Endodontist in multiple districts, I reflect on how the knowledge and values imparted by TMU have been instrumental in my achievements. I am proud to be an alumnus of such a prestigious university that encourages students to innovate, lead and transform.",
            img: "{{asset('/assets/img/department/alumni/people/8.jpg')}}",
            profile: {
                img: "{{asset('/assets/img/department/alumni/people/8.jpg')}}",
                name: "Dr. Sarvesh S. Khoriya",
                link: "#",
                designation: "Dentist (Owner)",
                company: "Khoriya Multispecialty Dental Clinic, Pune, Maharashtra",
                course: "MDS",
                graduationYear: "2016",
            },
        },
        {
            name: "Speaks about Dental College & Research Centre",
            text: "TMU has been a cornerstone in my academic and professional journey. The years I spent pursuing my BDS and MDS at this esteemed university were marked by the best learning experiences and growth. From the exceptional faculty to the modern curriculum and constant encouragement from the management, every aspect contributed to my success. As the owner of multiple successful clinics and the founder of several organisations, I often reflect on my time at TMU with great gratitude. The university not only equipped me with the technical skills and knowledge needed to excel but also instilled in me the confidence to dream big and achieve even bigger.",
            img: "{{asset('/assets/img/department/alumni/people/7.png')}}",
            profile: {
                img: "{{asset('/assets/img/department/alumni/people/7.png')}}",
                name: "Dr. Swapnil Sunil Bumb",
                link: "#",
                designation: "Associate Professor",
                company: "Mithila Minority Dental College and Hospital, Darbanga, Bihar",
                course: "MDS",
                graduationYear: "2016",
            },
        },
    ];

    let currentReviewIndex = 0;

    function showReview(index) {
        const review = reviews[index];
        document.querySelector('.testimonial-title').innerText = review.name;
        document.querySelector('.review-text').innerText = review.text;
        document.getElementById('profile-picture').src = review.profile.img;
        document.getElementById('profile-name').innerText = review.profile.name;
        // document.getElementById('profile-link').href = review.profile.link;
        document.getElementById('profile-designation').innerText = review.profile.designation;
        document.getElementById('profile-company').innerText = review.profile.company;
        document.getElementById('profile-course').innerText = review.profile.course;
        document.getElementById('profile-graduationYear').innerText = review.profile.graduationYear;

        document.querySelectorAll('.thumb').forEach((thumb, i) => {
            thumb.classList.toggle('active-thumb', i === index);
        });
    }

    function showNextReview() {
        currentReviewIndex = (currentReviewIndex + 1) % reviews.length;
        showReview(currentReviewIndex);
    }

    function showPreviousReview() {
        currentReviewIndex = (currentReviewIndex - 1 + reviews.length) % reviews.length;
        showReview(currentReviewIndex);
    }

    function displayReviewByIndex(index) {
        currentReviewIndex = index;
        showReview(currentReviewIndex);
    }

    showReview(currentReviewIndex);

    // Alumni profile section in alumni page end
</script>

<script>
    function loadNiaScript() {
        // Create the script element
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.defer = true;
        s.src = "https://chatbot.in1.nopaperforms.com/en-gb/backend/bots/niaachtbtscpt.js/4305f35478c52f37/682ca82a0e534a72adfabb52a87dfac8";

        // Add an event listener to hide the widget when the script is loaded
        s.onload = function() {
            var niawidget = document.getElementById("nia-widget786");
            var chatbotsDiv = document.querySelector(".npf_chatbots");

            if (niawidget) {
                niawidget.style.display = "none";
            }

            // Show the chatbots div if it exists
            if (chatbotsDiv) {
                chatbotsDiv.style.display = "block"; // Change to "block" or "inline" as needed
            }
        };

        // Append the script element to the body
        document.body.appendChild(s);
    }
</script>

<!--user way js start-->
<script>
    function loadUserWayScript() {
        var script = document.createElement("script");
        script.async = true;
        script.setAttribute("data-color", "#ff8c00");
        script.setAttribute("data-type", "2");
        script.setAttribute("data-account", "pa7EJzaXR1");
        script.setAttribute("src", "https://cdn.userway.org/widget.js");

        // Add an event listener to hide the widget when the UserWay script is loaded
        script.onload = function() {
            var widget = document.getElementById("userway-widget786");
            if (widget) {
                widget.style.display = "none";
            }
        };

        (document.body || document.head).appendChild(script);
    }
</script>



<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

</div>


<style>
 #blurOverlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    backdrop-filter: blur(5px); /* Adds the blur effect */
    background: rgba(0, 0, 0, 0.47); /* Dark overlay for the background */
    z-index: 1040; /* Just below the modal */
    display: none; /* Hidden by default */
    transition: backdrop-filter 0.3s ease-in-out;
}

.btn-close {
    background: transparent;
    border: none;
    font-size: 2rem; /* Adjust size of the cross icon */
    color: #fff; /* White color for better visibility */
    position: fixed; /* Fix position on the screen */
    top: 20px; /* Adjust the distance from the top */
    right: 20px; /* Adjust the distance from the right */
    z-index: 1060; /* Ensure button is above the modal and overlay */
}

/* Optional: Change hover effect */
.btn-close:hover {
    color: #f00; /* Red color on hover */
    cursor: pointer;
}
</style>


<div id="blurOverlay"></div> <!-- Blurred background -->
<div class="modal fade" id="lawCollegePopup" tabindex="-1" aria-labelledby="popupLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered custom-height-modal">
        <div class="modal-content border-0">
            <div class="modal-body p-0">
                <img src="{{ asset('/assets/img/banner/law/Law-popup.jpg') }}" alt="Law Conference Poster" class="img-fluid w-100">
            </div>
        </div>
    </div>
</div>

<!-- Close button in the blurred background -->
<button type="button" class="btn-close" id="closeBtn" aria-label="Close">
    <i class="fas fa-times"></i> <!-- Font Awesome cross icon -->
</button>





<script>
    document.addEventListener("DOMContentLoaded", function() {
        const currentUrl = window.location.href;
        const expectedUrl = "{{ url('/college-of-law-and-legal-studies') }}";

        if (currentUrl.startsWith(expectedUrl)) {
            const modalEl = document.getElementById('lawCollegePopup');
            const blurOverlay = document.getElementById('blurOverlay');

            if (modalEl && blurOverlay) {
                const myModal = new bootstrap.Modal(modalEl);

                // Disable scrolling on the body when modal is shown
                modalEl.addEventListener('shown.bs.modal', () => {
                    document.body.style.overflow = 'hidden'; // Disable background scroll
                    blurOverlay.style.display = 'block';
                });

                // Enable scrolling on the body when modal is hidden
                modalEl.addEventListener('hidden.bs.modal', () => {
                    document.body.style.overflow = ''; // Re-enable background scroll
                    blurOverlay.style.display = 'none';

                    // Explicitly remove any inline styles to prevent overflow issues
                    setTimeout(() => {
                        document.body.style.overflow = 'auto'; // Ensure scroll is enabled
                    }, 50);
                });

                myModal.show();
            }
        }
    });
</script>


</body>

</html>