<div>
   
<h1>Add New User</h1>
@if(session('message'))
<span class="success-message">{{session('message')}}</span>
@endif
<!-- {{session()->reflash()}}  -->
<form action="add" method="post">
    @csrf
<input type="text" name="name" placeholder="Enter Your name">
<br>
<br>
<input type="text" name="email" placeholder="Enter Your email">
<br>
<br>
<input type="text" name="phone" placeholder="Enter Your phone">
<br>
<br>
<button>Add New User</button>
</form>
</div>
<style>
    .success-message{
        background-color: lightgreen;
        border-radius: 2px;
        padding: 2px 20px;
     display: inline-block;
        margin-bottom: 20px;
    }
</style>
