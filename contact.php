<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>z
  <link
    rel="stylesheet"
    href="vendors/fontawesome-free-6.6.0-web/css/all.css" />
  <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/custom.css" />

  <link rel="shortcut icon" href="img/logo-1.jpg" type="image/x-icon" />
</head>

<body>
  <!-- header -->
  <header
    class="navbar navbar-expand-lg navbar-light bg-light py-3 px-5 align-items-center position-sticky top-0">
    <div class="container-fluid">
      <a href="#" class="navbar-brand text-primary fw-semibold">
        <img
          src="img/logo-1.jpg"
          alt="Logo"
          style="width: 32px; height: 32px; object-fit: cover" />
        I am CUTE</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbar-supported-content"
        aria-controls="navbar-supported-content"
        aria-expanded="false"
        aria-label="toggle-navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse ms-3"
        id="navbar-supported-content">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a
              href="#home"
              class="nav-link active text-primary"
              aria-current="page">Hello there, get in touch with us!</a>
          </li>
        </ul>

        <div class="nav-item me-5">
          <a href="index.php" class="nav-link text-primary">Go Home</a>
        </div>
        <div class="nav-item dropdown me-5">
          <a
            href="#"
            class="nav-link dropdown-toggle text-primary"
            id="navbar-drop-down"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            Select Theme
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbar-drop-dwon">
            <li>
              <a href="#" class="dropdown-item text-primary">Purple [Default]</a>
            </li>
            <li>
              <a href="#" class="dropdown-item text-primary">Orange</a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a href="#" class="dropdown-item text-primary">Custom Color</a>
            </li>
          </ul>
        </div>

        <button class="btn btn-primary" type="button">LOGIN</button>
      </div>
    </div>
  </header>

  <!-- contact form -->
  <div class="vw-100 d-flex justify-content-center">
    <div class="container p-5">
      <div class="card" style="max-width: 500px">
        <div class="card-content p-3 shadow-lg">
          <form id="contact-form">
            <div class="row">
              <div class="col mb-3">
                <label for="name-input" class="form-label">Name</label>
                <input
                  type="text"
                  name="name-input"
                  id="name-input"
                  placeholder="Enter your name"
                  class="form-control"
                  required />
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="email-input" class="form-label">Email</label>
                <input
                  type="email"
                  name="email-input"
                  id="email-input"
                  placeholder="Enter your email"
                  class="form-control"
                  required />
              </div>
            </div>

            <div class="row">
              <div class="col mb-3">
                <label for="message-input" class="form-label">Message</label>
                <textarea
                  name="message-input"
                  id="message-input"
                  class="form-control"
                  required></textarea>
              </div>
            </div>

            <button class="btn btn-primary mt-3">SUBMIT</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <script src="vendors/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="js/contact.js"></script>
</body>

</html>