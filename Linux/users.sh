#!/bin/bash

awk -F: '{print " Nombre: "$5 "\n Home:" $6  "\n Shell:" $7  "\n Espacio Ocupado:  \n"}' /etc/passwd | txt2html > users.html
