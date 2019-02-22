<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="popular.php">Most Popular</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="topRated.php">Top Rate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="session.php">Guest Session</a>
      </li>
    </ul>
    <form action="search.php" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" name='query' placeholder="Search in DB movies" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>