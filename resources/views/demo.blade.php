<div>
    <h1>This is demo file ~ {{ count($name) }}</h1>
</div>
<div>
    @for($i=0;$i<10;$i++)
    <p>{{ $i }}</p>
    @endfor
</div>
<div>
    @foreach ($name as $names)
        <ul>
            <li>
                {{ $names }}
            </li>
        </ul>
    @endforeach
</div>

@csrf
<script>
    var data = @json($name);
    console.warn(data);
</script>