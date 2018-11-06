@extends('layout-atendente')

@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Calendário</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Pesquisar ...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Ir!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_content">

            <div id='calendar'></div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('scripts')
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('node_modules/gentelella/vendors/fullcalendar/dist/fullcalendar.js') }}"></script>
<script src="{{ asset('node_modules/gentelella/vendors/fullcalendar/lang/pt.js') }}"></script>
<script src="{{ asset('node_modules/locale-all.js') }}"></script>
@endpush