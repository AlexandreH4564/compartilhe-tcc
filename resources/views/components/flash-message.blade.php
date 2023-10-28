<div>
    <div class="container-fluid">
        <div class="row">
            @if (session('msg'))
                <p class="msg" id="msg">{{ session('msg') }}</p>
            @endif
        </div>
    </div>
</div>