<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/css/uikit.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/Frontend/css') }}/responsive.css">
    <link rel="stylesheet" href="{{ asset('/Frontend/css') }}/style.css">
    <link rel="stylesheet" href="{{ asset('/Frontend/css') }}/codepen.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <title>Fiber Net</title>
  </head>
  <body>
    <div class="container-fluid py-2 bg-dark text-light">
      <p style="font-size: 12px; display: flex; justify-content: flex-end; margin-right: 25px;" class="text-light mb-0">Hotline: 01841-256257 | Email: info@feniFiberNet.com</p>
  </div>
<header>
      <nav class="navbar navbar-expand-lg" uk-sticky="animation: uk-animation-slide-top">
        <div class="container p-0">
          <a class="navbar-brand ml-5" href="{{ url('/home') }}">
            <img style="height: 50px; border-radius: 40%;" src="{{ asset('/Frontend/image') }}/fiber1.jpg" alt="FiberNet-logo">
          </a>
          <button class="navbar-toggler barIcon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
				<i class="fa fa-bars" style="color: #fff;" aria-hidden="true"></i>
			</span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0" style="margin-left: 35%;">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/services') }}">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/pricing') }}">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/about-us') }}">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/service-area') }}">Service Area</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/team') }}">Team</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>