@extends('dashboard.app')
@section('title', 'Potted Pan - Slide Adder')
@section('content')
<style>
    #form {
        padding-top: 10rem;
    }
</style>
<section class="content-header">
    <h1>
        General Form Elements
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>
<section id="form">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Slide For Banner</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{route('postSlide')}}" enctype="multipart/form-data">
           {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input name="title" type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Slide Title" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input name="desc" type="text" class="form-control" id="exampleInputPassword1"
                        placeholder="Description" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" name="image" id="exampleInputFile" required>

                    <p class="help-block">Example block-level help text here.</p>
                </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>

@endsection
