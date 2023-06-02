@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>TESTE</h1>

<img src="img/walter.jpg" alt="walter">
@if(10 < 15)
    <p>a condicao e true</p>
@else
    <p>a condicao e falsa</p>
@endif

@if($nome == "pedro")
    <p>o nome e pedro e tem {{ $idade }} anos</p>
@elseif($nome == "romario")
    <p>o nome e {{ $nome }} e tem {{ $idade }} anos</p>
@else
    <p>o nome e diferente de {{ $nome }} e tem {{ $idade }} anos</p>
@endif

@for($i=0;$i < count($arr); $i++)
    <p>{{ $arr[$i] }} - {{ $i }}</p>
    @if($i == 2)
        <p>o I e 2</p>
    @endif
@endfor

@endsection
