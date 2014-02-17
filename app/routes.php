<?php

// Don't forget to bind your repo interface to an implementation
// Service providers are helpful for this task. For this demo, though,
// we'll add it here

App::bind('Acme\Repos\Product\ProductRepository', 'Acme\Repos\Product\DbProductRepository');



