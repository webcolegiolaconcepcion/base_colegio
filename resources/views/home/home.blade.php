@extends('home.base')

@section('nav')
    <x-nav/>
@endsection

@section('contenido')

    @if (isset($date))
        @component('components.sliders', ['sliders' => $date['sliders']])
            <x-sliders/>
        @endcomponent
    @endif
    @if (isset($date))
        @component('components.news-table-carousel', ['date' => $date['news_carusel']])
            {{-- <x-b-home-servicios/> --}}
            <x-news-table-carousel />
        @endcomponent
    @endif
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 jumbotron box-shadow" align="center">
        <a href="{{url('/informacion/actualidad/')}}" class="btn btn-primary btn-info btn-lg">Ver mas</a>
    </div>
    <x-footer/>
@stop
