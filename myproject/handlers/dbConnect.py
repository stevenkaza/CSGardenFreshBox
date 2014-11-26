from pyramid.response import Response
from pyramid_handlers import action
class dbConnect(object):
    __autoexpose__ = None

    def __init__(self, request):
        self.request = request

    def index(self,request):
    	session = request.session
    	email = session['email']

        return Response(email)

    def bye(self):
        return {}
