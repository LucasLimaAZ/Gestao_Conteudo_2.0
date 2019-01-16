<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/slider.js"></script>
    <title>Montando Slider</title>
</head>
<body>
    <div class="container"> 
        <img src="../../img/disite_logo.png" style="margin-bottom:-160px;margin-left:30px;"> 
        <form id="contact" action="Insert.php" method="post" enctype="multipart/form-data">
            <h3>Slider Maker DISITE</h3>
            <h4>Um produto <a href="http://dom.com.vc/">DOM</a></h4>
            <fieldset>
                <input placeholder="Slogan" id="slogan" type="text" tabindex="1" required autofocus name="slogan">
            </fieldset>
            <fieldset>
                <input placeholder="Sub Slogan" id="subslogan" type="text" tabindex="1" required autofocus name="subslogan">
            </fieldset>
            <fieldset>
                <input type="file" name="imagem">
            </fieldset>
            <fieldset>
                <input type="radio" name="extensao" value=".png"> PNG<br>
                <input type="radio" name="extensao" value=".jpg"> JPG<br>
                <input type="radio" name="extensao" value=".gif"> GIF
            </fieldset>
            <fieldset>
                <a onclick="cadastra()"><input type="button" value="cadastrar" class="btn"></button></a>
            </fieldset>
            <fieldset>
                <input name="submit" value="Prosseguir" type="submit" id="contact-submit" data-submit="...Enviando" class="btn">
            </fieldset>
            <table id="slogans">
                <tr>
                    <td style="margin-right:200px;background-color:red;"></td>
                </tr>
            <table>
        </form>
    </div>
</body>
</html>