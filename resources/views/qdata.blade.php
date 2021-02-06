    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Ledger Management</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#">Ledger</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/client">client <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="more">More</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>
</nav>
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