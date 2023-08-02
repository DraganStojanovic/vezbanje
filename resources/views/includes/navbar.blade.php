<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link {{ Request::path() ==  '/' ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::path() ==  '/dodaj-ocenu' ? 'active' : '' }}" href="/dodaj-ocenu">Add Grade</a>
        </li>
    </ul>
</nav>
