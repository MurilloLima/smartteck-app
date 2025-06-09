<main>

    @extends('home.layouts.app')
    @section('title', 'Home')

    @section('content')
        <section class="hero-section d-flex justify-content-center align-items-center">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <div class="hero-section-text mt-5">
                            {{-- <h6 class="text-white">Are you looking for your dream job?</h6> --}}

                            <h1 class="hero-title text-white mt-4 mb-4">Plataforma on-line.
                                <br>
                                Melhor portal de recebíveis
                            </h1>

                            {{-- <a href="#categories-section" class="custom-btn custom-border-btn btn">Browse Categories</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <form class="custom-form hero-form" action="https://emprestimos.sistemashugo.com.br//autenticar.php"
                            method="post" role="form">
                            <h3 class="text-white mb-3">Faça login na sua conta</h3>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>

                                        <i class=""></i>
                                        <input type="text" name="usuario" id="job-title" class="form-control"
                                            placeholder="Usúario" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2"><i class="bi bi-lock"></i></span>

                                        <input type="password" name="senha" id="job-location" class="form-control"
                                            placeholder="Senha" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <button type="submit" class="form-control" style="background-color: #F65129;">
                                        Entrar
                                    </button>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex flex-wrap align-items-center mt-4 mt-lg-0">
                                        {{-- <span class="text-white mb-lg-0 mb-md-0 me-2">Popular keywords:</span> --}}

                                        {{-- <div>
                                            <a href="job-listings.html" class="badge">Web design</a>

                                            <a href="job-listings.html" class="badge">Marketing</a>

                                            <a href="job-listings.html" class="badge">Customer support</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


        <section class="categories-section section-padding" id="categories-section">
            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-5">
                            <span>Categorias</span>
                        </h2>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block" style="background-color: #F65129;">
                            <a href="https://smartteck.adiantesa.com/"
                                class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-window"></i>

                                <small class="categories-block-title">
                                    Antecipação de
                                    Recebíveis
                                </small>

                                {{-- <div
                                    class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                    <span class="categories-block-number-text">320</span>
                                </div> --}}
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block" style="background-color: #F65129">
                            <a href="https://emprestimos.sistemashugo.com.br/painel/"
                                class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-twitch"></i>

                                <small class="categories-block-title">
                                    Administrador
                                </small>

                                {{-- <div
                                    class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                    <span class="categories-block-number-text">180</span>
                                </div> --}}
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block" style="background-color: #F65129">
                            <a href="https://smartteck.conectar.site/lojista/site/gerenciar"
                                class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-play-circle-fill"></i>

                                <small class="categories-block-title">Lojista</small>

                                {{-- <div
                                    class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                    <span class="categories-block-number-text">340</span>
                                </div> --}}
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block" style="background-color: #F65129">
                            <a href="https://smartteck.conectar.site/convenio/site/gerenciar"
                                class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-globe"></i>

                                <small class="categories-block-title">
                                    Clube de Benefícios
                                </small>

                                {{-- <div
                                    class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                    <span class="categories-block-number-text">140</span>
                                </div> --}}
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block" style="background-color: #F65129">
                            <a href="https://smartteck.conectar.site/corporativo/site/gerenciar"
                                class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-people"></i>

                                <small class="categories-block-title">
                                    Corporações
                                </small>

                                {{-- <div
                                    class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                    <span class="categories-block-number-text">84</span>
                                </div> --}}
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block" style="background-color: #F65129">
                            <a href="" class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-file"></i>

                                <small class="categories-block-title">
                                    Pos web
                                </small>

                                {{-- <div
                                    class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                    <span class="categories-block-number-text">84</span>
                                </div> --}}
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block" style="background-color: #F65129">
                            <a href="https://smartteck.com.br/api"
                                class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-file"></i>

                                <small class="categories-block-title">
                                    Documentação API
                                </small>

                                {{-- <div
                                    class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                    <span class="categories-block-number-text">84</span>
                                </div> --}}
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="reviews-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h2 class="text-center mb-5">
                            Clientes satisfeitos
                        </h2>

                        <div class="owl-carousel owl-theme reviews-carousel">

                            <div class="reviews-thumb">
                                <div class="reviews-info d-flex align-items-center">
                                    <img src="{{ asset('home/images/avatar/medium-shot-smiley-senior-man.jpg') }}"
                                        class="avatar-image img-fluid" alt="">

                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="mb-0">
                                            <strong>Italo</strong>
                                            <small>Líder Técnico</small>
                                        </p>

                                        <div class="reviews-icons">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star"></i>
                                            <i class="bi-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="reviews-body">
                                    <img src="{{ asset('home/images/left-quote.png') }}" class="quote-icon img-fluid"
                                        alt="">

                                    <h4 class="reviews-title">
                                        Atendimento ao Cliente da smartteck merece nota 100! Consultoria realizada com excelência.
                                    </h4>
                                </div>
                            </div>

                            <div class="reviews-thumb">

                                <div class="reviews-info d-flex align-items-center">
                                    <img src="{{ asset('home/images/avatar/portrait-beautiful-young-woman.jpg') }}"
                                        class="avatar-image img-fluid" alt="">

                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="mb-0">
                                            <strong>Haley</strong>
                                            <small>Vendas e marketing
                                            </small>
                                        </p>

                                        <div class="reviews-icons">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="reviews-body">
                                    <img src="{{ asset('home/images/left-quote.png') }}" class="quote-icon img-fluid"
                                        alt="">

                                    <h4 class="reviews-title">Quando o atendimento ao cliente é cortês, rápido, atencioso e
                                        sério,
                                        sentimos confiança.</h4>
                                </div>
                            </div>

                            <div class="reviews-thumb">
                                <div class="reviews-info d-flex align-items-center">
                                    <img src="{{ asset('home/images/avatar/blond-man-happy-expression.jpg') }}"
                                        class="avatar-image img-fluid" alt="">

                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="mb-0">
                                            <strong>Jackson</strong>
                                            <small>Operações de desenvolvimento</small>
                                        </p>

                                        <div class="reviews-icons">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star"></i>
                                            <i class="bi-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="reviews-body">
                                    <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                                    <h4 class="reviews-title">A Smartteck nos passa confiança,
                                        essencial para o funcionamento da minha empresa.</h4>
                                </div>
                            </div>

                            <div class="reviews-thumb">
                                <div class="reviews-info d-flex align-items-center">
                                    <img src="{{ asset('home/images/avatar/university-study-abroad-lifestyle-concept.jpg') }}"
                                        class="avatar-image img-fluid" alt="">

                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="mb-0">
                                            <strong>Kevin</strong>
                                            <small>Estágio</small>
                                        </p>

                                        <div class="reviews-icons">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="reviews-body">
                                    <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                                    <h4 class="reviews-title">Somos parceiros de negócios há muitos anos. É uma empresa
                                        confiável, comprometida e inovadora.</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="cta-section">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-10">
                        <h2 class="text-white mb-2">Mais 1 mil crientes satisfeitos</h2>

                        <p class="text-white">Se você estiver procurando por antecipações de recebíveis, conheça a
                            smartteck.</p>
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
