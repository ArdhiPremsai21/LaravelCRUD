<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->



    <br><br>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Numbers</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employeeData as $emp) 
            <tr>
                <td>{{$emp->id}}</td>
                <td>{{$emp->name}}</td>
                <td>{{$emp->email}}</td>
                <td>{{$emp->number}}</td>
                <td>
                    <a href="{{url ('/updateForm/'.$emp->id)}}">Update</a> | 
                    <form action="{{url ('/deleteData/'.$emp->id)}}" method="POST">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    
</script>

