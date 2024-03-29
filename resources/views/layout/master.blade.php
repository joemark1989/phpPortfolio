<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JM Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/index.css"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
</head>
<body>

<header>
<nav class="navbar sticky-top navbar-expand-lg navbar-light">
      <button class="navbar-toggler mt-3 mb-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav">
        </div>
        <div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white font-weight-bold" href="{{route("home")}}">
                <div class="navLink">
                  Home
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="link nav-link text-white font-weight-bold" href="{{route("about")}}">
                <div class="navLink">
                  About
                    </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="link nav-link text-white font-weight-bold" href="{{route("projects")}}">
                <div class="navLink">
                  Projects
                    </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="link nav-link text-white font-weight-bold" href="/JM-Resume.pdf" target="_blank" rel="noopener noreferrer">
                <div class="navLink">
                  Resume
                    </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="link nav-link text-white font-weight-bold" href="{{route("contact")}}">
                <div class="navLink">
                  Contact
                    </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
</header>


    <main>
        @yield("content")
    </main>
    <div class="container-fluid text-center footer text-white">
      <div> 
        <a href="https://twitter.com/_JosephM89" aria-label="twitter" target="_blank" rel="noopener noreferrer">
          <i class="fa fa-twitter fa-3x mr-4 mt-3"></i>
        </a>
        <a href="https://www.linkedin.com/in/joseph-markley-513489107/" aria-label="linkedin" target="_blank" rel="noopener noreferrer">
          <i class="fa fa-linkedin fa-3x mr-4"></i>
        </a>
        <a href="https://stackoverflow.com/users/11781787/joseph-markley" aria-label="stackoverflow" target="_blank" rel="noopener noreferrer">
          <i class="fa fa-stack-overflow fa-3x mr-4"></i>
        </a>
        <a href="https://github.com/joemark1989" target="_blank" aria-label="github" rel="noopener noreferrer">
          <i class="fa fa-github fa-3x mr-4 mb-2" ></i>
        </a>
        <p>© 2019 Joseph E. Markley Jr.</p>
      </div>
    </div>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>