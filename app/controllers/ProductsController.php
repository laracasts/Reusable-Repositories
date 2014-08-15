<?php

use Acme\Repos\Product\ProductRepositoryInterface;

class ProductsController extends \BaseController
{

    /**
     * @var ProductRepositoryInterface
     */
    private $productRepo;

    /**
     * @param ProductRepositoryInterface $productRepo
     */
    function __construct(ProductRepositoryInterface $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    /**
     * Display a single product
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        return $this->productRepo->getById($id);
    }

}
