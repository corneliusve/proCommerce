<?php

namespace Statamic\Addons\ProCommerce;

use Statamic\Extend\Controller;
use Statamic\Data\Entries\EntryFactory;
use Statamic\API\Entry;
use Statamic\API\Collection;
use Statamic\API\Page;
use Symfony\Component\Yaml\Yaml;

class ProCommerceController extends Controller
{
    /**
     * Maps to your route definition in routes.yaml
     *
     * @return mixed
     */
    public function index()
    {

		$configuration = false;

		if(Collection::handleExists('pro_commerce'))
		{

			$configuration = true;

		}


        return $this->view('index')->with('config', $configuration);

    }

	public function startup()
	{

		$collection = Collection::create('pro_commerce');
		$collection->data([

			'title' => 'Pro Commerce',
			'fieldset' => 'pro_commerce',
			'template' => 'home'

		]);

		$collection->save();

		$data = array(

			'title' => 'Pro Commerce Fieldset',
			'sections' => array(
				'content' => array(
					'display' => 'Content',
					'fields' => array(
						'product_description' => array(
							'type' => 'markdown',
							'display' => 'Description',
						),
					)
				)
			)
		);

		$fieldset = Yaml::dump($data);

		file_put_contents('site/settings/fieldsets/pro_commerce.yaml', $fieldset);

		return redirect()->back();

	}

	public function products()
	{

		/*
			$entry = Entry::create('product-1')
			->collection('blog')
			->with(['title' => 'my first post'])
			->published(false)
			->date()
			->save();
		*/

		$collection = Entry::whereCollection('pro_commerce')->values()->all();

		foreach ($collection as $item) {

			//dd($item->original);

		}

		return $this->view('products')->with('products', $collection);

	}
}
