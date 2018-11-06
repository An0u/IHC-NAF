@extends('layout-atendente')

@section('content')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h2> Olá Atendente, Seja bem vindo ao sistema de agendamento do NAF , <br> aqui você receberá avaliações dos seus clientes </h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h2> Veja todos os agendamentos feitos </h2>
        <a class="btn btn-warning" href="{{ route('agendamentos-atendente') }}" > Agendamentos </a>
    </div>
  </div>
@endsection