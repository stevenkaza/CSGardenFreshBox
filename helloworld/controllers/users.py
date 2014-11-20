import logging
import json
import requests
import urllib2
from pylons import request, response, session, tmpl_context as c, url
from pylons.controllers.util import abort, redirect
from xml.etree import ElementTree

from helloworld.lib.base import BaseController, render

log = logging.getLogger(__name__)

class UsersController(BaseController):
    def index(self):
        return "Hello World"

    def userid(self, userid):
        c.userid = userid
        bandName = str(userid)
        url = 'http://musicbrainz.org/ws/2/artist?query='+bandName+'&limit=1&offset=0'

        if request.method == 'GET':
            r = requests.get(url)

            tree = ElementTree.fromstring(r.content)
            #req = urllib2.Request(url)
            #resp = urllib2.urlopen(req)

            return r.text
            