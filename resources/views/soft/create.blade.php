<!DOCTYPE html>
<html>
<head>
	<title>Calculate Allowance</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
   <div class="row">
      <div class="col-md-1">
        <img src="{{asset('public/images/nstu-logo.jpg')}}" alt="nstu-logo" 
        width="100" height="250" class="img-responsive" >
      </div>
      <div class="col-md-10">
        <h1 style="line-height:60%"> <b>Noakhali Science and Technology University</b> </h1>
        <h2>Sonapur,Noakhali-3814,Bangladesh</h2>
       </div>
   </div>

      <div class="row">
        <div class="col-md-12" style="background:#e6e6e6">
        <p style="font-size:22px;margin-top:5px;" class="text-center">Calculate Allowance</p>
     </div>
  </div>
  <div class="row">
  {!! Form::open(['action'=>'ResultController@store','files'=>true]) !!}

  <div class="form-group">
      {!! Form::label('Session') !!}
      <select name="session_id" id="" class="form-control">
      <option value="">--Select Session--</option>
      @foreach($sessions as $session)
      <option value="{{$session->id}}">{{$session->name}}</option>
      @endforeach 
      </select>
    </div>
   
   
    <div class="col-4"> 
    <div class="form-group">
      {!! Form::label('Semister') !!}
      {!! Form::select('id_semister',[''=>'--- Select Semister---']+$semisters,null,['class'=>'form-control']) !!}
    </div>
    </div>

    <div class="form-group">
      <label>Select Subject:</label>
      {!! Form::select('id_subject',[''=>'--- Select Subject ---'],null,['class'=>'form-control']) !!}
    </div>
<!-- <hr> -->
    <div class="form-group">
    {!! Form::label('Teacher name') !!}
   <input type="text" name="name" class="form-control">
    </div>
    <a href="#demo1" class="btn btn-info" data-toggle="collapse">Class Test 1</a>
     <div id="demo1" class="collapse">
      <div class="form-group">
      {!!Form::label('No. Of Students')!!}
     <input type="text" name="ct_1" class="form-control" placeholder="Enter Number Of Students">
     </div>

     </div>

       <a href="#demo4" class="btn btn-info" data-toggle="collapse">Class Test 2</a>
     <div id="demo4" class="collapse">
      <div class="form-group">
      {!!Form::label('No. Of Students')!!}
     <input type="text" name="ct_2" class="form-control" placeholder="Enter Number Of Students">
     </div>

     </div>

      <a href="#demo5" class="btn btn-info" data-toggle="collapse">Class Test 3</a>
     <div id="demo5" class="collapse">
      <div class="form-group">
      {!!Form::label('No. Of Students')!!}
     <input type="text" name="ct_3" class="form-control" placeholder="Enter Number Of Students">
     </div>

     </div>
  <br>
  <br>

    <div class="form-group">
    {!!Form::label('Prepare Question')!!}
    <input type="text" name="question" class="form-control" placeholder="Enter Number Of Students">
    </div>
 
    <div class="form-group">
    {!!Form::label('Final Examination')!!}
    <input type="text" name="final_student" class="form-control" placeholder="Enter Number Of Students">
    </div>

      <div class="form-group">
      {!! Form::label('Examination Committee') !!}
      <select name="exam_committee" id="" class="form-control">
      <option value="">--Select Option--</option>
      <option value="chairman">Chairman</option>
      <option value="member">Member</option>
     </select>
    </div>


 <div class="form-group">
    {!!Form::label('Result Tabulation')!!}
    <input type="text" name="tabulation" class="form-control" placeholder="Enter Number Of Students">
 </div>
    

  
   <!-- <br>  <br>  <br>  <br> -->
   <div class="form-group">
    {!!Form::label('Thesis/Project Presentation')!!}
    <input type="text" name="presentation" class="form-control" placeholder="Enter Number Of Students">
    </div>

    <div class="form-group">
    {!!Form::label('Thesis/Project Evalution')!!}
    <input type="text" name="evalution" class="form-control" placeholder="Enter Number Of Students">
    </div>

    <a href="#demo" class="btn btn-info" data-toggle="collapse">Scrutinizing 1</a>
  <div id="demo" class="collapse">
  <div class="form-group">
      <label>Subject Name:</label>
    <input type="text" name="sercetizing_sub_1" class="form-control">
    </div>
    <div class="form-group">
    {!!Form::label('No. Of Students')!!}
    <input type="text" name="sercetizing_student_1" class="form-control" placeholder="Enter Number Of Students">
    </div>
    </div>

     <a href="#demo7" class="btn btn-info" data-toggle="collapse">Scrutinizing 2</a>
  <div id="demo7" class="collapse">
  <div class="form-group">
      <label>Subject Name:</label>
    <input type="text" name="sercetizing_sub_2" class="form-control">
    </div>
    <div class="form-group">
    {!!Form::label('No. Of Students')!!}
    <input type="text" name="sercetizing_student_2" class="form-control" placeholder="Enter Number Of Students">
    </div>
    </div>
    <a href="#demo8" class="btn btn-info" data-toggle="collapse">Scrutinizing 3</a>
  <div id="demo8" class="collapse">
  <div class="form-group">
      <label>Subject Name:</label>
    <input type="text" name="sercetizing_sub_3" class="form-control">
    </div>
    <div class="form-group">
    {!!Form::label('No. Of Students')!!}
    <input type="text" name="sercetizing_student_3" class="form-control" placeholder="Enter Number Of Students">
    </div>
    </div>

<br><br>
    <div class="form-group">
      <button class="btn btn-success btn-block" type="submit">Calculate</button>
    </div>

  {!! Form::close() !!}
  <div>

  </div>   <!-- end of Container -->

<script type="text/javascript">
  $("select[name='id_semister']").change(function(){
      var id_semister = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "<?php echo route('select-ajax') ?>",
          method: 'POST',
          data: {id_semister:id_semister, _token:token},
          success: function(data) {
            $("select[name='id_subject'").html('');
            $("select[name='id_subject'").html(data.options);
          }
      });
  });
</script>

</body>
</html>