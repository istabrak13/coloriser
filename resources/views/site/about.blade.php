@extends('layouts.navebarre')
@section('content-accueil')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs " data-aos="fade-in" style="background-color:#646464;" >
      <div class="container" >
        <h2>A propos de nous</h2>
        <p>Coloriser transforme les photos et vidéos en noir et blanc en couleurs en quelques secondes. Réimaginez le passé en colorisant des photos et des vidéos d'ancêtres et de personnages historiques. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('accueil/assets/img/Marylin.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><center>Comment cela fonctionne</center></h3>
            <p class="font-italic" style="color:#BDBDBD;">
            La magie ! Je plaisante - l'apprentissage profond. L'apprentissage profond utilise un réseau neuronal 
            et un ensemble d'apprentissage pour apprendre à partir de photos et vidéos en noir et blanc et de leur équivalent en couleur. 
            Une fois que le modèle a été nourri de nombreuses photos et vidéos, il apprend à les colorier. 
            Veuillez noter que les fichiers volumineux peuvent être optimisés et redimensionnés pour le traitement.
            </p>
            
            <h3><center>Mes photos sont-elles privées ?</center></h3>
            <p class="font-italic" style="color:#BDBDBD;">
            Pour ce service, les photos et les vidéos ne sont pas enregistrées sans la permission de l'utilisateur. 
            Pour des raisons de coûts de stockage et de respect de la vie privée des utilisateurs, 
            nous ne conservons les images qu'aussi longtemps que l'utilisateur souhaite faire fonctionner nos modèles 
            d'apprentissage automatique, et ne stockons pas les photos au-delà.
            </p>


            <h3><center>Conditions d'utilisation</center></h3>
            <p class="font-italic" style="color:#BDBDBD;">
            Ce service est destiné à coloriser des photos et des vidéospersonnelles. 
            En utilisant ce service, vous vous engagez à ne pas télécharger de contenu illégal au sens de la législation de RGPD 
            et de votre législation locale. Vous ne pouvez télécharger que des images et des vidéos dont vous êtes le détenteur exclusif 
            du droit d'auteur.
            </p>      
            
            

          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>TESTIMONIALS</h2>
          <p>CE QU'ILS DISENT</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-wrap" >
            <div class="testimonial-item" style="background-color:#646464;">
              <img src="{{asset('accueil/assets/img/testimonials/testimonials-1.jpeg')}}" class="testimonial-img" alt="">
              <h3>Jrad Estabrak</h3>
              <h4>Cofondateur</h4>
              <p style="color:white;">
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Le noir et blanc est un médium formidable. En supprimant la couleur, on peut se concentrer davantage sur l'histoire qui se cache derrière l'image.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item" style="background-color:#646464;">
              <img src="{{asset('accueil/assets/img/testimonials/testimonials-3.png')}}" class="testimonial-img" alt="">
              <h3>Khalil Sabrin</h3>
              <h4>Cofondateur</h4>
              <p style="color:white;">
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Notre idée est d'aider les gens à restaurer les vieilles photos et vidéos de leurs proches pour qu'ils se sentent plus vivants et proches d'eux.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item" style="background-color:#646464;">
              <img src="{{asset('accueil/assets/img/testimonials/testimonials-2.jpeg')}}" class="testimonial-img" alt="">
              <h3>Gasmi Naziha</h3>
              <h4>User</h4>
              <p style="color:white;">
                <i class="bx bxs-quote-alt-left quote-icon-left" ></i>
                J'ai essayé le service et je l'ai tout simplement adoré, les feuilles de l'arbre sont vertes, les cheveux, 
                les robes, les costumes, les arrière-plans, tout cela sur les photos 
                de famille de 1950 et des années précédentes dans mon arbre d'Ancestry. Cela les a rendues plus intéressantes.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Testimonials Section -->





@endsection