@extends('layouts.app', ['title' => 'Landing Page'])
@section('container')
    {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4 font-poppins text-white" data-aos="zoom-out" data-aos-once="true">WE'RE CREATIVE SCHOOL</h1>
            <p class="font-montserrat text-white">We provide school needs in digital form so that we can streamline the
                activities of students and teachers in the form of Web applications
            </p>
        </div>
    </div>
    {{-- akhir Jumbotron --}}



    {{-- panel --}}
    <div class="control-panel" data-aos="zoom-in-up" data-aos-once="true">
        <h5 class="font-poppins judul-panel card border-0 py-2 ps-4 fw-bold text-main">Our Services</h5>
        <div class="row justify-content-center container-fluid" id="about">
            <div class="col-md-8">
                <div class="card border-rd p-3 panel shadow-sm">
                    <div class="row justify-content-center">
                        <div class="col-md-5 mt-2">
                            <img src="images/library.png" alt="library" class="img-fluid icon-panel float-start me-3">
                            <h6 class="font-poppins text-main">E - Perpustakaan</h6>
                            <p class="text-muted font-montserrat">Providing digital school books.</p>
                        </div>
                        <div class="col-md-5 mt-2 ">
                            <img src="images/stationery.png" alt="library" class="img-fluid icon-panel float-start me-3">
                            <h6 class="font-poppins text-main">E - Cooperative</h6>
                            <p class="text-muted font-montserrat">Provide a lot of school supplies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- akhir panel --}}



    {{-- informasi --}}
    <section class="container-fluid" id="informasi">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5">
                <div class="row justify-content-center">
                    <h3 class="text-main font-poppins fw-bold" data-aos="fade-up" data-aos-once="true">Why Should
                        EzSchool <i class="far fa-question-circle ms-2 text-main2"></i></h3>
                    <h6 class="font-montserrat text-main3" data-aos="fade-up" data-aos-once="true">We provide the best
                        service for our valuable clients</h6>
                    <hr class="text-main mb-4" data-aos="fade-up" data-aos-once="true">
                    <div class="col-md-5 text-center text-white info-number m-3" data-aos-offset="300"
                        data-aos="zoom-in-down">
                        <h1 class="font-poppins fw-bold display-4 text-main">1.902</h1>
                        <h5 class="font-montserrat text-main3">Guests</h5>
                    </div>
                    <div class="col-md-5 text-center text-white info-number m-3" data-aos-offset="300"
                        data-aos="zoom-in-down">
                        <h1 class="font-poppins fw-bold display-4 text-main">753</h1>
                        <h5 class="font-montserrat text-main3">Clients</h5>
                    </div>
                    <div class="col-md-5 text-center text-white info-number m-3" data-aos-offset="200"
                        data-aos="zoom-in-up">
                        <h1 class="font-poppins fw-bold display-4 text-main">657</h1>
                        <h5 class="font-montserrat text-main3">Books</h5>
                    </div>
                    <div class="col-md-5 text-center text-white info-number m-3" data-aos-offset="200"
                        data-aos="zoom-in-up">
                        <h1 class="font-poppins fw-bold display-4 text-main">3.972</h1>
                        <h5 class="font-montserrat text-main3">Things</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img src="images/vektor2.png" alt="vektor" class="img-fluid vektorinformasi" data-aos-offset="400"
                    data-aos="zoom-out">
            </div>
        </div>
    </section>
    {{-- akhir informasi --}}




    {{-- Our Team --}}
    <section id="ourteam" class="container-fluid">
        <div class="row justify-content-center mb-4">
            <div class="col-md-2 text-center" data-aos="fade-up" data-aos-once="true">
                <h3 class="text-main font-poppins fw-bold">Our Team</h3>
                <h6 class="font-montserrat text-main3">Our Real Heros</h6>
                <hr class="text-main mb-4">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6" data-aos="zoom-in-up" data-aos-offset="400">
                <div id="ourteamcarousel" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-touch="false"
                    data-bs-interval="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#ourteamcarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#ourteamcarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#ourteamcarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/zinedine.png" class="d-block w-100 mx-auto" alt="zinedine">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="font-poppins fw-bold text-white">Zinedine Ziddan Fahdlevy</h5>
                                <p class="font-montserrat fst-italic text-white">Fullstack Developer</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/dela.png" class="d-block w-100 mx-auto" alt="dela">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="font-poppins fw-bold text-white">Dela Ramadani</h5>
                                <p class="font-montserrat fst-italic text-white">UI Designer</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/defa.png" class="d-block w-100 mx-auto" alt="defa">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="font-poppins fw-bold text-white">Defa Saputra</h5>
                                <p class="font-montserrat fst-italic text-white">Database Administrator</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#ourteamcarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#ourteamcarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-5 text-center" data-aos="zoom-in-up" data-aos-offset="400">
                <iframe src="https://my.atlistmaps.com/map/2880df8f-667b-4e9d-87bb-9121c0d5d4c7?share=true"
                    allow="geolocation" width="100%" height="400px" class="border-rd" frameborder="0" scrolling="no"
                    allowfullscreen></iframe>
                <a class="btn bg-main px-4 py-2 font-poppins fw-bold text-white border-rd hvr-bounce-to-bottom mt-3"
                    href="https://app.lapentor.com/sphere/smkn-26-1602643278?scene=5f87dd1c362df77f177c1f53">Explore Our
                    School</a>
            </div>
        </div>
    </section>
    {{-- Akhir Our Team --}}




    {{-- FAQ --}}
    <section id="faq" class="container-fluid">
        <h3 class="text-main font-poppins fw-bold mb-4 text-center" data-aos="fade-up" data-aos-once="true">Frequently Asked
            Question<i class="far fa-question-circle ms-2 text-main2"></i></h3>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item" data-aos="fade-up">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed font-poppins" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Lorem ipsum dolor sit amet.?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body font-montserrat">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit. Inventore
                                nostrum, amet doloremque repellendus eligendi aliquid distinctio unde ipsam provident facere
                                nisi voluptas quasi. Earum alias ad quam doloribus eius aperiam!</div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed font-poppins" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-two" aria-expanded="false" aria-controls="flush-two">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, amet.
                            </button>
                        </h2>
                        <div id="flush-two" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body font-montserrat">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit. Inventore
                                nostrum, amet doloremque repellendus eligendi aliquid distinctio unde ipsam provident facere
                                nisi voluptas quasi. Earum alias ad quam doloribus eius aperiam!</div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed font-poppins" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-three" aria-expanded="false" aria-controls="flush-three">
                                Lorem ipsum dolor sit amet consectetur.
                            </button>
                        </h2>
                        <div id="flush-three" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body font-montserrat">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit. Inventore
                                nostrum, amet doloremque repellendus eligendi aliquid distinctio unde ipsam provident facere
                                nisi voluptas quasi. Earum alias ad quam doloribus eius aperiam!</div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed font-poppins" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-four" aria-expanded="false" aria-controls="flush-four">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis pariatur impedit
                                assumenda?
                            </button>
                        </h2>
                        <div id="flush-four" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body font-montserrat">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit. Inventore
                                nostrum, amet doloremque repellendus eligendi aliquid distinctio unde ipsam provident facere
                                nisi voluptas quasi. Earum alias ad quam doloribus eius aperiam!</div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed font-poppins" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-four" aria-expanded="false" aria-controls="flush-four">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis pariatur impedit
                                assumenda?
                            </button>
                        </h2>
                        <div id="flush-four" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body font-montserrat">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit. Inventore
                                nostrum, amet doloremque repellendus eligendi aliquid distinctio unde ipsam provident facere
                                nisi voluptas quasi. Earum alias ad quam doloribus eius aperiam!</div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed font-poppins" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-four" aria-expanded="false" aria-controls="flush-four">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis pariatur impedit
                                assumenda?
                            </button>
                        </h2>
                        <div id="flush-four" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body font-montserrat">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit. Inventore
                                nostrum, amet doloremque repellendus eligendi aliquid distinctio unde ipsam provident facere
                                nisi voluptas quasi. Earum alias ad quam doloribus eius aperiam!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Akhir FAQ --}}


@endsection
