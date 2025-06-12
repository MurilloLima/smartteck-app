@extends('home.layouts.app')
@section('title', 'Notícias')
@section('content')
    <main>

        <header class="site-header">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h1 class="text-white">Notícias</h1>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Notícias</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </header>

        {{-- <section class="job-section section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="job-thumb job-thumb-box">
                            <div class="job-image-box-wrap">
                                <a href="job-details.html">
                                    <img src="{{ asset('home/images/jobs/it-professional-works-startup-project.jpg') }}"
                                        class="job-image img-fluid" alt="">
                                </a>

                                <div class="job-image-box-wrap-info d-flex align-items-center">
                                    <p class="mb-0">
                                        <a href="job-listings.html" class="badge badge-level">Internship</a>
                                    </p>

                                    <p class="mb-0">
                                        <a href="job-listings.html" class="badge">Freelance</a>
                                    </p>
                                </div>
                            </div>

                            <div class="job-body">
                                <h4 class="job-title">
                                    <a href="job-details.html" class="job-title-link">Technical Lead</a>
                                </h4>

                                <div class="d-flex align-items-center">
                                    <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                        <img src="{{ asset('home/images/logos/salesforce.png') }}"
                                            class="job-image me-3 img-fluid" alt="">

                                        <p class="mb-0">Salesforce</p>
                                    </div>

                                    <a href="#" class="bi-bookmark ms-auto me-2">
                                    </a>

                                    <a href="#" class="bi-heart">
                                    </a>
                                </div>

                                <div class="d-flex align-items-center">
                                    <p class="job-location">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                        Kuala, Malaysia
                                    </p>

                                    <p class="job-date">
                                        <i class="custom-icon bi-clock me-1"></i>
                                        10 hours ago
                                    </p>
                                </div>

                                <div class="d-flex align-items-center border-top pt-3">
                                    <p class="job-price mb-0">
                                        <i class="custom-icon bi-cash me-1"></i>
                                        $50k
                                    </p>

                                    <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="job-thumb job-thumb-box">
                            <div class="job-image-box-wrap">
                                <a href="job-details.html">
                                    <img src="{{ asset('home/images/jobs/marketing-assistant.jpg') }}"
                                        class="job-image img-fluid" alt="marketing assistant">
                                </a>

                                <div class="job-image-box-wrap-info d-flex align-items-center">
                                    <p class="mb-0">
                                        <a href="job-listings.html" class="badge badge-level">Senior</a>
                                    </p>

                                    <p class="mb-0">
                                        <a href="job-listings.html" class="badge">Part Time</a>
                                    </p>
                                </div>
                            </div>

                            <div class="job-body">
                                <h4 class="job-title">
                                    <a href="job-details.html" class="job-title-link">Marketing Assistant</a>
                                </h4>

                                <div class="d-flex align-items-center">
                                    <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                        <img src="images/logos/spotify.png" class="job-image me-3 img-fluid" alt="">

                                        <p class="mb-0">Spotify</p>
                                    </div>

                                    <a href="#" class="bi-bookmark ms-auto me-2">
                                    </a>

                                    <a href="#" class="bi-heart">
                                    </a>
                                </div>

                                <div class="d-flex align-items-center">
                                    <p class="job-location">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                        California, USA
                                    </p>

                                    <p class="job-date">
                                        <i class="custom-icon bi-clock me-1"></i>
                                        8 days ago
                                    </p>
                                </div>

                                <div class="d-flex align-items-center border-top pt-3">
                                    <p class="job-price mb-0">
                                        <i class="custom-icon bi-cash me-1"></i>
                                        $20k
                                    </p>

                                    <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="job-thumb job-thumb-box">
                            <div class="job-image-box-wrap">
                                <a href="job-details.html">
                                    <img src="{{ asset('home/images/jobs/coding-man.jpg') }}" class="job-image img-fluid" alt="">
                                </a>

                                <div class="job-image-box-wrap-info d-flex align-items-center">
                                    <p class="mb-0">
                                        <a href="job-listings.html" class="badge badge-level">Junior</a>
                                    </p>

                                    <p class="mb-0">
                                        <a href="job-listings.html" class="badge">Contract</a>
                                    </p>
                                </div>
                            </div>

                            <div class="job-body">
                                <h4 class="job-title">
                                    <a href="job-details.html" class="job-title-link">Programmer</a>
                                </h4>

                                <div class="d-flex align-items-center">
                                    <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                        <img src="{{ asset('home/images/logos/twitter.png') }}" class="job-image me-3 img-fluid"
                                            alt="">

                                        <p class="mb-0">Twiter</p>
                                    </div>

                                    <a href="#" class="bi-bookmark ms-auto me-2">
                                    </a>

                                    <a href="#" class="bi-heart">
                                    </a>
                                </div>

                                <div class="d-flex align-items-center">
                                    <p class="job-location">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                        California, USA
                                    </p>

                                    <p class="job-date">
                                        <i class="custom-icon bi-clock me-1"></i>
                                        23 hours ago
                                    </p>
                                </div>

                                <div class="d-flex align-items-center border-top pt-3">
                                    <p class="job-price mb-0">
                                        <i class="custom-icon bi-cash me-1"></i>
                                        $68k
                                    </p>

                                    <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}


        <section class="cta-section">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-10">
                        {{-- <h2 class="text-white mb-2">Obrigado por visitar nosso site.</h2> --}}

                        {{-- <p class="text-white">Gotto Job is a free HTML CSS template for job hunting related websites. This
                            layout is based on the famous Bootstrap 5 CSS framework. Thank you for visiting Tooplate
                            website.</p> --}}
                    </div>

                    {{-- <div class="col-lg-4 col-12 ms-auto">
                        <div class="custom-border-btn-wrap d-flex align-items-center mt-lg-4 mt-2">
                            <a href="#" class="custom-btn custom-border-btn btn me-4">Create an account</a>

                            <a href="#" class="custom-link">Post a job</a>
                        </div>
                    </div> --}}

                </div>
            </div>
        </section>
    </main>
@endsection
