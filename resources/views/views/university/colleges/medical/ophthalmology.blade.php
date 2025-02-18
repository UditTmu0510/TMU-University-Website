@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> Ophthalmology </span></h1>
                    <p class="about-p mb-2">The Ophthalmology Department of Teerthanker Mahaveer Medical College and Research Centre offers a wide range of outpatient, surgical and tertiary services for diseases of the eye and surrounding structures. The outpatient department offers quality eye care services to the patients with 24/7 emergency services. The department provides specialty clinics for cornea, glaucoma, neuro ophthalmology, squint and retina designated on specific days. A dedicated team of consultants is available round the clock for the services. The department organizes camps for underprivileged rural areas around Moradabad city and provides free medical/ surgical services. The department houses state of art eye bank services and provides corneal transplantation to the registered patients.</p>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/ophthalmology/Ophthalmology.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">Keeping in mind the NMC guidelines, we regularly perform academic activities for the Undergraduates (MBBS) and postgraduate (MS) courses.</p>
                    <p class="about-p mb-2">We encouraged students to take part in research activities and attend state and national conferences and CMEs, enlightening their knowledge. The aim of the department is to achieve the Excellence in Quality Eye Care Services and Advancement in Training and Research.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.ophthalmology.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
        <div class="container mt-4">
            <div class="col-md-12">
                <div class="section-box p-3">
                    <h3 class="tmu-text-primary"><span>Key </span><span> Features</span></h3>
                    <ul class="m-ol-list ps-5">
                        <li>Small incision (SICS) and suture less cataract surgery (Phacoemulsification) with all types of premium IOL implantation facility</li>
                        <li>Laser Capsulotomy and iridotomy</li>
                        <li>Glaucoma services (Perimetry, pachymetry, Glaucoma surgeries like trabeculectomy)</li>
                        <li>Squint correction Surgeries (for adults and children)</li>
                        <li>Pediatric Ophthalmology services (Pediatric cataracts, Squint correction, ROP screening and laser facility)</li>
                        <li>Medical/ Surgical Retina services [ FFA, OCT, Lasers (PRP and Macular Grid), Anti &ndash; VEGF treatment, vitrectomy]</li>
                        <li>State of the art optical section for dispensing all kinds of spectacles and contact lenses</li>
                        <li>Low vision services for the rehabilitation of visually impaired</li>
                        <li>Lid surgeries (ptosis, ectropion, Entropion)</li>
                        <li>Destructive surgeries (evisceration, enucleation, exenteration)</li>
                        <li>Traumatic eye surgeries</li>
                        <li>Dacryocystorhinostomy with or without silicone tube implantation</li>
                        <li>Customized ocular prosthesis (artificial eye)</li>
                        <li>Eye bank service</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="section-box p-3">
                    <h3 class="tmu-text-primary"><span>Key </span><span> Features</span></h3>
                        <ul class="m-ol-list ps-5">
                            <li>All anterior segment diseases of the lid, cornea, lacrimal apparatus and uvea</li>
                            <li>Cataract</li>
                            <li>Glaucoma</li>
                            <li>Squint</li>
                            <li>Pediatric disorders: refractive errors, congenital cataract, squint, amblyopia</li>
                            <li>Retinopathy of Prematurity</li>
                            <li>Visual impairment by providing low vision services</li>
                            <li>Diabetic Retinopathy (Anti- VEGF Therapy)</li>
                            <li>Ocular trauma</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection