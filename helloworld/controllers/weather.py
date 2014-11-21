import logging

from pylons import request, response, session, tmpl_context as c, url
from pylons.controllers.util import abort, redirect

from helloworld.lib.base import BaseController, render

log = logging.getLogger(__name__)

class WeatherController(BaseController):

    def index(self):
        # Return a rendered template
        #return render('/weather.mako')
        # or, return a string
        return 'Hello World'

    def weather(self,temp):
        if int(weather) > 7 and int(weather) < 20:
    		return "looks like its spring"
    	elif int(weather) <= 8:
    		return "Winter is coming"
    	elif int(weather) >20:
    		return "Summertime"
