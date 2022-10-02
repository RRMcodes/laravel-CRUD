@extends('layouts.app')
@section('content')
    <main style="width: 60%;margin:0 20%;">

        <div style="position: fixed; bottom: 0; right: 0;" x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">

            @if(session()->has('message'))
                <div id="alert" class="alert alert-success">
                    {{session()->get('message')}}
                    <button style="float: right; margin-left: 50px;" type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

        </div>

        <a style="margin-top:2%;" href="{{route('blogs.create')}}" class="btn btn-primary" action="">Create Blog</a>
        @if(count($blogs)===0)
            <h3 style="text-align: center; margin:10%">Sorry, No Blogs to show</h3>
        @else
                @foreach($blogs as $blog)
                <div style="margin:8% 0" class="card mb-3">
                    <div style="position:absolute; right: 0; " class="dropdown">
                        <button style="color: black" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('blogs.edit',['id'=>$blog->id])}}">edit</a></li>
                            <li><a class="dropdown-item" href="#">archive</a></li>
                            <li><a class="dropdown-item" href="{{route('blogs.delete',['id'=>$blog->id])}}">delete</a></li>
                        </ul>
                    </div>

                    <img class="card-img-top"  src="{{asset('https://images.unsplash.com/photo-1662572498410-cd3de49404ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80')}}" alt="Card image cap">

                    <div  class="card-body">
                        <h4 class="card-title">{{$blog->title}}</h4>
                        <p class="card-text">{{$blog->description}}</p>
                        <p class="card-text"><small class="text-muted">{{$blog->text}}</small></p>
                    </div>

                </div>

            @endforeach
            <h4 style="text-align: center; margin-top: 20%; margin-bottom: 5%;">End of blogs.</h4>
        @endif
    </main>

@endsection
