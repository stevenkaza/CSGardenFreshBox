from helloworld.tests import *

class TestWeatherController(TestController):

    def test_index(self):
        response = self.app.get(url(controller='weather', action='index'))
        # Test response...
