<!DOCTYPE html>
<html>
<head>
	<title>Calculate Allowance</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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


 


  {!! Form::open(['action'=>'CalculateController@store','files'=>true]) !!}

  <div class="form-group">
      {!! Form::label('Session') !!}
      <select name="session_id" id="" class="form-control">
      <option value="">--Select Session--</option>
      @foreach($sessions as $session)
      <option value="{{$session->id}}">{{$session->name}}</option>
      @endforeach 
      </select>
    </div>

     <div class="form-group">
      {!! Form::label('Semister') !!}
      {!! Form::select('id_semister',[''=>'--- Select Semister---']+$semisters,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      <label>Select Subject:</label>
      {!! Form::select('id_subject',[''=>'--- Select Subject ---'],null,['class'=>'form-control']) !!}
    </div>
<hr>
    <div class="form-group">
    {!! Form::label('Teacher name') !!}
   <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
    @foreach( $factors as $factor)
    <label for="">{{$factor->name}}</label>
   <input type="number" name="factor[]" min="0" max="5" class="form-control">
   <input type="hidden" name="factor_id[]" value="{{$factor->id}}" class="form-control">
   @endforeach
    </div>



   

    <div class="form-group">
      <button class="btn btn-success" type="submit">Submit</button>
    </div>

  {!! Form::close() !!}

</div>

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