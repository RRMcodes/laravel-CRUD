@extends('layouts.app')
@section('content')
    <main>
        <a href="{{route('items.create')}}" class="btn btn-primary" action="">Create</a>
        <table class="table table-stripped">
            <thead>
            <tr>
                <td>Sno</td>
                <td>Name</td>
                <td>Manufacturer</td>
                <td>Manufacturer Date</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->manufacturer}}</td>
                    <td>{{$item->manufactured_date}}</td>
                    <td><a href="{{route('items.edit',['id'=>$item->id])}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                    <td><a href="{{route('items.delete',['id'=>$item->id])}}" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $items->links() }}
    </main>

@endsection
