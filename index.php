<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Saint Francis of Assisi College – Bacoor Campus</title>

  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style/style.css" />
  <?php include './assets/includes/bootstrap.php'; ?>
</head>

<body style="margin-top: 6rem;">
  <main>
    <!-- Navbar -->
    <?php include './assets/includes/navbar.php'; ?>

    <!-- Banner -->
    <section id="banner" class="banner-bg text-white d-flex w-100 text-black text-center gap-2 flex-column align-items-center justify-content-center" style=" height: 45rem;">
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
          <a type="button" class="btn btn-danger btn-sm d-flex align-items-center justify-content-center rounded-5 px-5 py-2 mx-auto mx-md-0" style="white-space: nowrap;">Enroll Now</a>
          <a type="button" class="btn btn-light btn-sm d-flex align-items-center justify-content-center rounded-5 px-5 py-2 mx-auto mx-md-0" style="white-space: nowrap;">Contact Us</a>
        </div>
      </div>
    </section>

    <!-- Announcements -->
    <div id="announcementCarousel" class="carousel slide carousel-fade w-100 shadow py-2 shadow-sm mb-5 bg-white"
        data-bs-ride="carousel" data-bs-interval="4000">
      <div class="container-lg">
        <div class="row align-items-center g-2">
          <!-- Icon and Carousel Text -->
          <div class="col-12 col-md-9 d-flex align-items-center justify-content-center justify-content-md-start text-center text-md-start">
            <i class="bi bi-megaphone-fill me-2 fs-5 text-dark"></i>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <strong>Enrollment Open:</strong> Apply now for SY 2025–2026!
              </div>
              <div class="carousel-item">
                <strong>School Fair 2025:</strong> Join us this February!
              </div>
              <div class="carousel-item">
                <strong>Midterm Exams:</strong> Start on November 4, 2025.
              </div>
            </div>
          </div>

          <!-- Button -->
          <div class="col-12 col-md-3 text-center text-md-end">
            <button type="button" class="btn btn-danger btn-sm px-3 py-2"
                    data-bs-toggle="modal" data-bs-target="#announcementsModal">
              View Announcements
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Announcement-->
    <div class="modal fade" id="announcementsModal" tabindex="-1" aria-labelledby="announcementsModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
          <div class="modal-header">
            <h5 class="modal-title" id="announcementsModalLabel">All Announcements</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Enrollment Open: Apply now for SY 2025–2026!</li>
              <li class="list-group-item">School Fair 2025: Join us this February!</li>
              <li class="list-group-item">Midterm Exams start on November 4, 2025.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>



    <!-- SFAC Highlights -->
    <section class="container-lg custom-height d-flex flex-column h-auto justify-content-center rounded-5 py-5" style="margin-top: 6rem; margin-bottom: 6rem">
      <div class="w-100 d-flex align-items-center flex-column">
          <h2 class="text-center fw-bold font-merriweather">Why Choose Saint Francis of Assisi College?</h2>
          <p class="text-center" style="max-width: 50rem;">At SFAC Bacoor, we go beyond academics—fostering a values-driven community inspired by Saint Francis of Assisi. 
            With caring mentors and a holistic approach, we prepare students for life: spiritually, intellectually, and socially.</p>
        </div>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3 my-2">
        <!-- Years -->
        <div class="col d-flex bg-white">
          <div class="card flex-fill shadow-sm border-0 rounded-3 bg-light p-4">
            <div class="card-body d-flex gap-2 flex-column justify-content-start text-center">
              <div class="mb-3">
                <i class="bi bi-clock-fill fs-1 text-danger"></i>
              </div>
              <h5 class="fw-bold">44 Years in Service</h5>
              <p class="text-muted">SFAC has been in service for 44 years, upholding academic excellence since 1981.</p>
            </div>
          </div>
        </div>

        <!-- Campuses -->
        <div class="col d-flex bg-white">
          <div class="card flex-fill shadow-sm border-0 rounded-3 bg-light p-4">
            <div class="card-body d-flex flex-column gap-2 justify-content-start text-center">
              <div class="mb-3">
                <i class="bi bi-journal-bookmark-fill fs-1 text-danger"></i>
              </div>
              <h5 class="fw-bold">10+ Campuses</h5>
              <p class="text-muted">Serving Metro Manila and Southern Luzon.</p>
            </div>
          </div>
        </div>

        <!-- CHED -->
        <div class="col d-flex bg-white">
          <div class="card flex-fill shadow-sm border-0 rounded-3 bg-light p-4">
            <div class="card-body d-flex flex-column gap-2 justify-content-start text-center">
              <div class="mb-3">
                <i class="bi bi-pencil-square fs-1 text-danger"></i>
              </div>
              <h5 class="fw-bold">CHED Recognized</h5>
              <p class="text-muted">Government-accredited programs meeting national standards.</p>
            </div>
          </div>
        </div>

        <!-- Alumni -->
        <div class="col d-flex bg-white">
          <div class="card flex-fill shadow-sm border-0 rounded-3 bg-light p-4">
            <div class="card-body d-flex flex-column gap-2 justify-content-start text-center">
              <div class="mb-3">
                <i class="bi bi-briefcase-fill fs-1 text-danger"></i>
              </div>
              <h5 class="fw-bold">Global Alumni</h5>
              <p class="text-muted">Graduates thriving across diverse industries worldwide.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Recognition Logos -->
      <div class="mt-4">
        <p class="text-center text-dark">We are Recognized By:</p>
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
          <img src="./assets/img/deped.jpg" alt="DepEd" class="img-fluid" style="height: 4rem;">
          <img src="./assets/img/bi.png" alt="BI" class="img-fluid" style="height: 4rem;">
          <img src="./assets/img/ched.jpg" alt="CHED" class="img-fluid" style="height: 4rem;">
          <img src="./assets/img/peac.png" alt="PEAC" class="img-fluid" style="height: 4rem;">
          <img src="./assets/img/tesda.png" alt="TESDA" class="img-fluid" style="height: 4rem;">
        </div>
      </div>

    </section>


      <!-- About Us -->
      <section class="w-100 bg-light p-5" style="margin-bottom: 6rem; margin-top: 6rem;">
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

        <div class="accordion" id="departmentsAccordion">
          <div class="row row-cols-1 row-cols-md-2 g-3">
            
            <!-- Basic Education -->
            <div class="col">
              <div class="accordion-item border rounded-4 shadow-sm h-auto">
                <img src="./assets/img/basic.jpg" alt="Basic Education" class="img-fluid w-100 rounded-top-4" style="height: 22rem; object-fit: cover;">
                <a href="./department_bed.php" class="btn btn-danger btn-sm w-100 d-flex justify-content-between align-items-center p-3">
                  <span class="mb-0">Read More</span>
                  <i class="bi bi-arrow-right fs-5"></i>
                </a>

                <h2 class="accordion-header" id="headingDeptBasic">
                  <button class="accordion-button collapsed fw-bold text-danger" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseDeptBasic"
                    aria-expanded="false" aria-controls="collapseDeptBasic">
                    Basic Education Department
                  </button>
                </h2>

                <div id="collapseDeptBasic" class="accordion-collapse collapse"
                  aria-labelledby="headingDeptBasic" data-bs-parent="#departmentsAccordion">
                  <div class="accordion-body small">
                    <p class="text-muted mb-2">
                      The Basic Education Department builds a strong academic foundation and instills lifelong values from early learning to senior high school.
                    </p>
                    <ul>
                      <li><strong>Pre-School:</strong> Nursery, Pre-Kinder, and Kinder programs that encourage curiosity and social growth.</li>
                      <li><strong>Elementary:</strong> Grades 1–6, focusing on academic excellence, creativity, and values education.</li>
                      <li><strong>Junior High School:</strong> Grades 7–10, following the K–12 curriculum with core subjects and enrichment programs.</li>
                      <li><strong>Senior High School:</strong> Academic tracks such as STEM, ABM, HUMSS, GAS, and TVL–HE designed to prepare students for college and careers.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Higher Education -->
            <div class="col">
              <div class="accordion-item border rounded-4 shadow-sm h-auto">
                <img src="./assets/img/higher.jpg" alt="Higher Education" class="img-fluid w-100 rounded-top-4" style="height: 22rem; object-fit: cover;">
                <a href="./department_hed.php" class="btn btn-danger btn-sm w-100 d-flex justify-content-between align-items-center p-3">
                  <span class="mb-0">Read More</span>
                  <i class="bi bi-arrow-right fs-5"></i>
                </a >

                <h2 class="accordion-header" id="headingDeptHigher">
                  <button class="accordion-button collapsed fw-bold text-danger" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseDeptHigher"
                    aria-expanded="false" aria-controls="collapseDeptHigher">
                    Higher Education Department
                  </button>
                </h2>

                <div id="collapseDeptHigher" class="accordion-collapse collapse"
                  aria-labelledby="headingDeptHigher" data-bs-parent="#departmentsAccordion">
                  <div class="accordion-body small">
                    <p class="text-muted mb-2">
                      The Higher Education Department equips students with professional knowledge, leadership skills, and real-world experience to excel in their chosen fields.
                    </p>
                    <ul>
                      <li><strong>Education:</strong> BSED Majors in English, Math, and Filipino; BEEd; Bachelor of Early Childhood Education; Bachelor of Physical Education.</li>
                      <li><strong>Business:</strong> BSBA Majors in Marketing Management, Financial Management, and Operations Management.</li>
                      <li><strong>Technology:</strong> BS in Computer Science focusing on software development, systems analysis, and IT innovation.</li>
                      <li><strong>Hospitality:</strong> BS in Hospitality Management emphasizing service excellence and global standards in tourism and hotel operations.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- Latest -->
      <section class="w-100 bg-light">
        <section class="container-lg py-5" style="margin-top: 6rem;">
          <h2 class="font-merriweather fw-bold text-center mb-5">
            Latest @ Saint Francis of Assisi College
          </h2>
          <?php
          $images = glob("assets/img/latest/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
          $chunks = array_chunk($images, 3);
          ?>
          <div id="latestCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Slides -->
            <div class="carousel-inner">
              <?php foreach ($chunks as $index => $chunk): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                  <div class="row g-3 justify-content-center">
                    <?php foreach ($chunk as $image): ?>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="overflow-hidden rounded-4 shadow-sm">
                          <img src="<?= $image ?>"
                              class="d-block w-100 zoom-img"
                              alt="Latest Update"
                              style="height: 20rem; object-fit: cover; cursor: pointer;"
                              data-bs-toggle="modal" data-bs-target="#imageModal"
                              data-bs-image="<?= $image ?>">
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#latestCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#latestCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
              <span class="visually-hidden">Next</span>
            </button>

            <!-- Indicators BELOW images -->
            <div class="carousel-indicators position-static mt-3">
              <?php foreach ($chunks as $i => $chunk): ?>
                <button type="button" data-bs-target="#latestCarousel" data-bs-slide-to="<?= $i ?>"
                  <?= $i === 0 ? "class='active' aria-current='true'" : "" ?>></button>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Modal for fullscreen image -->
          <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content bg-transparent border-0">
                <button type="button" class="btn-close btn-close-white ms-auto me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
                <img src="" id="modalImage" class="img-fluid rounded-4 shadow">
              </div>
            </div>
          </div>

          <div class="container-lg ">
            <div class="row g-4 align-items-stretch mt-1">
              <!-- Byt 1 Video -->
              <div class="col-12 col-lg-6">
                <div class="ratio ratio-16x9">
                  <iframe
                    src="https://www.youtube.com/embed/RAyiEpbfRHw?si=VcDSw_Gk1FvRI2G_"
                    title="Basic Education"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                    class="rounded shadow w-100">
                  </iframe>
                </div>
              </div>

              <!-- yt 2d -->
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
      </section>


      <!-- Facebook -->
      <section class="container container-lg" style="margin-top: 6rem; margin-bottom: 5rem;">
        <h2 class="font-merriweather fw-bold text-center">Facebook Page Live View</h2>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous"
          src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0"></script>

        <div class="d-flex justify-content-center py-5 mx-2">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden" style="width: 100%; max-width: 460px;">
            <div class="card-body p-0" style="height: 40rem; overflow: hidden;">
              <div class="fb-page"
                data-href="https://www.facebook.com/mysfacbacoor"
                data-tabs="timeline"
                data-width="460"
                data-height="640"
                data-small-header="false"
                data-adapt-container-width="true"
                data-hide-cover="false"
                data-show-facepile="false">
              </div>
            </div>


          </div>
        </div>
      </section>
    </main>
    
    <!-- Style and Script for Image Carousel -->
    <style>
      .zoom-img {
        transition: transform 0.4s ease;
      }
      .zoom-img:hover {
        transform: scale(1.05);
      }

      @media (max-width: 576px) {
      .zoom-img {
        height: 16rem !important;
      }
    }

      .carousel-indicators [data-bs-target] {
        width: 1rem;
        height: 1rem;
        border-radius: 50%;
        background-color: #ffffffff;
        border: none;
        opacity: 1;
        transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
      }

      .carousel-indicators .active {
        background-color: #e0162aff;
        transform: scale(1.2);
        box-shadow: 0 0 6px rgba(0, 0, 0, 0.4);
      }
    </style>

    <script>
      const imageModal = document.getElementById('imageModal');
      imageModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget;
        const imageSrc = button.getAttribute('data-bs-image');
        const modalImage = imageModal.querySelector('#modalImage');
        modalImage.src = imageSrc;
      });

      document.addEventListener("DOMContentLoaded", () => {
        const announcements = document.querySelectorAll(".announcement");
        let index = 0;

        setInterval(() => {
          const current = announcements[index];
          const next = announcements[(index + 1) % announcements.length];

          // Animate current announcement up
          current.classList.remove("active");
          current.classList.add("exit");

          // Animate next announcement in
          next.classList.add("active");

          // Reset the previous one after animation
          setTimeout(() => current.classList.remove("exit"), 700);

          // Move to next index
          index = (index + 1) % announcements.length;
        }, 4000); // ⏱ Change every 4 seconds
      });


    </script>

  <?php include './assets/includes/footer.php'; ?>
</body>
</html>