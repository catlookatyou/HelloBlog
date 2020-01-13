<nav class="navbar navbar-expand-md bg-light fixed-top">
    <div class="container">
        <a href="{{  route('index') }}" class="navbar-brand" style="font: 22px/1.5 ‘Microsoft YaHei’,arial,tahoma,\5b8b\4f53,sans-serif;">好部落格</a>
        <form action="{{ route('search') }}" method="GET" class="form-inline" role="search">
            <input type="search" class="form-control form-control-sm mr-md-2" 
            name="keyword" placeholder="搜尋文章" aria-label="Search" style="width: 300px;">
            <button type="submit" class="btn btn-sm btn-outline-primary my-2 my-md-0">
                <i class="fas fa-search"></i>
                搜尋
            </button>
        </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item">
                        <a href="{{ route('notifications.index') }}" class="nav-link">🔔
                            <span class="badge badge-light badge-secondary m1-2">
                                {{ Auth::user()->notification_count }}
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('users.showAvatar') }}" class="px-1">
                            <img src="{{ Auth::user()->getAvatarUrl() }}"
                            style="width: 30px; height: 30px;" class="rounded-circle mt-1">
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('users.showPosts', ['id' => Auth::user()->id]) }}">
                                我的文章
                            </a>
                            <a class="dropdown-item" href="{{ route('showLike') }}">
                                喜歡的文章
                            </a>
                            <a class="dropdown-item" href="{{ route('users.editName') }}">
                                修改名稱
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault(); $('#logout-form').submit();">登出</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">登入</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">註冊</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<div style="padding-top: 70px;"></div>
