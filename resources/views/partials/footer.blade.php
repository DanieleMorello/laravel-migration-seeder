<footer class="bg-dark text-white py-4">

    <div class="container">
        <div class="row">
            <div class="col">
            @include('partials.logo')

            </div>
            <div class="col">
                <h3>Link utili</h3>
                <ul class="list-unstyled">
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'text-white' : '' }}" href="{{ route('home') }}" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'text-white' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                       <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'text-white' : '' }}" href="{{ route('contacts') }}">Contattaci</a>
                    </li>

                </ul>
            </div>
            <div class="col">
                <h3>Legal</h3>
                <ul class="list-unstyled">
                    <li>
                        <a href="#">
                            Cookies
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Privacy
                        </a>
                    </li>

                </ul>
            </div>
            <p class="lead p-5">
                    Copyright &copy; 2023 Daniele Morello classe 91 Boolean, all rights reserved.

                </p>
        </div>
    </div>


</footer>
