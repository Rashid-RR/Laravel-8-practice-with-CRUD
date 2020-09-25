<div>
    @if (session('username'))
        <h3 style="color: green">{{ session('username') }} user has been created !</h3>
    @endif
    <form action="userForAuth" method="POST">
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
    