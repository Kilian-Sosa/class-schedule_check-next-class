<!DOCTYPE html>
<html lang="es">
  <meta http-equiv="refresh" content="1">
  <head>
    <title>Horario 2ºDAW - Mañana</title>
  </head>
  <body>
    <link rel="stylesheet" href="styles.css">
    <?php include 'data.php'; include 'functions.php'; ?>
    <h1>Ahora en la clase de 2º DAW - Mañana toca:</h1>
    <br/>
    <?php findCurrentSubject();?>
    
    <h2 style="padding-top: 35px">Consultar Horario Completo</h2>
    <form style="padding-top: 35px" action="ut1.4-2.php" id="form" method="POST">
      <input name="submit" id="img" type="image" src="schedule_img.png" alt="Consultar Horario completo">
    </form>  
  </body>
</html>