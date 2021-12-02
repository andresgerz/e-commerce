<?php 
namespace Ecommerce\ApiModule\Model;
 
 
class Api {

	/**
	 * {@inheritdoc}
	 */
	public function getPost($name)
	{
		return json_encode(['Name' => $name]) ;
	}
}
