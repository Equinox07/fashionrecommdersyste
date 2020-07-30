@extends('admin.layout')


@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <a href="{{route('category.create')}}" class="btn btn-info">Add New Category</a>
                    <div class="card-header">
                        <h4 class="card-title"> Categories</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Catogery Name
                                    </th>
                                    <th>
                                        Catogery Description
                                    </th>
                                    
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>
                                            {{$category->name}}
                                        </td>
                                        <td>
                                            {{$category->description}}
                                        </td>
                                    </tr>
                                    @endforeach()
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()