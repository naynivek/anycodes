#!/usr/bin/python3
#
# -*- coding: utf-8 -*-
"""
Created on Tue Sep 22 09:08:27 2020

@author: k_matos
"""


from fabric import Connection
import sys

host = sys.argv[1]
com = sys.argv[2]

command = Connection(host,user='root',connect_kwargs={
        "password": "password",
    })
result = command.run(com)
result.stdout.strip()
command.close()
