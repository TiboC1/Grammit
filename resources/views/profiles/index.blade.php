@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="{{$user->profile->profileImage()}}" alt="Grammit" style="height: 150px;" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <h1 class="h4">{{$user->username}}</h1>
                @if (Auth::user()->id == $user->id)
                    
                @else
                <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                @endif
                </div>

                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
            <div class="pr-5"><strong>{{$postCount}}</strong> posts</div>
            <div class="pr-5"><strong>{{$followerCount}}</strong> followers</div>
                <div class="pr-5"><strong>{{$followingCount}}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">
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
        @if ($user->posts->count()==0)
                <div class="col-6 offset-3 d-flex justify-content-center">
                    <div class="card" style="width: 30rem; min-width: 200px; background-color:lightgray">
                        <div class="card-body text-center">
                          <p class="card-text">You have not posted any pictures yet.</p>
                          <a href="/p/create">Add New Post</a>
                        </div>
                      </div>
                </div>
        @else
        @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </a>
            </div>
        @endforeach 
        @endif
    </div>
</div>
<div class="row pt-5">
    <div class="col-4">
        <img src="" alt="" class="w-100">
    </div>
</div>
@endsection


