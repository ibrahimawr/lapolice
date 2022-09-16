@extends('layouts.master')
@section('container')



<!-- service section -->
<!--<section class="service_section layout_padding-top">-->
   <!-- <div class="container">
      <div class="service_detail">
        <h3>
          We
        </h3>
        <h2>
          we provide service
        </h2>
      </div>
      <div class="service_img-container">
        <div class="service_img-box i-box-1">
          <a href=""> Bank security</a>
        </div>
        <div class="service_img-box i-box-2">
          <a href="">society Guard </a>
        </div>
        <div class="service_img-box i-box-3">
          <a href="">Hotel Security </a>
        </div>
        <div class="service_img-box i-box-4">
          <a href=""> Home security</a>
        </div>
      </div>-->

      <!--<div class="service_img-container">
        <div class="service_img-box i-box-5">
          <a href=""> Bank security</a>
        </div>
        <div class="service_img-box i-box-6">
          <a href="">society Guard </a>
        </div>
        <div class="service_img-box i-box-7">
          <a href="">Hotel Security </a>
        </div>
        <div class="service_img-box i-box-8">
          <a href=""> Home security</a>
        </div>
      </div>

      <div class="service_btn">
        <a href="">
          <span>
            Read More
          </span>
          <img src="images/arrow-black.png" alt="" class="ml-2" />
        </a>
      </div>
    </div>
  </section>-->
  <!-- end service section -->

  <!-- security section -->

  <!--<section class="security_section layout_padding">
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
              <a href=""> View More</a>
            </div>
          </div>
          <div class="item">
            <div class="security_img-box i-box-2">
              <a href=""> View More</a>
            </div>
          </div>
          <div class="item">
            <div class="security_img-box i-box-3">
              <a href=""> View More</a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="security_btn">
      <a href="">
        <span>
          Read More
        </span>
        <img src="images/arrow-black.png" alt="" class="ml-2" />
      </a>
    </div>
  </section>-->
  <!-- end security section -->


  <section class="welcome_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-12">

<div class="container">
    
@if(session()->has("success"))
         <div class="alert alert-succes">
            {{session()->get('success')}}
          </div>
            @endif

            @if ($errors ->any())
          <ul class="alert alert-danger">
             @foreach ($errors->all() as $error)
                      <li>{{$error }}</li>
              @endforeach
          </ul>
          @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header-intervention">{{ __('SOLLICITER UNE INTERVENTION') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('intervention.create') }}">
                        @csrf
                        
<!--type-->
                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('Specifiez le type') }}</label>
                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--lieu-->
                        <div class="row mb-3">
                            <label for="lieu" class="col-md-4 col-form-label text-md-end">{{ __('Dans quel lieu') }}</label>

                            <div class="col-md-6">
                                <input id="lieu" type="text" class="form-control @error('lieu') is-invalid @enderror" name="lieu" value="{{ old('lieu') }}" required autocomplete="lieu" autofocus>

                                @error('lieu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--genre-->
<div class="row mb-3">
                            <label for="genre" class="col-md-4 col-form-label text-md-end">{{ __('Pour quel motif') }}</label>

                            <div class="col-md-6">
                                <input id="genre" type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{ old('genre') }}" required autocomplete="genre" autofocus>

                                @error('genre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <!--<div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="motdepasse" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="motdepasse" type="password" class="form-control @error('motdepasse') is-invalid @enderror" name="motdepasse" required autocomplete="new-motdepasse">

                                @error('motdepasse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="motdepasse-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="motdepasse-confirm" type="password" class="form-control" name="motdepasse_confirmation" required autocomplete="new-motdepasse">
                            </div>
                        </div>-->

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn-btn-intervention">
                                    {{ __('SOLLICITER') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
      </div>
    </div>
  </section>


  <!-- info section -->
  <!--<section class="info_section layout_padding">
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
  </section>-->

  <!-- end info section -->
  @endsection