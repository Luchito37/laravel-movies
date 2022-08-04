@extends('layouts.app')

@section('page_title', 'Movies List')
    
@endsection

@section('page_content')
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
            {{-- foreach here --}}
            <tr>
                <td>id</td>
                <td>title</td>
                <td>description</td>
                <td>thumb</td>
                <td>director</td>
                <td>original_language</td>
                <td>parental_rating</td>
                <td>release_date</td>
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
        </tbody>
    </table>
@endsection