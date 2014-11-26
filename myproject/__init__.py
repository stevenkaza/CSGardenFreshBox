from pyramid.config import Configurator
from pyramid.session import SignedCookieSessionFactory

my_session_factory = SignedCookieSessionFactory('itsaseekreet')

def main(global_config, **settings):
    """ This function returns a Pyramid WSGI application.
    """
    config = Configurator(settings=settings)

   
    config.set_session_factory(my_session_factory)
    config.include('pyramid_chameleon')
    config.include('pyramid_handlers')
    config.add_handler('dbConnect', '/dbConnect/index',
                   handler='myproject.dbConnect', action='index')
    config.add_static_view('static', 'static', cache_max_age=3600)
    config.add_route('home', '/')

    config.add_route('order','/order.php')
    config.add_route('signin','/signin.php')
    #config.add_handler('dbConnect', '/dbConnect/index', action='index', handler='myproject.controllers.dbConnect')
    config.add_route('about','/about.php')

    config.add_route('hosts','/hosts.php')

    config.add_route('users','/users.php')

    config.add_route('footer','/footer.php')

    config.add_route('success','/success.php')

    config.add_route('checkout','/checkout.php')

    config.add_route('edithost','/edithost.php')

    config.add_route('editinfo','/editinfo.php')

    config.add_route('recovery','/recovery.php')

    config.add_route('settings','/settings.php')


    config.add_route('volunteer','/volunteer.php')
    config.add_route('changepass','/changepass.php')


    config.add_route('infosuccess','/infosuccess.php')

    config.add_route('ordersuccess','/ordersuccess.php')

 

    config.scan()
    return config.make_wsgi_app()
