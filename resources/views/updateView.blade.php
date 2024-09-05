<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <h3>Update Form </h3>
    <form action=" {{ url ('/updateData/'.$data->id)}}" method="POST">
        @csrf
        <label for="">Name:</label>
        <input type="text" name="name" value="{{$data->name}}">
        <br>
        <label for="">Email:</label>
        <input type="text" name="email" value="{{$data->email}}">
        <br>
        <label for="">Number:</label>
        <input type="text" name="number" value ="{{$data->number}}">
        <br>
        <button type="submit">Submit</button>
    </form>
</div>
