from helloworld.tests import *

class TestMoodController(TestController):

    def test_index(self):
        response = self.app.get(url(controller='mood', action='index'))
        # Test response...
