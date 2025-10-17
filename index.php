<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Saint Francis of Assisi College – Bacoor Campus</title>

  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style/style.css" />
  <?php include './assets/includes/bootstrap.php'; ?>
</head>

<body style="padding-top: 96px;">
  <main>
    <!-- Navbar -->
    <?php include './assets/includes/navbar.php'; ?>

    <!-- Banner -->
    <div id="banner" class="d-flex w-100 p-4 text-black text-center flex-column align-items-center py-5">
      <section id="display-text" class="text-center">
        <h2 class="display-5 fw-bold font-merriweather">
          Saint Francis of Assisi College<br>Bacoor Campus
        </h2>
        <p class="fs-5" >
          Empowering Minds. Shaping Futures. Academics and Beyond.
        </p>

      </section>

      <section id="cta" class="mt-3 d-flex flex-column align-items-center gap-3">
        <a href="https://maps.app.goo.gl/wRCCcMWUGKBQz5LW6" class="stylish-link">
          <i class="bi bi-geo-alt-fill me-1"></i>#96 Bayanan, City of Bacoor, Cavite
        </a>
        <div class="d-flex w-100">
          <button type="button" class="btn bg-custom-red text-white border-0 me-1 w-100">Be One of Us</button>
          <button type="button" class="btn btn-outline-custom-red w-100">Contact Us</button>
        </div>
      </section>
    </div>

    <!-- Certifications -->
    <p class="fw-bold text-center small text-muted">Goverment Recognition</p>
    <div class="container container-lg d-flex flex-row gap-2 justify-content-center" style="height: 4rem;">
      <img src="./assets/img/deped.jpg" alt="">
      <img src="./assets/img/bi.png" alt="" >
      <img src="./assets/img/ched.jpg" alt="" >
      <img src="./assets/img/peac.png" alt="" >
      <img src="./assets/img/tesda.png" alt="" >
    </div>

    <!-- image Panel -->
    <div class="container container-lg d-flex flex-column gap-2 my-5">

      <div class="d-flex flex-row gap-2 w-100" style="height: 40rem;">

        <div class="ratio ratio-16x9 h-100">
          <iframe class="card-img-top" width="100%" height="full"
            src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fmysfacbacoor%2Fvideos%2F3517808661797690%2F&show_text=0&width=476"
            title="Basic Education"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
        </div>

        <div class="h-100 w-100 d-flex flex-column">
          <div class="ratio ratio-16x9 h-50">
            <iframe class="card-img-top" width="100%" height="full"
              src="https://www.youtube.com/embed/ZaN5RAG39-w?si=usXmKdIa8Ek6lOop"
              title="Higher Education"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>

          <div class="card w-100 h-100 banner-bg text-white">
            <div class="card-body d-flex flex-column justify-content-between">
              <h5 class="card-title">Visit our Facebook Page</h5>
              <p class="card-text">Some quick example text to build on the card title.</p>
              <a href="#" class="btn btn-primary">Redirect</a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </main>
</body>
</html>
