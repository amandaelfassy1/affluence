<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <p> divingAffluence</p>
        <hr>
    </header>
    
    <div class="container">
    <img src="{{ asset('sad-smiley.png') }}" alt="">
    </div>        
    <div class="content">
        <h4>Votre réservation a bien été annulée.</h4>
        <strong>N'hesitez pas à revenir sur notre site pour une nouvelle réservation ! </strong>
        <br><br>
        L'équipe divingAffluence.
    </div>
</body>
<style>
  
    body{
        font: 1.2em "Fira Sans", sans-serif;
    }
    .container{
        text-align:center;
        color : white;
        background-color: rgb(37, 150, 190);
    }
    .content {
        text-align : center;
    }
    img {
        width: 15%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        padding: 10px;
    }
   
    h4{
        background-color : #D6F0FB;
        color : #023873;
        font-weight : bold;
        padding : 7px;
    }
</style>
</html>
