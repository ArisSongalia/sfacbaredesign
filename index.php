<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Saint Francis of Assisi College – Bacoor Campus</title>

  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style/style.css" />
  <?php include './assets/includes/bootstrap.php'; ?>
</head>

<body >
  <main>
    <!-- Navbar -->
    <?php include './assets/includes/navbar.php'; ?>

    <!-- Banner -->
    <div id="banner" class="banner-bg text-white d-flex w-100 text-black text-center gap-2 flex-column align-items-center" style="padding: 10rem 0;">
      <section id="display-text" class="text-center">
        <h2 class="display-4 fw-bold font-merriweather">
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
        <div class="d-flex w-100 gap-1">
          <button type="button" class="btn bg-custom-red text-white border-0 me-1 w-100 py-3 px-6 rounded-5">Enroll Now</button>
          <button type="button" class="btn btn-outline-light w-100 py-3 px-6 rounded-5">Contact Us</button>
        </div>
      </section>
    </div>

    <!-- Announcments -->
    <div class="shadow px-3 py-2 shadow-sm">
      <div class="container-lg d-flex align-items-center">
        <i class="bi bi-megaphone-fill me-2 fs-5"></i>
        <div class="flex-grow-1 small">
          <strong>Enrollment Open:</strong> Apply now for SY 2025–2026!
        </div>
        <a href="#" class="btn btn-light btn-sm ms-3">Announcements</a>
      </div>
    </div>

    <!-- Recognition -->
    <section class="" style="padding: 3rem 0 4rem 0;">
      <p class="fw-semibold text-center text-dark pb-3">Goverment Recognition</p>
      <div class="container container-lg d-flex flex-row gap-2 justify-content-center" style="height: 4rem;">
        <img src="./assets/img/deped.jpg" alt="">
        <img src="./assets/img/bi.png" alt="" >
        <img src="./assets/img/ched.jpg" alt="" >
        <img src="./assets/img/peac.png" alt="" >
        <img src="./assets/img/tesda.png" alt="" >
      </div>
    </section>

    <!-- About Us -->
    <section class="bg-light w-100 my-5">
      <div class="container-lg py-5">
        <div class="row g-5 align-items-center">
          
          <!-- Text + Course Cards -->
          <div class="col-12 col-lg-6">
          <div class="mb-5">
            <h2 class="font-merriweather fw-bold text-danger mb-3">About Our School</h2>
            <p class="lead text-dark">
              At Saint Francis of Assisi College, Bacoor Campus, we nurture academic excellence, holistic development, and lifelong values.
            </p>
            <div class="border-start border-3 border-danger ps-3">
              <ul class="list-unstyled small">
                <li class="mb-2">
                  <strong>Empowering students</strong> to become leaders of tomorrow through quality education.
                </li>
                <li class="mb-2">
                  <strong>Fostering a community</strong> of integrity, discipline, and respect.
                </li>
                <li class="mb-2">
                  <strong>Providing opportunities</strong> for both academic and extracurricular growth in a supportive environment.
                </li>
              </ul>
            </div>
            <button type="button" class="btn btn-outline-dark py-2 px-4 rounded-5">Read More</button>
          </div>


            <!-- Courses Offered -->
          <h5 class="text-secondary fw-bold font-merriweather">Courses Offered</h5>
          <div class="accordion" id="coursesAccordion">

            <!-- Basic Education -->
            <div class="accordion-item border rounded-4 shadow-sm">
              <h2 class="accordion-header" id="headingBasic">
                <button class="accordion-button collapsed fw-bold text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBasic" aria-expanded="false" aria-controls="collapseBasic">
                  Basic Education
                </button>
              </h2>
              <div id="collapseBasic" class="accordion-collapse collapse" aria-labelledby="headingBasic" data-bs-parent="#coursesAccordion">
                <div class="accordion-body small">
                  <ul>
                    <li><strong>Pre-School:</strong> Nursery, Pre-Kinder, Kinder</li>
                    <li><strong>Elementary:</strong> Grades 1 to 6</li>
                    <li><strong>Curriculum Includes:</strong>
                      <ul>
                        <li>Core subjects (Math, English, Science, Filipino, Araling Panlipunan)</li>
                        <li>Computer education at all levels</li>
                        <li>Values formation and holistic development</li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Secondary Education -->
            <div class="accordion-item border rounded-4 shadow-sm">
              <h2 class="accordion-header" id="headingSecondary">
                <button class="accordion-button collapsed fw-bold text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSecondary" aria-expanded="false" aria-controls="collapseSecondary">
                  Secondary Education
                </button>
              </h2>
              <div id="collapseSecondary" class="accordion-collapse collapse" aria-labelledby="headingSecondary" data-bs-parent="#coursesAccordion">
                <div class="accordion-body small">
                  <ul>
                    <li><strong>Junior High School:</strong> Grades 7–10</li>
                    <li>Follows the K to 12 curriculum</li>
                    <li>Includes computer education, values education, and enrichment programs</li>
                    <li><strong>Senior High School:</strong> Grades 11–12</li>
                    <li><strong>Academic Track:</strong>
                      <ul>
                        <li>STEM</li>
                        <li>ABM</li>
                        <li>HUMSS</li>
                      </ul>
                    </li>
                    <li><strong>TVL Track:</strong> Based on demand and availability</li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Higher Education -->
            <div class="accordion-item border rounded-4 shadow-sm">
              <h2 class="accordion-header" id="headingHigher">
                <button class="accordion-button collapsed fw-bold text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHigher" aria-expanded="false" aria-controls="collapseHigher">
                  Higher Education
                </button>
              </h2>
              <div id="collapseHigher" class="accordion-collapse collapse" aria-labelledby="headingHigher" data-bs-parent="#coursesAccordion">
                <div class="accordion-body small">
                  <ul>
                    <li><strong>Education</strong>
                      <ul>
                        <li>BSED – Major in English, Math, Filipino</li>
                        <li>Bachelor of Elementary Education</li>
                        <li>Bachelor of Early Childhood Education</li>
                        <li>Bachelor of Physical Education</li>
                      </ul>
                    </li>
                    <li><strong>Business</strong>
                      <ul>
                        <li>BSBA – Major in Financial, Marketing, Operations Management</li>
                      </ul>
                    </li>
                    <li><strong>Technology</strong>
                      <ul>
                        <li>Bachelor of Science in Computer Science</li>
                      </ul>
                    </li>
                    <li><strong>Hospitality</strong>
                      <ul>
                        <li>Bachelor of Science in Hospitality Management</li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>

          </div>

          <!-- Image Column -->
          <div class="col-12 col-lg-6 d-flex flex-column align-items-start">
            <img src="./assets/img/about.png" alt="About SFAC Bacoor" class="img-fluid rounded shadow mb-4" style="max-width: 100%;">
          </div>


        </div>
      </div>
    </section>


    <!-- image Panel -->
    <div class="container-lg my-5">
      <div class="row g-2 align-items-stretch">

        <!-- YouTube + Card -->
        <div class="col-12 col-lg-6">
          <div class="ratio ratio-16x9 h-100">
            <iframe
              src="https://www.youtube.com/embed/LXdz4GEJBoc?list=TLGGgpAQy0YgjooxOTEwMjAyNQ"
              title="Basic Education"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
              class="rounded shadow">
            </iframe>
          </div>
        </div>

        <!-- YouTube + Card -->
        <div class="col-12 col-lg-6 d-flex flex-column gap-3">

          <!-- YouTube Video -->
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/embed/ZaN5RAG39-w?si=usXmKdIa8Ek6lOop"
              title="Higher Education"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
              class="rounded shadow">
            </iframe>
          </div>

          <!-- Facebook Redirect Card -->
          <div class="card flex-fill banner-bg text-white shadow">
            <div class="card-body d-flex flex-column justify-content-between">
              <h5 class="card-title">Visit us on Facebook</h5>
              <p class="card-text">Saint Francis of Assisi College - Bacoor Campus</p>
              <a href="https://www.facebook.com/mysfacbacoor" target="_blank" class="btn btn-primary mt-auto">Redirect</a>
            </div>
          </div>

        </div>

      </div>
    </div>


  </main>

  <?php include './assets/includes/footer.php'; ?>
</body>
</html>