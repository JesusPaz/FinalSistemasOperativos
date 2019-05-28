Get-WmiObject win32_logicaldisk -ComputerName localhost -Filter "drivetype=3"|select @{n="Dispositivo";e="DeviceId"},@{n="Tama�o / GB";e={[math]::truncate($_.size / 1GB)}} , @{n="Tama�o Libre / GB";e={[math]::truncate($_.freespace / 1GB)}} 