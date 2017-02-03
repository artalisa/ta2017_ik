<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Klausimai</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        .content {
                    text-align: center;
                    }
        </style>
    </head>
    <body>
                <div class="content">
                <div class="title m-b-md">
                    Klausimu kelimas
                </div>
                Prašau iškart gerai įvesti klausimus, nes paskui reiks atskirai iš db trint jei ne taip suvesi :) 
        <form action="store1" method="post">
        <label for="Klausimas">Klausimas</label>
          <input type="text" name="Klausimas" value=""><br/>

        <label for="Teisingas_ats">Teisingas_ats</label>
            <input type="text" name="Teisingas_ats" value=""><br/>

        <label for="Neteisingas_ats1">Neteisingas_ats1</label>
            <input type="text" name="Neteisingas_ats1" value=""><br/>

        <label for="Neteisingas_ats2">Neteisingas_ats2</label>
            <input type="text" name="Neteisingas_ats2" value=""><br/>

         <label for="Neteisingas_ats3">Neteisingas_ats3</label>
            <input type="text" name="Neteisingas_ats3" value=""><br/>


            <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>

         <label for=""></label>
            <input type="submit" name="kelti" value="kelti">


    </body>

</html>
