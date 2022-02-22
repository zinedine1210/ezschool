@extends('layouts.main', ['title' => 'Dashboard'])

@section('container')
    <div class="info-panel text-center p-4">
        <div class="konten">
            <h3 class="font-poppins mb-5 fw-bold mt-3">School Needs
                Just For You</h3>
            <h6 class="font-montserrat mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit debitis culpa
                provident illum facere rerum
                sequi quam eaque commodi dolorum.</h6>
            <button class="btn bg-main text-white px-5 py-2 font-poppins">Shop Now</button>
        </div>
    </div>
    <div class="jumbotron">
        <div id="banner" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="https://source.unsplash.com/1280x450/?banner,poster" class="d-block w-100" alt="Banner">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://source.unsplash.com/1280x450/?poster" class="d-block w-100" alt="Banner">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1280x450/?school" class="d-block w-100" alt="Banner">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <section id="panel" class="container mx-auto">
        <div class="row justify-content-center container-fluid">
            <div class="col-md-3 mb-4">
                <img src="images/icon/medal.png" alt="high quality" class="img-fluid float-start">
                <h5 class="font-poppins">High Quality</h5>
                <small class="font-montserrat">Guaranteed quality of goods</small>
            </div>
            <div class="col-md-3 mb-4">
                <img src="images/icon/free-delivery.png" alt="high quality" class="img-fluid float-start me-3">
                <h5 class="font-poppins">Free Shipping</h5>
                <small class="font-montserrat">Order over 100k</small>
            </div>
            <div class="col-md-3 mb-4">
                <img src="images/icon/customer-support.png" alt="high quality" class="img-fluid float-start me-3">
                <h5 class="font-poppins">24 / 7 Support</h5>
                <small class="font-montserrat">Dedicated support</small>
            </div>
        </div>
    </section>



    <section id="allproducts" class="container-fluid">
        <h1 class="font-poppins fw-bold text-center mb-4">Our Products</h1>
        <div class="row justify-content-center">
            <a class="col-3 my-3 mx-1 kartu" href="">
                <figure class="c4-izmir gambar c4-border-cc-3 c4-image-rotate-right c4-gradient-bottom" tabindex="0"
                    style="--primary-color: #674ea7; --secondary-color: #f3f3f3 ; --image-opacity: .1;">
                    <img src="https://source.unsplash.com/300x300?school" class="card-img-top" alt="Sample Image">
                    <figcaption class="c4-layout-center-left webadd">
                        <div class="c4-reveal-up c4-delay-200">
                            <button class="btn btn-light py-3 px-5 ms-4 font-poppins text-main">Add to
                                Cart</button>
                        </div>
                        <div class="row justify-content-center align-items-center ms-5 ps-3 mt-4">
                            <div class="col-6 text-center">
                                <button class="bg-transparent p-0 c4-reveal-right"><i
                                        class="fas fa-share-alt text-white"></i></button>
                            </div>
                            <div class="col-6 text-center">
                                <button class="bg-transparent p-0 c4-reveal-left"><i
                                        class="far fa-heart text-white"></i></button>
                            </div>
                        </div>
                    </figcaption>

                    <figcaption class="c4-layout-center-left mobileadd text-center">
                        <button class="btn btn-light font-poppins text-main mb-2 mt-3">Add to
                            Cart</button>
                        <div class="d-flex justify-content-center">
                            <button class="bg-transparent p-0 c4-reveal-left"><i
                                    class="far fa-heart text-white fs-3 mx-2"></i></button>
                            <button class="bg-transparent p-0 c4-reveal-right"><i
                                    class="fas fa-share-alt text-white fs-3 mx-2"></i></button>
                        </div>
                    </figcaption>

                </figure>
                <span class="bg-main diskon font-montserrat">-30%</span>
                <div class="card-body text-dark">
                    <h4 class="card-text font-poppins fw-bold judul text-main">Sepatu KW Super Ges luar biasa anj</h4>
                    <p class="text-dark font-montserrat infodeskripsi">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="font-montserrat fw-bold"><small><i class="fas fa-star text-warning"></i> -4 | Terjual
                            1</small></p>
                    <h5 class="font-poppins fw-bold float-start">Rp 170.000.000</h5>
                    <h6 class="font-poppins text-muted text-decoration-line-through float-end">Rp 100.000</h6>
                </div>
            </a>
            <a class="col-3 my-3 mx-1 kartu" href="">
                <figure class="c4-izmir gambar c4-border-cc-3 c4-image-rotate-right c4-gradient-bottom" tabindex="0"
                    style="--primary-color: #674ea7; --secondary-color: #f3f3f3 ; --image-opacity: .1;">
                    <img src="https://source.unsplash.com/300x300?school" class="card-img-top" alt="Sample Image">
                    <figcaption class="c4-layout-center-left webadd">
                        <div class="c4-reveal-up c4-delay-200">
                            <button class="btn btn-light py-3 px-5 ms-4 font-poppins text-main">Add to
                                Cart</button>
                        </div>
                        <div class="row justify-content-center align-items-center ms-5 ps-3 mt-4">
                            <div class="col-6 text-center">
                                <button class="bg-transparent p-0 c4-reveal-right"><i
                                        class="fas fa-share-alt text-white"></i></button>
                            </div>
                            <div class="col-6 text-center">
                                <button class="bg-transparent p-0 c4-reveal-left"><i
                                        class="far fa-heart text-white"></i></button>
                            </div>
                        </div>
                    </figcaption>

                    <figcaption class="c4-layout-center-left mobileadd text-center">
                        <button class="btn btn-light font-poppins text-main mb-2 mt-3">Add to
                            Cart</button>
                        <div class="d-flex justify-content-center">
                            <button class="bg-transparent p-0 c4-reveal-left"><i
                                    class="far fa-heart text-white fs-3 mx-2"></i></button>
                            <button class="bg-transparent p-0 c4-reveal-right"><i
                                    class="fas fa-share-alt text-white fs-3 mx-2"></i></button>
                        </div>
                    </figcaption>

                </figure>
                <span class="bg-main diskon font-montserrat">-30%</span>
                <div class="card-body text-dark">
                    <h4 class="card-text font-poppins fw-bold judul text-main">Sepatu KW Super Ges luar biasa anj</h4>
                    <p class="text-dark font-montserrat infodeskripsi">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="font-montserrat fw-bold"><small><i class="fas fa-star text-warning"></i> -4 | Terjual
                            1</small></p>
                    <h5 class="font-poppins fw-bold float-start">Rp 170.000.000</h5>
                    <h6 class="font-poppins text-muted text-decoration-line-through float-end">Rp 100.000</h6>
                </div>
            </a>
            <a class="col-3 my-3 mx-1 kartu" href="">
                <figure class="c4-izmir gambar c4-border-cc-3 c4-image-rotate-right c4-gradient-bottom" tabindex="0"
                    style="--primary-color: #674ea7; --secondary-color: #f3f3f3 ; --image-opacity: .1;">
                    <img src="https://source.unsplash.com/300x300?school" class="card-img-top" alt="Sample Image">
                    <figcaption class="c4-layout-center-left webadd">
                        <div class="c4-reveal-up c4-delay-200">
                            <button class="btn btn-light py-3 px-5 ms-4 font-poppins text-main">Add to
                                Cart</button>
                        </div>
                        <div class="row justify-content-center align-items-center ms-5 ps-3 mt-4">
                            <div class="col-6 text-center">
                                <button class="bg-transparent p-0 c4-reveal-right"><i
                                        class="fas fa-share-alt text-white"></i></button>
                            </div>
                            <div class="col-6 text-center">
                                <button class="bg-transparent p-0 c4-reveal-left"><i
                                        class="far fa-heart text-white"></i></button>
                            </div>
                        </div>
                    </figcaption>

                    <figcaption class="c4-layout-center-left mobileadd text-center">
                        <button class="btn btn-light font-poppins text-main mb-2 mt-3">Add to
                            Cart</button>
                        <div class="d-flex justify-content-center">
                            <button class="bg-transparent p-0 c4-reveal-left"><i
                                    class="far fa-heart text-white fs-3 mx-2"></i></button>
                            <button class="bg-transparent p-0 c4-reveal-right"><i
                                    class="fas fa-share-alt text-white fs-3 mx-2"></i></button>
                        </div>
                    </figcaption>

                </figure>
                <span class="bg-main diskon font-montserrat">-30%</span>
                <div class="card-body text-dark">
                    <h4 class="card-text font-poppins fw-bold judul text-main">Sepatu KW Super Ges luar biasa anj</h4>
                    <p class="text-dark font-montserrat infodeskripsi">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="font-montserrat fw-bold"><small><i class="fas fa-star text-warning"></i> -4 | Terjual
                            1</small></p>
                    <h5 class="font-poppins fw-bold float-start">Rp 170.000.000</h5>
                    <h6 class="font-poppins text-muted text-decoration-line-through float-end">Rp 100.000</h6>
                </div>
            </a>
            <a class="col-3 my-3 mx-1 kartu" href="">
                <figure class="c4-izmir gambar c4-border-cc-3 c4-image-rotate-right c4-gradient-bottom" tabindex="0"
                    style="--primary-color: #674ea7; --secondary-color: #f3f3f3 ; --image-opacity: .1;">
                    <img src="https://source.unsplash.com/300x300?school" class="card-img-top" alt="Sample Image">
                    <figcaption class="c4-layout-center-left webadd">
                        <div class="c4-reveal-up c4-delay-200">
                            <button class="btn btn-light py-3 px-5 ms-4 font-poppins text-main">Add to
                                Cart</button>
                        </div>
                        <div class="row justify-content-center align-items-center ms-5 ps-3 mt-4">
                            <div class="col-6 text-center">
                                <button class="bg-transparent p-0 c4-reveal-right"><i
                                        class="fas fa-share-alt text-white"></i></button>
                            </div>
                            <div class="col-6 text-center">
                                <button class="bg-transparent p-0 c4-reveal-left"><i
                                        class="far fa-heart text-white"></i></button>
                            </div>
                        </div>
                    </figcaption>

                    <figcaption class="c4-layout-center-left mobileadd text-center">
                        <button class="btn btn-light font-poppins text-main mb-2 mt-3">Add to
                            Cart</button>
                        <div class="d-flex justify-content-center">
                            <button class="bg-transparent p-0 c4-reveal-left"><i
                                    class="far fa-heart text-white fs-3 mx-2"></i></button>
                            <button class="bg-transparent p-0 c4-reveal-right"><i
                                    class="fas fa-share-alt text-white fs-3 mx-2"></i></button>
                        </div>
                    </figcaption>

                </figure>
                <span class="bg-main diskon font-montserrat">-30%</span>
                <div class="card-body text-dark">
                    <h4 class="card-text font-poppins fw-bold judul text-main">Sepatu KW Super Ges luar biasa anj</h4>
                    <p class="text-dark font-montserrat infodeskripsi">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="font-montserrat fw-bold"><small><i class="fas fa-star text-warning"></i> -4 | Terjual
                            1</small></p>
                    <h5 class="font-poppins fw-bold float-start">Rp 170.000.000</h5>
                    <h6 class="font-poppins text-muted text-decoration-line-through float-end">Rp 100.000</h6>
                </div>
            </a>
            <a class="col-3 my-3 mx-1 kartu" href="">
                <figure class="c4-izmir gambar c4-border-cc-3 c4-image-rotate-right c4-gradient-bottom" tabindex="0"
                    style="--primary-color: #674ea7; --secondary-color: #f3f3f3 ; --image-opacity: .1;">
                    <img src="https://source.unsplash.com/300x300?school" class="card-img-top" alt="Sample Image">
                    <figcaption class="c4-layout-center-left webadd">
                        <div class="c4-reveal-up c4-delay-200">
                            <button class="btn btn-light py-3 px-5 ms-4 font-poppins text-main">Add to
                                Cart</button>
                        </div>
                        <div class="row justify-content-center align-items-center ms-5 ps-3 mt-4">
                            <div class="col-6 text-center">
                                <button class="bg-transparent p-0 c4-reveal-right"><i
                                        class="fas fa-share-alt text-white"></i></button>
                            </div>
                            <div class="col-6 text-center">
                                <button class="bg-transparent p-0 c4-reveal-left"><i
                                        class="far fa-heart text-white"></i></button>
                            </div>
                        </div>
                    </figcaption>

                    <figcaption class="c4-layout-center-left mobileadd text-center">
                        <button class="btn btn-light font-poppins text-main mb-2 mt-3">Add to
                            Cart</button>
                        <div class="d-flex justify-content-center">
                            <button class="bg-transparent p-0 c4-reveal-left"><i
                                    class="far fa-heart text-white fs-3 mx-2"></i></button>
                            <button class="bg-transparent p-0 c4-reveal-right"><i
                                    class="fas fa-share-alt text-white fs-3 mx-2"></i></button>
                        </div>
                    </figcaption>

                </figure>
                <span class="bg-main diskon font-montserrat">-30%</span>
                <div class="card-body text-dark">
                    <h4 class="card-text font-poppins fw-bold judul text-main">Sepatu KW Super Ges luar biasa anj</h4>
                    <p class="text-dark font-montserrat infodeskripsi">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="font-montserrat fw-bold"><small><i class="fas fa-star text-warning"></i> -4 | Terjual
                            1</small></p>
                    <h5 class="font-poppins fw-bold float-start">Rp 170.000.000</h5>
                    <h6 class="font-poppins text-muted text-decoration-line-through float-end">Rp 100.000</h6>
                </div>
            </a>
            <a class="col-3 my-3 mx-1 kartu" href="">
                <figure class="c4-izmir gambar c4-border-cc-3 c4-image-rotate-right c4-gradient-bottom" tabindex="0"
                    style="--primary-color: #674ea7; --secondary-color: #f3f3f3 ; --image-opacity: .1;">
                    <img src="https://source.unsplash.com/300x300?school" class="card-img-top" alt="Sample Image">
                    <figcaption class="c4-layout-center-left webadd">
                        <div class="c4-reveal-up c4-delay-200">
                            <button class="btn btn-light py-3 px-5 ms-4 font-poppins text-main">Add to
                                Cart</button>
                        </div>
                        <div class="row justify-content-center align-items-center ms-5 ps-3 mt-4">
                            <div class="col-6 text-center">
                                <button class="bg-transparent p-0 c4-reveal-right"><i
                                        class="fas fa-share-alt text-white"></i></button>
                            </div>
                            <div class="col-6 text-center">
                                <button class="bg-transparent p-0 c4-reveal-left"><i
                                        class="far fa-heart text-white"></i></button>
                            </div>
                        </div>
                    </figcaption>

                    <figcaption class="c4-layout-center-left mobileadd text-center">
                        <button class="btn btn-light font-poppins text-main mb-2 mt-3">Add to
                            Cart</button>
                        <div class="d-flex justify-content-center">
                            <button class="bg-transparent p-0 c4-reveal-left"><i
                                    class="far fa-heart text-white fs-3 mx-2"></i></button>
                            <button class="bg-transparent p-0 c4-reveal-right"><i
                                    class="fas fa-share-alt text-white fs-3 mx-2"></i></button>
                        </div>
                    </figcaption>

                </figure>
                <span class="bg-main diskon font-montserrat">-30%</span>
                <div class="card-body text-dark">
                    <h4 class="card-text font-poppins fw-bold judul text-main">Sepatu KW Super Ges luar biasa anj</h4>
                    <p class="text-dark font-montserrat infodeskripsi">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="font-montserrat fw-bold"><small><i class="fas fa-star text-warning"></i> -4 | Terjual
                            1</small></p>
                    <h5 class="font-poppins fw-bold float-start">Rp 170.000.000</h5>
                    <h6 class="font-poppins text-muted text-decoration-line-through float-end">Rp 100.000</h6>
                </div>
            </a>
        </div>

        <button class="learn-more mt-4 mx-auto justify-content-center d-block">
            <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
            </span>
            <span class="button-text">Show More</span>
        </button>
    </section>



    {{-- Populer produk --}}
    <section id="popular" class="bg-main2 container-fluid">
        <h1 class="font-poppins fw-bold text-center">Popular</h1>
        <p class="font-montserrat text-muted text-center mb-4">Our top selling product that you may like</p>
        <div class="row justify-content-center">
            <a class="col-3 my-3 mx-1 kartu" href="">
                <figure class="c4-izmir gambar c4-border-cc-3 c4-image-rotate-right c4-gradient-bottom" tabindex="0"
                    style="--primary-color: #674ea7; --secondary-color: #f3f3f3 ; --image-opacity: .1;">
                    <img src="https://source.unsplash.com/300x300?school" class="card-img-top" alt="Sample Image">
                    <figcaption class="c4-layout-center-left webadd">
                        <div class="c4-reveal-up c4-delay-200">
                            <button class="btn btn-light py-3 px-5 ms-4 font-poppins text-main">Add to
                                Cart</button>
                        </div>
                        <div class="row justify-content-center align-items-center ms-5 ps-3 mt-4">
                            <div class="col-6 text-center">
                                <button class="bg-transparent p-0 c4-reveal-right"><i
                                        class="fas fa-share-alt text-white"></i></button>
                            </div>
                            <div class="col-6 text-center">
                                <button class="bg-transparent p-0 c4-reveal-left"><i
                                        class="far fa-heart text-white"></i></button>
                            </div>
                        </div>
                    </figcaption>

                    <figcaption class="c4-layout-center-left mobileadd text-center">
                        <button class="btn btn-light font-poppins text-main mb-2 mt-3">Add to
                            Cart</button>
                        <div class="d-flex justify-content-center">
                            <button class="bg-transparent p-0 c4-reveal-left"><i
                                    class="far fa-heart text-white fs-3 mx-2"></i></button>
                            <button class="bg-transparent p-0 c4-reveal-right"><i
                                    class="fas fa-share-alt text-white fs-3 mx-2"></i></button>
                        </div>
                    </figcaption>

                </figure>
                <span class="bg-main diskon font-montserrat">-30%</span>
                <div class="card-body text-dark">
                    <h4 class="card-text font-poppins fw-bold judul text-main">Sepatu KW Super Ges luar biasa anj</h4>
                    <p class="text-dark font-montserrat infodeskripsi">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="font-montserrat fw-bold"><small><i class="fas fa-star text-warning"></i> -4 | Terjual
                            1</small></p>
                    <h5 class="font-poppins fw-bold float-start">Rp 170.000.000</h5>
                    <h6 class="font-poppins text-muted text-decoration-line-through float-end">Rp 100.000</h6>
                </div>
            </a>
        </div>

        <button class="learn-more mt-4 mx-auto justify-content-center d-block">
            <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
            </span>
            <span class="button-text">Show More</span>
        </button>
    </section>
@endsection
