{{-- Output the $id variable. --}}
<p>We're looking at event ID #{{ $id }}.</p>
<p>{{ $name }} has the id #{{ $id }}.</p>
<p>{{ $name }} is scheduled for {{ $date }}!</p>
<h1>Welcome, {{ $name or 'HackerPair Member' }}!</h1>
<!-- <p>{!! 'My list <script>alert("spam spam spam!")</script>' !!}</p> -->