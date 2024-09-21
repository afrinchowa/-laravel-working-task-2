<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
<h1>User data</h1>
<table border="1">
<tr>
    <td>Name</td>
    <td>Email</td>
    <td>Phone</td>
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
