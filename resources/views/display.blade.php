<div>
    <h1>List of all images</h1>
    <br>
    @foreach($imgData as $img)
    <img style="width:300;margin:10px" src="{{url('storage/'.$img->path)}}">
    <br> @endforeach
    <br>
    <a href="/upload">Upload more images</a>
</div>