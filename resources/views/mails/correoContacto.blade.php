<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Web</title>
</head>
<body style="

background: linear-gradient(to bottom, black, turquoise);
font-family: Arial, sans-serif;
margin: 0px;
display: flex ;
justify-content: center;
align-items: center;
">

<div >

<div style="
display: grid;
justify-items: center;
margin: 20px;
">

<div style="
border: 3px solid turquoise;
box-shadow: 0px 0px 15px black;
padding: 20px;  
background-color: rgba(0, 0, 0, 0.7);
text-align: center;
color: white;
border-radius: 15px;
margin-top: 50px;
padding-inline: 50px;
max-width: 400px;">

<h1 style="text-decoration: underline 1px solid;">Nueva oportunidad!</h1>
<h3>Alguien desea comunicarse contigo!</h3>

</div>

<br>

<div style="
border: 3px solid white;
box-shadow: 0px 0px 15px black;
padding: 20px;  
background-color: rgba(0, 0, 0, 0.7);
text-align: left;
color: white;
border-radius: 15px;
margin-top: 10px;
padding-inline: 50px;
max-width: 600px;">

<h3>{{ $datosCorreo['nombreRemitente'] }}</h3>
<hr>
<h4>{{ $datosCorreo['asunto'] }}</h4>
<p style="color:lightgrey;
padding-inline: 30px;
padding-block: 20px;
">{{ $datosCorreo['mensaje'] }}</p>
<p style="
text-align: center;
color:burlywood;
">Muchas Gracias!</p>

</div>

<br>
<div
style="
display: flex;
gap:40px;
margin-top: 10px;
"
>
<div style="
border: 3px solid turquoise;
box-shadow: 0px 0px 15px black;
padding: 20px;  
background-color: rgba(0, 0, 0, 0.7);
text-align: center;
color: white;
border-radius: 15px;
margin-top: 10px;
padding-inline: 50px;
max-width: 600px;">
{{ $datosCorreo['correo'] }}
</div>

<div style="
border: 3px solid turquoise;
box-shadow: 0px 0px 15px black;
padding: 20px;  
background-color: rgba(0, 0, 0, 0.7);
text-align: center;
color: white;
border-radius: 15px;
margin-top: 10px;
padding-inline: 50px;
max-width: 600px;">
{{ $datosCorreo['fechaEmision'] }}
</div>

</div></div>
</div>
</body>
</html>