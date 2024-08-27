@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
        <div class="my-4">
            <h3 class="my-4 d-inline">Create Category</h3>
            <a href="{{route('backend.categories.index')}}" class="btn btn-danger float-end">Cancel</a>

        </div>

        <div class="card mb-4">
            <div class="card-body py-5">
                <div class="row">
                    <div class="offset-md-1 col-md-10">
                        <form action="{{route('backend.categories.store')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <div class="mb-3">
                                <label for="name" class="form-label">Category Name</label>
                                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid':''}}" name="name" id="name">
                                @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{$errors->first('name')}}
                                </div>
                                @endif
                            </div>
                            
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" accept="image/*" class="form-control {{$errors->has('image') ? 'is-invalid':''}}" name="image" id="image">
                                @if($errors->has('image'))
                                <div class="invalid-feedback">
                                    {{$errors->first('image')}}
                                </div>
                                @endif

                            </div>
                            

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control {{$errors->has('description') ? 'is-invalid':''}}" name="description" id="description" ></textarea>
                                @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{$errors->first('description')}}
                                </div>
                                @endif
                            </div>
                            
                               
                            
                            <div class="d-grid gap-2 mt-2">
                            <button class="btn btn-primary" type="submit">Save</button>
                           
                            </div>

                        </form>

                    </div>
                </div>

            </div>

        </div>

</div>
@endsection