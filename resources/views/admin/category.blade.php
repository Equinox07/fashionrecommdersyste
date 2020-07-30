@extends('admin.layout')


@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Add New Fabric Category</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('category.save')}}" method="POST">
                       @csrf
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Fabric Category Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Category" value="">
                                </div>
                            </div>
                           
                        </div>
                        
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Category Description</label>
                                    <textarea rows="4" cols="80" name="description" class="form-control" placeholder="Here can be your description" value="">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()