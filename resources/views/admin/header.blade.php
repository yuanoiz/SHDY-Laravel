

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="./tab.png" width="30" height="30" alt="">
    </a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" id="speakerslist" href="{{url('dashboard')}}">音箱系列目录 <span class="sr-only">(current)</span></a>
            <a class="nav-link" id="speakersproduct" href="{{route('dashboard.create')}}">音箱产品目录</a>
            <a class="nav-link" id="speakersrecommendproduct" href="{{url('dashboard/recommend')}}">精选产品</a>
            <a class="nav-link" href="{{ route('logout') }}" tabindex="-1" aria-disabled="true" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">注销</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </div>
    </div>
</nav>
