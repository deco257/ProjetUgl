<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="center">
        <label for="click" class="clickon">click me</label>
        <input type="checkbox" id="click">
        <div class="contenu">
            <header>MODAL POP UP</header>
            <p> hello i'im derick dev</p>
        </div>
    </div>
</body>
<style>
    #click{
        display: none;
    }
    .contenu{
        opacity: 0;
        visibility: hidden;
        width: 200px;
        border: 1px solid #f1f1f1;
        box-shadow: 2px 2px 0(rgba(0,0,0,0.5));
    }
    #click:checked ~.contenu{

        opacity: 1;
        visibility: visible;
    }
    .clickon{
margin-left: 500px;
background-color: green;
color: white;
    }
    header{
        background-color: orange;
    }
</style>
</html>