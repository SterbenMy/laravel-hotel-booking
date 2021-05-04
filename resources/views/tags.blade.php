<a href="{{"categories"}}">Categories</a>
<a href="{{"/"}}">Tags</a>

<h1>Tags:</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Action</td>
    </tr>
    @foreach($articleTags as $tag)
        <tr>
            <td>{{$tag['id']}}</td>
            <td>{{$tag['name']}}</td>
            <td>
                <a href={{"tag/".$tag['id']}}>Show</a>
            </td>
        </tr>
    @endforeach
</table>
