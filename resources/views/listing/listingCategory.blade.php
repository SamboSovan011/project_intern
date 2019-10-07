@extends('dashboard.app');
@section('title', 'Potted Pan - Categories')
@section('content')
<style>
    #button-row {
        padding: 1rem;
        display: flex;
        justify-content: flex-end;
        align-items: flex-end;
    }


    .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
    }

    .example-modal .modal {
        background: transparent !important;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Category
        <small>Add new Categories</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Category</li>
    </ol>
</section>
<section id="button-row">
    <div class="button">
        <a href="{{route('slide')}}">
            <button class="btn btn-info">
                POST NEW CATEGORY
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
                    <h3 class="box-title">Categories</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Category Images</th>
                                <th>User Emails</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cates as $cate)
                            <tr>
                                <td>
                                    <img src="{{asset($cate->img_path)}}" width="80px" height="70px" alt="img_slide">
                                </td>
                                <td>
                                    {{$slide->user_email}}
                                </td>
                                <td>{{$cate->title}}</td>
                                <td>{{$cate->description}}</td>
                                <td>
                                    @if($cate->is_approved == 2)
                                    <span class="label label-success">Approved</span>
                                    @elseif($cate->is_approved == 1)
                                    <span class="label label-warning">Pending</span>
                                    @else
                                    <span class="label label-danger">Block</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                            data-toggle="dropdown">
                                            <span>Action</span>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{route('approveSlide', ['id' => $cate->id])}}"><span
                                                        class="text-green glyphicon glyphicon-ok">Approved</span></a>
                                            </li>
                                            <li><a href="{{route('blockSlide', ['id' => $cate->id])}}"><span
                                                        class="text-yellow glyphicon glyphicon-remove">Block</span></a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#editForm">
                                                    <span id="{{$cate->id}}"
                                                        class="text-blue fa fa-fw fa-edit edit">Edit</span>

                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('deleteSlide', ['id' => $cate->id])}}">
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
                                <th>Category Images</th>
                                <th>User Emails</th>
                                <th>Title</th>
                                <th>Description</th>
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




    {{-- modal --}}
    <div class="modal fade" id="editForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Slide</h4>
                </div>
                <form id="editSlideForm" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="box-body">

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif



                            <div class="form-group">
                                <label>Title</label>
                                <input name="title" type="text" class="form-control" id="slideTitle"
                                    placeholder="Slide title">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3" id="slideDesc"
                                    placeholder="Slide Description"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="is_main" id="is-main" value="1" checked>
                                        This is the main slide.
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="is_main" id="not-main" value="0">
                                        No, this is normal slide.
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input name="image" type="file" id="exampleInputFile">

                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <img id="store_img" src="" width="100px" height="90px" alt="">




                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</section>
<!-- /.content -->
<script>
    $(function () {
    $('#example2').DataTable({
        'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'info'        : true,
      'autoWidth'   : false,
      'ordering'    : true,

    })

  })
</script>
@endsection
