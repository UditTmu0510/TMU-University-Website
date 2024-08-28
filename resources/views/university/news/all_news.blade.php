@extends('layouts.main')
@section('content')

<!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap pb-0">
                <div class="container-fluid my-0  px-1 px-md-5">
                    <div class="col-md-12 col-lg-12 mt-3 mt-sm-0">
        
                        <h1 class="text-uppercase tmu-text-primary tmu-page-heading text-center mb-1 mb-md-3"><span>TMU </span><span> News</span></h1>
                        <!-- <hr> -->
                        <!-- Write content for right side here  -->
        
                        <!-- Content
                        ============================================= -->
                        <section id="content">
                            <div class="content-wrap">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="news_category" class="form-label fw-bold fs-16">News Category</label>
                                                            <select class="form-select" name="news_category" id="news_category">
                                                                @foreach ($news_categories as $news_category)
                                                              <option value="{{$news_category->id}}">{{$news_category->category_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="college_name" class="form-label fw-bold fs-16">University / College / Department</label>
                                                            <select class="form-select" name="college_name" id="college_name">
                                                                @foreach($colleges as $college)
                                                                <option value="{{$college->cd_id}}">{{$college->cd_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="from_date" class="form-label" style="font-weight:bold; font-size:16px;">From</label>
                                                            <div class="input-group">
                                                                <input type="date" id="from_date" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="to_date" class="form-label" style="font-weight:bold; font-size:16px;">To</label>
                                                            <div class="input-group">
                                                                <input type="date" class="form-control" id="to_date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
        
        
        </section>
        
        <!-- #content end -->
        
        <!-- Content 2nd starts
                ============================================= -->
        <section id="content bg-dark" style="background: #f5f5f5;">
            <div class="container">
                <div class="content-wrap">
                    <div class="row g-4 mb-5" id="news_results">
        @foreach ($news_post as $item)

        @php
        $string = nl2br(html_entity_decode($item->event_full_description));
        $length = 374;
        $final_string;
if (strlen($string) <= $length) {
$final_string = $string;
}else{
$truncated = substr($string, 0, $length);
$last_space = strrpos($truncated, ' ');
if ($last_space !== false) {
$final_string = substr($truncated, 0, $last_space);
}
}
$final_string =  $final_string. '...';
        @endphp
<article class="entry event col-12 mb-4">
            <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                <div class="col-md-4 mb-md-0">
                    <a href="#" class="entry-image mb-0 h-100">
                        <img src="{{asset($item->ti_path)}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content justify-content-start align-items-start">
                                <div class="badge px-3 py-2 fs-12 rounded-pill">{{$item->category}}</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-8 p-4">
                    <div class="entry-meta no-separator mb-1 mt-0">
                        <ul>
                           
                            <li><a href="#" class="text-uppercase fw-medium">{{$item->event_date}}</a></li>
                        </ul>
                    </div>

                    <div class="entry-title nott">
                        <h3><a href="#">{{$item->event_title}}</a></h3>
                    </div>
                    <div class="entry-meta mt-3" >
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
                    
                        {{$news_post->links('vendor.pagination.custom')}}
                     
                 
        
                    <!-- .pager end -->
                </div>
            </div>
        </section><!-- #content2nd  end -->



   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function() {
       function fetchNews(){

        var newsCategory = $('#news_category').val();
        var collegeName = $('#college_name').val();
        var fromDate = $('#from_date').val();
        var toDate = $('#to_date').val();

        $.ajax({
url:'{{ route('filter-news')}}',
method:'GET',
data:{
news_category:newsCategory,
college_name:collegeName,
from_date:fromDate,
to_date:toDate
}
success:function(data){

    var newsHtml = '';
    if(data.length > 0)
    {
      data.forEach(function(news){
        let news_description = str.slice(0,364);
newsHtml +=`<article class="entry event col-12 mb-4">
					<div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
						<div class="col-md-4 mb-md-0">
							<a href="#" class="entry-image mb-0 h-100">
								<img src="${news.ti_path}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
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
									<li><a href="#" class="text-uppercase fw-medium">${news.event_date}</a></li>
								</ul>
							</div>

							<div class="entry-title nott">
								<h3><a href="#">${news.event_title}</a></h3>
							</div>
							<div class="entry-meta mt-3" >
                            <ul>
                                <li style="margin: 0 0 8px 0;"><i class="uil uil-schedule"></i> ${news.event_date}</li>
                                <li style="margin: 0 0 8px 0;"><a href="#"><i class="uil uil-user"></i> admin</a></li>
                                <li style="margin: 0 0 8px 0;"><i class="uil uil-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a>
                                </li>
                            </ul>
                        </div>
							<div class="entry-content my-3">
								<p class="mb-0 text-justify">${news_description}</p>
							</div>

							<a href="#" class="tmu-btn btn-1 m-0 py-1 px-2">Read More</a>
						</div>
					</div>
				</article>`;



      })

    }else{

        newsHtml = '<p>No news found</p>';
    }
    $('#news_results').html(newsHtml);

}



        });
       }

       $('#news_category, #college_name, #from_date, #to_date').on('change', fetchNews);


        });
        </script>
@endsection