@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        @foreach($technologies as $tech)
            <div class="col-12 col-md-6 col-lg-4 my-4 d-flex flex-wrap justify-content-center">
                
                <div class="card d-flex flex-column justify-content-between">
                    
                    <div class="card-title text-center my-3">
                        <h4><a href="#">{{$tech->tech_name}}</a></h4>
                    </div>
                    <div class="text-center my-3">
                        <span class="fw-bold">{{$tech->id}}</span>
                    </div>
                   
                    <div class="text-center">
                        <a class="btn show-btn btn-md" href="{{route('admin.works.show', $tech->id)}}">Show More</a>
                    </div>
                    <div class="d-flex justify-content-around my-4">
                        <a class="btn edit-btn btn-sm" href="{{route('admin.works.edit', $tech->id)}}">Edit</a>
                        <form action="{{route('admin.works.destroy', $tech->id)}}" onsubmit="return confirm('Press ok to confirm')" class="d-block" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm delete-btn mx-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
            <div class="text-center my-5">
                <a href="{{route('admin.works.create')}}" class="btn new-btn btn-sm">Add New Work</a>
            </div>
    </div>
</div>

@endsection