<div>
 

    <h1>User Form</h1>
    <form action="user" method="post">
        <!-- <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_method" value="put"> -->
        @csrf
<input type="text" name="name" placeholder="Enter name">
<br>
<br>
<input type="password" name="password" placeholder="Enter password">
<br>
<br>
<button>Submit</button>
    </form>
</div>

