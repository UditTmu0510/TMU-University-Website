@extends('layouts.university.departments.ctld_with_sidebar')
@section('content')





<!-- Content
    ============================================= -->

<div class="main-content">
    <div class="container">
        <section class="events_ctld">
            <section id="content bg-dark" style="background: #f5f5f5;">
                <div class="container">
                    <div class="content-wrap">
                        <div class="row g-4 mb-5" id="news_results">
                            @foreach ($events as $item)

                            @php
                            $string = nl2br(html_entity_decode($item->event_full_description));
                            $length = 374;
                            $final_string;
                            if (strlen($string) <= $length) {
                                $final_string=$string;
                                }else{
                                $truncated=substr($string, 0, $length);
                                $last_space=strrpos($truncated, ' ' );
                                if ($last_space !==false) {
                                $final_string=substr($truncated, 0, $last_space);
                                }
                                }
                                $final_string=$final_string. '...' ;
                                @endphp
                                <article class="entry event col-12 mb-4">
                                <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                    <div class="col-md-4 mb-md-0">
                                        <a href="#" class="entry-image mb-0 h-100">
                                            <img src="{{asset($item->ti_path)}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                                            
                                        </a>
                                    </div>
                                    <div class="col-md-8 p-4">
                                        

                                        <div class="entry-title nott">
                                            <h3><a href="#">{{$item->event_title}}</a></h3>
                                        </div>
                                        <div class="entry-meta mt-3">
                                            <ul>
                                                <li style="margin: 0 0 8px 0;"><i class="uil uil-schedule"></i> {{$item->event_date}}</li>
                                                <li style="margin: 0 0 8px 0;"><a href="#"><i class="uil uil-user"></i> admin</a></li>
                                                <li style="margin: 0 0 8px 0;"><i class="uil uil-folder-open"></i> <a href="#">{{$item->category}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry-content my-3">
                                            <p class="mb-0 text-justify">@php echo $final_string @endphp</p>
                                        </div>

                                        <a href="{{'news/'.$item->n_slug}}" class="tmu-btn btn-1 m-0 py-1 px-2">Read More</a>
                                    </div>
                                </div>
                                </article>

                                @endforeach
                                {{-- <article class="entry event col-12 mb-4">
                            <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                <div class="col-md-4 mb-md-0">
                                    <a href="#" class="entry-image mb-0 h-100">
                                        <img src="https://www.tmu.ac.in/uploads/events/past_event/543_title_image.jpg" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content justify-content-start align-items-start">
                                                <div class="badge px-3 py-2 fs-12 rounded-pill">Academics</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 p-4">
                                    <div class="entry-meta no-separator mb-1 mt-0">
                                        <ul>
                                            <li><a href="#" class="text-uppercase fw-medium">Fri, Jan 23 </a></li>
                                        </ul>
                                    </div>
        
                                    <div class="entry-title nott">
                                        <h3><a href="#">TMU ranks among top 20 private universities in India</a></h3>
                                    </div>
                                    <div class="entry-meta mt-3" >
                                    <ul>
                                        <li style="margin: 0 0 8px 0;"><i class="uil uil-schedule"></i> 10th July 2024</li>
                                        <li style="margin: 0 0 8px 0;"><a href="#"><i class="uil uil-user"></i> admin</a></li>
                                        <li style="margin: 0 0 8px 0;"><i class="uil uil-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a>
                                        </li>
                                    </ul>
                                </div>
                                    <div class="entry-content my-3">
                                        <p class="mb-0 text-justify">March 04, 2024 In a proud moment for Teerthanker Mahaveer University, the university has secured the 19th position among. March 04, 2024 In a proud moment for Teerthanker Mahaveer University, the university has secured the 19th position among. March 04, 2024 In a proud moment for Teerthanker Mahaveer University, the university has secured the 19th position among</p>
                                    </div>
        
                                    <a href="#" class="tmu-btn btn-1 m-0 py-1 px-2">Read More</a>
                                </div>
                            </div>
                        </article> --}}



                        </div>

                        <!-- Pager
                            ============================================= -->

                        {{$events->links('vendor.pagination.custom')}}



                        <!-- .pager end -->
                    </div>
                </div>
            </section>
        </section>
    </div>
</div>
</div>

@endsection