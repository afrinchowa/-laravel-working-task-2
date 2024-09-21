<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
<h1>Student list</h1>

<!-- {{print_r($student2s)}}
  -->
<form action="search" method="get">
  <input type="text" placeholder="Search with name" name="search" value="{{@$search}}">
  <button>Search</button>
</form>
<form action="delete-multi" method="post">
  @csrf
  <button>Delete</button>
  <table border="1">
<tr>
    <td>Selection</td>
    <td>Name</td>
    <td>Email</td>
    <td>Phone</td>
    <td>Created</td>
    <td>Operation</td>
</tr>
@foreach($student2s as $student2)
<tr>
    <td><input type="checkbox" name="ids[]" value="{{$student2->id}}"></td>
    <td>{{$student2->name}}</td>
    <td>{{$student2->email}}</td>
    <td>{{$student2->phone}}</td>
    <td>{{$student2->created_at}}</td>
    <td>
        <a href="{{' delete/'.$student2->id}}">Delete</a>
        <a href="{{' edit/'.$student2->id}}">Edit</a>

</td>
 
</tr>
@endforeach
  </table>
  </form>
  <br>
  <br>

  {{$student2s->links}}
</div>

<style>
  .w-5.h-5{
    width: 20px;

  }
</style>
