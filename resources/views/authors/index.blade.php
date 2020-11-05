@extends ("layouts.main")

@section('title')
Authors
@endsection

@section("main")


    <div id="authors-index-wrapper">
        <div class="container">
            <h1>Autori</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="name">Name</th>
                        <th scope="col" class="actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)
                        <tr>
                            <td>
                                <a href="{{route('authors.show', $author->id)}}"><p class="card-text">{{$author->name}} {{$author->lastname}}</p></a>
                            </td>
                            <td>
                                <a href="{{route('authors.edit', $author->id)}}"><i class="far fa-edit"></i></a>
                                <a href="{{route('authors.destroy', $author->id)}}"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection