@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h3>Create Items</h3>
    </div>

    <div class="card-body">
        <form action="{{route('items.store')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror " name="name" id="exampleInputEmail1" aria-describedby="emailHelp">

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">manufacturer</label>
                <input type="text" class="form-control @error('manufacturer') is-invalid @enderror " name="manufacturer" id="exampleInputEmail1" aria-describedby="emailHelp">

                @error('manufacturer')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">image name</label>
                <input type="text" class="form-control @error('image_name') is-invalid @enderror " name="image_name" id="exampleInputEmail1" aria-describedby="emailHelp">

                @error('image_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">manufactured date</label>
                <input type="text" class="form-control @error('manufactured_date') is-invalid @enderror " name="manufactured_date" id="exampleInputEmail1" aria-describedby="emailHelp">

                @error('manufactured_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>


        </form>
    </div>

@endsection
