<h1>Loop</h1>

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
