<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
  </head>
  <body>
    <!-- Qui inizia l'header -->
    <header>
      <img src="logo.jpg" alt="">
      <ul>
        <li>
          <a href="home#">Home</a>
        </li>
        <li>
          <a href="about#">About</a>
        </li>
        <li>
          <a href="contact#">Contact</a>
        </li>
      </ul>
    </header>
    <!-- Qui inizia il corpo centrale -->
    <main>
      @yield('content_home')
      @yield('content_about')
      @yield('content_contact')
    </main>
    <!-- Qui inizia il footer -->
    <footer>
      <div class="container">
        <h3>Navigazione</h3>
        <ul>
          <li>
            <a href="home#">Home</a>
          </li>
          <li>
            <a href="about#">About</a>
          </li>
          <li>
            <a href="contact#">Contact</a>
          </li>
        </ul>
      </div>
      <div class="container">
        <h3>Social</h3>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-linkedin"></i>
        <i class="fab fa-twitter"></i>
      </div>
    </footer>
  </body>
</html>
