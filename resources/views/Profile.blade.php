@extends('layout')

@section('title', 'profile')
<style>
    img {
        border-radius: 50%;
    }

    span {
        font-size: 20px;
        color: gray;
    }

</style>
@section('content')
    <div class="container">
        <h1 class="text-center m-4">User Profile</h1>
        <div class="card text-center text-center shadow-lg p-3 mb-5 bg-white rounded m-4">
            <div class="card-body ">
                @if($user->image)
                    <img src="{{asset('images/'.$user->image->name)}}" style="width: 150px; height: 150px;">
                @else
                    <img src="{{asset('images/default.svg.png')}}" style="width: 150px; height: 150px;">
                @endif
                <h4>Name:<span>{{ $user->username }}</span></h4>
                <h4>Email: <span>{{ $user->email }}</span></h4>
               

            </div>
        </div>
    </div>
@endsection
