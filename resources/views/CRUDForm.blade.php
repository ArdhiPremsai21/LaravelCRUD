<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <h1>Premsai Ardhi</h1>

    @if($errors->any())
        <div style="color:red">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{url ('submitData')}}" method="POST">
        @csrf
        <label for="">Name: </label>
        <input type="text" name="name">
        @error('name')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <br><br>
        <label for="">Email: </label>
        <input type="text" name="email">
        @error('email')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="">Number: </label>
        <input type="text" name="number">
        @error('number')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <br><br>
        <a href="{{url('/TableView')}}">View Table</a>
        <br><br>
        <button type="submit" value="update">Submit</button>
    </form>
</div>
