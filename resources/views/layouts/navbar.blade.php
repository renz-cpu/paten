<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/paten') }}">PATEN</a>

        <a href="{{ url('/login') }}" class="btn custom-btn d-lg-none ms-auto me-4">LOGIN HERE</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#pengajuan">Pengajuan</a>
                    <a class="nav-link click-scroll" href="{{ route('history') }}">History</a>
                </li>
            </ul>

           <!-- Tombol Profil dengan Dropdown -->
<div class="dropdown d-lg-block d-none">
<a class="btn custom-btn dropdown-toggle" href="#" id="profileDropdown" role="button"
data-bs-toggle="dropdown" aria-expanded="false">
Profil
</a>
<ul class="dropdown-menu" aria-labelledby="profileDropdown">
<li><a class="dropdown-item" href="{{ route('profile.edit') }}">Edit Profil</a></li>
<li><a class="dropdown-item" href="{{ route('history') }}">History Pengajuan</a></li>
<li>
    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
        @csrf
        <button class="dropdown-item" type="submit" onclick="event.preventDefault(); this.closest('form').submit();">
            Keluar
        </button>
    </form>
</li>

</ul>
</div>
        </div>
    </div>
</nav>