import MySQLdb
import logging
import json
import simplejson
from pprint import pprint

from pylons import request, response, session, tmpl_context as c, url
from pylons.controllers.util import abort, redirect
from helloworld.lib.base import BaseController, render

log = logging.getLogger(__name__)

class SignupController(BaseController):


    def userid(self, userid):
        c.userid = userid   
        if request.method == 'POST':
            # first check to make sure the username doesn't already exist 
            data = simplejson.loads(userid)
            username = data["username"]
            password = data["password"]


            db = MySQLdb.connect(host="dursley.socs.uoguelph.ca", # our host, do not modify
		                     user="skazavch", # your username (same as in lab)
		                     passwd="0761977", # your password (initially your student id number)
		                     db="skazavch") # name of the data base, do not modify
            cur = db.cursor()
            newCur = db.cursor()
            #spliting the user and pass by a space

            # lets check to see if the username exists or not 



            query = "SELECT * FROM users WHERE username=\'"+ username + "\';"
            cur.execute(query)
            if cur.fetchone(): # if the username exists, return exists string to let the user know that they need to enter a unique username
                return "exists"
            query = ""
            newquery = "INSERT INTO users (username,password) VALUES (\'"+username + "\', \'"+ password + "\');"


            newCur.execute(newquery)
            db.commit()
            return "Success!"



            cur.close()
            newCur.close()
            db.close()

 
# Code goes here
 
