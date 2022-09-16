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
@extends('layouts.commissariat')
@section('container')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">type</th>
      <th scope="col">lieu</th>
      <th scope="col">ampleur</th>
    </tr>
  </thead>
  <tbody>
  @foreach($intervention as $intervention)
    <tr>
      <th scope="row">{{$intervention->id}}</th>
      <td>{{$intervention->type}}</td>
      <td>{{$intervention->lieu}}</td>
      <td>{{$intervention->genre}}</td>
    </tr>
   
    @endforeach
  </tbody>
</table>

@endsection