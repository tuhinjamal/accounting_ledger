<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>LOGIN</title>
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
      <h1>Asset</h1>
    	<h3>{{$dataa}}</h3>
    	<h1>Liabilities+Owner's equity</h1>
      <h3>{{$dataaa}}</h3>
    </div>
    <div class="col-sm">
      <h1>=</h1>
      <table class="table">
   <thead>
    <tr>
      <th scope="col">Asset</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>      
      <th scope="col"></th>
      <th scope="col">=</th>
      <th scope="col"></th>
      <th scope="col">Liabilities</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">   + </th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Owner's equity</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Operations</th>
      <th scope="col"></th>
    </tr>
  </thead>
   <thead>
    <tr>
      <th scope="col">action&nbsp&nbsp&nbsp&nbsp</th>
      <th scope="col">cash</th>
      <th scope="col">&nbsp&nbsp&nbsp&nbsp+</th>
      <th scope="col">recivable</th>
      <th scope="col">+</th>
      <th scope="col">equipment</th>
      <th scope="col">=</th>
      <th scope="col">note pyb</th>      
      <th scope="col">+</th>
      <th scope="col">acc pyb</th>
      <th scope="col">+</th>
      <th scope="col">capital</th>
      <th scope="col">-</th>
      <th scope="col">drawing</th>
      <th scope="col">+</th>
      <th scope="col">&nbsp&nbsp&nbsp&nbsp&nbsprevenue</th>
      <th scope="col">-</th>
      <th scope="col">expense</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  
   @foreach($data as $ledger)
  <tbody>
   
    <tr>
      <th scope="row">{{$ledger->id}}</th>
      <td>{{$ledger->cash}}</td>
      <td>&nbsp&nbsp&nbsp&nbsp+</td>
      <td>&nbsp&nbsp&nbsp&nbsp{{$ledger->receivable}}</td>
      <td>+</td>
      <td>&nbsp&nbsp&nbsp&nbsp{{$ledger->equipment}}</td>
      <td>=</td>
      <td>&nbsp&nbsp&nbsp&nbsp{{$ledger->note_pyb}}</td>
      <td>+</td>
      <td>{{$ledger->acc_pyb}}</td>
      <td>+</td>
      <td>{{$ledger->capital}}</td>
      <td>-</td>
      <td>&nbsp&nbsp&nbsp&nbsp{{$ledger->drawing}}</td>
      <td>+</td>
      <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$ledger->revenue}}</td>
      <td>-</td>
      <td>&nbsp&nbsp&nbsp&nbsp{{$ledger->expense}}</td>
      <td><a class="nav-item nav-link" href={{"delete/".$ledger->id}}>Delete</a></td>
            <td><a class="nav-item nav-link" href={{"edit/".$ledger->id}}>Edit</a></td>

    </tr>
    

  </tbody>
@endforeach  
</table>

    </div>
    <div class="col-sm">
	      <table class="table">
   <thead>
    <tr>
      <th scope="col">Asset</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>      
      <th scope="col"></th>
      <th scope="col">=</th>
      <th scope="col"></th>
      <th scope="col">Liabilities</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">   + </th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Owner's equity</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
   <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">{{$dataa}}</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">=</th>
      <th scope="col"></th>      
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"><td>{{$dataaa}}</td></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      



    </tr>
  </thead>
  
   
    
</table>      
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
