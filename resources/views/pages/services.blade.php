@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p> This is  the services page for</p>
    
        @if(count($Services)>0)
        <ul class="list-group">
        @foreach($Services as $services)
                <li class="list-group-item">{{$services}}</li>
        @endforeach   
    </ul>      
        @endif
    
    </body>
@endsection
