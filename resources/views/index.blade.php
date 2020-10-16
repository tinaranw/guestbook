@extends('layout/app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">List Data</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="Form_Barang.php" class="btn btn-primary btn-block" role="button" aria-pressed="true">Tambah</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Updated at</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($events ?? '' as $event)
                       <tr>
                           <td><a href="{{route('event.edit',$event)}}">{{$event->title}}</a></td>
                           <td>{{$event->description}}</td>
                           <td>{{$event->status}}</td>
                           <td>{{$event->updated_at}}</td>
                           <td>{{$event->created_at}}</td>
                           <td>
                                <form action="{{route('event.delete', $event)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" 
                            
                                </form>
                           </td>

                       </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
