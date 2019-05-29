#!/bin/bash

awk -F: '{print " Nombre: "$1 "\n Home:" $6  "\n Shell:" $7  "\n Espacio Ocupado: ";system("du -sh "$6" 2> /dev/null")}' /etc/passwd |txt2html > users.html

