@extends('layouts.test')

@section('content')

    @if ($event)
        <h1>{{ $event->name }}</h1>
        <div>
            <p>City: {{ $event->city }}</p>
            <p>Venue: {{ $event->venue }}</p>
            <p>Description: {{ $event->description }}</p>
            @if (!$event->occurringToday())
                <p>Not created today.</p>
            @endif
        </div>

    @else
        <h1>Not found.</h1>
    @endif
    
@endsection

{{-- Output the $id variable.
<p>We're looking at event ID #{{ $id }}.</p>
<p>{{ $name }} has the id #{{ $id }}.</p>
<p>{{ $name }} is scheduled for {{ $date }}!</p>
<h1>Welcome, {{ $name or 'HackerPair Member' }}!</h1>
<!-- <p>{!! 'My list <script>alert("spam spam spam!")</script>' !!}</p> --> --}}