@extends('uajtc.auth.admin.layout.master')
@section('contain')
    <div class="container-fluid">
        <div class="block-header">
            <h2>ADMINISTRATION</h2>
        </div>
        <!-- Striped Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                        MEMBRES
                         </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="{{route('register')}}" class=" waves-effect waves-block">Ajouter</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>NOM</th>
                                <th>POST NOM</th>
                                <th>NOM UTILISATEUR</th>
                                <th>TELEPHONE</th>
                                <th>E-MAIL</th>
                                <th>ROLE</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->postname}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <nav>
                            <ul class="pager">
                                <li class="previous">
                                    <a href="" class="waves-effect"><span aria-hidden="true">←</span> Precedent</a>
                                </li>
                                <li class="next">
                                    <a href="" class="waves-effect">Suivant <span aria-hidden="true">→</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- #END# Striped Rows -->
    </div>
@endsection
