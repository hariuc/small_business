<?php

namespace App\Application\Core\Interfaces;

use Illuminate\Http\Request;

interface RepositoryInterface
{
    public function index(Request $request);
    public function show(string $id);
}
