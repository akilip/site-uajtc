@extends('uajtc.auth.admin.layout.master')
@section('contain')
<div class="signup-box">
    <div class="card">
        <div class="header">
            <h2>
                ENREGISTRER UN NOUVEAU MEMBRE
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
            <form  method="POST" action="{{ route('register') }}" novalidate="novalidate">
                @csrf
                <div class="form-group  form-float  form-float">
                    <div class="form-line @error('name') focused error @enderror">
                        <input type="text" class="form-control" name="name"  autofocus="" value="{{ old('name') }}">
                        <label class="form-label">Nom</label>
                    </div>
                    @error('name') <label  class="error" >{{$message}}</label> @enderror
                </div>
                <div class="form-group  form-float">
                    <div class="form-line  @error('surname') focused error @enderror ">
                        <input type="text" class="form-control" name="surname"  value="{{ old('surname') }}">
                        <label class="form-label">PreNom</label>
                    </div>
                    @error('surname') <label  class="error" >{{$message}}</label> @enderror
                </div>
                <div class="form-group  form-float">
                    <div class="form-line @error('username') focused error @enderror">
                        <input type="text" class="form-control" name="username"  required=""  value="{{ old('username') }}">
                        <label class="form-label">Nom Utilisateur</label>
                    </div>
                    @error('username') <label  class="error" >{{$message}}</label> @enderror
                </div>
                <div class="form-group  form-float">
                    <div class="form-line @error('email') focused error @enderror">
                        <input type="email" class="form-control" name="email"  required="" value="{{ old('email') }}">
                        <label class="form-label">Email</label>
                    </div>
                    @error('email') <label  class="error" >{{$message}}</label> @enderror
                </div>
                <div class="form-group  form-float">
                    <div class="form-line @error('password') focused error @enderror">
                        <input type="password" class="form-control" name="password"  value="{{ old('password') }}">
                        <label class="form-label">Mot de Passe</label>
                    </div>
                    @error('password') <label  class="error" >{{$message}}</label> @enderror
                </div>
                <div class="form-group  form-float">
                    <div class="form-line @error('password_confirmation') focused error @enderror ">
                        <input type="password" class="form-control" name="password_confirmation"  value="{{ old('password_confirmation') }}">
                        <label class="form-label">Mot de Passe de confirmation</label>
                    </div>
                    @error('password_confirmation') <label  class="error" >{{$message}}</label> @enderror
                </div>
                <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="ENREGISTRER">
            </form>
        </div>
    </div>
</div>
@endsection
