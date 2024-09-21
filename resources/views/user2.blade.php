<div>
    <h1>Users</h1>
    <table>
        <tr border="1">
            <td>name</td>
            <td>email</td>
            <td>phone</td>
        </tr>
        @foreach($users as $user )
        <tr border="1">
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>              
        </tr>
        @endforeach
    </table>
</div>