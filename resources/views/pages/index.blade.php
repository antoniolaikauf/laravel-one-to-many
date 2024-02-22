@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>
    tipi di progetto
</h1>

<div>
    <ul>
        @foreach($types as $type)
        <li class="my-3">
            <div>
                risorse usate per questoprogetto :{{$type->risorse_usate}}
            </div>

            @if($type->in_gruppo)
            <span>
                progetto fatto in gruppo
            </span>
            @endif
            @if(!$type->in_gruppo)
            <span>
                progetti fatto singolarmente
            </span>
            @endif
            <ul>
                @foreach($type-> projects as $project)
                <li>
                    nome progetto: {{$project->nome}}
                    <div>
                        data inizio del progetto: {{$project->inizio_progetto}}
                    </div>
                    <div>
                        descrizione del progetto: {{$project->descrizione}}
                    </div>
                </li>
                @endforeach
            </ul>
        </li>
        @endforeach
    </ul>
</div>
@endsection