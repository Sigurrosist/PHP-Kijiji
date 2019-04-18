<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
      .container{
        margin: auto;
         width: 33%;
          padding: 10px;
          background-color:#E8E8E8;
          border-radius: 25px;
       }


    </style>

  </head>
  <body>


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
        <a class="nav-link" href="#">Go back to the ad</a>
      </li>
    </ul>
  </div>
</nav>

<br>

<div class="container">
	<div class="row">
		<div class="panel panel-default">
        <div class="panel-heading clearfix">
          <h3 class="panel-title">&nbsp;&nbsp;Send a message</h3>
        </div>
        <div class="panel-body">
            <form role="form" class="form-horizontal">
                <div class="form-group">
                  <label class="col-sm-2" for="inputTo">To</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputTo"  readonly="true"></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2" for="inputSubject">Subject</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputSubject" placeholder="Subject"></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2" for="inputBody">Message</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="inputBody" rows="8" data-gramm="true" data-txt_gramm_id="71c8bb8e-8a51-c867-6c4f-5b14b864ac06" data-gramm_id="71c8bb8e-8a51-c867-6c4f-5b14b864ac06" spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 26.6667px; font-size: 14px; transition: none; overflow: auto;  !important;"></textarea>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
                    <div style="z-index: 2; opacity: 1; margin-left: 524px; margin-top: 10px;" class="gr-textarea-btn " data-grammarly-reactid=".3"></div>

                </div>


            </form>
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
