<header>
    {{-- strisca azzura --}}
    <div class="d-flex justify-content-end container-blue">

            <h5>DC POWERS </h5>
        </div>
        {{-- container nav-bar --}}
    <div class="container d-flex justify-content-between align-items-center pt-4 ">
        <div>
            <img src="{{Vite::asset('/resources/img/dc-logo.png')}}" alt="">
        </div>
        <div class="nav-bar">
            <ul class="d-flex justify-content-center ">
                <li>
                    <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a class="{{Route::currentRouteName() === 'blog' ? 'active' : '' }}" href="{{route('blog')}}">Blog</a>
                </li>
                <li>
                    <a href="">Contatti</a>
                </li>
                <li>
                    <a href="">Films</a>
                </li>
            </ul>


        </div>
    </div>
        {{-- JUMBOTRON --}}
    <div class="jumbotron">
        <img src="{{Vite::asset('/resources/img/jumbotron.jpg')}}" alt="">

    </div>

</header>