<nav class="navbar navbar-expand-lg navbar-light nvbr">
    <div class=" container">
        <a class="navbar-brand mb-0 nvbr-logow" href="/"><img src={{ asset('img/LOGO-ITENAS-BANDUNG-PMB.png') }}
                alt="ITENAS" width="140px" class="mx-2">{{ $title }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item fontnavbar">
                    <a class="nav-link {{ $title === ' Home' ? 'active' : '' }}" href="/">Jaringan</a>
                </li>
                <li class="nav-item fontnavbar">
                    <a class="nav-link {{ $title === ' About' ? 'active' : '' }}" href="/aset">Aset</a>
                </li>
                {{-- <li class="nav-item fontnavbar">
                    <a class="nav-link {{ $title === ' Posts' ? 'active' : '' }}" href="/jtable">Detail</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
