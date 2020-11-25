@extends('layouts.app')

@section('content')

<header class="mb-6 relative">
    <div class="relative">
        <img src="https://source.unsplash.com/random/700x200"
              alt=""
              class="mb-2"
        >

        <img src="{{ $user->avatar }}"
             alt=""
             class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
             style="left: 50%"
             width="150"
        >
    </div>
 
    <div class="justify-between flex items-center mb-6">
        <div>
            <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
            <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
        </div>
        <div>
            <a href=""class="rounded-full border border-gray-500 py-2 px-4 text-xs mr-2">Edit Profile</a>
            <a href=""class="bg-blue-500 rounded-full shadow py-2 px-4  text-white text-xs">Follow me</a>

        </div>
    </div>
    <p class="text-sm mt-5">This is your bio! Tell us about you and what you like!</p>

</header>
<hr/>

@include("_timeline", ["tweets"=> $user->tweets])


@endsection