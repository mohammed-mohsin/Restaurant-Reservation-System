@extends('layouts.app')

@section('Title', 'Create | Slider')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Create New Slider</h4>
                        <!-- <p class="card-category">Complete your profile</p> -->
                    </div>
                    <div class="card-body">

                        <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Subtitle</label>
                                        <input type="text" name="sub_title" class="form-control">


                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- <div class="form-group"> -->
                                    <label class="bmd-label-floating">Slide Image</label>
                                    <!-- <button class="btn btn-primary">Upload Image -->
                                    <!-- <input type="file" onchange="loadFile(event)" name="image" class="form-control"> -->
                                    <input name="image" type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">


                                    <!-- </button> -->
                                    <!-- </div> -->
                                </div>
                                <div class="col-md-6">
                                    <img id="blah" src="https://via.placeholder.com/500
C/O https://placeholder.com/" alt="your image" width="500" height="300" />

                                </div>
                            </div>
                            <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
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