<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function add(Request $request): JsonResponse
    {
        return response()->json('');
    }

    /**
     * Note: pay for order
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function subtract(Request $request): JsonResponse
    {
        return response()->json('');
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function refund(Request $request): JsonResponse
    {
        return response()->json('');
    }
}
