<footer>
    <!-- Sezione superiore del footer -->
    <div class="top-footer">
        <div class="container d-flex align-items-start justify-content-between">
            <!-- Menù -->
            <div class="d-flex align-items-start justify-content-between pb-3 pt-3">
                @foreach ($footerLinks as $link)
                    <div class="pe-4 ps-4">
                        <a href="/"
                            class="link-underline link-underline-opacity-0 text-uppercase text-white text-nowrap fw-bold fs-6 m-0 p-0 pt-4 pb-3">{{ $link['title'] }}</a>
                        @foreach ($link['subheading'] as $subheading)
                            <p>{{ $subheading }}</p>
                        @endforeach
                    </div>
                @endforeach
            </div>

            <!-- Logo -->
            <img class="footer-logo" src="{{ asset('img/dc-logo-bg.png') }}" alt="DC logo">
        </div>
    </div>

    <!-- Sezione inferiore del footer -->
    <div class="bottom-footer pt-4 pb-4">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Pulsante -->
                <div class="col-12 col-md-6">
                    <div class="my-social d-flex align-items-center justify-content-center">
                        <button type="button" class="btn my-btn-footer text-uppercase">
                            sing-up now!
                        </button>
                    </div>
                </div>
                <!-- Social -->
                <div class="col-12 col-md-6">
                    <div class="my-social d-flex align-items-center justify-content-center pt-md-0 pt-4">
                        <p class="m-0 p-0 text-uppercase text-nowrap ps-4">Follow us</p>
                        <img src="{{ asset('img/footer-fb.png') }}" alt="Facebook">
                        <img src="{{ asset('img/footer-tw.png') }}" alt="Twitter">
                        <img src="{{ asset('img/footer-youtube.png') }}" alt="Youtube">
                        <img src="{{ asset('img/footer-pinterest.png') }}" alt="Pinterest">
                        <img src="{{ asset('img/footer-periscope.png') }}" alt="Periscope">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
