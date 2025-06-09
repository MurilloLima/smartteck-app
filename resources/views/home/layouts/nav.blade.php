<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('home/images/50x50.png') }}" class="img-fluid logo-image">

            <div class="d-flex flex-column" style="text-align: center">
                <strong class="logo-text" style="color: #000;">Smartteck</strong>
                <small class="logo-slogan">Soluções inteligente</small>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center ms-lg-5">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">A Empresa</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Serviços</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a href="https://smartteck.adiantesa.com/" class="dropdown-item">Antecipação de
                                Recebíveis</a></li>
                        <li><a href="https://emprestimos.sistemashugo.com.br/painel/"
                                class="dropdown-item">Administrador</a></li>
                        <li><a href="https://smartteck.conectar.site/lojista/site/gerenciar"
                                class="dropdown-item">Lojista</a></li>
                        <li><a href="https://smartteck.conectar.site/convenio/site/gerenciar"
                                class="dropdown-item">Clube de Benefícios</a></li>
                        <li><a href="https://smartteck.conectar.site/corporativo/site/gerenciar"
                                class="dropdown-item">Corporações</a></li>
                        <li><a href="https://smartteck.conectar.site/pos/index.php/site/gerenciar"
                                class="dropdown-item">Pos-web</a></li>
                        <li><a href="https://smartteck.com.br/api" class="dropdown-item">Documentação API</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.pages.news') }}">Notícias</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.pages.contact.index') }}">Contatos</a>
                </li>

                {{-- <li class="nav-item ms-lg-auto">
                    <a class="nav-link" href="#">Register</a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link custom-btn btn" href="https://smartteck.com.br/cobrancas/acesso">Área do
                        cliente</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
