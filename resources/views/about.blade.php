@extends('layouts.main')

@section('content')

<div class="title m-b-md">
    About
</div>

<div class="links">

    @foreach ($links as $link)

    <a href="#"> {{ $link }} </a>


    @endforeach

</div>

@endsection