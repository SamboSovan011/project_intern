@extends('dashboard.app')
@section('title', 'Potted Pan - Slides')
@section('content')
<style>
    #button-row {
        padding: 1rem;
        display: flex;
        justify-content: flex-end;
        align-items: flex-end;
    }
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Tables
        <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>
<section id="button-row">
    <div class="button">
        <a href="{{route('slide')}}">
            <button class="btn btn-info">
                POST NEW SLIDE
            </button></a>

    </div>
</section>
<section>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        {{ session()->get('success') }}
    </div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Fail!</h4>
            {{session()->get('error')}}
    </div>
    @endif
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- /.box -->

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Slide Images</th>
                                <th>User Emails</th>
                                <th>Titles</th>
                                <th>Decription</th>
                                <th>Is_Main Slide</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($slides as $slide)
                            <tr>
                                <td>
                                    <img src="{{asset($slide->img_path)}}" width="80px" height="70px" alt="img_slide">
                                </td>
                                <td>
                                    {{$slide->user_email}}
                                </td>
                                <td>{{$slide->title}}</td>
                                <td>{{$slide->description}}</td>
                                <td>
                                    @if($slide->is_main == 1)
                                    Yes
                                    @else
                                    No
                                    @endif
                                </td>
                                <td>
                                    @if($slide->is_approved == 2)
                                        <span class="label label-success">Approved</span>
                                    @elseif($slide->is_approved == 1)
                                        <span class="label label-warning">Pending</span>
                                    @else
                                        <span class="label label-danger">Block</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span>Action</span>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li><a href="{{route('approveSlide', ['id' => $slide->id])}}"><span class="text-green glyphicon glyphicon-ok">Approved</span></a></li>
                                        <li><a href="{{route('blockSlide', ['id' => $slide->id])}}"><span class="text-yellow glyphicon glyphicon-remove">Block</span></a></li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#editForm">
                                                    <span class="text-blue fa fa-fw fa-edit">Edit</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('deleteSlide', ['id' => $slide->id])}}">
                                                    <span class="text-red glyphicon glyphicon-trash">Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Slide Images</th>
                                <th>User Emails</th>
                                <th>Titles</th>
                                <th>Decription</th>
                                <th>Is_Main Slide</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

@endsection
