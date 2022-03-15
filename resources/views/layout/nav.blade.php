<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-light" href="/">TR PBP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item {{request()->is('/') ? 'active' : ''}}">
        <a class="nav-link text-light" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{request()->is('guru') ? 'active' : ''}}">
        <a class="nav-link text-light" href="/guru">Guru</a>
      </li>
      <li class="nav-item {{request()->is('siswa') ? 'active' : ''}}">
        <a class="nav-link text-light" href="/siswa">Siswa</a>
      </li>
      <li class="nav-item {{request()->is('about') ? 'active' : ''}}">
          <a class="nav-link text-light" href="/about">About</a>
        </li>
    </ul>
  </div>
</nav>