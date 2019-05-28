<html>
    <head>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <a href="index.html" class="navbar-brand">Gestión Windows y Linux</a>
    </nav>
    </head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <body>
<?PHP
set_time_limit(35);
  echo Shell_Exec ('powershell.exe -executionpolicy bypass -NoProfile -File ".\getProcess.ps1"');
?>

    </body>
</html>