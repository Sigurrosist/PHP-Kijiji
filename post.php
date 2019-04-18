<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">

    <title>KIJIJI</title>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .etc-login-form {
        color: #919191;
        padding: 10px 20px;
      }
      .etc-login-form p {
        margin-bottom: 5px;
      }
      .colorBox>div
      {
          width:30px;
          height:30px;
          background:url(/pics/color.png)

      }

          #contentWrapper{
              background:#fff;
              padding:10px 10px 0;
              box-shadow:3px 2px 5px rgba(0,0,0,.3);
              margin:20px 0}


      .btn-gray{
          background-color:#ccc;
          background-image:-moz-linear-gradient(#f4f4f4,#bcbcbc);
          background-image:-webkit-linear-gradient(#f4f4f4,#bcbcbc);
          background-image:-ms-linear-gradient(#f4f4f4,#bcbcbc);
          border-color:#aaa;
          color:#000}


      .btn-file{
          position:relative
      }


      .btn-file input[type=file]{
          position:absolute;
          top:0;
          right:0;
          min-width:100%;
          min-height:100%;
          font-size:999px;
          text-align:right;
          filter:alpha(opacity=0);
          opacity:0;
          cursor:inherit;
          display:block}input[readonly]{background-color:#fff!important;cursor:text!important}


    </style>
    <script type="text/javascript">

  // List files to be uploaded.

  function myFunction(){
  var x = document.getElementById("myFile");
  var txt = "";
  if ('files' in x) {
      if (x.files.length == 0) {
          txt = "Select one or more files.";
      } else {
          for (var i = 0; i < x.files.length; i++) {
              txt += "<br><strong>" + (i+1) + ". file</strong><br>";
              var file = x.files[i];
              if ('name' in file) {
                  txt += "name: " + file.name + "<br>";
              }
              if ('size' in file) {
                  txt += "size: " + file.size + " bytes <br>";
              }
          }
      }
  }
  else {
      if (x.value == "") {
          txt += "Select one or more files.";
      } else {
          txt += "The files property is not supported by your browser!";
          txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead.
      }
  }
  document.getElementById("demo").innerHTML = txt;
  }


  //Onsubmit function

  var fn = function(e) {
    if (!/zmore/.test(e.target.className)) { $('#dmore').hide(); }
  }
  document.addEventListener('click', fn);
  document.addEventListener('touchstart', fn);
    </script>
  </head>
  <body onload="myFunction()">


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">KIJIJI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registration.html">Registration</a>
      </li>
    </ul>
  </div>
</nav>


<div class="col-md-9">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 border-right">
                    <h4>Add New Post</h4>
                </div>
                <div class="col-md-7">
                    <button type="button" class="btn btn-sm btn-primary">Add New</button>
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <form>
                          <div class="form-group row">
                            <label for="text" class="col-12 col-form-label">Enter Title here</label>
                            <div class="col-12">
                              <input id="text" name="text" placeholder="Enter Title here" class="form-control here" required="required" type="text">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="textarea" class="col-12 col-form-label">Visual Editor</label>
                            <div class="col-12">
                              <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control"></textarea>
                            </div>
                          </div>
                        </form>
                </div>
                <div class="col-md-4 ">
                  <br>
                  <input type="file" id="myFile" multiple size="50" onchange="myFunction()">

                 <p id="demo"></p>
                 <button class="btn btn-gray" type="submit">Ok</button>




              <p><strong>Tip:</strong> Use the Control or the Shift key to select multiple files.</p>




                </div>

            </div>
        </div>
    </div>
</div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
