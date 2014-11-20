import logging

from pylons import request, response, session, tmpl_context as c, url
from pylons.controllers.util import abort, redirect

from helloworld.lib.base import BaseController, render

log = logging.getLogger(__name__)

class MoodController(BaseController):

    def index(self):
        # Return a rendered template
        #return render('/mood.mako')
        # or, return a string
        return 'Hello World'
    def mood(self,mood):
    	if mood == 'Happy':
    		return "Glad to hear you are happy today"
    	elif mood == "Sad" or mood == 'sad':
    		return "Cheer up Buttercup"

