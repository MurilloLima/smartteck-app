@extends('home.layouts.app')
@section('title', 'Contatos')
@section('content')
    <main>

        <header class="site-header">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h1 class="text-white">Entre em contato</h1>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Contatos</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </header>


        <section class="contact-section section-padding">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-6 col-12 mb-lg-5 mb-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!4v1748371977680!6m8!1m7!1s7GXs-tbGSIk8PX9sTN1tXA!2m2!1d-6.557793133046332!2d-47.44319606437021!3f36.59608636102535!4f12.97828503593361!5f0.7820865974627469"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                        {{-- <iframe class="google-map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4722.136219194832!2d10.772202738834757!3d59.917660271855105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46416fa8eba7e84d%3A0xf4e943975503fa30!2sUrtehagen%20(herb%20garden)!5e1!3m2!1sen!2sth!4v1680951932259!5m2!1sen!2sth"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                    </div>

                    <div class="col-lg-5 col-12 mb-3 mx-auto">
                        <div class="contact-info-wrap">
                            <div class="contact-info d-flex align-items-center mb-3">
                                <i class="custom-icon bi-building"></i>

                                <p class="mb-0">
                                    <span class="contact-info-small-title">Endereço</span>
                                     Rua Graça Aranha 1258 - Estreito-MA
                                </p>
                            </div>

                            <div class="contact-info d-flex align-items-center">
                                <i class="custom-icon bi-globe"></i>

                                <p class="mb-0">
                                    <span class="contact-info-small-title">Website</span>

                                    <a href="#" class="site-footer-link">
                                        www.jobportal.co
                                    </a>
                                </p>
                            </div>

                            <div class="contact-info d-flex align-items-center">
                                <i class="custom-icon bi-telephone"></i>

                                <p class="mb-0">
                                    <span class="contact-info-small-title">Telefone</span>

                                    <a href="tel: 99 98178-1992" class="site-footer-link">
                                        99 98178-1992
                                    </a>
                                </p>
                            </div>

                            <div class="contact-info d-flex align-items-center">
                                <i class="custom-icon bi-envelope"></i>

                                <p class="mb-0">
                                    <span class="contact-info-small-title">Email</span>

                                    <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                        info@smartteck.com.br
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-12 mx-auto">
                        <form class="custom-form contact-form" action="#" method="post" role="form">
                            <h2 class="text-center mb-4">Vamos conversar</h2>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="first-name">Nome</label>

                                    <input type="text" name="name" id="full-name" class="form-control"
                                        placeholder="Nome completo" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="email">Email</label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Jackdoe@gmail.com" required="">
                                </div>

                                <div class="col-lg-12 col-12">
                                    <label for="message">Mensagem</label>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Em que podemos ajudá-lo?"></textarea>
                                </div>

                                <input type="hidden" name="subject" value="app">

                                <div class="col-lg-4 col-md-4 col-6 mx-auto">
                                    <button type="submit" class="form-control"
                                        style="background-color: #ff6601;">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-10">
                        <h2 class="text-white mb-2">Over 10k opening jobs</h2>

                        <p class="text-white">Gotto Job is a free HTML CSS template for job hunting related websites. This
                            layout is based on the famous Bootstrap 5 CSS framework. Thank you for visiting Tooplate
                            website.</p>
                    </div>

                    <div class="col-lg-4 col-12 ms-auto">
                        <div class="custom-border-btn-wrap d-flex align-items-center mt-lg-4 mt-2">
                            <a href="#" class="custom-btn custom-border-btn btn me-4">Create an account</a>

                            <a href="#" class="custom-link">Post a job</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
