<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
<h1>Update student data</h1>
<form action="/edit-student/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" value="{{$data->name}}"   
        
        placeholder="Enter Your name">
        <br>
        <br>
        <input type="text" name="email" value="{{$data->email}}"  placeholder="Enter Your email">
        <br>
        <br>
        <input type="text" name="phone" value="{{$data->phone}}"  placeholder="Enter Your phone">
        <br>
        <br>
        <button>Update student</button>
        <button>Cancel</button>

    </form>
</div>
