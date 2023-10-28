<div>
    <div class="container-fluid">
        <div class="row">
            @if (session('erro'))
                <p class="erro" id="msg">{{ session('erro') }}</p>
            @endif
        </div>
    </div>
</div>