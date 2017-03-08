@extends('layouts.admin.admin',['menu' => 'Dashboard'])

@section('content')
  <div class="row">
    <div class="col-sm-3">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Leave for Today</span>
          <span class="info-box-number">3</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>

    <div class="col-sm-3">
      <!-- Apply any bg-* class to to the info-box to color it -->
      <div class="info-box bg-red">
        <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Likes</span>
          <span class="info-box-number">41,410</span>
          <!-- The progress section is optional -->
          <div class="progress">
            <div class="progress-bar" style="width: 70%"></div>
          </div>
        <span class="progress-description">
          70% Increase in 30 Days
        </span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>

    <div class="col-sm-3">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Leave for Today</span>
          <span class="info-box-number">3</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>

    <div class="col-sm-3">
      <!-- Apply any bg-* class to to the info-box to color it -->
      <div class="info-box bg-red">
        <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Likes</span>
          <span class="info-box-number">41,410</span>
          <!-- The progress section is optional -->
          <div class="progress">
            <div class="progress-bar" style="width: 70%"></div>
          </div>
        <span class="progress-description">
          70% Increase in 30 Days
        </span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Default Box Example</h3>
          <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="label label-primary">Label</span>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
          The body of the box
        </div><!-- /.box-body -->
        <div class="box-footer">
          The footer of the box
        </div><!-- box-footer -->
      </div><!-- /.box -->
    </div>

    <div class="col-sm-6">

    </div>
  </div>


@endsection