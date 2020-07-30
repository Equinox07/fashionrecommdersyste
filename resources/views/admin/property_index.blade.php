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
                <a href="{{route('properties.create')}}" class="btn btn-info">Add New Property</a>
                    <div class="card-header">
                        <h4 class="card-title"> Categories</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Fabric Category Name
                                    </th>
                                    <th>
                                        Fabric Property 
                                    </th>
                                    
                                </thead>
                                <tbody>
                                    @foreach($properties as $category)
                                    <tr>
                                        <td>
                                            {{$category->name}}
                                        </td>
                                        <td>
                                            @if( count($category->properties) > 0)
                                                {{$category->properties[0]->description}}
                                            @endif()
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