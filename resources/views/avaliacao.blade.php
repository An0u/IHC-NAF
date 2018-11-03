@extends('layout')

@section('content')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    	<div class="x_panel">
                  <div class="x_title">
                    <h2>Avaliação </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate>
                      <label for="fullname">Codigo </label>
                      <input type="text" id="fullname" class="form-control disabled" value="3" disabled name="fullname" required />

                      <label for="email">
                      Nossos atendentes conseguiu captar adequadamente suas dúvidas e preocupações? </label>
                      	<div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings pull-left">
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                        </div>
                        <br>
                        <label for="email">
                      Qual a possibilidade de você indicar os serviços ou produtos de nossa empresa para um amigo ou conhecido? </label>
                      	<div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings pull-left">
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                        </div>
                        <br>
                        <label for="email">
                      De modo geral, como você avalia a qualidade do atendimento ao cliente realizado por nossa empresa? </label>
                      	<div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings pull-left">
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                        </div>
                        <br>
                        <label for="email">
                      O cronograma e as fases de seu problema estão sendo (ou foram) bem acompanhadas por nosso pessoal? </label>
                      	<div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings pull-left">
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12 col-sm-12 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>Atendente 05</i></h4>
                            <div class="left col-xs-7">
                              <h2>Haddad</h2>
                              <p><strong>Sobre: </strong> Especialista em E-social </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> Address: haddad@lulalivre.com.br </li>
                                <li><i class="fa fa-phone"></i> Phone #: (88) 94152 - 3254 </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/haddad.jpg"  height="100px" width="120px" alt="" class="img-circle ">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                          	<div class="col-xs-12 col-sm-6 emphasis">
                              <i class="fa fa-user"> </i> Qual nota daria para o atendente ? 
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings pull-right">
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                      <br>
                      
                          <label for="message">Deixe-nos uma sugestão com relação ao nosso atendimento :</label>
                          <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>

                          <br/>
                          <a class="btn btn-primary pull-right" href="{{ route('agendamentos') }}">Avaliar</a>

                    </form>
                    <!-- end form for validations -->

                  </div>
                </div>
              </div>
    	</div>
  </div>
@endsection
@push('scripts')
@endpush
