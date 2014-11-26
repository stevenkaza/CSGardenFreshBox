from pyramid_handlers import action

class dbConnect(object):
    __autoexpose__ = None

    def __init__(self, request):
        self.request = request

    @action()
    def index(self,request):
    	
        return Response('Hello world!')

    def bye(self):
        return {}
