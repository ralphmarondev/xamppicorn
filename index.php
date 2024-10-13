<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>I am CUTE</title>
  <link
    rel="stylesheet"
    href="vendors/fontawesome-free-6.6.0-web/css/all.css" />
  <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/custom.css" />

  <link rel="shortcut icon" href="img/logo-1.jpg" type="image/x-icon" />
</head>

<body style="padding-top: 60px">
  <!-- header -->
  <header
    class="navbar navbar-expand-lg navbar-light bg-light py-3 px-5 align-items-center fixed-top">
    <div class="container-fluid overflow-hidden">
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
              aria-current="page">Home</a>
          </li>
          <li class="nav-item">
            <a href="#members" class="nav-link text-primary">Members</a>
          </li>
          <li class="nav-item">
            <a href="#services" class="nav-link text-primary">Services</a>
          </li>
        </ul>
        <button
          class="btn btn-primary"
          type="button"
          data-bs-toggle="modal"
          data-bs-target="#login-modal">
          LOGIN
        </button>
      </div>
    </div>
  </header>

  <!-- home section -->
  <section id="home">
    <div class="container vh-90 d-flex align-items-center">
      <div class="row d-flex align-items-center">
        <div class="col p-3">
          <div class="container">
            <h1 class="text-primary fw-semibold">I am Cute</h1>
            <p class="fs-5">
              Collaborative website created for
              <span class="text-primary fw-semibold">Online Techonology</span>
              Subject as a 4th year
              <span class="text-primary fw-semibold">Computer Engineering Student</span>
              at
              <span class="text-primary fw-semibold">Cagayan State University</span>
              - Carig Campus.
            </p>
            <a href="#members" class="btn btn-primary" type="button">See Members</a>
          </div>
        </div>
        <div class="col p-3">
          <div class="container">
            <!-- todo: Animate this, make the photo change for every 3 seconds -->
            <img
              src="img/logo-1.jpg"
              alt="Logo"
              class="rounded mx-auto d-block"
              width="420" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- members section -->
  <section id="members" style="background: #943bb2">
    <div class="container p-3">
      <h2 class="text-center mb-4 color-white fw-bold">Members</h2>

      <div class="row align-items-center justify-content-center">
        <div class="col m-3">
          <div class="card align-items-center" style="max-width: 300px">
            <a href="https://ralphmarondev.github.io/" target="_blank">
              <img
                src="img/ralphmaron.jpg"
                class="card-img-top p-3"
                alt="Ralph Maron Eda"
                style="
                    height: 240px;
                    width: 240px;
                    object-fit: cover;
                    border-radius: 50%;
                  " /></a>
            <div class="card-body">
              <h5 class="card-title text-center text-primary fw-bold fs-5">
                Ralph Maron Eda
              </h5>
              <p class="card-text text-center text-secondary fw-semibold">
                Computer Engineer
              </p>

              <p class="fw-lighter text-center pt-2 pb-3">
                <!-- Full-time sleeper, part-time dreamer—my favorite programming
                  language is nap! 😴 -->
                <!-- Living life one nap at a time—who needs code when you have
                  dreams? -->
                Living life one nap at a time — dreams > coding! 😴✨
              </p>

              <div class="d-flex justify-content-center mt-3">
                <a
                  href="https://github.com/ralphmarondev"
                  class="me-3 text-primary"
                  target="_blank"
                  title="Github">
                  <i class="fab fa-github fa-lg"></i>
                </a>

                <a
                  href="#"
                  class="me-3 text-primary"
                  target="_blank"
                  title="Facebook"><i class="fab fa-facebook fa-lg"></i></a>

                <a
                  href="https://www.linkedin.com/in/ralph-maron-eda-95a014250/"
                  class="me-3 text-primary"
                  target="_blank"
                  title="LinkedIn"><i class="fab fa-linkedin fa-lg"></i></a>

                <a
                  href="https://ph.pinterest.com/cutieralphmaron/"
                  class="me-3 text-primary"
                  target="_blank"
                  title="Pinterest"><i class="fab fa-pinterest fa-lg"></i></a>

                <a
                  href="#"
                  class="text-primary"
                  target="_blank"
                  title="Instagram">
                  <i class="fab fa-instagram fa-lg"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col m-3">
          <div class="card align-items-center" style="max-width: 300px">
            <a href="https://ralphmarondev.github.io/" target="_blank">
              <img
                src="img/jack.jpg"
                class="card-img-top p-3"
                alt="Jack Cabbigayan"
                style="
                    height: 240px;
                    width: 240px;
                    object-fit: cover;
                    border-radius: 50%;
                  " /></a>
            <div class="card-body">
              <h5 class="card-title text-center text-primary fw-bold fs-5">
                Jack Cabbigayan
              </h5>
              <p class="card-text text-center text-secondary fw-semibold">
                Computer Engineer
              </p>

              <p class="fw-lighter text-center pt-2 pb-3">
                Expert napper dedicated to perfecting the art of sleeping!
                🌙😌
              </p>

              <div class="d-flex justify-content-center mt-3">
                <a
                  href="https://github.com/ralphmarondev"
                  class="me-3 text-primary"
                  target="_blank"
                  title="Github">
                  <i class="fab fa-github fa-lg"></i>
                </a>

                <a
                  href="#"
                  class="me-3 text-primary"
                  target="_blank"
                  title="Facebook"><i class="fab fa-facebook fa-lg"></i></a>

                <a
                  href="https://www.linkedin.com/in/ralph-maron-eda-95a014250/"
                  class="me-3 text-primary"
                  target="_blank"
                  title="LinkedIn"><i class="fab fa-linkedin fa-lg"></i></a>

                <a
                  href="https://ph.pinterest.com/cutieralphmaron/"
                  class="me-3 text-primary"
                  target="_blank"
                  title="Pinterest"><i class="fab fa-pinterest fa-lg"></i></a>

                <a
                  href="#"
                  class="text-primary"
                  target="_blank"
                  title="Instagram">
                  <i class="fab fa-instagram fa-lg"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col m-3">
          <div class="card align-items-center" style="max-width: 300px">
            <a href="https://ralphmarondev.github.io/" target="_blank">
              <img
                src="img/triesha.jpg"
                class="card-img-top p-3"
                alt="Triesha Mae Olunan"
                style="
                    height: 240px;
                    width: 240px;
                    object-fit: cover;
                    border-radius: 50%;
                  " /></a>
            <div class="card-body">
              <h5 class="card-title text-center text-primary fw-bold fs-5">
                Triesha Mae Olunan
              </h5>
              <p class="card-text text-center text-secondary fw-semibold">
                Computer Engineer
              </p>

              <p class="fw-lighter text-center pt-2 pb-3">
                Living my best life: naps, snacks, and zero coding! 🍕😄
              </p>

              <div class="d-flex justify-content-center mt-3">
                <a
                  href="https://github.com/ralphmarondev"
                  class="me-3 text-primary"
                  target="_blank"
                  title="Github">
                  <i class="fab fa-github fa-lg"></i>
                </a>

                <a
                  href="#"
                  class="me-3 text-primary"
                  target="_blank"
                  title="Facebook"><i class="fab fa-facebook fa-lg"></i></a>

                <a
                  href="https://www.linkedin.com/in/ralph-maron-eda-95a014250/"
                  class="me-3 text-primary"
                  target="_blank"
                  title="LinkedIn"><i class="fab fa-linkedin fa-lg"></i></a>

                <a
                  href="https://ph.pinterest.com/cutieralphmaron/"
                  class="me-3 text-primary"
                  target="_blank"
                  title="Pinterest"><i class="fab fa-pinterest fa-lg"></i></a>

                <a
                  href="#"
                  class="text-primary"
                  target="_blank"
                  title="Instagram">
                  <i class="fab fa-instagram fa-lg"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col m-3">
          <div class="card align-items-center" style="max-width: 300px">
            <a href="https://ralphmarondev.github.io/" target="_blank">
              <img
                src="img/jezlyn.jpg"
                class="card-img-top p-3"
                alt="Jezlyn Cabbab"
                style="
                    height: 240px;
                    width: 240px;
                    object-fit: cover;
                    border-radius: 50%;
                  " /></a>
            <div class="card-body">
              <h5 class="card-title text-center text-primary fw-bold fs-5">
                Jezlyn Cabbab
              </h5>
              <p class="card-text text-center text-secondary fw-semibold">
                Computer Engineer
              </p>

              <p class="fw-lighter text-center pt-2 pb-3">
                Sleep is my passion; coding is just a distant memory. 💤💻
              </p>

              <div class="d-flex justify-content-center mt-3">
                <a
                  href="https://github.com/ralphmarondev"
                  class="me-3 text-primary"
                  target="_blank"
                  title="Github">
                  <i class="fab fa-github fa-lg"></i>
                </a>

                <a
                  href="#"
                  class="me-3 text-primary"
                  target="_blank"
                  title="Facebook"><i class="fab fa-facebook fa-lg"></i></a>

                <a
                  href="https://www.linkedin.com/in/ralph-maron-eda-95a014250/"
                  class="me-3 text-primary"
                  target="_blank"
                  title="LinkedIn"><i class="fab fa-linkedin fa-lg"></i></a>

                <a
                  href="https://ph.pinterest.com/cutieralphmaron/"
                  class="me-3 text-primary"
                  target="_blank"
                  title="Pinterest"><i class="fab fa-pinterest fa-lg"></i></a>

                <a
                  href="#"
                  class="text-primary"
                  target="_blank"
                  title="Instagram">
                  <i class="fab fa-instagram fa-lg"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- services section -->
  <section id="services" style="background: #ee8257">
    <div class="container p-3 d-flex flex-column align-items-center">
      <h2 class="text-center mb-4 color-white fw-bold">Our Services</h2>

      <div class="row align-items-center justify-content-center">
        <div class="col m-3">
          <div class="card align-items-center" style="max-width: 300px">
            <img
              src="img/webdev.png"
              class="card-img-top p-3"
              alt="Ralph Maron Eda"
              style="
                  height: 240px;
                  width: 240px;
                  object-fit: cover;
                  border-radius: 50%;
                " />
            <div class="card-body">
              <h5 class="card-title text-center text-primary fw-bold fs-5">
                Web Developer
              </h5>
              <p class="card-text text-center text-secondary fw-semibold">
                Build functional, responsive website tailored to your business
                needs.
              </p>
              <h3 class="text-primary text-center">$400</h3>
            </div>
          </div>
        </div>
        <div class="col m-3">
          <div class="card align-items-center" style="max-width: 300px">
            <img
              src="img/webdesign.png"
              class="card-img-top p-3"
              alt="Ralph Maron Eda"
              style="
                  height: 240px;
                  width: 240px;
                  object-fit: cover;
                  border-radius: 50%;
                " />
            <div class="card-body">
              <h5 class="card-title text-center text-primary fw-bold fs-5">
                Web Design
              </h5>
              <p class="card-text text-center text-secondary fw-semibold">
                Crafts visually appealing and user-friendly website designs.
              </p>
              <h3 class="text-primary text-center">$350</h3>
            </div>
          </div>
        </div>
        <div class="col m-3">
          <div class="card align-items-center" style="max-width: 300px">
            <img
              src="img/webarch.png"
              class="card-img-top p-3"
              alt="Ralph Maron Eda"
              style="
                  height: 240px;
                  width: 240px;
                  object-fit: cover;
                  border-radius: 50%;
                " />
            <div class="card-body">
              <h5 class="card-title text-center text-primary fw-bold fs-5">
                Web Architecture
              </h5>
              <p class="card-text text-center text-secondary fw-semibold">
                Designs scalable, secure, and efficient web structures for
                optimal performance.
              </p>
              <h3 class="text-primary text-center">$300</h3>
            </div>
          </div>
        </div>
        <div class="col m-3">
          <div class="card align-items-center" style="max-width: 300px">
            <img
              src="img/mobiledev.png"
              class="card-img-top p-3"
              alt="Ralph Maron Eda"
              style="
                  height: 240px;
                  width: 240px;
                  object-fit: cover;
                  border-radius: 50%;
                " />
            <div class="card-body">
              <h5 class="card-title text-center text-primary fw-bold fs-5">
                Mobile Developer
              </h5>
              <p class="card-text text-center text-secondary fw-semibold">
                Creates mobile apps for seamless experiences on iOS and
                Android platforms.
              </p>
              <h3 class="text-primary text-center">$500</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer section -->
  <footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <h5 class="text-uppercase fs-5 fw-semibold text-primary">
            About Us
          </h5>
          <p>
            We are dedicated on providing the best services and experiences
            for our community. And
            <span class="text-primary fw-semibold">We Are Cute!</span>
          </p>
        </div>

        <div
          class="col-lg-4 col-md-12 mb-4 align-items-center d-flex flex-column">
          <h5 class="text-uppercase fs-5 fw-semibold text-primary">Awards</h5>
          <ul class="list-unstyled">
            <li class="text-primary fw-normal">Very Humble.</li>
            <li class="text-primary fw-normal">Very Cutesy.</li>
            <li class="text-primary fw-normal">Very Demure.</li>
          </ul>
        </div>

        <div
          class="col-lg-4 col-md-12 mb-4 d-flex align-items-end flex-column">
          <h5 class="text-uppercase fs-5 fw-semibold text-primary">
            Location
          </h5>
          <p>Planet: Earth</p>
          <p>Galaxy: Milky Way</p>
        </div>
      </div>
    </div>

    <div class="text-center p-3 bg-light">
      <p>
        &copy; 2024 <span class="text-primary">I am CUTE</span> . All Rights
        Reserved.
      </p>
    </div>
  </footer>

  <!-- modals -->
  <div
    class="modal fade"
    id="login-modal"
    tabindex="-1"
    aria-labelledby="login-modal"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary fw-bold fs-4" id="login-modal">
            LOGIN
          </h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col mb-3">
                <label for="username-input" class="form-label">Username</label>
                <input
                  type="text"
                  name="username-input"
                  id="username-input"
                  class="form-control"
                  placeholder="Enter your username" />
              </div>
            </div>

            <div class="row">
              <div class="col mb-3">
                <label for="password-input" class="form-label">Password</label>
                <input
                  type="password"
                  name="password-input"
                  id="password-input"
                  class="form-control"
                  placeholder="Enter your password" />
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="login-btn">
            LOGIN
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- sticky contact button -->
  <a href="contact.php" class="sticky-button btn btn-primary">Say CUTE!</a>

  <!-- scripts -->
  <script src="vendors/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="js/auth.js"></script>
</body>

</html>