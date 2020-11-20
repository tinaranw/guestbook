@extends('layout.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">List Data</h1>
        </div>
        @auth
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{ route('event.create') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true">Tambah</a>
            </div>
        </div>
        @endauth
        
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Owned by</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Created At</th>
                    @auth
                    <th scope="col">Action</th>
                    @endauth
                </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
                    <tr>
                        <td><a href="@auth{{ route('event.edit', $event) }}@endauth">{{ $event->title }}</a></td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->status }}</td>
                        <td>{{ $event->creator->name }}</td>
                        <td>{{ $event->updated_at }}</td>
                        <td>{{ $event->created_at }}</td>
                        @auth
                        <td>
                            <form action="{{ route('event.destroy', $event) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        @endauth
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
