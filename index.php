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
    <section id="banner" class="banner-bg text-white d-flex w-100 text-black text-center gap-2 flex-column align-items-center h-75 justify-content-center" style="padding: 10rem 0;">
      <div id="display-text" class="text-center">
        <img src="./assets/img/sfac-logo.png" alt="" style="width: 12rem; height: 12rem" class="my-4">
        <h2 class="display-4 fw-bold font-merriweather">
          Saint Francis of Assisi College<br>Bacoor Campus
        </h2>
          <!-- Tagline -->
          <div class="fst-italic font-impact fs-4">
            <span class="text-white">Academics. </span><span class="text-danger">And Beyond.</span>
          </div>
        </div>

      <div id="cta" class="mt-2 d-flex flex-column align-items-center gap-3 w-100">
        <a href="https://maps.app.goo.gl/wRCCcMWUGKBQz5LW6" class="stylish-link">
          <i class="bi bi-geo-alt-fill me-1"></i>#96 Bayanan, City of Bacoor, Cavite
        </a>
        <div class="d-flex gap-1 my-2">
          <button type="button" class="btn bg-custom-red text-white border-0 px-5 py-3 rounded-5">Enroll Now</button>
          <button type="button" class="btn bg-light text-black px-5 py-3 rounded-5">Contact Us</button>
        </div>
      </div>
</section>

  <!-- Announcments -->
  <div class="w-100 shadow py-2 shadow-sm">
    <div class="container-lg d-flex align-items-center">
      <i class="bi bi-megaphone-fill me-2 fs-5"></i>
      <div class="flex-grow-1 small">
        <strong>Enrollment Open:</strong> Apply now for SY 2025–2026!
      </div>
      <a href="#" class="btn btn-light btn-sm ms-3">Announcements</a>
    </div>
  </div>

  <!-- SFAC Highlights -->
  <section class="container-lg py-5 my-5 custom-height d-flex flex-column h-auto justify-content-center">
    <h2 class="text-center fw-bold font-merriweather">Why Choose Saint Francis of Assisi College?</h2>

    <!-- Recognition Logos -->
    <div class="mt-5 pb-5">
      <p class="fw-semibold text-center text-black">We are Recognized By</p>
      <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
        <img src="./assets/img/deped.jpg" alt="DepEd" class="img-fluid" style="height: 4rem;">
        <img src="./assets/img/bi.png" alt="BI" class="img-fluid" style="height: 4rem;">
        <img src="./assets/img/ched.jpg" alt="CHED" class="img-fluid" style="height: 4rem;">
        <img src="./assets/img/peac.png" alt="PEAC" class="img-fluid" style="height: 4rem;">
        <img src="./assets/img/tesda.png" alt="TESDA" class="img-fluid" style="height: 4rem;">
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      <!-- Years -->
      <div class="col d-flex">
        <div class="card flex-fill shadow-sm border-0 rounded-3 p-4 bg-danger text-white">
          <div class="card-body d-flex flex-column justify-content-center text-center">
            <div class="mb-3">
              <i class="bi bi-clock-fill fs-1 text-white"></i>
            </div>
            <h5 class="fw-bold">44 Years in Service</h5>
            <p class="small">SFAC has been in service for 44 years, upholding academic excellence since 1981.</p>
          </div>
        </div>
      </div>

      <!-- Campuses -->
      <div class="col d-flex">
        <div class="card flex-fill shadow-sm border-0 rounded-3 bg-light p-4">
          <div class="card-body d-flex flex-column justify-content-center text-center">
            <div class="mb-3">
              <i class="bi bi-journal-bookmark-fill fs-1 text-danger"></i>
            </div>
            <h5 class="fw-bold">10+ Campuses</h5>
            <p class="small text-dark">Serving Metro Manila and Southern Luzon.</p>
          </div>
        </div>
      </div>

      <!-- CHED -->
      <div class="col d-flex">
        <div class="card flex-fill shadow-sm border-0 rounded-3 bg-light p-4">
          <div class="card-body d-flex flex-column justify-content-center text-center">
            <div class="mb-3">
              <i class="bi bi-pencil-square fs-1 text-danger"></i>
            </div>
            <h5 class="fw-bold">CHED Recognized</h5>
            <p class="small text-dark">Government-accredited programs meeting national standards.</p>
          </div>
        </div>
      </div>

      <!-- Alumni -->
      <div class="col d-flex">
        <div class="card flex-fill shadow-sm border-0 rounded-3 bg-light p-4">
          <div class="card-body d-flex flex-column justify-content-center text-center">
            <div class="mb-3">
              <i class="bi bi-briefcase-fill fs-1 text-danger"></i>
            </div>
            <h5 class="fw-bold">Global Alumni</h5>
            <p class="small text-dark">Graduates thriving across diverse industries worldwide.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


    <!-- About Us -->
    <section class="w-100 bg-light py-5 my-5">
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
              <ul class="list-unstyled">
                <li class="mb-3">
                  <strong>Empowering students</strong> to become leaders of tomorrow through quality education.
                </li>
                <li class="mb-3">
                  <strong>Fostering a community</strong> of integrity, discipline, and respect.
                </li>
                <li class="mb-3">
                  <strong>Providing opportunities</strong> for both academic and extracurricular growth in a supportive environment.
                </li>
              </ul>
            </div>
            <button type="button" class="btn btn-outline-dark py-2 px-4 rounded-5">More About Us</button>
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

    <!-- Departments -->
    <section class="container-lg py-5 my-5">
      <h2 class="font-merriweather fw-bold text-center mb-5">Explore Our Departments</h2>
      <div class="row row-cols-1 row-cols-md-2 g-4">

        <!-- Basic Education Card -->
        <div class="col">
          <div class="card h-100 shadow-sm border-0 rounded-4 h-100">
            <div class="position-relative">
              <img src="./assets/img/basic.jpg" alt="Basic Education" class="img-fluid w-auto" style="height: 18rem; object-fit: cover;">
              <span class="position-absolute top-0 start-0 bg-danger text-white px-3 py-1 rounded-end">Basic Education</span>
            </div>
            <div class="card-body bg-light h-100">
              <p class="small mb-2 text-muted">Pre-School to Senior High</p>
              <ul class="small mb-3">
                <li>Nursery, Pre-Kinder, Kinder</li>
                <li>Grades 1–6, Grades 7–10</li>
                <li>Senior High: STEM, ABM, HUMSS, GAS, TVL-HE</li>
              </ul>
            </div>
            <a href="#" class="btn btn-danger m-2">View Details</a>
          </div>
        </div>

        <!-- Higher Education Card -->
        <div class="col">
          <div class="card shadow-sm border-0 rounded-4 h-100" >
            <div class="position-relative">
              <img src="./assets/img/higher.jpg" alt="Higher Education" class="img-fluid w-auto" style="height: 18rem; object-fit: cover;">
              <span class="position-absolute top-0 start-0 bg-danger text-white px-3 py-1 rounded-end">Higher Education</span>
            </div>
            <div class="card-body bg-light h-100">
              <p class="small mb-2 text-muted">College Degree Programs</p>
              <ul class="small mb-3">
                <li>Education: BSED, BEEd, PE</li>
                <li>Business: BSBA (Marketing, Finance)</li>
                <li>Technology: BSCS</li>
                <li>Hospitality: BSHM</li>
              </ul>
            </div>
            <a href="#" class="btn btn-danger m-2">View Details</a>
          </div>
        </div>

      </div>
    </section>


    <!-- Video Panel -->
    <section class="w-100 py-5" style="margin: 10rem 0 10rem 0;">
      <div class="container-lg">
        <div class="row g-4 align-items-stretch">

          <!-- Basic Education Video -->
          <div class="col-12 col-lg-6">
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.youtube.com/embed/LXdz4GEJBoc?list=TLGGgpAQy0YgjooxOTEwMjAyNQ"
                title="Basic Education"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                class="rounded shadow w-100">
              </iframe>
            </div>
          </div>

          <!-- Higher Education + Facebook Card -->
          <div class="col-12 col-lg-6 d-flex flex-column gap-4">

            <!-- Higher Education Video -->
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.youtube.com/embed/ZaN5RAG39-w?si=usXmKdIa8Ek6lOop"
                title="Higher Education"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                class="rounded shadow w-100">
              </iframe>
            </div>

          </div>

        </div>
      </div>
    </section>


  </main>

  <?php include './assets/includes/footer.php'; ?>
</body>
</html>