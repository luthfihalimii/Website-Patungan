<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\FrontService;

class FrontController extends Controller
{
    protected $frontService;

    public function __construct(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }

    public function index()
    {
        $data = $this->frontService->getFrontPageData();
        return view('front.index', $data);
    }

    public function details(Product $product)
    {
        $tax_percent = 11.0;
        $tax_mult = $tax_percent / 100;
        $tax = $product->price_per_person * $tax_mult;
        $total_price = $product->price_per_person + $tax;
        return view('front.details', compact('product', 'tax_percent', 'tax', 'total_price'));
    }
}
