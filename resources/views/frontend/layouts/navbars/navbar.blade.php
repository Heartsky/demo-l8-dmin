@auth()
    @include('frontend.layouts.navbars.navs.auth')
@endauth

@guest()
    @include('frontend.layouts.navbars.navs.guest')
@endguest
