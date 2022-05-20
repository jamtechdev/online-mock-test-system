
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conadidate Register Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <link rel="dtylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
     <!-- Scripts -->
     <script src="{{ asset('js/appjs.js') }}" defer></script>
     <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Scripts -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Request a Demo</h3>
                <p class="text-light">Just answer a few questions<br> so that we can personalize the right experience for you.</p>
            </div>
        </div>
        <div class="container card">
            <h2 class="text-center mb-4"><strong>Quiz!</strong></h2>
            <form class="form-card px-5" action="{{url('/candidate_register')}}" method="post">
                @csrf
                <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex mb-3">
                        <label class="form-control-label px-3">Name<span class="text-danger"> *</span></label>
                        <input type="text" id="name" name="name" placeholder="Enter your first name" onblur="validate(1)">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-6 flex-column d-flex mb-3">
                        <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label>
                        <input type="text" id="mobno" name="mobno" placeholder="Enter your mobile Number" onblur="validate(4)">
                        @error('mobno')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex mb-3">
                        <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" onblur="validate(3)">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-6 flex-column d-flex mb-3">
                        <label class="form-control-label px-3">Experience<span class="text-danger"> *</span></label>
                        <select class="form-control form-control-lg"  name="experience">
                            <option>0-5 month</option>
                            <option>1 year</option>
                            <option>2 year</option>
                            <option>3 year</option>
                          </select>
                          @error('experience')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                       </div>
                </div>
                <div class="row justify-content-between text-left ">
                    <div class="form-group col-sm-6 flex-column d-flex mb-3">
                        <label class="form-control-label px-3">Select Skill<span class="text-danger"> *</span></label>
                        <select id="choices-multiple-remove-button" class="form-control-lg" name="skill" placeholder="Select upto 5 tags" multiple>
                            <option value="HTML">HTML</option>
                            <option value="Jquery">Jquery</option>
                            <option value="CSS">CSS</option>
                            <option value="Bootstrap 3">Bootstrap 3</option>
                            <option value="Bootstrap 4">Bootstrap 4</option>
                            <option value="Java">Java</option>
                            <option value="Javascript">Javascript</option>
                            <option value="Angular">Angular</option>
                            <option value="Python">Python</option>
                            <option value="Hybris">Hybris</option>
                            <option value="SQL">SQL</option>
                            <option value="NOSQL">NOSQL</option>
                            <option value="NodeJS">NodeJS</option>
                        </select>
                        @error('skill')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="form-group col-sm-6 flex-column d-flex mb-3">
                        <label class="form-control-label px-3"> Status<span class="text-danger"> *</span></label>
                        <select class="form-control form-control-lg"  name="status">
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                            <option value="3">Pending</option>
                          </select>
                          @error('status')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                </div>
                <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex mb-3">
                        <label class="form-control-label px-3">Note<span class="text-danger"> *</span></label>
                        <textarea name="note" id="note"  placeholder="Enter your Note.." style="resize:none;height:45px;"></textarea>
                        @error('note')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-6 flex-column d-flex mb-3">
                        <label class="form-control-label px-3">Password<span class="text-danger"> *</span></label>
                        <input type="password" id="password" name="password" placeholder="Enter your Password" onblur="validate(4)">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row text-content-between">
                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-dark">Register</button>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>

       $(document).ready(function(){
        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
        removeItemButton: true,
        maxItemCount:5,
        searchResultLimit:5,
        renderChoiceLimit:5
        });
    });
    </script>
</body>
</html>
