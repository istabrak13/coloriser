@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    @if(Session::has('message'))
                    <h5 class="text-danger" style="color: #0e90d2;">{{Session::get('message')}}</h5>
                    @else
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4> Changer mot de passe</h4>
                        </div>
                        @endif

                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{url('/client/update-pwd')}}"
                                name="password_validate" id="password_validate" novalidate="novalidate">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">

                                <div class="control-group">
                                    <label class="col-md-4 col-form-label ">Mot de passe actuel </label>
                                    <div class="controls">
                                        <input type="password" name="pwd_current" id="pwd_current"
                                            class="form-control" />
                                        &nbsp;<span id="chkPwd"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="col-md-4 col-form-label">Nouveau mot de passe</label>
                                    <div class="controls">
                                        <input type="password" name="pwd_new" id="pwd_new" class="form-control" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="col-md-4 col-form-label">Confirmez le mot de passe</label>
                                    <div class="controls">
                                        <input type="password" name="pwdnew_confirm" id="pwdnew_confirm"
                                            class="form-control" />
                                    </div>
                                </div>
                                <br>

                                <div class="form-actions center">
                                    <input type="submit" value="changer" class="btn btn-warning">
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection