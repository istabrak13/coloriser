@extends('layouts.admin')
@section('content')
<div id="content" class="content">
            
        <div class="panel panel-default">
			<div class="panel-heading">
				<h4> Modifier Votre Profil</h4>
			</div>
    <div class="row">
        <!-- begin col-3 -->
        <div class="col-lg-12 col-md-6">
            <div class="container">
         <div class="col-md-8">
        <div class="card-body">
            <form method="post" action="{{ url('/client/edit') }}" aria-label="{{ __('Register') }}">
               
                {{ csrf_field() }}
                
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{Auth::user()->name}}" required autofocus>

                        @if ($errors->has('nom'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nom') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse Mail') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email}}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
    
    
    
                   
                

              

               
                
            
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success" style="border-radius:10px">
                           Modifier  
                        </button>
                        <a href="{{route('parametre_client')}}" class="btn btn-danger" style="border-radius:10px">
                                Annuller
                              </a>
                              
                            
                    </div></div>
            </form>
        </div>
        </div>
</div>
</div>
</div>
@endsection