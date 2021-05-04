<a href="{{"tags"}}">Tags</a>
<a href="{{"/"}}">Articles</a>

<h1>Categories:</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Action</td>
    </tr>
    @foreach($categories as $category)
        <tr>
            <td>{{$category['id']}}</td>
            <td>{{$category['name']}}</td>
            <td>
                <a href={{"category/".$category['id']}}>Show</a>
            </td>
        </tr>
    @endforeach
</table>
