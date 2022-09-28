@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h3>Edit Items</h3>
    </div>
    <div class="card-body">
        <form action="{{route('items.update')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$item->id}}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" value="{{$item->name}}" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">manufacturer</label>
                <input type="text" value="{{$item->manufacturer}}" class="form-control" name="manufacturer" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">image name</label>
                <input type="text" value="{{$item->image_name}}" class="form-control" name="image_name" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">manufactured date</label>
                <input type="text" value="{{$item->manufactured_date}}" class="form-control" name="manufactured_date" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
