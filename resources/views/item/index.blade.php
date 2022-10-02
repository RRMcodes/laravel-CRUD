@extends('layouts.app')
@section('content')
    <main>

        <div style="position: fixed; bottom: 0; right: 0;" x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">

            @if(session()->has('message'))
                <div id="alert" class="alert alert-success">
                    {{session()->get('message')}}
                    <button style="float: right; margin-left: 50px" type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

        </div>

        <a href="{{route('items.create')}}" class="btn btn-primary" action="">Create</a>
        @if (count($items)===0)
            <h4 style="text-align: center;margin: 10%" >Sorry, No items to show</h4>
        @else
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
        @endif
    </main>

@endsection
