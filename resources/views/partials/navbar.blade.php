<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <a class="navbar-brand" href="home">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($tittle=="Home") ? 'active' : '' }}" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle=="About") ? 'active' : '' }}" href="about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle=="Blogs") ? 'active' : '' }}" href="posts">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>