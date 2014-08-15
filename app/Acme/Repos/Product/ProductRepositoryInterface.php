<?php namespace Acme\Repos\Product;

interface ProductRepositoryInterface {

    /**
     * Fetch a record by id
     *
     * @param $id
     */
    public function getById($id);

} 
