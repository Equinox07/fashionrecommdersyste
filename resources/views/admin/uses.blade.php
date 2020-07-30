@extends('admin.layout')


@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-8">
                <div class="card">
                        <div class="card-header">
                            <h5 class="title">Add New Use</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('uses.save')}}" method="POST">
                               @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Usage</label>
                                            <input type="text" class="form-control" name="name" placeholder="Usage" value="">
                                        </div>
                                    </div>
                                   
                                </div>
                                
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                        <label>Fabric Category</label>
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