@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/grammit.svg" alt="Grammit" style="height: 150px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <h1>{{$user->username}}</h1>
            <div class="d-flex">
                <div class="pr-5"><strong>333</strong> posts</div>
                <div class="pr-5"><strong>33k</strong> followers</div>
                <div class="pr-5"><strong>33k</strong> following</div>
            </div>
            <div class="pt-4">
                {{$user->profile->title}}
            </div>
            <div>
                {{$user->profile->description}}
            </div>
            <div>
                <a href="#">{{$user->profile->url}}</a>
                
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="" alt="img1" class="w-100">
        </div>
        <div class="col-4">
            <img src="" alt="img2" class="w-100">
        </div>
        <div class="col-4">
            <img src="" alt="img3" class="w-100">
        </div>
    </div>
</div>
<div class="row pt-5">
    <div class="col-4">
        <img src="" alt="" class="w-100">
    </div>
</div>
@endsection


