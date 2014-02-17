<?php namespace Acme\Repos\Product;

interface ProductRepository {

    /**
     * Fetch a record by id
     *
     * @param $id
     */
    public function getById($id);

} 