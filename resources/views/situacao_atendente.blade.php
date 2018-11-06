@extends('layout-atendente')

@section('content')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Meus agendamentos</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <a href="{{ route('novoagendamento') }}" class="btn btn-success" > Novo</a>
                <p class="text-muted font-13 m-b-30">
                </p>
                <table id="datatable-fixed-header" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Situação</th>
                      <th>Atendente</th>
                      <th>Avaliação geral</th>
                      <th>Data do agendamento</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>1</td>
                        <td> <span class="label label-warning">Pendente</span></td>
                        <td>Ana Maria</td>
                        <td> 
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </td>
                        <td>04/12/2011</td>
                        <td>
                            <a href="{{ route('novoagendamento') }}" class="btn btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                            <button class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> Excluir</button>
                            <a href="{{ route('avaliar') }}" class="btn btn-warning"> <i class="fa fa-star" aria-hidden="true"></i> Avaliar</a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><span class="label label-success"> Completado </span></td>
                        <td>Vitória</td>
                        <td> 
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </td>
                        <td>21/10/2018</td>
                        <td>
                            <a href="{{ route('novoagendamento') }}" class="btn btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                            <button class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> Excluir</button>
                            <a href="{{ route('avaliar') }}" class="btn btn-warning"> <i class="fa fa-star" aria-hidden="true"></i> Avaliar</a>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><span class="label label-success"> Completado </span></td>
                        <td>Haddad</td>
                        <td> 
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </td>
                        <td>30/01/2017</td>
                        <td>
                            <a href="{{ route('novoagendamento') }}" class="btn btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                            <button class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> Excluir</button>
                            <a href="{{ route('avaliar') }}" class="btn btn-warning"> <i class="fa fa-star" aria-hidden="true"></i> Avaliar</a>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td><span class="label label-success"> Completado </span></td>
                        <td>Ana Maria</td>
                        <td> 
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                        </td>
                        <td>20/05/2016</td>
                        <td>
                            <a href="{{ route('novoagendamento') }}" class="btn btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                            <button class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> Excluir</button>
                            <a href="{{ route('avaliar') }}" class="btn btn-warning"> <i class="fa fa-star" aria-hidden="true"></i> Avaliar</a>
                        </td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td><span class="label label-danger"> Cancelado </span></td>
                        <td>Ana Maria</td>
                        <td> 
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                        </td>
                        <td>13/05/2015</td>
                        <td>
                            <a href="{{ route('novoagendamento') }}" class="btn btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                            <button class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> Excluir</button>
                            <a href="{{ route('avaliar') }}" class="btn btn-warning"> <i class="fa fa-star" aria-hidden="true"></i> Avaliar</a>
                        </td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td><span class="label label-info"> Em analise </span></td>
                        <td>Manuela D'avila</td>
                        <td> 
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </td>
                        <td>13/05/2018</td>
                        <td>
                            <a href="{{ route('novoagendamento') }}" class="btn btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                            <button class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> Excluir</button>
                            <a href="{{ route('avaliar') }}" class="btn btn-warning"> <i class="fa fa-star" aria-hidden="true"></i> Avaliar</a>
                        </td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td><span class="label label-success"> Completado </span></td>
                        <td>Manuela D'avila</td>
                        <td> 
                            <i class="fa bg-yellow fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </td>
                        <td>25/07/2018</td>
                        <td>
                            <a href="{{ route('novoagendamento') }}" class="btn btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                            <button class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> Excluir</button>
                            <a href="{{ route('avaliar') }}" class="btn btn-warning"> <i class="fa fa-star" aria-hidden="true"></i> Avaliar</a>
                        </td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
  </div>
@endsection
@push('scripts')
<script src="{{ asset('node_modules/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('node_modules/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('node_modules/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('node_modules/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('node_modules/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('node_modules/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('node_modules/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('node_modules/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
<script src="{{ asset('node_modules/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
@endpush