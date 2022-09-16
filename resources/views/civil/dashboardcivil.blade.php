 je suis l'espace civil, un bon civil !!!
<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                <!DOCTYPE html>
                                @extends('layouts.master')
@section('container')
  <!-- end header section -->

  <!-- slider section -->
  <section class=" slider_section">
    <div id="carouselExampleIndicators" class="carousel slide vert" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="slider_box">
          <div class="fixed_company-detail">
              <p>
                
              </p>
            </div>
            <div class="slider-detail">
              <div class="slider_detail-heading">
                <h2 style="color: red; margin-top: 20px;">
                  ALLÔ POLICE
                </h2>
                <h1>
                  L'APPLICATION WEB QUI VOUS LIE A LA POLICE
                </h1>
              </div>
              <div class="slider_detail-text">
                <p>
                </p>
              </div>
              <div class="slider_detail-btn">
                
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slider_box">
            <div class="fixed_company-detail">
              <p>
                
              </p>
            </div>
            <div class="slider-detail">
              <div class="slider_detail-heading">
                <h2 style="color: red; margin-top: 20px; margin-left: -105px;">
                  BESOIN DE SECURITE ???
                </h2>
                <h1 style="margin-top: 20px; ">
                  CONTACTER LA POLICE 24H/24 7J/7
                </h1>
              </div>
              <div class="slider_detail-text">
                <p>
                  
                </p>
              </div>
              <div class="slider_detail-btn">
                
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slider_box">
            <div class="fixed_company-detail">
              <p>
                
              </p>
            </div>
            <div class="slider-detail">
              <div class="slider_detail-heading">
                <h2 style="color: red; margin-top: -80px; margin-left: 700px;">
                  RETROUVER SES BIENS PERDUS !!!
                </h2>
                <h1 style="margin-left: 700px;">
                  C'EST POSSIBLE AVEC
                </h1>
                <h2 style="margin-left: 700px; color: red">
                  ALLÔ POLICE
                </h2>
              </div>
              <div class="slider_detail-text">
                <p>
                  
                </p>
              </div>
              <div class="slider_detail-btn">
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>-->
    </div>
  </section>

  <!-- end slider section -->

  <!-- welcome section -->
  <section class="welcome_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="images/lolo.jpg" alt="" />
          </div>
        </div>
        <div class=" col-md-6">
          <div class="welcome_detail">
            <h3 style="color: red;">
              ALLÔ POLICE
            </h3>
            <h2>
              L'APLLICATION QUI PEUX VOUS PERMETTRE DE SAUVER DES VIES
            </h2>
            <p>
              Partant d'un constat fait sur le fait de ne pas avoir d’application pouvant permettre aux citoyens de contribuer au renforcement de la sécurité et à récupérer des biens égarer, avec ALLÔ POLICE les citoyens peuvent apporter leurs aides aux membres de l’autorité et aussi aider a récupérer des biens égarer dans l’objectif de donnée une chance aux propriétaires de les retrouves plus facilement.
            </p>
            <!--<div class="welcome_detail-btn">
              <a href="">
                <span>
                  Read More
                </span>
                <img src="images/arrow-black.png" alt="" class="ml-2" />
              </a>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end welcome section -->

  <!-- service section -->
  <section class="service_section ">
    <div class="container">
      <div class="service_detail">
        <h2>
          Vous avez perdu ou ramassé un bien personnel ???
        </h2>
        <h3>
          Postez l'image du bien dans l'application et multipliez les chances de le retrouver tres facilement.
        </h3>
      </div>
      <div class="service_img-container">
        <div class="service_img-box i-box-1">
          <a href=""> CARTE NINA </a>
        </div>
        <div class="service_img-box i-box-2">
          <a href=""> CARTE D'IDENTITE </a>
        </div>
        <!--<div class="service_img-box i-box-3">
          <a href=""> CARTE SCOLAIRE </a>
        </div>
        <div class="service_img-box i-box-4">
          <a href=""> PASSEPORT </a>
        </div>
        <div class="service_img-box i-box-5">
          <a href=""> CARTE SCOLAIRE retrouver </a>
        </div>-->
      </div>
      <!--<div class="service_btn">
        <a href="">
          <span>
            Read More
          </span>
          <img src="images/arrow-black.png" alt="" class="ml-2" />
        </a>
      </div>-->
    </div>
  </section>
  <!-- end service section -->

  <!-- security section -->

  <section class="security_section layout_padding">
    <h3>
      POUR VOTRE SECURITE


    </h3>
    <h2>
      NOUS SOMMES PRÊT A INTERVENIR
    </h2>
    <div class="security_container">
      <div class="carousel-wrap">
        <div class="owl-carousel">
          <div class="item">
            <div class="security_img-box i-box-1">
              <!--<a href=""> View More</a>-->
            </div>
          </div>
          <div class="item">
            <div class="security_img-box i-box-2">
              <!--<a href=""> View More</a>-->
            </div>
          </div>
          <div class="item">
            <div class="security_img-box i-box-3">
              <!--<a href=""> View More</a>-->
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="security_btn">
      <!--<a href="">
        <span>
          Read More
        </span>
        <img src="images/arrow-black.png" alt="" class="ml-2" />
      </a>-->
    </div>
  </section>
  <!-- end security section -->


  <!-- story section -->

  <section class="layout_padding story_section">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="images/impo3police.jpg" alt="" />
          </div>
        </div>
        <div class=" col-md-6">
          <div class="story_detail">
            <h3>
              Police nationale
            </h3>
            <h2>
              opérations de descente
            </h2>
            <p>
              « Notre volonté est de faire régner l’ordre public et la sécurité dans les rues, dans les quartiers, dans les villes et partout où sévissent les bandes armées », a lancé le Directeur Régional de la Police Nationale, devant ses hommes pour les galvaniser. Il les a exhortés de traquer sans répit les malfaiteurs. Le Contrôleur Général Seydou DIARRA s’est réjoui de la présence des forces de Gendarmerie et Garde Nationale qui illustre parfaitement la bonne entente entre les forces de sécurité, gage de la réussite des missions de protection des personnes et leurs biens.
            </p>
            <!--<div class="story_detail-btn">
              <a href="">
                <span>
                  Read More
                </span>
                <img src="images/arrow-black.png" alt="" class="ml-2" />
              </a>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end story section -->

  <!-- contact section -->
  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div id="map" class="h-100 w-100 ">
          </div>
        </div>
        <!--<div class=" col-md-6 contact_form-container">
          <div class="contact_box">
            <form action="">
              <input type="text" placeholder="Your Name">
              <input type="email" placeholder="Email">
              <input type="text" placeholder="Phone Number">
              <input type="text" placeholder="Message">
              <div>
                <button type="submit">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>-->

    </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class=" col-md-4 info_detail">
          <div>
            <p>
"Lorsque vous voyez une voiture kamikaze venant de loin, prenant soin d'éviter les bars, les salles de concert, les stades de football, les marchés pour ne viser qu'un camp militaire, vous devez comprendre que (l'armée) est notre cible", disait le message."Mais si vous nous montrez que vous et l'armée êtes la même chose, alors pourquoi nous donner la peine de cibler uniquement le camp militaire ?", prévient le message.
            </p>
          </div>
        </div>
        <div class=" col-md-4 address_container">
          <div>
            <h3>
              Adresse:
            </h3>
            <div class="address_link-container">
              <a href="">
                <img src="images/location.png" alt="">
                <span> Adresse: hamdallaye ACI / lafiabougou, place can ESCAE
                </span>
              </a>
              <a href="">
                <img src="images/phone.png" alt="">
                <span> Tel: +223 50 69 90 18
                </span>
              </a>
              <a href="">
                <img src="images/mail.png" alt="">
                <span>
                  Email: applicationallopolice@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class=" col-md-4 news_container">
          <div>
            <div>
              <h3>
                envoyez une lettre

              </h3>
              <form action="">
                <input type="email" placeholder="ENTREZ VOTRE EMAIL">
                <div>
                  <button type="submit">
                    envoyez
                  </button>
                </div>
              </form>
            </div>
            <div class="social_container">
              <div>
                <img src="images/fb.png" alt="">
              </div>
              <div>
                <img src="images/twitter.png" alt="">
              </div>
              <div>
                <img src="images/linkedin.png" alt="">
              </div>
              <div>
                <img src="images/youtube.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->
@endsection
