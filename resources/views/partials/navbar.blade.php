<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Kevin Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ str_contains($title,'All Post') ? 'active' : '' }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ str_contains($title,'Category') ? 'active' : '' }}" href="/category">Category</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i>Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
          <li class="nav-item">
            <a class="nav-link {{ str_contains($title,'Register') ? 'active' : '' }}" href="/register"><i class="bi bi-person-add"></i> Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ str_contains($title,'Login') ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right mr"></i> Login</a>
          </li>
        @endauth
        </ul>    
        
      </div>
    </div>
</nav>