@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Server</div>

                <div class="card-body">
                  
                  <form action="{{ route('servers.store') }}" method="POST">
                  @csrf 

                      <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">Title</label>
                            <div class="col-md-6">
                            <input id="title" type="text" class="form-control " name="title"  required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Services</label>
                            <div class="col-md-6">
                             <input id="services" type="text" class="form-control " name="services"  required >
                             </div>
                        </div>
                        <button type="submit" class="btn btn-primary ">
                        Submit
                        </button>
                    </div>
                       
                    
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
