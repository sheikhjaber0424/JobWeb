@extends('layout')


@section('content')

<h1>{{$header  }}</h1>

@if (count($listings) == 0)
    <p>No listings found</p>
@endif


@foreach ($listings as $listing)
    <h2> 
       
        <a href="/listings/{{ $listing['id']}}"> {{ $listing['title'] }}   </a>
    </h2> 

    <p>
        {{  $listing['description']; }}
    </p>
<?php endforeach;?>

@endsection