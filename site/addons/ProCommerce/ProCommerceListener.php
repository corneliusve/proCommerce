<?php

namespace Statamic\Addons\ProCommerce;

use Statamic\API\Nav;
use Statamic\Extend\Listener;

class ProCommerceListener extends Listener
{
    /**
     * The events to be listened for, and the methods to call.
     *
     * @var array
     */
    public $events = [

		'cp.nav.created' => 'addNavItems'

	];


	public function addNavItems($nav)
    {

		// Create the first level navigation item
        // Note: by using route('store'), it assumes you've set up a route named 'store'.
        $ProCommerce = Nav::item('Pro Commerce')->route('index')->icon('shopping-cart');

        // Add second level navigation items to it
        $ProCommerce->add(function ($item) {
            $item->add(Nav::item('Products')->route('index.products'));
        });

        // Finally, add our first level navigation item
        // to the navigation under the 'tools' section.
        $nav->addTo('tools', $ProCommerce);

	}

}
