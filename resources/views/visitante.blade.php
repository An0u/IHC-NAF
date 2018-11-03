@extends('layout')

@section('content')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h2> Olá Visitante, Seja bem vindo ao sistema de agendamento do NAF , <br> aqui você poderá fazer seu agendamento para atendimento em nossa central,<br> caso queira fazer um novo agendamento clique no botão agendar logo abaixo  </h2>
        <a class="btn btn-primary" href="{{ route('novoagendamento') }}" > Agendar </a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h2> Caso deseje ver seus últimos agendamentos clique no botão abaixo</h2>
        <a class="btn btn-warning" href="{{ route('agendamentos') }}" > Últimos agendamentos </a>
    </div>
  </div>
@endsection