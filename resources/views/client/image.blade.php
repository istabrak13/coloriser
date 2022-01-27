@extends('layouts.admin')
@section('content')
<div id="content" class="content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4> Modifier une photo</h4>
        </div>
        <div class="row">
            <!-- begin col-3 -->
            <div class="col-lg-12 col-md-6">
                <div class="container">
                    <div class="col-md-8">
                        <div class="card-body">
                            <form method="POST" action="{{ route('client.colorize') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div>
                                    <label for="colorize-form-input" class="form-label">Coloriser une photo</label>
                                    <input class="form-control form-control-lg" id="colorize-form-input" type="file"
                                        name="file">
                                </div>
                                <button class="btn btn-fill btn-success" id="colorize-img-submit" type="submit"
                                    style="border-radius:18px">Coloriser</button>
                            </form>

                            {{-- If image is available show it --}}
                            @if(isset($image))
                            <div class="card-body">
                                <img src="{{ $image }}" alt="">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection