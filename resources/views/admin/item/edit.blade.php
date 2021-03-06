@extends('layouts.app')

@section('Title', 'Edit | Item')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit</h4>
                        <!-- <p class="card-category">Complete your profile</p> -->
                    </div>
                    <div class="card-body">

                        <form action="{{route('item.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" value="{{$item->name}}" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Price</label>
                                        <input type="text" value="{{$item->price}}" name="price" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" class="bmd-label-floating">Category</label>
                                        <select name="category" class="form-control" id="exampleFormControlSelect1">
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Description</label>
                                        <!-- <input type="text" name="name" class="form-control"> -->
                                        <textarea type="text"  name="description" class="form-control" id="">{{$item->description}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <!-- <div class="form-group"> -->
                                    <label class="bmd-label-floating"> Image</label>
                                    <!-- <button class="btn btn-primary">Upload Image -->
                                    <!-- <input type="file" onchange="loadFile(event)" name="image" class="form-control"> -->
                                    <input name="image" type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">


                                    <!-- </button> -->
                                    <!-- </div> -->
                                    <!-- <div class="col-md-6"> -->


                                    <!-- </div> -->
                                </div>
                                <div class="col-md-6">
                                    <img class="w-100 h-50 img-responsive " id="blah" src="{{asset('uploads/item/'.$item->image)}}" alt="your image" />
                                </div>


                            </div>
                            <a href="{{route('item.index')}}" class="btn btn-danger">Back</a>
                            <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection