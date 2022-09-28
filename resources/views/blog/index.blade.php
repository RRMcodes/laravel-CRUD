@extends('layouts.app')
@section('content')
    <main>
        <a href="{{route('blogs.create')}}" class="btn btn-primary" action="">Create Blog</a>

            @foreach($blogs as $blog)
            <div class="card mb-3">
                <div style="position:absolute; right: 0; " class="dropdown">
                    <button style="background-color: inherit; color: black; border: none" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('blogs.edit',['id'=>$blog->id])}}">edit</a></li>
                        <li><a class="dropdown-item" href="#">archive</a></li>
                        <li><a class="dropdown-item" href="{{route('blogs.delete',['id'=>$blog->id])}}">delete</a></li>
                    </ul>
                </div>
                <img class="card-img-top" src="https://unsplash.com/photos/5efR4mM5Nlk" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{$blog->title}}</h4>
                    <p class="card-text">{{$blog->description}}</p>
                    <p class="card-text"><small class="text-muted">{{$blog->text}}</small></p>
                </div>

            </div>

            @endforeach
            </tbody>
        </table>
        {{ $blogs->links() }}
    </main>

@endsection
