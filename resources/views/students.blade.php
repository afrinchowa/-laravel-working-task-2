<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
<h1>Student List</h1>
<table  border='1'>
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Batch</td>
    </tr>
    @foreach($data as $student)
<tr>
    <td>
        {{$student->name}}
    </td>
    <td>
        {{$student->email}}
    </td>
    <td>
        {{$student->batch}}
    </td>
</tr>
    @endforeach
</table>
</div>