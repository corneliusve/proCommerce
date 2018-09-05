<?php

namespace Statamic\Addons\ProCommerce;

use Statamic\Extend\Tags;

class ProCommerceTags extends Tags
{
    /**
     * The {{ pro_commerce }} tag
     *
     * @return string|array
     */
    public function index()
    {
        //
    }

	public function test()
	{

		$array = [
			[

				'test1' => 'werkt',
				'test2' => 'werkt ook',
				'test3' => 'werkt ook gewoon joh'

			],

			[

				'test1' => 'werkt ook',
				'test2' => 'werkt ',
				'test3' => 'werkt ook gewoon joh'

			]


		];

		return $this->parseLoop($array);

	}

    /**
     * The {{ pro_commerce:example }} tag
     *
     * @return string|array
     */
    public function example()
    {
        //
    }
}
