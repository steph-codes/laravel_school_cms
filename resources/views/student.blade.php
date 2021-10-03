<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Student Management System</title>
  </head>
  <body>
   
    @include('navbar')

    <div class="row header-container center justify-content-center">
        <div class="header">
            <h1 class="align-center">Student Management System</h1>
        </div>
    </div>

    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row  center justify-content-center">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5"></section>
            </div>
        </div>

    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5">
                    {{-- card --}}
                    <div class="card mb-3">
                        <img src="https://www.schooleducationgateway.eu/files/jpg11/equityinschools.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">This is the Students Management System</h5>
                          
                          <form action="{{ url('/store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input name="cne" type="text" class="form-control mb-3" placeholder="Enter CNE">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstName" type="text" class="form-control mb-3" placeholder="Enter your First Name">
                            </div>
                            <div class="form-group">
                                <label>Second Name</label>
                                <input name="secondName" type="text" class="form-control mb-3" placeholder="Enter your Last Name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control mb-3" placeholder="Enter your Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control mb-3" placeholder="Enter speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="reset">
                        </form>
                        </div>
                    </div>

                </section>
            </div>
        </div>

    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5">

                    <div class="card mb-3">
                        <img src="https://www.schooleducationgateway.eu/files/jpg11/equityinschools.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Update student Information</h5>
                          
                          <form action="{{ url('/update/'.$student->id)  }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input name="cne" value="{{ $student->cne }}" type="text" class="form-control mb-3" placeholder="Enter CNE">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstName" value="{{ $student->firstName }}" type="text" class="form-control mb-3" placeholder="Enter your First Name">
                            </div>
                            <div class="form-group">
                                <label>Second Name</label>
                                <input name="secondName" value="{{ $student->secondName }}" type="text" class="form-control mb-3" placeholder="Enter your Last Name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" value="{{ $student->age }}" class="form-control mb-3" placeholder="Enter your Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input name="speciality" value="{{ $student->speciality }}" type="text" class="form-control mb-3" placeholder="Enter speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="reset">
                        </form>

                        </div>
                      </div>
      
                </section>
            </div>
        </div>

    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include('studentslist')
                </section>
                <section class="col"></section>
            </div>
        </div>

    @elseif($layout == 'update')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include('studentslist')
                </section>
                <section class="col"></section>
            </div>
        </div>

    {{-- @elseif($layout == 'store') --}}

    @endif;

    <footer>

    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>