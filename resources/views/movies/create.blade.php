@extends('layouts.app')

@section('page_title' 'Movies Create')
@endsection


@section('page_content')
<div class="container">
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="title" class="form-control" id="exampleFormControlInput1">
        </div>
        <form>
            <div class="upload-img mt-3">
                <label for="exampleFormControlFile1">Description</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Thumb</label>
            <input type="description" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Director</label>
            <input type="price" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Original Language</label>
            <input type="series" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Parental Rating</label>
            <input type="saleDate" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Release Date</label>
            <input type="type" class="form-control" id="exampleFormControlInput1">
        </div>

        <a class="btn btn-primary" href="">Send</a>
    </form>
</div>