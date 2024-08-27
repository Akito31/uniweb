@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
                     <div class="my-4 ">
                        <h3 class="my-4 d-inline">Categories</h3>
                        <a href="{{route('backend.categories.create')}}" class="btn btn-primary float-end">Create Category</a>
                     </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Category Data Table
                            </div>
                            <div class="card-body">
                                <table id="" class="table table-bordered">
                                   <thead>
                                    <tr>
                                        
                                        <th>Category Name</th>
                                        <th>Description</th>
                                        <th>Action</th>

                                    </tr>
                                   </thead>
                                   <tfoot>
                                   <tr>
                                        
                                        <th>Category Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                   </tfoot>
                                   <tbody id="item_tbody">
                                    @foreach($categories as $category)
                                    <tr>
                                      
                                       <td>{{$category->name}}</td>
                                       <td>{{$category->description}}</td>
                                       <td>
                                            <a href="{{route('backend.categories.edit',$category->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                            <button class="btn btn-sm btn-danger delete" data-id="">Delete</button>
                                       </td>
                                    </tr>
                                    @endforeach
                                   </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
@endsection