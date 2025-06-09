<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="d-flex align-items-center mb-4">
                    <img src="{{ asset('home/images/50x50.png') }}" class="img-fluid logo-image">

                    <div class="d-flex flex-column">
                        <strong class="logo-text" style="color: #000">Smartteck</strong>
                        <small class="logo-slogan">Soluções inteligente</small>
                    </div>
                </div>

                <p class="mb-2">
                    <i class="custom-icon bi-globe me-1"></i>

                    <a href="#" class="site-footer-link">
                        www.smartteck.com.br
                    </a>
                </p>

                <p class="mb-2">
                    <i class="custom-icon bi-telephone me-1"></i>

                    <a href="tel: 99 98178-1992" class="site-footer-link">
                        99 98178-1992
                    </a>
                </p>

                <p>
                    <i class="custom-icon bi-envelope me-1"></i>

                    <a href="mailto:contato@smartteck.com.br" class="site-footer-link">
                        contato@smartteck.com.br
                    </a>
                </p>

            </div>

            <div class="col-lg-2 col-md-3 col-6 ms-lg-auto">
                <h6 class="site-footer-title">Sobre</h6>

                <ul class="footer-menu">
                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">A Empresa</a></li>

                    <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">
                            Notícias
                        </a>
                    </li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contatos</a></li>

                    {{-- <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li> --}}
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <h6 class="site-footer-title">Serviços</h6>
            </div>

            <div class="col-lg-4 col-md-8 col-12 mt-3 mt-lg-0">
                <h6 class="site-footer-title">Newsletter</h6>

                <form class="custom-form newsletter-form" action="#" method="post" role="form">
                    <h6 class="site-footer-title">Receba notícias notificadas</h6>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi-person"></i></span>

                        <input type="text" name="newsletter-name" id="newsletter-name" class="form-control"
                            placeholder="seuemail@gmail.com" required>

                        <button type="submit" class="form-control" style="background-color: #F65129;">
                            <i class="bi-send"></i>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="site-footer-bottom" style="background-color: #f65129">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12 d-flex align-items-center">
                    <p class="copyright-text">Copyright © Smartteck 2025</p>

                    <ul class="footer-menu d-flex">
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">
                                Política de Privacidade
                            </a>
                        </li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Termos</a></li>
                    </ul>
                </div>

                <div class="col-lg-5 col-12 mt-2 mt-lg-0">

                </div>

                <div class="col-lg-3 col-12 mt-2 d-flex align-items-center mt-lg-0">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-linkedin"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>
                    </ul>
                </div>

                <a class="back-top-icon bi-arrow-up smoothscroll d-flex justify-content-center align-items-center"
                    href="#top" style="background-color: #000;"></a>

            </div>
        </div>
    </div>
</footer>
