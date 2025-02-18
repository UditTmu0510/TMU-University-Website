@extends('layouts.university.departments.alumni_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">
      <div class="row mx-0 mb-3">
        <h1 class="mb-2 tmu-text-primary tmu-page-heading pt-md-5"><span>Frequently Asked </span><span> Questions</span></h1>

        <hr class="horizontal-line">
        <button class="careers-accordion">1. What is this website all about? <span
            class="icon">+</span></button>
        <div class="panel active">
          <p>It is the official website of TMU Alumni. It is one of the several initiatives of Teerthanker Mahaveer University Alumni Association. TMUAA aims to bring the entire alumni community together through this website.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion">2. Who is a member of the Alumni Association?<span class="icon">+</span> </button>
        <div class="panel">
          <p>If you earned a degree / diploma / certificate from Teerthanker Mahaveer University, you are a member for life. There are no dues to pay. The only thing you need to do is keep your contact information current.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion"> 3. What privileges I get, if I register?<span
            class="icon">+</span> </button>
        <div class="panel">
          <p>If you are registered at the portal, you get following benefits:</p>
          <ul class="m-ol-list ps-4">
            <li><b>Update Your Profile</b>&nbsp;: You can update your profile / record</li>
            <li><b>Search Directory</b>: You can find your classmates and fellow alumni</li>
            <li><b>Friend List</b>: You can make new friends and be connected</li>
            <li><b>Career</b>: You can post and view jobs by other alumni</li>
            <li><b>Alumni Board</b>: You can post a message to inform fellow alumni of your activities</li>
        </ul>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion"> 4. How can I register / login?<span class="icon">+</span> </button>
        <div class="panel">
          <p>We encourage you to login through facebook and linkedin. The system auto verifies instantly if you are an alumnus and gives you necessary access. If the system cannot verify you automatically, the data admins will manually verify your credentials and give you access. If you don't have an account with Facebook or LinkedIn, then use your email address to register.</p>
          <span class="highlight">Registration Step 1</span>
          <p>On clicking the tab “Registration”, the following details are to be filled:</p>
          <ul class="m-ol-list ps-4">
            <li>First Name:</li>
            <li>Passout Year</li>
          </ul>
          <p>List of alumni with the given first name appears. The list contains alumni’s full name along with course particulars and pass out year. The alumni can click their own credentials.</p>
          <span class="highlight">Registration Step 2</span>
          <p>After clicking on one’s name, the following details will be asked:</p>
          <ul class="m-ol-list ps-4">
            <li>Enrollment number</li>
            <li>Date of Birth</li>
            <li>Email Address</li>
            <li>Mobile No</li>
          </ul>
          <p>An auto generated e-mail will be sent to alumni’s given email address with login credentials.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion">5. How secure is my data?
          <span class="icon">+</span> </button>
        <div class="panel">
          <p>The complete database is secured using industry standard security protocols. No user can access the data without appropriate permissions. Information like education, employment etc is public but personal information like your email ID and mobile number is private by default and nobody can see that information with out your explicit permission.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion">6. My profile is incorrect. What do I do? <span class="icon">+</span> </button>
        <div class="panel">
          <p>Profile information is retrieved from various sources and there is always a possibility that your information is not 100% accurate. The easiest thing to do is to ‘Improve your profile’. It takes less than a minute to update your information.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion">7. Can I contact members on this website?
          <span class="icon">+</span> </button>
        <div class="panel">
          <p>Based on your role with the college you will have permissions to contact various alumni. You can also control what communication you receive so that you don’t have to see a lot of irrelevant emails.</p>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion">8. How do I get my transcript sent? <span class="icon">+</span>
        </button>
        <div class="panel">
          <p>You can email your request at <span class="highlight"><a href="mailto:alumni@tmu.ac.in">alumni@tmu.ac.in</a></span></p>
        </div>
        <hr class="horizontal-line"> 
      </div>
    </div>
  </div>
</div>




@endsection