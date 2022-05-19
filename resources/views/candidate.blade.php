@extends('layouts.app')

@section('content')

<div class="container  my-3">
        <div class="row">
    <form action="" method="post" class="border border-dark">
        <div class="row">
            <div class="col-sm-6">
                <label for="name">Conditate Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Candidate Name">
            </div>
            <div class="col-sm-6">
                <label for="email">Conditate Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Candidate Email">
            </div>

        </div>

        <div class="row">
            <div class="col-sm-6">
                <label for="phone">Conditate phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter Candidate Contact">
            </div>
            <div class="col-sm-6">
                <label for="address">Conditate Address</label>
               <textarea name="address" id="" class="form-control" placeholder="Enter Conditate Addesss"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label for="skill">Select Skills</label>
                <br>
              <select name="skill" id="" class="form-control">
                  <option value="php">PHP</option>
                  <option value="laravel">Laravel</option>
                  <option value="Nodejs">Nodejs</option>
                  <option value="angularjs">Angularjs</option>
                  <option value="android">Android</option>
              </select>
            </div>
            <div class="col-sm-6">
                <label for="experience">Condidate Experience</label>
                <input type="text" name="experience"class="form-control" placeholder="Enter Candidate Contact" >
            </div>

        </div>
        <div class="row">
            <div class="col sm-4"></div>
            <div class="col-sm-4">
                <br>
                <input type="submit" name="submit"class="form-control" >
            </div>
            <div class="col-sm-4"></div>
        </div>
</form>
<br><br>
</div>
@endsection
