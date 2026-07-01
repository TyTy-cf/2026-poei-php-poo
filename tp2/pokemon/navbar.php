<nav class="navbar navbar-expand-lg p-4 border-bottom bg-dark bg-gradient" data-bs-theme="dark">
  <a class="navbar-brand" href="index.php" style="cursor: pointer;">Pokemon</a>
  <div class="d-flex justify-content-between w-100 align-items-center flex-row" id="navbarSupportedContent">
    <a class="nav-link" href="add.php" style="cursor: pointer;">ADD A Pokemon</a>
    <a class="nav-link" href="findby.php" style="cursor: pointer;">Find by</a>

    <form class="form-inline my-2 my-lg-0 d-flex justify-content-end g-3" method="get" action="search.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="pokemon_id">
      <button class=" btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
