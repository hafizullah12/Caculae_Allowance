<!doctype html>
<html lang="en">
  <head>
    <title>Result</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
      
      <div class="container">
          <div class="row" style="margin-top:20px">
          <div class="col-md-2">
          <img src="{{asset('public/images/nstu-logo.jpg')}}" alt="nstu-logo" 
             width="100" height="100" class="img-responsive" >
          </div>  
            <div class="col-md-10">
              <h1 style="line-height:60%;margin-top:10px;"> <b>Noakhali Science and Technology University</b> </h1>
              <h2>Sonapur,Noakhali-3814,Bangladesh</h2>
             
            </div>
           

          </div>
          <hr>

              <div class="row">
                <div class="col-12">
                
                <p>Session: {{$session}}</p> 
                <p> Course Name : {{$subject_name}} </p> 
                </p> Course Code : {{$course_code}} </p>
                <p> Semister: {{$semister}}</p>
                Teacher Name : {{$name}}
                <br>
                <br>
                <table class="table">
                 
                  <tbody>
                    <tr>
                      <td scope="row">Classs Test 1</td>
                      <td></td>
                      <td>{{$ct_1}}</td>
                      <td>{{$amount_of_ct_1}}</td>
                    </tr>
                    <tr>
                      <td scope="row">Classs Test 2</td>
                      <td></td>
                      <td>{{$ct_2}}</td>
                      <td>{{$amount_of_ct_2}}</td>
                    </tr>
                    <tr>
                      <td scope="row">Classs Test 3</td>
                      <td></td>
                      <td>{{$ct_3}}</td>
                      <td>{{$amount_of_ct_3}}</td>
                    </tr>
                    <tr>
                    <tr>
                      <td scope="row">Question Paper</td>
                      <td></td>
                      <td>{{$question}}</td>
                      <td>{{$amount_of_question}}</td>
                    </tr>
                    <tr>
                      <td scope="row">Final Exam</td>
                      <td></td>
                      <td>{{ $final_student}}</td>
                      <td>{{ $amount_of_final}}</td>
                    </tr>
                    <tr>
                      <td scope="row">Exam Committe</td>
                      <td></td>
                      <td>{{$exam_committee}}</td>
                      <td>{{$rate}}</td>
                    </tr>
                    <tr>
                      <td scope="row">Tabulation</td>
                      <td></td>
                      <td>{{$tabulation}}</td>
                      <td>{{$tabulation_rate}}</td>
                    </tr>
                    <tr>
                      <td scope="row">Thesis/Project Presentation</td>
                      <td></td>
                      <td>{{$presentation}}</td>
                      <td>{{$amount_of_presentation}}</td>
                    </tr>
                    <tr>
                      <td scope="row">Thesis/Project Evalution</td>
                      <td></td>
                      <td>{{$evalution}}</td>
                      <td>{{$amount_of_evalution}}</td>
                    </tr>
                    <tr>
                      <td scope="row">Scrutinizing 1</td>
                      <td>{{$sercetizing_sub_1}}</td>
                      <td>{{$sercetizing_student_1}}</td>
                      <td>{{$amount_of_sercetizing_1}}</td>
                    </tr>
                    <tr>
                 
                      <td scope="row">Total</td>
                      <td></td>
                      <td></td>
                    
                      <td>BDT &nbsp;{{$total}} &nbsp;tk</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </div>

      
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


@section('content')


@endsection