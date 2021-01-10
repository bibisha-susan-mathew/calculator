<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDITION</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">ADDITION</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="subtraction.php">SUBTRACTION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="multiply.php">MULTIPLICATION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="division.php">DIVISION</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    <H3>ADDITION</H3>
    <table class="table table-borderless">
        <tr>
           <td>NUMBER 1</td>
           <td><input  id="num1" type="text" class="form-control"></td>
       </tr>
       <tr>
           <td>NUMBER 2</td>
           <td><input id="num2" type="text" class="form-control"></td>
           
       </tr>
       <tr>
           <td></td>
           
           <td><Button onclick="add()" class="btn btn-success">ADD</Button></td>
       </tr>
       <tr>
           <td>RESULT</td>
          <td><p id="result" type="text" class="form-control"></p></td>
       </tr>
    
    </div></div></div>
    </table>
    <script>
      function add(){
          
          var getN1=parseInt(document.getElementById("num1").value)
           var getN2=parseInt(document.getElementById("num2").value)
         var res=getN1+getN2

         document.getElementById("result").innerHTML=res

      }
    </script>
</body>
</html>