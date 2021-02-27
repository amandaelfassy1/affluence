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
    <img src="{{ asset('confirmation.png') }}" alt="">
    <h5>Confirmez votre réservation en cliquant sur le bouton ci-dessous</h5>
    </div>        
    <div class="content">
        <a href="{{ route('confirmation', $token) }}">
            <button class="confirmation">Confirmer ma réservation</button>
        </a>
        <h4>Récapitulatif de votre demande</h4>
        <ul>
            <li><strong>Date :</strong> {{ $date }}  </li>
            <li><strong>Heure :</strong> {{ $time }}</li>
        </ul>
        <a href="{{ route('annulation_token', $token) }}">
            <button class="annulation">Annuler ma réservation</button>
        </a>
    </div>
</body>
<style>
    .confirmation{
        background-color: #05B360;
        border-radius : 5%;
        color:white;
        border: none;
        padding : 8px;
        font-size : 14px;
        font-weight: bold;
    }
    .annulation{
        background-color: red;
        border-radius : 5%;
        color:white;
        border: none;
        padding : 8px;
        font-size : 14px;
        font-weight: bold;
    }
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
        width: 20%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        padding-top: 10px;
    }
    h5{
        padding-bottom:7px;
    }
    h4{
        background-color : #D6F0FB;
        color : #023873;
        font-weight : bold;
        padding : 7px;
    }
    ul{
      list-style:none;  
    }
    li{
        padding : 7px;
    }
</style>
</html>
