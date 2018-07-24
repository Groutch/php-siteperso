
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/public">Site Perso</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      </li>
    </ul>
    <ul class="navbar-nav my-2 my-lg-0">
      <li class="nav-item">
        <form action="/public/index.php" method=GET>
            <input hidden type="text" value="bio" name="page">
            <button class="btn btn-primary" id="page">Bio</button>
        </form>
      </li>
        <li class="nav-item">
        <form action="/public/index.php" method=GET>
            <input hidden type="text" value="contact" name="page">
            <button class="btn btn-primary" id="page">Contact</button>
        </form>
      </li>
  </div>
</nav>