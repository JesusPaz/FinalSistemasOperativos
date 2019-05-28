Get-WmiObject win32_logicaldisk -ComputerName localhost -Filter "drivetype=3" |select @{n="Dispositivo";e="DeviceId"},@{n="Tamano / GB";e={[math]::truncate($_.size / 1GB)}} , @{n="Tamano Libre / GB";e={[math]::truncate($_.freespace / 1GB)}} |ConvertTo-Html -Head "<nav class='navbar navbar-dark bg-dark mb-4'>
<a href='index.php' class='navbar-brand'>Gestion Windows y Linux</a>
</nav>   <style>
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 80%;
    background-color: #3D3331;
    color: white;
    text-align: center;
}
table {
    width: 50%;
    border: 1px solid #000;
 }
 th, td {
    width: 25%;
    text-align: center;
    vertical-align: top;
    border: 1px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;
 }
 caption {
    padding: 0.3em;
    color: #fff;
     background: #000;
 }
 th {
    background: #eee;
 }

</style>  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>" -Body "<h1>Tabla de discos conectados</h1><br>"  | Out-File disk.htm