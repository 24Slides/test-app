<?php

namespace App\Http\Controllers;

use App\Actions\Credit\AddAction;
use App\Actions\Credit\SubtractAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function add(Request $request, AddAction $action): JsonResponse
    {
        return $action($request);
    }

    /**
     * Note: pay for order
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function subtract(Request $request, SubtractAction $action): JsonResponse
    {
        return $action($request);
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
