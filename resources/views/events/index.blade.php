@extends('layouts.test')

@section('content')
<h1>Loop</h1>
<img src="{{ asset('img/img.jpg') }}" alt="img" width="200">
<h2>simple loop</h2>
<ul>
    @foreach ($events as $event)
        <li>{{ $event }}</li>
    @endforeach
</ul>

<h2>forelse</h2>
<ul>
    @forelse ($events as $event)
        <li>{{ $event }}</li>
    @empty
        <li>No event available.</li>
    @endforelse
</ul>

<h2>if</h2>
<ul>
    @foreach ($events as $event)
        <li>
            {{ $event }}
            @if (strpos($event, 'Laravel') !== false)
                (sweet framework!)
            @elseif (strpos($event, 'Raspberry') !== false)
                (love me some Raspberry Pi!)
            @else
                (don't know much about this one!)
            @endif
        </li>
    @endforeach
</ul>

<h2>partial view</h2>
<table>
    @foreach ($events as $event)
        @include('partials._row', ['event' => $event])
    @endforeach
</table>
@endsection

@section('advertisement')
    <p>HackerPair members always get 10% off at Tron Cafe! </p>
@endsection

