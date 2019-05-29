#!/bin/bash

sudo cp /etc/passwd /home/jesuspaz/Escritorio/FinalSistemasOperativos/ScriptsLinux/users_cp

sudo chown jesuspaz:jesuspaz users_cp

echo "Nombre\tHome\tShell\tEspacio Ocupado" > out_users.txt

awk -F: '{print $1"\t"$6"\t"$7"\t", system("du -sh "$6" 2> /dev/null")}' /etc/passwd >> out_users.txt

cat out_users.txt | txt2html > users.html

#awk '{system("du -sh "$2" 2> /dev/null")}' out_users.txt > out_tam.txt

#join -1 2 -2 2 -t \t out_users.txt out_tam.txt
