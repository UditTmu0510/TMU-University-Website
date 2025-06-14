@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')
<style>
.entry-title h3 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    line-clamp: 2;
    height: 3rem;
}
</style>




<div class="main-content">
  <div class="container">
    <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>TMU </span><span> Conferences</span></h1>
    <div class="row justify-content-center">
      <div class="row">
        @foreach ($news as $item)
        @php
        // Decode HTML entities
        $decodedString = html_entity_decode($item->event_full_description);

        // Strip HTML tags and convert new lines to spaces
        $plainText = strip_tags($decodedString);
        $plainText = str_replace('&nbsp;', ' ', $plainText); // Replace &nbsp; with a regular space

        // Define the length for truncation
        $length = 80;

        // Truncate the string while preserving whole words
        if (strlen($plainText) > $length) {
        $truncatedString = substr($plainText, 0, $length);
        $truncatedString = substr($truncatedString, 0, strrpos($truncatedString, ' ')) . '...';
        } else {
        $truncatedString = $plainText;
        }
        @endphp



        <div class="entry event col-lg-4 col-md-6 col-sm-6">
          <div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
            <div class="entry-image">
              <a href="{{ url('news/' . $item->n_slug) }}">
                <img src="{{ file_exists(public_path($item->ti_path)) ? asset($item->ti_path) : asset('uploads/events/past_event/default_thumbnail_news.jpg') }}" alt="{{ $item->event_title }}">
              </a>
            </div>
            <div class="entry-meta mb-1">
              <ul>
                <li><span class="badge bg-warning text-dark py-1 px-2">
                    <i class="uil-calendar-alt"></i>
                    {{ \Carbon\Carbon::parse($item->event_date)->format('F jS, Y') }}
                  </span></li>
              </ul>
            </div>
            <div class="entry-title title-sm">
              <h3 class="tmu-text-primary"><span>{{ Str::limit(html_entity_decode($item->event_title), 40) }}</span></h3>
            </div>
            <div class="entry-content mt-0">
              <p>{{ $truncatedString }}</p>
              <a href="{{ url('news/' . $item->n_slug) }}" class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">
                Read More <i class="bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>



      <!-- <div class="entry event col-lg-4 col-md-6 col-sm-6">
        <div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
          <div class="entry-image">
            <a href="#">
              <img src="https://www.tmu.ac.in/uploads/events/past_event/472_image1.png" alt="Event-1">
            </a>
          </div>
          <div class="entry-meta mb-1">
            <ul>
              <li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>December
                  29<sup>th</sup>,2023</a></span></li>
            </ul>
          </div>
          <div class="entry-title title-sm">
            <h3 class="tmu-text-primary"><span>IIT Delhi and TMU Unite for Materials and Development</span></h3>
          </div>
          <div class="entry-content mt-0">
            <p>Teerthanker Mahaveer University, the best private university in UP, has taken
              a significant leap [...]</p>
            <a href="https://www.tmu.ac.in/news/iit-delhi-and-tmu-unite-for-materials-and-devices-development"
              class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;"> Read More <i
                class="bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="entry event col-lg-4 col-md-6 col-sm-6">
        <div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
          <div class="entry-image">
            <a href="#">
              <img src="https://www.tmu.ac.in/uploads/events/past_event/464_image1.webp" alt="Event-1">
            </a>
          </div>
          <div class="entry-meta mb-1">
            <ul>
              <li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>Novemeber
                  22<sup>nd</sup>,2023</a></span></li>
            </ul>
          </div>
          <div class="entry-title title-sm">
            <h3 class="tmu-text-primary"><span>National Conference on Advancing Healthcare at TMU</span></h3>
          </div>
          <div class="entry-content mt-0">
            <p>Teerthanker Mahaveer University recently organised the National Conference on
              Advancing Healthcare[...]</p>
            <a href="https://www.tmu.ac.in/news/national-conference-on-advancing-healthcare-at-tmu"
              class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">Read More <i
                class="bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="entry event col-lg-4 col-md-6 col-sm-6">
        <div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
          <div class="entry-image">
            <a href="#">
              <img src="https://www.tmu.ac.in/uploads/events/past_event/472_image1.png" alt="Event-1">
            </a>
          </div>
          <div class="entry-meta mb-1">
            <ul>
              <li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>May
                  31<sup>st</sup>,2023</a></span>
              </li>
            </ul>
          </div>
          <div class="entry-title title-sm">
            <h3 class="tmu-text-primary"><span>National Seminar at TMU: Innovative Strategies on Tobacco Cessation</span></h3>
          </div>
          <div class="entry-content mt-0">
            <p>May 31, 2023, On World No Tobacco Day,Teerthanker Mahaveer University Moradabad[...]</p>
            <a href="https://www.tmu.ac.in/news/national-seminar-at-tmu--innovative-strategies-on-tobacco-cessation"
              class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">Read More <i
                class="bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="entry event col-lg-4 col-md-6 col-sm-6">
        <div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
          <div class="entry-image">
            <a href="#">
              <img src="https://www.tmu.ac.in/uploads/events/past_event/375_image3.webp" alt="Event-1">
            </a>
          </div>
          <div class="entry-meta mb-1">
            <ul>
              <li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>May
                  20<sup>th</sup>,2023</a></span>
              </li>
            </ul>
          </div>
          <div class="entry-title title-sm">
            <h3 class="tmu-text-primary"><span>National Conference At TMU Amending the Quality of Health in Palliative Care
                Nursing</span></h3>
          </div>
          <div class="entry-content mt-0">
            <p>Teerthanker Mahaveer University recently organised the National Conference on
              Advancing Healthcare [...]</p>
            <a href="https://www.tmu.ac.in/news/national-conference-at-tmu-amending-the-quality-of-health-in-palliative-care-nursing"
              class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">Read More <i
                class="bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="entry event col-lg-4 col-md-6 col-sm-6">
        <div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
          <div class="entry-image">
            <a href="#">
              <img src="https://www.tmu.ac.in/uploads/events/past_event/372_image1.webp" alt="Event-1">
            </a>
          </div>
          <div class="entry-meta mb-1">
            <ul>
              <li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>February
                  11<sup>th</sup>,2023</a></span></li>
            </ul>
          </div>
          <div class="entry-title title-sm">
            <h3 class="tmu-text-primary"><span>Vedic Mathematics: Discovering the Magic of Ancient Indian Mathematics</span></h3>
          </div>
          <div class="entry-content mt-0">
            <p>Teerthanker Mahaveer University recently hosted a workshop on Vedic
              Mathematics on 11 February 2023 for enthusiastic [...]</p>
            <a href="https://www.tmu.ac.in/news/vedic-mathematics-discovering-the-magic-of-ancient-indian-mathematics"
              class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">Read More <i
                class="bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="entry event col-lg-4 col-md-6 col-sm-6">
        <div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
          <div class="entry-image">
            <a href="#">
              <img src="https://www.tmu.ac.in/uploads/events/past_event/328b_image1.webp" alt="Event-1">
            </a>
          </div>
          <div class="entry-meta mb-1">
            <ul>
              <li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>November
                  18<sup>th</sup>,2022</a></span></li>
            </ul>
          </div>
          <div class="entry-title title-sm">
            <h3 class="tmu-text-primary"><span>TMIMT Organised Udhyamita: Let’s Rise</span></h3>
          </div>
          <div class="entry-content mt-0">
            <p>On 18th November 2022, Teerthanker Mahaveer Institute of Management and
              Technology (TMIMT) organised Udhyamita: Let’s Rise. The main purpose of this
              event was to[...]</p>
            <a href="https://www.tmu.ac.in/news/tmimt-organised-udhyamita-lets-rise" class="more-link fst-normal ms-2"
              style="font-family:'poppins'; font-size:14px;">Read More <i class="bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="entry event col-lg-4 col-md-6 col-sm-6">
        <div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
          <div class="entry-image">
            <a href="#">
              <img src="https://www.tmu.ac.in/uploads/events/past_event/328a_image6.webp" alt="Event-1">
            </a>
          </div>
          <div class="entry-meta mb-1">
            <ul>
              <li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>Novemeber
                  10<sup>th</sup>,2022</a></span></li>
            </ul>
          </div>
          <div class="entry-title title-sm">
            <h3 class="tmu-text-primary"><span>National Conference on Materials and Devices at Faculty of Engineering</span></h3>
          </div>
          <div class="entry-content mt-0">
            <p>Department of Physics organised the third edition of the National Conference
              on Materials and Devices (3rd NCMD-2022) on November[...]</p>
            <a href="https://www.tmu.ac.in/news/national-conference-on-materials-and-devices-at-faculty-of-engineering"
              class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">Read More <i
                class="bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="entry event col-lg-4 col-md-6 col-sm-6">
        <div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
          <div class="entry-image">
            <a href="#">
              <img src="https://www.tmu.ac.in/uploads/events/past_event/30c8_image1.webp" alt="Event-1">
            </a>
          </div>
          <div class="entry-meta mb-1">
            <ul>
              <li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>February
                  11<sup>th</sup>,2023</a></span></li>
            </ul>
          </div>
          <div class="entry-title title-sm">
            <h3 class="tmu-text-primary"><span>Usage of Satellite Remote Sensing in Agriculture, Weather, Urban and Rural
                Planning</span></h3>
          </div>
          <div class="entry-content mt-0">
            <p>An awareness seminar was hosted by Civil Engineering Department of FoE and
              College of Computing Science and Information Technology, Teerthanker
              Mahaveer[...]</p>
            <a href="https://www.tmu.ac.in/news/usage-of-satellite-remote-sensing-in-agriculture-weather-urban-and-rural-planning"
              class="more-link fst-normal ms-2" style="font-family:'poppins'; font-size:14px;">Read More <i
                class="bi-arrow-right"></i></a>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</div>
</div>




@endsection