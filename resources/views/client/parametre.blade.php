@extends('layouts.admin')
@section('content')




<main class="container-fluid">

    <div class="dark-primary">
        <h1 >Profile</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table" style="border:10%;">
                @foreach ($clients as $cli)

                <tr>
                    <td>Nom:</td>
                    <td>{{$cli->name}}</td>
                </tr>

                <tr>
                    <td>email</td>
                    <td>{{$cli->email}}</td>
                </tr>

                <tr>
                    <td>Mot de passe</td>
                    <td>*******</td>
                </tr>
                <form action="{{url('/client/edit')}}" method="get">

                    <tr>

                        <td> <button type="submit" class="btn btn-fill btn-success"
                                style="border-radius:18px">modifier</button></td>
                        <td><a href="{{route('client.change')}}" class="btn btn-fill btn-info"
                                style="bordedr-radius:18px"><i class="fa fa-key"></i><span>Changer mot passe</span> </a>

                    </tr>
                </form>
                @endforeach

            </table>
        </div>
    </div>
    <br>


</main>

@endsection