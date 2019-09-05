 @extends('layouts.master')


@section('title', 'Selamat Datang di Blog Ramanda Rido Saputra!')


@section('content')

     <h1>Selamat Datang di Blog Ramanda Rido Saputra Single</h1>
     <h2>{{ $blog }}</h2>

      @foreach($users as $user)
        <li>{{ $user->username .' '. $user->password }}</li>
      @endforeach

      @if(count($users) >= 5)
        <p>User lebih dari 5</p>
      @else
        <p>user kurang dari 5</p>
      @endif

@endsection
