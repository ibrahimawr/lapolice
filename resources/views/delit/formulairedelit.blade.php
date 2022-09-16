@extends('layouts.app')

@section('content')
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
                <div class="card-header">{{ __('Delit') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('delit.create') }}">
                        @csrf
                        
<!--type-->
                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('Type de delit') }}</label>
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
                            <label for="lieu" class="col-md-4 col-form-label text-md-end">{{ __('Lieu du delit') }}</label>

                            <div class="col-md-6">
                                <input id="lieu" type="text" class="form-control @error('lieu') is-invalid @enderror" name="lieu" value="{{ old('lieu') }}" required autocomplete="lieu" autofocus>

                                @error('lieu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--ampleur-->
<div class="row mb-3">
                            <label for="ampleur" class="col-md-4 col-form-label text-md-end">{{ __('Ampleur du delit') }}</label>

                            <div class="col-md-6">
                                <input id="ampleur" type="text" class="form-control @error('ampleur') is-invalid @enderror" name="ampleur" value="{{ old('ampleur') }}" required autocomplete="ampleur" autofocus>

                                @error('ampleur')
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
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
