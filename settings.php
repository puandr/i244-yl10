 <?php
$text_bg="#fff";
if (isset($_POST['bg'])) 
    $text_bg = htmlspecialchars($_POST['bg']); 

$text_color="#fff";
if (isset($_POST['tc'])) 
    $text_color = htmlspecialchars($_POST['tc']); 

$border_width =2;
if (isset($_POST['bw']) ) 
    $border_width = htmlspecialchars($_POST['bw']); 
$border_style =" solid ";
if (isset($_POST['bs']) ) 
    $border_style = htmlspecialchars($_POST['bs']); 
$border_color =" black ";
if (isset($_POST['bc']) ) 
    $border_color = htmlspecialchars($_POST['bc']); 
$border=$border_color." ".$border_style." ".$border_width; 

$border_radius =10;
if (isset($_POST['br']) ) 
    $border_radius = htmlspecialchars($_POST['br']);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Praktikum  - Ülesanne</title>

    <style type="text/css">

        #text { background: <?php echo $text_bg; ?>;
            color: <?php echo $text_color; ?>;
            border:  <?php echo $border; ?>px;
            border-radius: <?php echo $border_radius; ?>px;
            padding:10px;
            min-height:100px;
            max-width: 400px;
        }

    </style>

</head>
<body>

    <?php 

    $stiilid=array("solid", "dashed", "dotted", "none", "double");

    ?>

    <div id="text"> <?php if (isset($_POST['text'])) echo htmlspecialchars($_POST['text']); ?></div>

    <hr/>
    <form method="POST" action="?">
        <textarea name="text" placeholder="kommentaari tekst"></textarea>
        <br/>
        <input type="color" name="bg" id="bg" > 
        <label for="bg">Taustavärvus</label>
        <br/>
        <input type="color" name="tc" id="tc" > 
        <label for="tc">Tekstivärvus</label>
        <br/>
        <fieldset>
            <legend>Piirjoon</legend>
            <input type="number" min="0" max="20" step="1" name="bw" id="bw" >
            <label>Piirjoone laius (0-20px)</label>
            <br/>
            <select name="bs">
                <?php foreach($stiilid as $stiil):?>
                    <option><?php echo $stiil; ?></option>
                <?php endforeach; ?>
            </select>
            <br/>
            <input type="color" name="bc" id="bc" > 
            <label for="bc">Piirjoone värvus</label>
            <br/>
            <input type="number" min="0" max="100" step="1" name="br" id="br" >
            <label>Piirjoone nurga raadius (0-100px)</label>
            <br/>
        </fieldset>
        <input type="submit" value="esita" />
    </form>

</body>
</html> 