@extends('layouts.master')
@section('container')


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
                <div class="card-header-perte">{{ __('RETOURNER UNE PIECE RAMASSER') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('perte.create') }}">
                        @csrf
                        
<!--typepiece-->
                        <div class="row mb-3">
                            <label for="typepiece" class="col-md-4 col-form-label text-md-end">{{ __('Type de piece') }}</label>
                            <div class="col-md-6">
                                <input id="typepiece" type="text" class="form-control @error('typepiece') is-invalid @enderror" name="typepiece" value="{{ old('typepiece') }}" required autocomplete="typepiece" autofocus>

                                @error('typepiece')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--nomperdant-->
                        <div class="row mb-3">
                            <label for="nomperdant" class="col-md-4 col-form-label text-md-end">{{ __('Nom Du Perdant') }}</label>

                            <div class="col-md-6">
                                <input id="nomperdant" type="text" class="form-control @error('nomperdant') is-invalid @enderror" name="nomperdant" value="{{ old('nomperdant') }}" required autocomplete="nomperdant" autofocus>

                                @error('nomperdant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--prenomperdant-->
                        <div class="row mb-3">
                            <label for="prenomperdant" class="col-md-4 col-form-label text-md-end">{{ __('Prenom du Perdant') }}</label>

                             <div class="col-md-6">
                                <input id="prenomperdant" type="text" class="form-control @error('prenomperdant') is-invalid @enderror" name="prenomperdant" value="{{ old('prenomperdant') }}" required autocomplete="prenomperdant" autofocus>

                                @error('prenomperdant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--dateperte-->
                        <div class="row mb-3">
                            <label for="dateperte" class="col-md-4 col-form-label text-md-end">{{ __('Ramasser Le') }}</label>
                            <div class="col-md-6">
                                <input id="dateperte" type="date" class="form-control @error('dateperte') is-invalid @enderror" name="dateperte" value="{{ old('dateperte') }}" required autocomplete="dateperte" autofocus>

                                @error('dateperte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--numeroperdant-->
                        <div class="row mb-3">
                            <label for="numeroperdant" class="col-md-4 col-form-label text-md-end">{{ __('Numero Piece Ou Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="numeroperdant" type="number" class="form-control @error('numeroperdant') is-invalid @enderror" name="numeroperdant" value="{{ old('numeroperdant') }}" required autocomplete="numeroperdant" autofocus>

                                @error('numeroperdant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--lieuramassage-->
                        <div class="row mb-3">
                            <label for="lieuramassage" class="col-md-4 col-form-label text-md-end">{{ __('Ramasser à') }}</label>

                             <div class="col-md-6">
                                <input id="lieuramassage" type="text" class="form-control @error('lieuramassage') is-invalid @enderror" name="lieuramassage" value="{{ old('lieuramassage') }}" required autocomplete="lieuramassage" autofocus>

                                @error('lieuramassage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--nomrerouvant-->
                        <div class="row mb-3">
                            <label for="nomrerouvant" class="col-md-4 col-form-label text-md-end">{{ __('Retrouver Par :') }}</label>
                            <div class="col-md-6">
                                <input id="nomrerouvant" type="text" class="form-control @error('nomrerouvant') is-invalid @enderror" name="nomrerouvant" value="{{ old('nomrerouvant') }}" required autocomplete="nomrerouvant" autofocus placeholder="Nom">

                                @error('nomrerouvant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--prenomretrouvant-->
                        <div class="row mb-3">
                            <label for="prenomretrouvant" class="col-md-4 col-form-label text-md-end">{{ __('Retrouver Par :') }}</label>

                            <div class="col-md-6">
                                <input id="prenomretrouvant" type="text" class="form-control @error('prenomretrouvant') is-invalid @enderror" name="prenomretrouvant" value="{{ old('prenomretrouvant') }}" required autocomplete="prenomretrouvant" autofocus placeholder="Prenom">

                                @error('prenomretrouvant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--telephoneretrouvant-->
                        <div class="row mb-3">
                            <label for="telephoneretrouvant" class="col-md-4 col-form-label text-md-end">{{ __('Retrouver Par :') }}</label>

                             <div class="col-md-6">
                                <input id="telephoneretrouvant" type="number" class="form-control @error('telephoneretrouvant') is-invalid @enderror" name="telephoneretrouvant" value="{{ old('telephoneretrouvant') }}" required autocomplete="telephoneretrouvant" autofocus placeholder="telephone">

                                @error('telephoneretrouvant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


<!--fait pas partie-->
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
                                <button type="submit" class="btn-btn-perte">
                                    {{ __('POSTEZ') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



 @endsection