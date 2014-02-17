<?php

use Acme\Repos\Product\ProductRepository;

class ProductsController extends \BaseController {

    /**
     * @var ProductRepository
     */
    private $productRepo;

    /**
     * @param ProductRepository $productRepo
     */
    function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

	/**
	 * Display a single product
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->productRepo->getById($id);
	}

}