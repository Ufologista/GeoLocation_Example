<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    
    </head>
    <body>
        <?php
        $ip = "2804:14c:4e8:85b5:947:4098:1534:e9f9"; //Ip de teste, usar $_SERVER['REMOTE_ADDR']
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        $location = explode(",", $details->loc);
	?>

  <div class="container">          
      <table class="table">
    <thead>
      <tr>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>País</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $location[0] ?></td>
        <td><?php echo $location[1] ?></td>
        <td><?php echo $details->city ?></td>
        <td><?php echo $details->region ?></td>
        <td><?php echo $details->country ?></td>
      </tr>
    </tbody>
  </table>
</div>
       
    </body>
</html>
