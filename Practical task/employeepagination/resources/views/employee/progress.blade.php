@extends('employee.layout.main')
@section('midsection')
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Progress Bars</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Example
                        </div>
                        <div class="panel-body">
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    <span class="sr-only">60% Complete</span>
  </div>
</div>
                        </div>
                       
                    </div>
                    </div>
                    <div class="col-md-6">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                            With label Example
                        </div>
                        <div class="panel-body">
                            <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    60%
  </div>
</div>
                        </div>
                       
                    </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <div class="row">
                    <div class="col-md-6">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                            Low Percentages Example
                        </div>
                        <div class="panel-body">
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
    0%
  </div>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
    2%
  </div>
</div>
                        </div>
                       
                    </div>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Stacked Example
                        </div>
                        <div class="panel-body">
<div class="progress">
  <div class="progress-bar progress-bar-success" style="width: 35%">
    <span class="sr-only">35% Complete (success)</span>
  </div>
  <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 20%">
    <span class="sr-only">20% Complete (warning)</span>
  </div>
  <div class="progress-bar progress-bar-danger" style="width: 10%">
    <span class="sr-only">10% Complete (danger)</span>
  </div>
</div>
                        </div>
                       
                    </div>
                    </div>
                    <div class="col-md-6">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                           Contextual Alternatives
                        </div>
                        <div class="panel-body">
                            <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
    <span class="sr-only">20% Complete</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
    <span class="sr-only">60% Complete (warning)</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
    <span class="sr-only">80% Complete</span>
  </div>
</div>
                        </div>
                       
                    </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <div class="row">
                    <div class="col-md-6">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                            Striped Example
                        </div>
                        <div class="panel-body">
<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
    <span class="sr-only">20% Complete</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
    <span class="sr-only">60% Complete (warning)</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
    <span class="sr-only">80% Complete (danger)</span>
  </div>
</div>
                        </div>
                       
                    </div>
                    </div>
                    <div class="col-md-6">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                            Animated Example
                        </div>
                        <div class="panel-body">
                           <div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
    <span class="sr-only">45% Complete</span>
  </div>
</div>
                                <div class="progress">
  <div class="progress-bar progress-bar-warning progress-bar-striped active"  role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
    <span class="sr-only">75% Complete</span>
  </div>
</div>
                                <div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
    <span class="sr-only">45% Complete</span>
  </div>
</div>
                               <div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped active"  role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
    <span class="sr-only">55% Complete</span>
  </div>
</div>
                        </div>
                       
                    </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    @endsection
