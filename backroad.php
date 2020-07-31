<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Backroads || Tour Company</title>
  
    <?php include 'links.php'?>
    <!-- style sheet -->
    <style>
   <?php include './css/style.css'?>
</style>
  </head>
  <body>
    <!-- header -->
    <header id="home">
      <!-- navbar -->
      <nav class="navbar">
        <div class="nav-center">
          <!-- nav header -->
          <div class="nav-header">
            <img src="./image/logo.svg" class="nav-logo" alt="" />
            <button type="button" class="nav-toggle" id="nav-toggle">
              <i class="fas fa-bars"></i>
            </button>
          </div>
          <!--end of nav header -->
          <!-- nav links -->
          <ul class="nav-links" id="nav-links">
            <!-- single link -->
            <li>
              <a href="#home" class="nav-link scroll-link">home</a>
            </li>
            <!-- end of single link -->
            <!-- single link -->
            <li>
              <a href="#about" class="nav-link scroll-link">about</a>
            </li>
            <!-- end of single link -->
            <!-- single link -->
            <li>
              <a href="#services" class="nav-link scroll-link">services</a>
            </li>
            <!-- end of single link -->
            <!-- single link -->
            <li>
              <a href="#featured" class="nav-link scroll-link">featured</a>
            </li>
            <!-- end of single link -->
            <!-- single link -->
            <li>
              <a href="#contactus" class="nav-link scroll-link">contact us</a>
            </li>
            <!-- end of single link -->
            <!-- single link -->
            <li>
              <a href="#gallery" class="nav-link scroll-link">gallery</a>
            </li>
            <!-- end of single link -->

          </ul>
          <!-- end of nav links -->
          <!-- nav-icons -->
          <ul class="nav-icons">
            <!-- single icon -->
            <li>
              <a
                href="https://www.facebook.com"
                target="blank"
                class="nav-icon"
              >
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <!-- end of single icon -->
            <!-- single icon -->
            <li>
              <a href="https://www.twitter.com" target="blank" class="nav-icon">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <!-- end of single icon -->
            <!-- single icon -->
            <li>
              <a
                href="https://www.squarespace.com"
                target="blank"
                class="nav-icon"
              >
                <i class="fab fa-squarespace"></i>
              </a>
            </li>
            <!-- end of single icon -->
          </ul>
          <!-- end of nav-icons -->
        </div>
      </nav>
      <!-- hero -->
      <div class="hero">
        <!-- <img src="./image/main1.jpg" alt=""> -->
        <div class="hero-banner">
          <h1>continue exploring</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est
            corrupti odio nesciunt cupiditate repellat dolor?
          </p>
          <a href="#featured" class="btn hero-btn scroll-link">explore tours</a>
        </div>
      </div>
    </header>
    <!-- end of header -->

    <!-- about section -->
    <section class="section" id="about">
      <!--section titel -->
      <div class="section-titel">
        <h2>about <span>us</span></h2>
      </div>
      <!-- end of section titel -->
      <div class="section-center about-center">
        <!-- about img wrapper -->
        <article class="about-img">
          <img
            src="./image/about.jpeg"
            class="about-photo"
            alt="awsome beach"
          />
        </article>
        <!-- about info -->
        <article class="about-info">
          <h3>explore the difference</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa
            blanditiis hic veritatis! Dolor enim animi voluptate vitae,
            asperiores aliquid debitis.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi,
            corrupti harum. Accusamus nemo illo, repellat pariatur ab sed a ut.
          </p>
          <a href="#" class="btn">read more</a>
        </article>
      </div>
    </section>
    <!-- end of about secstion -->

    <!-- services -->
    <section class="section services" id="services">
      <!-- section titel -->
      <div class="section-titel">
        <h2>our <span>services</span></h2>
      </div>
      <!--end of section titel -->
      <div class="section-center services-center">
        <!-- single service -->
        <article class="service">
          <span class="service-icon">
            <i class="fas fa-wallet fa-fw"></i>
          </span>
          <div class="service-info">
            <h4 class="service-titel">saving money</h4>
            <p class="service-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia
              tempore ducimus amet optio aut maxime!
            </p>
          </div>
        </article>
        <!-- end of single service -->
        <!-- single service -->
        <article class="service">
          <span class="service-icon">
            <i class="fas fa-tree fa-fw"></i>
          </span>
          <div class="service-info">
            <h4 class="service-titel">endless baking</h4>
            <p class="service-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia
              tempore ducimus amet optio aut maxime!
            </p>
          </div>
        </article>
        <!-- end of single service -->
        <!-- single service -->
        <article class="service">
          <span class="service-icon">
            <i class="fas fa-socks fa-fw"></i>
          </span>
          <div class="service-info">
            <h4 class="service-titel">amazing comfort</h4>
            <p class="service-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia
              tempore ducimus amet optio aut maxime!
            </p>
          </div>
        </article>
        <!-- end of single service -->
      </div>
    </section>
    <!-- end of service -->

    <!-- featured tours -->
    <section class="section" id="featured">
      <!-- section titel -->
      <div class="section-titel">
        <h2>featured <span>tours</span></h2>
      </div>
      <!-- end of section titel -->
      <!-- featured center -->
      <div class="section-center featured-center">
        <!-- single tour -->
        <article class="tour-card">
          <div class="tour-img-container">
            <img src="./image/tibet-1.jpeg" class="tour-img" alt="tibet img" />
            <p class="tour-date">august 26th,2020</p>
          </div>
          <!-- tour info -->
          <div class="tour-info">
            <div class="tour-titel">
              <h4>tibet adventure</h4>
              
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
              dolorem quos voluptates id voluptate cum dolore dolores officiis
              labore mollitia.
            </p>
            <div class="tour-footer">
              <p>
                <span>
                  <i class="fas fa-map"> India</i>
                </span>
              </p>
              <p>6days</p>
              <p>from $2100</p>
            </div>
          </div>
        </article>
        <!-- end of single tour -->
        <!-- single tour -->
        <article class="tour-card">
          <div class="tour-img-container">
            <img src="./image/java-2.jpeg" class="tour-img" alt="java img" />
            <p class="tour-date">october 1st,2020</p>
          </div>
          <!-- tour info -->
          <div class="tour-info">
            <h4>best of java</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
              dolorem quos voluptates id voluptate cum dolore dolores officiis
              labore mollitia.
            </p>
            <div class="tour-footer">
              <p>
                <span>
                  <i class="fas fa-map"> indonesia</i>
                </span>
              </p>
              <p>11days</p>
              <p>from $1400</p>
            </div>
          </div>
        </article>
        <!-- end of single tour -->
        <!-- single tour -->
        <article class="tour-card">
          <div class="tour-img-container">
            <img
              src="./image/hong kong-3.jpeg"
              class="tour-img"
              alt="hong kong img"
            />
            <p class="tour-date">september 15th,2020</p>
          </div>
          <!-- tour info -->
          <div class="tour-info">
            <h4>explore hong kong</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
              dolorem quos voluptates id voluptate cum dolore dolores officiis
              labore mollitia.
            </p>
            <div class="tour-footer">
              <p>
                <span>
                  <i class="fas fa-map"> hong kong</i>
                </span>
              </p>
              <p>8days</p>
              <p>from $5000</p>
            </div>
          </div>
        </article>
        <!-- end of single tour -->
        <!-- single tour -->
        <article class="tour-card">
          <div class="tour-img-container">
            <img
              src="./image/kenya-4.jpeg"
              class="tour-img"
              alt="wildlife img"
            />
            <p class="tour-date">december 5th,2020</p>
          </div>
          <!-- tour info -->
          <div class="tour-info">
            <h4>kenya highlights</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
              dolorem quos voluptates id voluptate cum dolore dolores officiis
              labore mollitia.
            </p>
            <div class="tour-footer">
              <p>
                <span>
                  <i class="fas fa-map"> kenya</i>
                </span>
              </p>
              <p>20days</p>
              <p>from $3300</p>
            </div>
          </div>
        </article>
        <!-- end of single tour -->
        <!-- single tour -->
        <article class="tour-card">
          <div class="tour-img-container">
            <img
              src="./image/tajmahal-6.jpeg"
              class="tour-img"
              alt="monument img"
            />
            <p class="tour-date">january 5th,2020</p>
          </div>
          <!-- tour info -->
          <div class="tour-info">
            <h4>explore india</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
              dolorem quos voluptates id voluptate cum dolore dolores officiis
              labore mollitia.
            </p>
            <div class="tour-footer">
              <p>
                <span>
                  <i class="fas fa-map"> india</i>
                </span>
              </p>
              <p>20days</p>
              <p>from $4000</p>
            </div>
          </div>
        </article>
        <!-- end of single tour -->
        <!-- single tour -->
        <article class="tour-card">
          <div class="tour-img-container">
            <img
              src="./image/maldives.jpg"
              class="tour-img"
              alt="wildlife img"
            />
            <p class="tour-date">February 15th,2020</p>
          </div>
          <!-- tour info -->
          <div class="tour-info">
            <h4>best of maldives</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
              dolorem quos voluptates id voluptate cum dolore dolores officiis
              labore mollitia.
            </p>
            <div class="tour-footer">
              <p>
                <span>
                  <i class="fas fa-map"> maldives</i>
                </span>
              </p>
              <p>20days</p>
              <p>from $3500</p>
            </div>
          </div>
        </article>
        <!-- end of single tour -->
      </div>
      <div class="tour-btn">
        <a href="#" class="btn">all tours</a>
      </div>
    </section>
    <!-- end of featurted tours -->

    <!-- contact -->
    <section class="section contact" id="contactus">
      <div class="section-center contact-center">
        <!-- contact titel-->
        <article class="contact-titel">
          <h3>want latest tour info and updates?</h3>
          <p>Sign up for newsletter and stay up to date</p>
        </article>
        <div class="btns">
         <a href ="login.php" class="btn-submit">log in</a>
         <a href ="signup.php" class="btn-submit">sign up</a>
        </div>
        <!-- contact form-->
        <!-- <form
          action="https://formspree.io/xaypwykn"
          method="POST"
          class="contact-form"
        >
          <input
            type="email"
            name="email"
            class="form-control"
            placeholder="your email"
          />
          <button type="submit" class="btn-submit">submit</button>
        </form> -->
      </div>
    </section>
    <!-- end of contact -->

    <!-- gallery -->
    <section id="gallery">
      <div class="gallery-center">
        <!-- signle item -->
        <article class="gallery-img-container">
          <img src="./image/tibet-1.jpeg" class="gallery-img" alt="" />
          <a href="#" class="gallery-icon">
            <i class="fas fa-search"></i>
          </a>
        </article>
        <!-- end of signle item -->
        <!-- signle item -->
        <article class="gallery-img-container">
          <img src="./image/java-2.jpeg" class="gallery-img" alt="" />
          <a href="#" class="gallery-icon">
            <i class="fas fa-search"></i>
          </a>
        </article>
        <!-- end of signle item -->

        <!-- signle item -->
        <article class="gallery-img-container">
          <img src="./image/hong kong-3.jpeg" class="gallery-img" alt="" />
          <a href="#" class="gallery-icon">
            <i class="fas fa-search"></i>
          </a>
        </article>
        <!-- end of signle item -->
        <!-- signle item -->
        <article class="gallery-img-container">
          <img src="./image/kenya-4.jpeg" class="gallery-img" alt="" />
          <a href="#" class="gallery-icon">
            <i class="fas fa-search"></i>
          </a>
        </article>
        <!-- end of signle item -->
        <!-- signle item -->
        <article class="gallery-img-container">
          <img src="./image/jebra-5.jpeg" class="gallery-img" alt="" />
          <a href="#" class="gallery-icon">
            <i class="fas fa-search"></i>
          </a>
        </article>
        <!-- end of signle item -->
        <!-- signle item -->
        <article class="gallery-img-container">
          <img src="./image/tajmahal-6.jpeg" class="gallery-img" alt="" />
          <a href="#" class="gallery-icon">
            <i class="fas fa-search"></i>
          </a>
        </article>
        <!-- end of signle item -->
        <!-- signle item -->
        <article class="gallery-img-container">
          <img src="./image/tibet-1.jpeg" class="gallery-img" alt="" />
          <a href="#" class="gallery-icon">
            <i class="fas fa-search"></i>
          </a>
        </article>
        <!-- end of signle item -->
        <!-- signle item -->
        <article class="gallery-img-container">
          <img src="./image/java-2.jpeg" class="gallery-img" alt="" />
          <a href="#" class="gallery-icon">
            <i class="fas fa-search"></i>
          </a>
        </article>
        <!-- end of signle item -->
      </div>
    </section>
    <!-- end of gallery -->

    <!-- footer -->
    <footer class="section footer">
      <!-- fottrer links -->
      <ul class="footer-links">
        <!-- single link -->
        <li>
          <a href="#home" class="footer-link scroll-link">home</a>
        </li>
        <!-- end of single link -->
        <!-- single link -->
        <li>
          <a href="#about" class="footer-link scroll-link">about</a>
        </li>
        <!-- end of single link -->
        <!-- single link -->
        <li>
          <a href="#services" class="footer-link scroll-link">services</a>
        </li>
        <!-- end of single link -->
        <!-- single link -->
        <li>
          <a href="#featured" class="footer-link scroll-link">featured</a>
        </li>
        <!-- end of single link -->
        <!-- single link -->
            <li>
              <a href="#contactus" class="footer-link scroll-link">contact us</a>
            </li>
            <!-- end of single link -->
        <!-- single link -->
        <li>
          <a href="#gallery" class="footer-link scroll-link">gallery</a>
        </li>
        <!-- end of single link -->
        
      </ul>
      <!-- end of footer link -->
      <!-- footer-icons -->
      <ul class="footer-icons">
        <!-- single icon -->
        <li>
          <a href="https://www.facebook.com" target="blank" class="footer-icon">
            <i class="fab fa-facebook"></i>
          </a>
        </li>
        <!-- end of single icon -->
        <!-- single icon -->
        <li>
          <a href="https://www.twitter.com" target="blank" class="footer-icon">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <!-- end of single icon -->
        <!-- single icon -->
        <li>
          <a
            href="https://www.squarespace.com"
            target="blank"
            class="footer-icon"
          >
            <i class="fab fa-squarespace"></i>
          </a>
        </li>
        <!-- end of single icon -->
      </ul>
      <!-- end of footer-icons -->
      <p class="copyright">
        copyright &copy; Backroads travel tours Company <span id="date"></span>.
        all rights reserved
      </p>
    </footer>

    <!-- js -->
    <script src="./js/app.js"></script>
  </body>
</html>
