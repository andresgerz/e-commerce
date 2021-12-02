<?php 
namespace Ecommerce\ApiModule\Api;
 
 
interface ApiInterface {


	/**
	 * GET for Post api
	 * @param string $name
	 * @return string
	 */
	
	public function getPost($name);
}