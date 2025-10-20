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
        <h2 class="display-4 fw-bold font-merriweather">
          Saint Francis of Assisi College<br>Bacoor Campus
        </h2>
        <p class="fs-5 text-light" >
          Empowering Minds. Shaping Futures. Academics and Beyond.
        </p>

      </div>

      <div id="cta" class="mt-3 d-flex flex-column align-items-center gap-3">
        <a href="https://maps.app.goo.gl/wRCCcMWUGKBQz5LW6" class="stylish-link">
          <i class="bi bi-geo-alt-fill me-1"></i>#96 Bayanan, City of Bacoor, Cavite
        </a>
        <div class="d-flex w-100 gap-1">
          <button type="button" class="btn bg-custom-red text-white border-0 me-1 w-100 py-3 px-6 rounded-5">Enroll Now</button>
          <button type="button" class="btn btn-outline-light w-100 py-3 px-6 rounded-5">Contact Us</button>
        </div>
      </div>
</section>

    <!-- Announcments -->
    <div class="w-100 shadow px-3 py-2 shadow-sm">
      <div class="container-lg d-flex align-items-center">
        <i class="bi bi-megaphone-fill me-2 fs-5"></i>
        <div class="flex-grow-1 small">
          <strong>Enrollment Open:</strong> Apply now for SY 2025–2026!
        </div>
        <a href="#" class="btn btn-light btn-sm ms-3">Announcements</a>
      </div>
    </div>

    <!-- Sfac Highlights -->
    <section class="container-lg py-5 my-5">
      <h2 class="text-center fw-bold font-merriweather mb-5">Saint Francis of Assisi Highlights</h2>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

        <!-- Transportation -->
        <div class="col">
          <div class="card h-100 shadow-sm border-0 rounded-4">
            <div class="card-body d-flex flex-column">
              <div class="mb-3 text-center">
                <i class="bi bi-clock-fill fs-1 text-danger"></i>
              </div>
              <h5 class="fw-bold text-center">44 Years in Service</h5>
              <p class="small text-muted text-center">SFAC has been in service for 4 years</p>
            </div>
          </div>
        </div>

        <!-- Library -->
        <div class="col">
          <div class="card h-100 shadow-sm border-0 rounded-4">
            <div class="card-body d-flex flex-column">
              <div class="mb-3 text-center">
                <i class="bi bi-journal-bookmark-fill fs-1 text-danger"></i>
              </div>
              <h5 class="fw-bold text-center">Online Library & Databases</h5>
              <p class="small text-muted text-center">Access academic journals, articles, and research tools for projects and assignments.</p>
            </div>
          </div>
        </div>

        <!-- Writing Tools -->
        <div class="col">
          <div class="card h-100 shadow-sm border-0 rounded-4">
            <div class="card-body d-flex flex-column">
              <div class="mb-3 text-center">
                <i class="bi bi-pencil-square fs-1 text-danger"></i>
              </div>
              <h5 class="fw-bold text-center">Writing & Research Tools</h5>
              <p class="small text-muted text-center">Improve writing skills, grammar accuracy, and research methodology with online tools.</p>
            </div>
          </div>
        </div>

        <!-- Career Planning -->
        <div class="col">
          <div class="card h-100 shadow-sm border-0 rounded-4">
            <div class="card-body d-flex flex-column">
              <div class="mb-3 text-center">
                <i class="bi bi-briefcase-fill fs-1 text-danger"></i>
              </div>
              <h5 class="fw-bold text-center">Career Planning Tools</h5>
              <p class="small text-muted text-center">Explore career paths, build resumes, and plan your academic journey with expert guidance.</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Recognition -->
      <div class="" style="padding: 3rem 0 4rem 0;">
        <p class="fw-semibold text-center text-dark pb-3">Goverment Recognition</p>
        <div class=" d-flex flex-row gap-2 justify-content-center" style="height: 4rem;">
          <img src="./assets/img/deped.jpg" alt="">
          <img src="./assets/img/bi.png" alt="" >
          <img src="./assets/img/ched.jpg" alt="" >
          <img src="./assets/img/peac.png" alt="" >
          <img src="./assets/img/tesda.png" alt="" >
        </div>
      </div>
    </section>

    <!-- About Us -->
    <section class="w-100 bg-light my-5">
      <div class="container-lg py-5">
        <div class="row g-5 align-items-center">
          
          <!-- Text + Course Cards -->
          <div class="col-12 col-lg-6">
          <div class="mb-5">
            <h2 class="font-merriweather fw-bold text-danger mb-3">About Our School</h2>
            <p class="lead text-dark m-2">
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

    <!-- Departments -->
    <section class="container-lg py-5 my-5">
      <h2 class="font-merriweather fw-bold text-center mb-5">Explore Our Departments</h2>
      <div class="row row-cols-1 row-cols-md-2 g-4">

        <!-- Basic Education Card -->
        <div class="col">
          <div class="card shadow-sm border-0 rounded-4 h-100">
            <div class="position-relative">
              <img src="./assets/img/banner.png" alt="Basic Education" class="img-fluid w-100" style="height: 18rem; object-fit: cover;">
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
              <img src="./assets/img/banner.png" alt="Higher Education" class="img-fluid w-100" style="height: 18rem; object-fit: cover;">
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