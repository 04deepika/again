<h1>Distances of Donors from the User</h1>
    @if (count($distances) > 0)
        <ul>
            @foreach ($distances as $data)
                <li>
                    Donor: {{ $data['donor']->Name }} | Distance: {{ $data['distance'] }} km
                </li>
            @endforeach
        </ul>
    @else
        <p>No donors found.</p>
    @endif
