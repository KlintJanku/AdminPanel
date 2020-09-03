@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Servers') }}</div>
                

                <div class="card-body">
                  
                   <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Services</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($servers as $server)
                        <tr>
                        <th scope="row">{{$server->id}}</th>
                        <td>{{$server->title}}</td>
                        <td>{{$server->services}}</td>
                        <td>
                            @can('edit-server')
                            <a href="{{ route('servers.edit', $server->id) }}"><button type="button" class="btn btn-primary float-left ">Edit</button></a>
                            @endcan
                            @can('delete-server')
                            <form action="{{ route('servers.destroy', $server) }}" method="POST" class="float-left">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger" >Delete</button>
                            </form>
                            @endcan
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
                  <a href="{{ route('servers.create') }}" class="btn btn-primary " >Add server</a>  
        </div>
    </div>
</div>
@endsection
