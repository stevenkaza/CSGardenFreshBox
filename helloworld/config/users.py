def userid(self, userid):

    c.userid = userid
    if request.method == 'GET':
    return "getting: " + userid