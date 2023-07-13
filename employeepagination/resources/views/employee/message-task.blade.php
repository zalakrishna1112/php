@extends('employee.layout.main')
@section('midsection')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Messages & Tasks</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                   <div class="col-md-6">

                        <div class="panel panel-success">
                            <div class="panel-heading">
                               Message Box #1
                            </div>
                            <div class="panel-body" style="padding: 0px;">
                                <div class="chat-widget-main">


                                    <div class="chat-widget-left">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </div>
                                    <div class="chat-widget-name-left">
                                        <h4>Amanna Seiar</h4>
                                    </div>
                                    <div class="chat-widget-right">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </div>
                                    <div class="chat-widget-name-right">
                                        <h4>Donim Cruseia </h4>
                                    </div>
                                    <div class="chat-widget-left">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </div>
                                    <div class="chat-widget-name-left">
                                        <h4>Amanna Seiar</h4>
                                    </div>
                                    <div class="chat-widget-right">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </div>
                                    <div class="chat-widget-name-right">
                                        <h4>Donim Cruseia </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Message" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="button">SEND</button>
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i>Message Box #2
                            </div>

                            <div class="panel-body">
                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-bolt fa-fw"></i>Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-warning fa-fw"></i>Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                    </a>

                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-bolt fa-fw"></i>Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-warning fa-fw"></i>Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-shopping-cart fa-fw"></i>New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                    </a>
                                     <a href="#" class="list-group-item">
                                        <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                    </a>
                                   
                                </div>
                                <!-- /.list-group -->
                                <a href="#" class="btn btn-info btn-block">View All Alerts</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
                 <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-primary">
      <!-- Default panel contents -->
      <div class="panel-heading"># TO DO LIST - TASK YOU HAVE TO DO</div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
              <th>#</th>
            <th>Task Name</th>
            <th>On Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="list-group-item-success">
            <td>1</td>
                <td><input type="checkbox" value="" /></td>
            <td>100$ Pending Payment</td>
            <td>23rd June </td>
            <td><a href="#" class="btn btn-primary ">Just Done</a></td>
          </tr>
          <tr class="list-group-item-danger">
            <td>2</td>
                <td><input type="checkbox" value="" /></td>
            <td>200 Messages To Reply</td>
            <td>10th November </td>
            <td><a href="#" class="btn btn-success">Pending</a></td>
          </tr>
          <tr class="list-group-item-info">
            <td>3</td>
                <td><input type="checkbox" value="" /></td>
            <td>90 Orders To Process</td>
            <td>2nd December </td>
            <td><a href="#" class="btn btn-primary">In Process</a></td>
          </tr>
            <tr class="list-group-item-warning">
            <td>4</td>
                  <td><input type="checkbox" value="" /></td>
            <td>100$ Pending Payment</td>
            <td>23rd June </td>
            <td><a href="#" class="btn btn-danger">Just Done </a></td>
          </tr>
          <tr class="list-group-item-info">
            <td>5</td>
                <td><input type="checkbox" value="" /></td>
            <td>200 Messages To Reply</td>
            <td>10th November </td>
            <td><a href="#" class="btn btn-warning">Pending</a></td>
          </tr>
          <tr class="list-group-item-danger">
            <td>6</td>
              <td><input type="checkbox" value="" /></td>
            <td>90 Orders To Process</td>
            <td>2nd December </td>
            <td><a href="#" class="btn btn-info">In Process</a></td>
          </tr>
        </tbody>
      </table>
    </div>
                   </div>
                     </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    @endsection
