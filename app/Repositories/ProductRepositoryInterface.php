<?php

namespace App\Repositories;

interface ProductRepositoryInterface
{
    public function all();
    public function find($id);
    public function store();
    public function delete($id);
}
