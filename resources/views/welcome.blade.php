@extends('layouts.navebarre')
@section('content-accueil')



<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
  <div class="container position-relative" data-aos="zoom-in" data-aos-delay="500">
    <h1>Le meilleur coloriste <br>d'images et de vidéo,</h1>
    <h2> qui peut ajouter de la couleur aux anciennes images et aux vidéos en noir et blanc.</h2>
    <a href="{{ url('/login') }}" class="get-started-btn">Get Started</a>
  </div>
</section><!-- End Hero -->


<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="{{asset('accueil/assets/img/teaser.jpg')}}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h3>Coloriser des photos historiques</h3>
        <br>
        <br>
        <p class="fst-italic" style="color:#BDBDBD;">
          Image Colorizer est un outil en ligne alimenté par l’intelligence artificielle qui vous permet de colorier les
          photos anciennes en noir et blanc. Il s’agit d’un processus entièrement automatique. Automatique et rapide,
          Image Colorizer permet de coloriser des photos noir et blanc en quelques secondes seulement. L’outil est
          entièrement gratuit.
        </p>

      </div>
    </div>

  </div>
</section><!-- End About Section -->


<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <!-- <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-left" data-aos-delay="100"> -->
      <div class="col-lg-4 d-flex align-items-stretch">

        <img src="{{asset('accueil/assets/img/vd.gif')}}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 order-1 order-lg-2">
        <h3>coloriser des vidéos </h3>
        <br>
        <br>

        <p class="fst-italic" style="color:#BDBDBD;">
          En ce basant sur la technologie de l'intelligence artificielle,
          nous entraînons le système à colorier des sequences videos en noir et blanc en quelques secondes.
        </p>
      </div>
    </div>

  </div>
</section>
<!-- End About Section -->
<!-- ======= Counts Section ======= -->

<section id="counts" class="counts bg-black">

  <!-- ======= Popular Courses Section ======= -->
  <section id="popular-courses" class="courses" style="color:#AAAAAA;">
    <div class="container" data-aos="fade-up">
      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img src="{{asset('accueil/assets/img/hero-bg.jpg')}}" class="img-fluid" alt="...">
            <div class="course-content">

              <p style="color:#BDBDBD;">"Aucune compétence PhotoShop requise pour colorier des photos en noir et blanc.
                Téléchargez vos anciennes photos et laissez le travail des pixels à notre coloriseur d'images".</p>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">

                </div>

              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="course-item">
            <img src="{{asset('accueil/assets/img/ige.jpg')}}" class="img-fluid" alt="...">
            <div class="course-content">

              <p style="color:#BDBDBD;">"Réimaginez le passé en coloriant des photos et des vidéos d'ancêtres et de
                personnages historiques.".</p>
              <div class="trainer d-flex justify-content-between align-items-center">


              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="course-item">
            <img src="{{asset('accueil/assets/img/images.png')}}" class="img-fluid" alt="...">
            <div class="course-content">

              <p style="color:#BDBDBD;">"Aucune compétence PhotoShop requise pour colorier des photos en noir et blanc.
                Téléchargez vos anciennes photos et laissez le travail des pixels à notre coloriseur d'images".</p>
              <div class="trainer d-flex justify-content-between align-items-center">


              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->



      </div>

    </div>
  </section><!-- End Popular Courses Section -->

</section><!-- End Counts Section -->


@endsection