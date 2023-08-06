<?php

namespace App\Repositories;

interface ProductRepositoryInterface
{
    public function all();
    public function find($slug);
    public function store();
    public function delete($slug);
}
