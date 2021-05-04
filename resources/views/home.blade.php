<a href="{{"categories"}}">Categories</a>
<a href="{{"tags"}}">Tags</a>

<h1>Articles:</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Description</td>
        <td>Action</td>
    </tr>
@foreach($articles as $article)
    <tr>
        <td>{{$article['id']}}</td>
        <td>{{$article['title']}}</td>
        <td>{{$article['short_description']}}</td>
        <td>
            <a href={{"article/".$article['id']}}>Show</a>
        </td>
    </tr>
@endforeach
</table>
