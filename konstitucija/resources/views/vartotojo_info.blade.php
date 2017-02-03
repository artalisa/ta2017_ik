<!DOCTYPE html>
<html lang="en">
    <head>
        <title>registracija</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        .content {
                    text-align: center;
                    vertical-align:bottom;
                    }
        html,body
            {
                vertical-align:bottom;
                font-family: "Comic Sans MS", cursive, sans-serif;
                min-height: 100%;
                background-image: url("square_herb.png");
                background: -moz-linear-gradient(#8F2424, #1F1919); nu cia nesamone tipo tiesiog bandziau

                color: white;
            }
        .title
        {
        font-family: "Raleway", sans-serif;
        }

</style>
        </style>
    </head>
    <body>
                <div class="content">
                <div class="title m-b-md">
                <h2><center><strong> Registracija</strong></center></h2>

                </div>
 
         <form action="store" method="post">

           <br></br>
            <div class="form-group" >
                <div class="col-md-4 col-md-offset-4">
                <label for="vartotojo_vardas" class="col-md-1 control-label">Vardas</label>
                 <input type="text" name="vartotojo_vardas" class="form-control input-md " value="" align="center"><br/>
                </div>
            </div>
            
          
          <div class="form-group" >
          <div class="col-md-4 col-md-offset-4">
          <label class="col-md-1 control-label" for="miestas">Miestas</label>
          <select name="miestas" id="miestas" class="form-control">
            <option value="Vilnius">Vilnius</option>
            <option value="Kaunas">Kaunas</option>
            <option value="Klaipėda">Klaipėda</option>
            <option value="Kiti miestai">Kiti miestai</option>
            </select>
           </div>
           </div>
            
            
            <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>

         <label for=""></label>
            <input type="submit" name="kelti" class="btn btn-success btn-block" value="Registruotis">
 
    <input type="button" class="btn btn-info btn-block" value="Testi be registracijos" onclick="  location.href = '/pradzia';">
</form>
</div>
    </body>

</html>
