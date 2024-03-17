@extends('layouts.landing')

@section('title', 'Services')

@section('content')
    
    <h2>Services</h2>

    <div class="cards">

        @component('_components.card')
            @slot('title', 'Service 1')
            @slot('content', 'lorem ipsum')
        @endcomponent
        
        @component('_components.card')
            @slot('title', 'Service 2')
            @slot('content', 'lorem ipsum')
        @endcomponent
        
        @component('_components.card')
            @slot('title', 'Service 3')
            @slot('content', 'lorem ipsum')
        @endcomponent

    </div>
        
@endsection

