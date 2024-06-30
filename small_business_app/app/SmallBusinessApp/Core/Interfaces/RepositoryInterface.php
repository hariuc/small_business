<?php

namespace App\SmallBusinessApp\Core\Interfaces;

use Illuminate\Http\Request;

interface RepositoryInterface
{
    public function index(Request $request);
    public function show(string $id);
}
