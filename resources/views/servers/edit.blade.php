@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit server {{ $servers->title }}</div>

                <div class="card-body">
                  
                  <form action="{{ route('servers.update', $servers) }}" method="POST">

                      <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control " name="title" value="{{ $servers->title }}" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="services" class="col-md-2 col-form-label text-md-right">Services</label>

                            <div class="col-md-6">
                                <input id="service" type="text" class="form-control " name="services" value="{{ $servers->services }}" required  autofocus>
                            </div>
                        </div>

                    @csrf
                    {{ method_field('PUT') }}
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
