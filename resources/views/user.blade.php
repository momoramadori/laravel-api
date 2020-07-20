@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Il mio profilo</h1>
            <p><strong>Nome: </strong> {{Auth::user()->name}}</p>
            <p><strong>Mail: </strong>{{Auth::user()->email}}</p>
            <p><strong>Api Token: </strong>{{Auth::user()->api_token}}</p>
        </div>
    </div>
</div>
@endsection

    