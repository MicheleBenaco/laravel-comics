{{-- Questo mette il layouts di base uguale per tutti  --}}
@extends('layouts.app')
{{-- mentre con questo stotisco allo yield con il codice dentro questa pagina --}}
@section('content')
    <h1 class="text-center">Home page</h1>
    <div class="container-fluid">
        <div class="card">
            @foreach ($comics as $key )
                <div>
                    {{$key['title']}}
                </div>
                <div>
                    {{$key['thumb']}}
                </div>
                <div>
                    {{$key['price']}}
                </div>
                
            @endforeach
        </div>

    </div>
@endsection
