<div>
<!--
    {{-- @if($errors->any()) --}}
        {{-- @foreach ($errors->all() as $err) --}}
            {{-- <li>{{ $err }}</li> --}}
        {{-- @endforeach --}}
    {{-- @endif --}}
-->
    <form action="form" method="POST">
        @csrf
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname"><br>
        <span style="color: red">@error('fname'){{$message}}@enderror</span>
        <br>
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname"><br>
        <span style="color: red">@error('lname'){{$message}}@enderror</span>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <span style="color: red">@error('password'){{$message}}@enderror</span>
        <br>
        <input type="submit" value="Submit">
    </form>
</div>
