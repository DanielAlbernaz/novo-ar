@include('site.main.header')

<div class="wrap">
  <!--Cabeçalho da página-->
  <div class="page-header">
      <h1>Galeria de Fotos - Instalações</h1>
      <p>
         Modelo simples de galeria de fotos usando apenas CSS e JS. Essa galeria trabalha
          com o modelo mais básico possível. Recomendado para quem quer apenas exibir algumas fotos, sem nenhum outra função mais avançada, ou então, usar como base para criar outro modelo mais complexo.
      </p>
  </div>

  <!-- Principal Section with the gallery code. If you want use only gallery code,
       you can copy all code bellow, with gallery-container.-->
  <section class="container gallery-container">

      <!--Slide-->
      <div class="mySlides fade"> <!-- 01 -->
          <div class="numbertext">01 / 05</div>
          <img class="imgslide" src="images/single-property-01.jpg" alt="Arara Azul"/>
          <div class="text">Arara Azul</div>
      </div>

      <div class="mySlides fade"> <!-- 02 -->
          <div class="numbertext">02 / 05</div>
          <img class="imgslide" src="images/single-property-02.jpg" alt="Arara Canindé"/>
          <div class="text">Arara Canindé</div>
      </div>

      <div class="mySlides fade"> <!-- 03 -->
          <div class="numbertext">03 / 05</div>
          <img class="imgslide" src="images/single-property-03.jpg" alt="Papagaio Verdadeiro"/>
          <div class="text">Amazona é um género de papagaios da ordem Psittaciformes, característico da América, existindo desde o sul do México até o Caribe e a América do Sul. São conhecidos, popularmente, como papagaios, louros, ajerus, ajurus, jerus e jurus</div>
      </div>

      <div class="mySlides fade"> <!-- 04 -->
          <div class="numbertext">04 / 05</div>
          <img class="imgslide" src="images/single-property-04.jpg" alt="Jandaia"/>
          <div class="text">Jandaia</div>
      </div>

      <div class="mySlides fade"> <!-- 05 -->
          <div class="numbertext">05 / 05</div>
          <img class="imgslide" src="images/single-property-05.jpg" alt="Jandaia"/>
          <div class="text">Tiriba de testa vermelha</div>
      </div>
      <!--Final Slides-->

      <!--Navigation-->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </section>
  <!--End of galery-->

  <script>

      var slideIndex = 1;
      showSlides(slideIndex);

      // Next/previous controls
      function plusSlides(n) {
        showSlides(slideIndex += n);
        ga('send', 'event', 'galeria', 'next_prev', 'Titulo da página');
      }

      // Thumbnail image controls
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
      }

  </script>
  

  <!-- end of page -->
  
</div>


@include('site.main.footer')