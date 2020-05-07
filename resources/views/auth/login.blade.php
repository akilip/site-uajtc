@extends('uajtc.auth.admin.layout.master')
@section('contain')
    @error('email')<div class="col-xs-10 col-sm-8 col-md-6 col-lg-6"> <div class="btn bg-red btn-lg btn-block waves-effect" type="button">{{$message}}</div></div>@enderror
    @error('phone')<div class="col-xs-10 col-sm-8 col-md-6 col-lg-6"> <div class="btn bg-red btn-lg btn-block waves-effect" type="button">{{$message}}</div></div>@enderror
    @error('username')<div class="col-xs-10 col-sm-8 col-md-6 col-lg-6"> <div class="btn bg-red btn-lg btn-block waves-effect" type="button">{{$message}}</div></div>@enderror

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ESPACE CONNEXION
                      <small>Entrez vos informations</small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form method="POST" action="{{ route('login') }}">
                         @csrf
                        <div class="form-group form-float">
                            <div class="form-line  @error('identifiant') focused error @enderror">
                                <input type="text" id="email_address" class="form-control" name="identifiant" value="{{ old('identifiant') }}">
                                <label class="form-label">Nom Utilisateur ou Email</label>
                            </div>
                            @error('identifiant') <label  class="error" >{{$message}}</label> @enderror
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line @error('password') focused error @enderror">
                                <input type="password" id="password" class="form-control" name="password" >
                                <label class="form-label">Mot de Passe</label>
                            </div>
                            @error('password') <label  class="error" >{{$message}}</label> @enderror
                        </div>
                        <input type="checkbox" id="remember_me_2" name="remember" class="filled-in">
                        <label for="remember_me_2">Restez connecter</label>
                        <br>
                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="CONNEXION">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
