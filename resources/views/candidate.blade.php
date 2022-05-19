@extends('layouts.app')

@section('content')

<div class="container ">
    <form action="" method="post">
        <div class="row">
            <div class="col sm-4"></div>
            <div class="col-sm-4">
                <label for="name">Conditate Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Candidate Name">
            </div>
            <div class="col-sm-4"></div>
        </div>

        <div class="row">
            <div class="col sm-4"></div>
            <div class="col-sm-4">
                <label for="email">Conditate Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Candidate Email">
            </div>
            <div class="col-sm-4"></div>
        </div>

        <div class="row">
            <div class="col sm-4"></div>
            <div class="col-sm-4">
                <label for="phone">Conditate phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter Candidate Contact">
            </div>
            <div class="col-sm-4"></div>
        </div>

        <div class="row">
            <div class="col sm-4"></div>
            <div class="col-sm-4">
                <label for="address">Conditate Address</label>
               <textarea name="address"  class="form-control" placeholder="Enter Conditate Addesss"></textarea>
            </div>
            <div class="col-sm-4"></div>
        </div>

        <div class="row">
            <div class="col sm-4"></div>
            <div class="col-sm-4">
                <label for="skill">Select Skills</label>
              <select name="skill" id="">
                  <option value="php"></option>
                  <option value="laravel"></option>
                  <option value="Nodejs"></option>
                  <option value="angularjs"></option>
                  <option value="android"></option>
              </select>
            </div>
            <div class="col-sm-4"></div>
        </div>

</form>
</div>
@endsection