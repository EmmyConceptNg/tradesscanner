<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ThriveCartController extends Controller
{
    public function ListProducts()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('THRIVE_API')
        ])->get('https://thrivecart.com/api/external/products');

        return $response->collect();
    }
    public function getProduct($id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('THRIVE_API')
        ])->get('https://thrivecart.com/api/external/products/' . $id);

        return $response->collect();
    }
    public function getProductPrice($id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('THRIVE_API')
        ])->get('https://thrivecart.com/api/external/products/' . $id . '/pricing_options');

        return $response->collect();
    }
    public function resumeSubscription(Request $request)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('THRIVE_API')
        ])->post('https://thrivecart.com/api/external/resumeSubscription', [
            'order_id' => $request->orderId,
            'subscription_id' => $request->subscriptionId
        ]);

        return $response->collect();
    }
    public function pauseSubscription(Request $request)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('THRIVE_API')
        ])->post('https://thrivecart.com/api/external/pauseSubscription', [
            'order_id' => $request->orderId,
            'subscription_id' => $request->subscriptionId
        ]);

        return $response->collect();
    }
    public function cancelSubscription(Request $request)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('THRIVE_API')
        ])->post('https://thrivecart.com/api/external/cancelSubscription', [
            'order_id' => $request->orderId,
            'subscription_id' => $request->subscriptionId
        ]);

        return $response->collect();
    }
    public function listUpSells()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('THRIVE_API')
        ])->get('https://thrivecart.com/api/external/upsells');

        return $response->collect();
    }
    public function getUpSell($id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('THRIVE_API')
        ])->get('https://thrivecart.com/api/external/upsells/' . $id);

        return $response->collect();
    }
    public function getUpSellDetails($id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('THRIVE_API')
        ])->get('https://thrivecart.com/api/external/upsells/' . $id . '/pricing_options');

        return $response->collect();
    }
    public function listDownSells()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('THRIVE_API')
        ])->get('https://thrivecart.com/api/external/downsells');

        return $response->collect();
    }
    public function getDownSell($id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('THRIVE_API')
        ])->get('https://thrivecart.com/api/external/downsells/' . $id);

        return $response->collect();
    }
    public function getDownSellDetails($id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('THRIVE_API')
        ])->get('https://thrivecart.com/api/external/upsells/' . $id . '/pricing_options');

        return $response->collect();
    }
}
