<div class="footer-container">
    <footer>
            <div class="footer-links">
                <div class="flex items">
                    <div class="footer links">
                        <div class="link-item">
                            <a href="https://www.dish.co/ES/es/" class="footer-btn">{{ __('reserve')}}</a>
                        </div>
                        <div class="link-item">
                            <a href="https://mensakas.coopcycle.org/es/" class="footer-btn">{{ __('La Cantina to home')}}</a>
                        </div>
                        <div class="link-item">
                            <a href="https://mensakas.coopcycle.org/es/" class="footer-btn">{{ __('La Cantina to GO')}}</a>
                        </div>
                    </div>
                </div>
            </div>

        <div class="logo-fotter">
            <img src="{{ asset('imagenes/logo_rojo.png') }}" alt="Logo">
            <h1 >
                <a href="tel:+937444799" class="telefono">937 44 47 99</a>
            </h1>
        </div>

                <div class="redes">
                    <div class="links-redes">
                        <a target="_blank" href="https://www.facebook.com/cantinalab.coop/?locale=es_ES"><img src="https://lateral-production.s3.eu-west-3.amazonaws.com/public/icon/facebook.svg" alt="Facebook"></a>
                        <a target="_blank" href="https://www.instagram.com/cantinalab.coop/"><img src="https://lateral-production.s3.eu-west-3.amazonaws.com/public/icon/instagram.svg" alt="Instagram"></a>
                    </div>
                    <div class="info-restaurante">
                        <a href="{{ url('/menu') }}" >{{ __('food card')}}</a>
                        <a href="{{ url('/trabajo') }}" >{{ __('Join')}}</a>
                        <a href="{{ url('/quieres_un_evento') }}">{{ __('you want to do an event')}}</a>
                        <a href="{{ url('/opiniones') }}" >{{ __('your opinion matters to us')}}</a>
                        <h4>937 44 47 99</h4>
                        <a href="#" id="go-top" class="bi bi-arrow-up">Ir al Menu</a>
                    </div>
                </div>

    </footer>
</div>
