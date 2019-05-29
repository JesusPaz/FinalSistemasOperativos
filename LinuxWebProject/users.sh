#!/bin/bash

awk -F: '{print system("du -sh "$6" 2> /dev/null"), " Espacio Ocupado: \t\n" $7"\n Shell: \t\n" $6  "\n Home:\t\n"$1 "\n Nombre:\t\n\n"}' /etc/passwd |txt2html > users.html

