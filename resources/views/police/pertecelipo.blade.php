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
                                @extends('layouts.celipo')
@section('container')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">type (piece)</th>
      <th scope="col">perdant (nom)</th>
      <th scope="col">perdant (prenom)</th>
      <th scope="col">date (perte)</th>
      <th scope="col">numero piece/tel (perdant)</th>
      <th scope="col">lieu (ramassage)</th>
      <th scope="col">nom (retrouvant)</th>
      <th scope="col">prenom (retrouvant)</th>
      <th scope="col">telephone (retrouvant)</th>
    </tr>
    </tr>
  </thead>
  <tbody>
  @foreach($perte as $perte)
    <tr>
      <th scope="row">{{$perte->id}}</th>
      <td>{{$perte->typepiece}}</td>
      <td>{{$perte->nomperdant}}</td>
      <td>{{$perte->prenomperdant}}</td>
      <td>{{$perte->dateperte}}</td>
      <td>{{$perte->numeroperdant}}</td>
      <td>{{$perte->lieuramassage}}</td>
      <td>{{$perte->nomretrouvant}}</td>
      <td>{{$perte->prenomretrouvant}}</td>
      <td>{{$perte->telephoneretrouvant}}</td>
    </tr>
   
    @endforeach
  </tbody>
</table>

@endsection