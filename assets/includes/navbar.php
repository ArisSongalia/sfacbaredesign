
<link rel="stylesheet" href="../../style/style.css" />

<div id="container" style="">
  <!-- Top Contact Bar -->
  <div class="bg-danger text-white py-1 small fixed-top top-contact-bar" style="z-index: 1031;">
    <div class="container-md d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start gap-1">
      <div>
        <i class="bi bi-envelope me-1"></i>admissions.sfacbacoor@gmail.com
        <span class="d-none d-md-inline">|</span>
        <i class="bi bi-telephone ms-md-2 me-1"></i>(046) 501 1135
      </div>
      <div>
        <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-white me-2"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- Main Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top main-navbar shadow bg-white">
    <div class="container-fluid container-md">
      <a class="navbar-brand" href="#">
        <img src="assets/img/sfac_logo.png" alt="SFAC Logo" height="46" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Inquiries</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Registration</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">HED Enrollment</a></li>
              <li><a class="dropdown-item" href="#">BED Enrollment</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Department</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Basic Education</a></li>
              <li><a class="dropdown-item" href="#">Higher Education</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">Student Services</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<style>
  .top-contact-bar {
    transition: transform 0.3s ease, opacity 0.3s ease;
  }

  .top-contact-bar.hidden {
    transform: translateY(-100%);
    opacity: 0;
  }

  .main-navbar {
    position: fixed;
    width: 100%;
    top: 0;
    transition: top 0.3s ease;
    z-index: 1030;
  }

  .main-navbar.shift-up {
    top: 0 !important;
  }
</style>

<script>
  const topBar = document.querySelector(".top-contact-bar");
  const navbar = document.querySelector(".main-navbar");
  let lastScrollY = window.scrollY;

  function adjustNavbarPosition() {
    const topBarHeight = topBar.offsetHeight;
    navbar.style.top = `${topBarHeight}px`;
  }

  // Adjust position on load and when window resizes
  window.addEventListener("load", adjustNavbarPosition);
  window.addEventListener("resize", adjustNavbarPosition);

  // Scroll hide/show logic stays the same
  window.addEventListener("scroll", () => {
    if (window.scrollY > lastScrollY && window.scrollY > 50) {
      topBar.classList.add("hidden");
      navbar.classList.add("shift-up");
    } else {
      topBar.classList.remove("hidden");
      navbar.classList.remove("shift-up");
    }
    lastScrollY = window.scrollY;
  });
</script>
