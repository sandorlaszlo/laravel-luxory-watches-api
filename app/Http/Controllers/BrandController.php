<?php

namespace App\Http\Controllers;

use App\Http\Resources\WatchResource;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function watchesOfBrand(Brand $brand)
    {
        return WatchResource::collection($brand->watches);
    }
}
