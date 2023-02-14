<nav class="">
    <!-- Primary Navigation Menu -->
    <div class="">
        <div class="">
            <div>
                <div class="flex">
                    @foreach (config('menu.front_menu.deps1') as $key => $menuList)
                    <ul class="gnb-main-box">
                        <li class="gnb-main-list">
                            <a href="{{ $menuList['url']}}">
                                {{ $menuList['name']}}
                            </a>
                            <ul class="gnb-sub-box flex">
                                @if (is_array($menuListSub = config("menu.front_menu.deps2.$key")))
                                    @foreach ($menuListSub as $sub)
                                    <li class="gnb-sub-list">
                                        <a href="{{$sub['url']}}">{{$sub['name']}}</a>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
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
