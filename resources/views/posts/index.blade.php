@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center color-dark">
        <h1 class="text-center">Recent posts from people you follow</h1>
    </div>
    <hr>

    @foreach ($posts as $post)
    <div class="row">
        <div class="col-6 offset-3 pb-3 d-flex align-items-center">
            <div class="pr-3">
                <img src="{{$post->user->profile->profileImage()}}" alt="" class="w-100 rounded-circle" style="max-width: 40px;">
            </div>
            <div>
                <div class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark">{{$post->user->username}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
        <a href="/profile/{{$post->user->id}}"><img src="/storage/{{$post->image}}" class="w-100"></a>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}} -</span>
                        </a>
                    </span> {{$post->caption}}
                </p>
        </div>
    </div>
    <hr>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection


