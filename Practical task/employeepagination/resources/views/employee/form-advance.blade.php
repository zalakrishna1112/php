@extends('employee.layout.main')
@section('midsection')
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Advance Elements</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                           File Uploads
                        </div>
                        <div class="panel-body">
                   
                    <div class="form-group">
                        <label class="control-label col-lg-4">No Input</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-default">
                                    <span class="fileupload-new">Select file</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file">
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Image Upload</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Pre Defined Image</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-warning"><strong>Notice!</strong> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead.</div>
                    </div>
                           </div>
                         <div class="panel panel-default">
                        <div class="panel-heading">
                           For More Customization
                        </div>
                        <div class="panel-body">
                            <h4 class="alert alert-info" style="line-height:50px;">
                            For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank" >click here</a> 
                           </h4>
                                 </div>
                             </div>
                        </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Text Editor Example
                        </div>
                        <div class="panel-body">
                          <h3> Breadcrumbs</h3>
                            <hr />
                            <ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Library</a></li>
  <li class="active">Data</li>
</ol>
                           
                            <h3>Pagination</h3>
                            <hr />
                            <ul class="pagination">
  <li><a href="#">&laquo;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>
                            <br />
                            <ul class="pagination">
  <li class="disabled"><a href="#">&laquo;</a></li>
  <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
    <li><a href="#">&raquo;</a></li>
</ul>
                            <h3>Pager </h3>
                            <hr />
                            <ul class="pager">
  <li><a href="#">Previous</a></li>
  <li><a href="#">Next</a></li>
</ul>
                            <br />
                            <ul class="pager">
  <li class="previous disabled"><a href="#">&larr; Older</a></li>
  <li class="next"><a href="#">Newer &rarr;</a></li>
</ul>

                            <h3>Badges</h3>
                            <hr />
                            <a href="#">Inbox <span class="badge">42</span></a>
                            <br /><br />
                            <ul class="nav nav-pills">
      <li class="active"><a href="#">Home <span class="badge">42</span></a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages <span class="badge">3</span></a></li>
    </ul>
    <br>
    <ul class="nav nav-pills nav-stacked" style="max-width: 260px;">
      <li class="active">
        <a href="#">
          <span class="badge pull-right">42</span>
          Home
        </a>
      </li>
      <li><a href="#">Profile</a></li>
      <li>
        <a href="#">
          <span class="badge pull-right">3</span>
          Messages
        </a>
      </li>
    </ul>
    <br>
    <button class="btn btn-primary" type="button">
      Messages <span class="badge">4</span>
    </button>



                            </div>
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