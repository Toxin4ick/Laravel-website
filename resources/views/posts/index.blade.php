@extends('layouts.app')

@section('content')
<div class="container">
@foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/{{$post->user->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </a>
            </div>
        </div>
    <div class="row py-2 pb-2">
            <div class="col-6 offset-3">
                <div>

                    <p style="word-break: break-all">
                    <span class="font-weight-bold">

                        <a href="/profile/{{$post->user->id}}">
                            <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle  w-100 " style="max-width: 40px;">
                        </a>

                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                    </span>
                        <br>
                        {{$post->caption}}
                    </p>
                </div>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
