from pyramid.view import view_config


@view_config(route_name='home', renderer='templates/mytemplate.pt')
@view_config(route_name='order', renderer='templates/order.pt')
@view_config(route_name='signin', renderer='templates/signin.pt')
@view_config(route_name='about', renderer='templates/about.pt')
@view_config(route_name='hosts', renderer='templates/hosts.pt')
@view_config(route_name='users', renderer='templates/users.pt')
@view_config(route_name='footer', renderer='templates/footer.pt')
@view_config(route_name='success', renderer='templates/success.pt')
@view_config(route_name='checkout', renderer='templates/checkout.pt')
@view_config(route_name='edithost', renderer='templates/edithost.pt')
@view_config(route_name='editinfo', renderer='templates/editinfo.pt')
@view_config(route_name='recovery', renderer='templates/recovery.pt')
@view_config(route_name='settings', renderer='templates/settings.pt')
@view_config(route_name='volunteer', renderer='templates/volunteer.pt')

@view_config(route_name='changepass', renderer='templates/changepass.pt')
@view_config(route_name='infosuccess', renderer='templates/infosuccess.pt')
@view_config(route_name='ordersuccess', renderer='templates/ordersuccess.pt')


def my_view(request):
    return {'project': 'MyProject'}
