{{-- @extends('layouts.app')

@section('page_title', 'Movies List')
    
@endsection

@section('page_content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Thumb</th>
                <th>Director</th>
                <th>Original Language</th>
                <th>Parental Rating</th>
                <th>Release Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{$movie->id}}</td>
                <td>{{$movie->title}}</td>
                <td>{{$movie->description}}</td>
                <td>{{$movie->thumb}}</td>
                <td>{{$movie->director}}</td>
                <td>{{$movie->original_language}}</td>
                <td>{{$movie->parental_rating}}</td>
                <td>{{$movie->release_date}}</td>
                {{-- route for movies.show here --}}
                <td>
                    <a class="btn btn-primary" href="">Show</a>
                    <a class="btn btn-primary" href="">Edit</a>
                    <form action="" method="POST" class="form-delete">
        
                        @csrf
                        @method('DELETE')
                
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
{{-- @endsection --}}