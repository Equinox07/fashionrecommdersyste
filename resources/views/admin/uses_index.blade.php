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
                <a href="{{route('uses.create')}}" class="btn btn-info">Add New Usage</a>
                    <div class="card-header">
                        <h4 class="card-title">Fabric Uses</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Fabric Catogery
                                    </th>
                                    <th>
                                        Fabric Uses
                                    </th>
                                    
                                </thead>
                                <tbody>
                                    @foreach($uses as $category)
                                    <tr>
                                        <td>
                                            {{$category->name}}
                                        </td>
                                        <td>
                                            @if(count($category->uses) > 0)
                                                {{$category->uses[0]->uses}}
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