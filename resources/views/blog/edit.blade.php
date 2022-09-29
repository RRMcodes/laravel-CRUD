@extends('layouts.app')
@section('content')
    <main>
        <form action="{{route('blogs.update')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <input type="hidden" name="id" value="{{$blog->id}}">
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" name="title" value="{{$blog->title}}" @error('title') is-invalid @enderror id="exampleFormControlInput1" >

                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" value="{{$blog->description}}" @error('description') is-invalid @enderror id="exampleFormControlTextarea1" rows="3">{{$blog->description}}</textarea>

                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Text</label>
                <textarea class="form-control" name="text" value="{{$blog->text}}" @error('text') is-invalid @enderror id="exampleFormControlTextarea1" rows="5">{{$blog->text}}</textarea>

                @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </main>
@endsection
