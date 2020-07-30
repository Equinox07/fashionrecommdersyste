@extends('admin.layout')


@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-8">
                <div class="card">
                        <div class="card-header">
                            <h5 class="title">Add New Property</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('properties.save')}}" method="POST">
                               @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Property</label>
                                            <input type="text" class="form-control" name="name" placeholder="Property" value="">
                                        </div>
                                    </div>
                                   
                                </div>
                                
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                        <label>Category</label>
                                           <select name="category" class="form-control">
                                               @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                               @endforeach()
                                           </select>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-success">Save</button>
                            </form>
                        </div>
                </div>
        
    </div>
</div>

@endsection()