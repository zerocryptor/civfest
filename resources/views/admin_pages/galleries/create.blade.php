@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{$parse['title']}}
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Galleries</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-xs-12">
        @if(Session::has('status'))
        <div class="alert alert-success">
          <strong>Success!</strong> {{ Session::get('status') }}
        </div>
        @endif
      <form role="form" class="form" method="post" action="{{ url('galleries') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="box-body">
          <!-- input title -->
          <div class="form-group">
            <label for="title">Title post</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" required>
          </div>

          <!-- input images -->
          <div class="form-group">
            <label for="inputFile">Your Images</label>
            <input type="file" name="images" id="inputFile" required>

            <p class="help-block" style="font-style: italic;color: red;">this images must 1 x 1</p>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    </div>
  </section>
</div>
@endsection
