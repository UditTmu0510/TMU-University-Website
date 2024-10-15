@extends('layouts.university.main')
@section('content')

<!-- Desktop view  -->
<style>
.masonry {
    column-count: 5;
    column-gap: 1rem;
}

.masonry-item {
    margin: 0rem;
    position: relative;
    overflow: hidden;
}

.masonry-item img {
    width: 100%;
    display: block;
    margin-bottom: 1rem;
    transition: transform 0.3s ease;
}

.masonry-item:hover img {
    transform: scale(1.2);
}

.masonry-item figcaption {
    text-align: center;
    padding: 0.5rem;
    background-color: rgba(0, 0, 0, 0.6);
    color: white;
    position: absolute;
    margin-bottom: 1rem;
    bottom: 0;
    width: 100%;
    font-size: 1rem;
    transition: margin-bottom 0.3s ease;
}

.masonry-item:hover figcaption {
    transform: scale(1.1);
    margin-bottom: 0rem;
}

/* Responsive adjustments */
@media (max-width: 1400px) {
    .masonry {
        column-count: 4;
    }
}

@media (max-width: 1190px) {
    .masonry {
        column-count: 3;
    }
}

@media (max-width: 765px) {
    .masonry {
        column-count: 2;
    }
}

@media (max-width: 480px) {
    .masonry {
        column-count: 1;
    }
}
</style>

<!-- mobile view css -->

<style>
.image-container {
    position: relative;
    width: 100%;
    padding-top: 40%;
    /* This gives the container a 16:9 aspect ratio */
}

.image-container img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;

}

.gradient-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    align-items: center;
    justify-content: center;
}

.clr1 {
    background: linear-gradient(to left, rgba(0, 0, 0, 0.2), #ff0000d4);
}

.clr2 {
    background: linear-gradient(to left, #ff9000d4, rgba(0, 0, 0, 0.2));
}

.clr3 {
    background: linear-gradient(to left, rgba(0, 0, 0, 0.2), #00135f);
}

.clr4 {
    background: linear-gradient(to left, #ff9af8d4, rgba(0, 0, 0, 0.2));
}

.clr5 {
    background: linear-gradient(to left, rgba(0, 0, 0, 0.2), #bc9a00);
}

.clr6 {
    background: linear-gradient(to left, #9c00ffd4, rgba(0, 0, 0, 0.2));
}

.clr7 {
    background: linear-gradient(to left, rgba(0, 0, 0, 0.2), #ffbf83);
}

.clr8 {
    background: linear-gradient(to left, #ff9000d4, rgba(0, 0, 0, 0.2));
}

.clr9 {
    background: linear-gradient(to left, rgba(0, 0, 0, 0.2), #ff0000d4);
}

.clr10 {
    background: linear-gradient(to left, #00135f, rgba(0, 0, 0, 0.2));
}

.clr11 {
    background: linear-gradient(to left, rgba(0, 0, 0, 0.2), #ff9af8d4);
}

.clr12 {
    background: linear-gradient(to left, #bc9a00, rgba(0, 0, 0, 0.2));
}

.clr13 {
    background: linear-gradient(to left, rgba(0, 0, 0, 0.2), #9c00ffd4);
}


.overlay-text {
    color: #fff;
    text-align: left;
    font-size: 1.5rem;
    margin: 50px;
    margin-right: 600px
}

.overlay-text-right {
    color: #fff;
    text-align: right;
    font-size: 1.5rem;
    margin: 50px;
    margin-left: 600px
}

.overlay-text-right h2 {
    font-size: 1.5rem;
    color: #fff;
}

.overlay-text h2 {
    font-size: 1.5rem;
    color: #fff;
}

@media screen and (min-width: 768px) {
    .overlay-text {
        font-size: 2rem;
    }
}


@media screen and (max-width: 1100px) {
    .overlay-text {
        font-size: 2.5rem;
        margin-right: 200px
    }

    .overlay-text-right {
        font-size: 2rem;
        margin-left: 200px
    }
}
</style>

<section id="content">
    <div class="content-wrap py-0">


        <div class="container py-5 	d-block d-sm-none">
            <div class="masonry">
                <figure class="masonry-item">
                    <a href="#">
                        <img src="{{asset('/assets/img/infrastructure/home/mobile/1.jpg')}}" alt="Image 1">
                        <figcaption>Faculty Accommodation</figcaption>
                    </a>
                </figure>
                <figure class="masonry-item">
                    <a href="#">
                        <img src="{{asset('/assets/img/infrastructure/home/mobile/2.jpg')}}" alt="Image 2">
                        <figcaption>Sports</figcaption>
                    </a>
                </figure>
                <figure class="masonry-item">
                    <a href="#">
                        <img src="{{asset('/assets/img/infrastructure/home/mobile/3.jpg')}}" alt="Image 3">
                        <figcaption>Gym</figcaption>
                    </a>
                </figure>
                <figure class="masonry-item">
                    <a href="#">
                        <img src="{{asset('/assets/img/infrastructure/home/mobile/3.jpg')}}" alt="Image 4">
                        <figcaption>Yoga</figcaption>
                    </a>
                </figure>
                <figure class="masonry-item">
                    <a href="#">
                        <img src="{{asset('/assets/img/infrastructure/home/mobile/5.jpg')}}" alt="Image 5">
                        <figcaption>Music & Dance</figcaption>
                    </a>
                </figure>
                <figure class="masonry-item">
                    <a href="#">
                        <img src="{{asset('/assets/img/infrastructure/home/mobile/6.jpg')}}" alt="Image 6">
                        <figcaption>Hospital</figcaption>
                    </a>
                </figure>
                <figure class="masonry-item">
                    <a href="#">
                        <img src="{{asset('/assets/img/infrastructure/home/mobile/7.jpg')}}" alt="Image 7">
                        <figcaption>Auditorium</figcaption>
                    </a>
                </figure>
                <figure class="masonry-item">
                    <a href="#">
                        <img src="{{asset('/assets/img/infrastructure/home/mobile/8.jpg')}}" alt="Image 8">
                        <figcaption>Transport</figcaption>
                    </a>
                </figure>
                <figure class="masonry-item">
                    <a href="#">
                        <img src="{{asset('/assets/img/infrastructure/home/mobile/9.jpg')}}" alt="Image 9">
                        <figcaption>Hostel Accommodation</figcaption>
                    </a>
                </figure>
                <figure class="masonry-item">
                    <a href="#">
                        <img src="{{asset('/assets/img/infrastructure/home/mobile/10.jpg')}}" alt="Image 6">
                        <figcaption>Bank Branch</figcaption>
                    </a>
                </figure>
                <figure class="masonry-item">
                    <a href="#">
                        <img src="{{asset('/assets/img/infrastructure/home/mobile/11.jpg')}}" alt="Image 7">
                        <figcaption>Cafetaria</figcaption>
                    </a>
                </figure>
                <figure class="masonry-item">
                    <a href="#">
                        <img src="{{asset('/assets/img/infrastructure/home/mobile/12.jpg')}}" alt="Image 8">
                        <figcaption>Guest House</figcaption>
                    </a>
                </figure>
                <figure class="masonry-item">
                    <a href="#">
                        <img src="{{asset('/assets/img/infrastructure/home/mobile/13.jpg')}}" alt="Image 9">
                        <figcaption>Shopping Complex</figcaption>
                    </a>
                </figure>
            </div>
        </div>


    </div>
</section>




<div class="d-none d-sm-block">
    <div class="row">
        <div class="col-12">
            <a href="">
                <div class="image-container">
                    <img src="{{asset('/assets/img/infrastructure/home/1.jpg')}}" alt="Convocation Image">
                    <div class="gradient-overlay clr1">
                        <div class="overlay-text">
                            <h2>Faculty Accommodation</h2>
                            <p>TMU offers comfortable and well-furnished faculty accommodations with modern amenities
                                for a convenient living experience on campus.</p>
                        </div>
                    </div>
                </div>
                <div>
                </div>
                <div class="col-12">
                    <a href="">
                        <div class="image-container">
                            <img src="{{asset('/assets/img/infrastructure/home/2.jpg')}}" alt="Convocation Image">
                            <div class="gradient-overlay clr2">
                                <div class="overlay-text-right">
                                    <h2>Sports</h2>
                                    <p>TMU offers a vibrant sports culture with diverse activities and facilities that
                                        promote physical fitness and teamwork among students.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                        </div>
                        <div class="col-12">
                            <a href="">
                                <div class="image-container">
                                    <img src="{{asset('/assets/img/infrastructure/home/4.jpg')}}"
                                        alt="Convocation Image">
                                    <div class="gradient-overlay clr3">
                                        <div class="overlay-text">
                                            <h2>Gym</h2>
                                            <p>The gym at Teerthanker Mahaveer University is a state-of-the-art fitness
                                                center equipped with modern facilities to promote health and wellness
                                                among students and staff.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                </div>
                                <div class="col-12">
                                    <a href="">
                                        <div class="image-container">
                                            <img src="{{asset('/assets/img/infrastructure/home/4.jpg')}}"
                                                alt="Convocation Image">
                                            <div class="gradient-overlay clr4">
                                                <div class="overlay-text-right">
                                                    <h2>Yoga</h2>
                                                    <p>TMU offers comprehensive Yoga programs that promote physical
                                                        well-being, mental clarity, and spiritual growth, rooted in
                                                        ancient traditions.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                        <div class="col-12">
                                            <a href="">
                                                <div class="image-container">
                                                    <img src="{{asset('/assets/img/infrastructure/home/5.jpg')}}"
                                                        alt="Convocation Image">
                                                    <div class="gradient-overlay clr5">
                                                        <div class="overlay-text">
                                                            <h2>Music & Dance</h2>
                                                            <p>The Music & Dance program at Teerthanker Mahaveer
                                                                University nurtures creative expression and artistic
                                                                talent through comprehensive training in classical and
                                                                contemporary performing arts.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                </div>
                                                <div class="col-12">
                                                    <a href="">
                                                        <div class="image-container">
                                                            <img src="{{asset('/assets/img/infrastructure/home/6.jpg')}}"
                                                                alt="Convocation Image">
                                                            <div class="gradient-overlay clr6">
                                                                <div class="overlay-text-right">
                                                                    <h2>Hospital</h2>
                                                                    <p>TMU Hospital is a state-of-the-art medical
                                                                        facility providing comprehensive healthcare
                                                                        services with advanced technology and expert
                                                                        care.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                        </div>
                                                        <div class="col-12">
                                                            <a href="">
                                                                <div class="image-container">
                                                                    <img src="{{asset('/assets/img/infrastructure/home/7.jpg')}}"
                                                                        alt="Convocation Image">
                                                                    <div class="gradient-overlay clr7">
                                                                        <div class="overlay-text">
                                                                            <h2>Auditorium</h2>
                                                                            <p>The Auditorium of TMU is a
                                                                                state-of-the-art venue designed for
                                                                                large-scale conferences, seminars, and
                                                                                cultural events, offering modern
                                                                                facilities and excellent acoustics.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <a href="">
                                                                        <div class="image-container">
                                                                            <img src="{{asset('/assets/img/infrastructure/home/8.jpg')}}"
                                                                                alt="Convocation Image">
                                                                            <div class="gradient-overlay clr8">
                                                                                <div class="overlay-text-right">
                                                                                    <h2>Transport</h2>
                                                                                    <p>Teerthanker Mahaveer University
                                                                                        offers a well-organized and
                                                                                        efficient transport facility,
                                                                                        ensuring safe and convenient
                                                                                        travel for students and staff
                                                                                        across various routes.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <a href="">
                                                                                <div class="image-container">
                                                                                    <img src="{{asset('/assets/img/infrastructure/home/9.jpg')}}"
                                                                                        alt="Convocation Image">
                                                                                    <div class="gradient-overlay clr9">
                                                                                        <div class="overlay-text">
                                                                                            <h2>Hostel Accommodation
                                                                                            </h2>
                                                                                            <p>TMU offers comfortable
                                                                                                and well-furnished
                                                                                                hostel accommodations
                                                                                                with modern amenities,
                                                                                                ensuring a safe and
                                                                                                supportive living
                                                                                                environment for
                                                                                                students.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <a href="">
                                                                                        <div class="image-container">
                                                                                            <img src="{{asset('/assets/img/infrastructure/home/10.jpg')}}"
                                                                                                alt="Convocation Image">
                                                                                            <div
                                                                                                class="gradient-overlay clr10">
                                                                                                <div
                                                                                                    class="overlay-text-right">
                                                                                                    <h2>Bank Branch</h2>
                                                                                                    <p>The PNB Bank
                                                                                                        Branch at
                                                                                                        Teerthanker
                                                                                                        Mahaveer
                                                                                                        University
                                                                                                        offers a range
                                                                                                        of financial
                                                                                                        services and
                                                                                                        convenient
                                                                                                        banking
                                                                                                        solutions for
                                                                                                        students, staff,
                                                                                                        and the
                                                                                                        university
                                                                                                        community.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <a href="">
                                                                                                <div
                                                                                                    class="image-container">
                                                                                                    <img src="{{asset('/assets/img/infrastructure/home/11.jpg')}}"
                                                                                                        alt="Convocation Image">
                                                                                                    <div
                                                                                                        class="gradient-overlay clr11">
                                                                                                        <div
                                                                                                            class="overlay-text">
                                                                                                            <h2>Cafetaria
                                                                                                            </h2>
                                                                                                            <p>The
                                                                                                                cafeteria
                                                                                                                at
                                                                                                                Teerthanker
                                                                                                                Mahaveer
                                                                                                                University
                                                                                                                offers a
                                                                                                                vibrant
                                                                                                                and
                                                                                                                welcoming
                                                                                                                space
                                                                                                                for
                                                                                                                students
                                                                                                                and
                                                                                                                staff to
                                                                                                                enjoy a
                                                                                                                diverse
                                                                                                                selection
                                                                                                                of
                                                                                                                delicious
                                                                                                                and
                                                                                                                nutritious
                                                                                                                meals.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div>
                                                                                                </div>
                                                                                                <div class="col-12">
                                                                                                    <a href="">
                                                                                                        <div
                                                                                                            class="image-container">
                                                                                                            <img src="{{asset('/assets/img/infrastructure/home/12.jpg')}}"
                                                                                                                alt="Convocation Image">
                                                                                                            <div
                                                                                                                class="gradient-overlay clr12">
                                                                                                                <div
                                                                                                                    class="overlay-text-right">
                                                                                                                    <h2>Guest
                                                                                                                        House
                                                                                                                    </h2>
                                                                                                                    <p>The
                                                                                                                        Guest
                                                                                                                        House
                                                                                                                        of
                                                                                                                        TMU
                                                                                                                        offers
                                                                                                                        comfortable
                                                                                                                        accommodation
                                                                                                                        and
                                                                                                                        hospitality
                                                                                                                        for
                                                                                                                        visitors,
                                                                                                                        providing
                                                                                                                        a
                                                                                                                        serene
                                                                                                                        environment
                                                                                                                        and
                                                                                                                        modern
                                                                                                                        amenities
                                                                                                                        to
                                                                                                                        enhance
                                                                                                                        their
                                                                                                                        stay
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-12">
                                                                                                            <a href="">
                                                                                                                <div
                                                                                                                    class="image-container">
                                                                                                                    <img src="{{asset('/assets/img/infrastructure/home/12.jpg')}}"
                                                                                                                        alt="Convocation Image">
                                                                                                                    <div
                                                                                                                        class="gradient-overlay clr13">
                                                                                                                        <div
                                                                                                                            class="overlay-text">
                                                                                                                            <h2>Shopping
                                                                                                                                Complex
                                                                                                                            </h2>
                                                                                                                            <p>The
                                                                                                                                Shopping
                                                                                                                                Complex
                                                                                                                                of
                                                                                                                                TMU
                                                                                                                                offers
                                                                                                                                a
                                                                                                                                vibrant
                                                                                                                                array
                                                                                                                                of
                                                                                                                                retail
                                                                                                                                outlets
                                                                                                                                and
                                                                                                                                dining
                                                                                                                                options,
                                                                                                                                catering
                                                                                                                                to
                                                                                                                                the
                                                                                                                                diverse
                                                                                                                                needs
                                                                                                                                of
                                                                                                                                students
                                                                                                                                and
                                                                                                                                faculty
                                                                                                                                within
                                                                                                                                a
                                                                                                                                lively
                                                                                                                                and
                                                                                                                                convenient
                                                                                                                                setting.
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>


                                                                                                @endsection