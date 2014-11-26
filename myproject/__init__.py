from pyramid.config import Configurator


def main(global_config, **settings):
    """ This function returns a Pyramid WSGI application.
    """
    config = Configurator(settings=settings)
    config.include('pyramid_chameleon')
    config.add_static_view('static', 'static', cache_max_age=3600)
    config.add_route('order','/order.php')
    config.add_route('signin','/siginin.php')

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

 

    config.add_route('home', '/')
    config.scan()
    return config.make_wsgi_app()
