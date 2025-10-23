<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Higher Education | Saint Francis of Assisi College Bacoor</title>
  <link rel="stylesheet" href="./style/original-style.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
  <?php
    include('assets/includes/bootstrap.php');
  ?>
</head>

<body>
  <?php
    include('assets/includes/navbar.php');
  ?>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="bg-danger p-4 d-flex justify-content-center text-white" data-aos="fade-in">
      <h2>Higher Education Department</h2>
    </div>

    <!-- ======= Video Section ======= -->
    <section id="events" class="py-4">
      <div class="container text-center">
        <iframe class="rounded" width="80%" height="500"
          src="https://www.youtube.com/embed/ZaN5RAG39-w?playlist=ZaN5RAG39-w&loop=1"
          title="Higher Education Department Video"
          frameborder="0"
          allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
          allowfullscreen>
        </iframe>
      </div>
    </section>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-center">
          
          <!-- Carousel -->
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <div id="hedCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#hedCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#hedCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#hedCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#hedCarousel" data-bs-slide-to="3"></button>
              </div>

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/img/1.png" class="d-block w-100 rounded" alt="Slide 1">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/5.jpg" class="d-block w-100 rounded" alt="Slide 2">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/3.png" class="d-block w-100 rounded" alt="Slide 3">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/4.png" class="d-block w-100 rounded" alt="Slide 4">
                </div>
              </div>

              <button class="carousel-control-prev" type="button" data-bs-target="#hedCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#hedCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>

          <!-- Offered Programs -->
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <div class="section-title">
              <h2>Offered</h2>
              <p>Programs</p>
            </div>
            <div class="row">
              <div class="col">
                <ul>
                  <li><i class="bi bi-check-circle"></i> Bachelor of Elementary Education (BEEd)</li>
                  <li><i class="bi bi-check-circle"></i> Bachelor of Secondary Education (BSEd)</li>
                  <li><i class="bi bi-check-circle"></i> Bachelor of Science in Business Administration (BSBA)</li>
                  <li><i class="bi bi-check-circle"></i> Bachelor of Science in Information Technology (BSIT)</li>
                  <li><i class="bi bi-check-circle"></i> Bachelor of Science in Criminology (BSCrim)</li>
                  <li><i class="bi bi-check-circle"></i> Bachelor of Science in Psychology (BSPsych)</li>
                  <li><i class="bi bi-check-circle"></i> Bachelor of Arts in Communication (BAComm)</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ======= Online Enrollment Section ======= -->
    <section id="features" class="features my-5">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-center" data-aos="zoom-in" data-aos-delay="100">
          
          <div class="col-lg-6 pt-4 pt-lg-0">
            <div class="section-title mb-4">
              <h2>Online</h2>
              <p>Enrollment</p>
            </div>

            <div class="icon-box text-center">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3>
                <a href="https://stfrancisbacoor.com/sfac-bac/pages/inquiry/online.enrollment.php">
                  HIGHER EDUCATION
                  <span style="display:block; font-size:13px;">(College Department)</span>
                </a>
              </h3>
            </div>
          </div>

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/hed_1.jpg" class="img-fluid rounded" alt="Higher Education Enrollment">
          </div>

        </div>
      </div>
    </section>
  </main>

  <?php include('assets/includes/footer.php'); ?>
</body>
</html>
