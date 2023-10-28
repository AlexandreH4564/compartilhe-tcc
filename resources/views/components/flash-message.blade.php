<div>
    <div class="container-fluid">
        <div class="row">
            @if (session('msg'))
                <p class="msg" id="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
        </div>
    </div>
</div>