<nav class="">
    <!-- Primary Navigation Menu -->
    <div class="">
        <div class="">
            <div>
                <div class="flex">
                    @foreach ($nav_menu as $nav_menu1)
                    <ul>
                        <li>
                            <a href="">
                                {{$nav_menu1->me_name}}
                            </a>
                            {{--2뎁스 메뉴출력 --}}
                            {{-- <ul>
                                @foreach ($nav_menu as $nav_menu2[$loop->index])
                                <li>
                                    {{$nav_menu2}}
                                </li>
                                @endforeach
                            </ul> --}}
                        </li>
                    </ul>
                    @endforeach
                    {{-- 로그인 로그아웃 --}}
                    <div>
                        @auth
                            <div>{{ Auth::user()->name }}</div>
                        @endauth
                        @if (Route::has('login'))
                            <div class="">
                                @auth
                                    <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">home</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                        {{-- @if (!Route::has('login')) --}}
                            @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                    로그아웃
                                </a>
                            </form>
                        @endauth
                    {{-- @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
