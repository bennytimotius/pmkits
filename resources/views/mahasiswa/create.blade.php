@extends('layouts.backend')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Mahasiswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">List Mahasiswa</li>
      </ol>
      <br>
      <br>
    </section>

    <!-- Main content -->
    <br><br>
    <div class="container">
        {!! Form::open(['method'=>'POST','action'=>['MahasiswaController@store']]) !!}
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-lg-4">Name</label>
                        <input name="name" type="text" class="form-control col-lg-8" placeholder="Name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-sm-4">NRP</label>
                        <input name="nrp" type="text" class="form-control col-sm-8" placeholder="NRP" required>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-sm-4">Username(Email)</label>
                        <input name="username" type="email" class="form-control col-sm-8" placeholder="Email"required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-sm-4">JK</label>
                        <select name="jk" class="form-control col-sm-8" required>
                          <option value="L">L</option>
                          <option value="P">P</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-sm-4">PKK</label>
                        <input name="pkk" type="text" class="form-control col-sm-8" placeholder="NRP PKK" required>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-sm-4">Asal</label>
                        <input name="asal" type="text" class="form-control col-sm-8" placeholder="Asal" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-sm-4">Tanggal Lahir</label>
                        <input name="tgl_lahir" class="form-control col-sm-8"  type="date" placeholder="Tanggal Lahir" required>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-sm-4">Alamat Surabaya</label>
                        <input name="alamat_sby" type="text" class="form-control col-sm-8" placeholder="Alamat Surabaya" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-sm-4">Alamat Asal</label>
                        <input name="alamat_asal" type="text" class="form-control col-sm-8" placeholder="Alamat Asal" required>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-sm-4">Gereja</label>
                        <input name="gereja" type="text" class="form-control col-sm-8" placeholder="Gereja" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-sm-4">No. HP</label>
                        <input name="no_hp" type="number" class="form-control col-sm-8" placeholder="No. HP" required>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-sm-4">Line ID</label>
                        <input name="line_id" type="text" class="form-control col-sm-8" placeholder="Line ID" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-sm-4">Talenta</label>
                        <input name="talenta" type="text" class="form-control col-sm-8" placeholder="Talenta" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-sm-4">Kehadiran PJ</label>
                        <input name="kehadiran_pj" type="number" placeholder="Kehadiran PJ" class="form-control col-sm-8">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="message-text" class="form-control-label col-sm-4">Kehadiran PD</label>
                        <input name="kehadiran_pd" type="number" placeholder="Kehadiran PD" class="form-control col-sm-8">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Kehadiran Rapat</label>
                        <input name="kehadiran_rapat" type="number" placeholder="Kehadiran Rapat" class="form-control col-sm-8">
                    </div>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-6" style ="margin-top:10px; text-align: right">
                    {!! Form::button('<i class="fa fa-plus-square"></i>'.' Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
                </div>
            </div>
        {{!! Form::close() !!}}
    </div>
    <!-- /.Main content -->
    
  </div>
 @stop

<!-- jQuery 2.2.3 -->
<script src="{{URL::asset('public/Admin-LTE/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{URL::asset('public/Admin-LTE/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{URL::asset('public/Admin-LTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('public/Admin-LTE/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{URL::asset('public/Admin-LTE/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{URL::asset('public/Admin-LTE/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{URL::asset('public/Admin-LTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{URL::asset('public/Admin-LTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{URL::asset('public/Admin-LTE/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{URL::asset('public/Admin-LTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{URL::asset('public/Admin-LTE/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{URL::asset('public/Admin-LTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{URL::asset('public/Admin-LTE/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('public/Admin-LTE/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('public/Admin-LTE/dist/js/app.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::asset('public/Admin-LTE/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('public/Admin-LTE/dist/js/demo.js')}}"></script>