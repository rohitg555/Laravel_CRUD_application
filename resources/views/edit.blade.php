<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
   @include('layouts.header')
    <div class="container">
        <div class="row">
            <form action="/update_user/{{$data->id}}" method="POST">
                {{csrf_field()}}
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control"name="name" id="name" value="{{$data->name}}">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" value="{{$data->email}}">
              </div>
              <div class="form-group">
                <label for="mobile no">Mobile No:</label>
                <input type="number" class="form-control" name="mobile_no" id="mobile_no" value="{{$data->mobile_no}}">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control"name="password" id="pwd" value="{{$data->password}}">
              </div>
                <div class="form-group">
                <label for="pwd">Confirm Password:</label>
                <input type="password" class="form-control"name="confirm_password" id="confirm_pwd">
              </div>

              <div class="form-group">
                <label for="City">City:</label>
                <select class="form-control" id="sel1" name="city">
                  <option value="{{$data->city}}">{{$data->city}}</option>
                  <option value="Puune">Pune</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Kolkata">Kolkata</option>
                </select>
              </div>
              <div class="form-group">
                <label for="Hobbies">Hobbies:</label>

                @foreach($hobbies as $hobby)
                  
                    <label class="checkbox-inline"><input type="checkbox" name="hobbies[]" value="Cricket" <?php if ( $hobby =='Cricket' ) { echo 'checked'; } ?>>Cricket</label>
                  <label class="checkbox-inline"><input type="checkbox" name="hobbies[]" value="Hockey" <?php if ( $hobby=='Hocket' ) { echo 'checked'; } ?>>Hockey</label>
                  <label class="checkbox-inline"><input type="checkbox" name="hobbies[]" value="Football" <?php if ( $hobby == 'Football' ) { echo 'checked'; } ?>>Football</label>                
                @endforeach

              </div>           


              <div class="form-group">
                <label for="Gender">Gender:</label>
                  <label class="radio-inline"><input type="radio" value="Male" name="gender">Male</label>
                  <label class="radio-inline"><input type="radio" value="Female" name="gender">Female</label>
                  <label class="radio-inline"><input type="radio" value="Others" name="gender">Others</label>                
              </div>
              <div class="form-group">
                <label for="Address">Address:</label>
                <textarea class="form-control" rows="5" id="comment" name="address">{{$data->address}}</textarea>
              </div>
               
               <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>


</body>
</html>