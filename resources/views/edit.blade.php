<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>DATA INSERT</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm">
    
    </div>
    <div class="col-sm">

      <form class="row g-5" action="/edit" method="POST">
        
        @csrf 
        <input type="hidden" name="id" value="{{$data['id']}}">
          <div class="mb-3">
          
        </div>
          <div class="col-auto">
            <label for="exampleFormControlInput1" class="form-label">Cash</label>
            <input type="number" name="cash" value="{{$data['cash']}}" class="form-control" id="exampleFormControlInput1" placeholder="cash">
            <label for="exampleFormControlInput1" class="form-label">Receivable</label>
            <input type="number" name="receivable" value="{{$data['cash']}}" class="form-control" id="exampleFormControlInput1" placeholder="receivable">
            <label for="exampleFormControlInput1" class="form-label">Equipment</label>
            <input type="number" name="equipment" value="{{$data['equipment']}}" class="form-control" id="exampleFormControlInput1" placeholder="equipment">
            <label for="exampleFormControlInput1" class="form-label">Note Payble</label>
            <input type="number" name="note_pyb" value="{{$data['note_pyb']}}" class="form-control" id="exampleFormControlInput1" placeholder="note payble">
            <label for="exampleFormControlInput1" class="form-label">Acc Payble</label>
            <input type="number" name="acc_pyb" value="{{$data['acc_pyb']}}" class="form-control" id="exampleFormControlInput1" placeholder="account payble">
            <label for="exampleFormControlInput1" class="form-label">Capital</label>
            <input type="number" name="capital" value="{{$data['capital']}}" class="form-control" id="exampleFormControlInput1" placeholder="capital">
            <label for="exampleFormControlInput1" class="form-label">Drawing</label>
            <input type="number" name="drawing" value="{{$data['drawing']}}" class="form-control" id="exampleFormControlInput1" placeholder="drawing">
            <label for="exampleFormControlInput1" class="form-label">Revenue</label>
            <input type="number" name="revenue" value="{{$data['revenue']}}" class="form-control" id="exampleFormControlInput1" placeholder="revenue">
            <label for="exampleFormControlInput1" class="form-label">Expense</label>
            <input type="number" name="expense" value="{{$data['expense']}}" class="form-control" id="exampleFormControlInput1" placeholder="expense">


            <br>
            <button type="submit" class="btn btn-primary mb-3">UPDATE</button>
          </div>
         

        </form>
      
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
