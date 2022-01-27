@extends('layouts.admin')
@section('content')
<div id="content" class="content">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4> Modifier un video</h4>
        </div>
        <div class="row">
            <!-- begin col-3 -->
            <div class="col-lg-12 col-md-6">
                <div class="container">
                    <div class="col-md-8">
                        <div class="card-body">
                            <div>
                                <label for="formFileLg" class="form-label">Selectionner un vidéo</label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file">
                            </div>
                            <button type="submit" class="btn btn-fill btn-success"
                                style="border-radius:18px">modifier</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endsection