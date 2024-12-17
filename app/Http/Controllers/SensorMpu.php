<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\mpu;

class SensorMpu extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sensor= mpu::all();
        return response()->json($sensor);;
    }
    public function fetchData(Request $request)
    {
        mpu::create(['value'=>$request->value,'status'=>$request->status,]);

        return response()->json([
            'message' => 'succes created',
        ],201);
    }
    public function getLatestData()
    {
        // Fetch the latest data, you can customize the query as needed
        $latestData = mpu::latest()->first();

        // If you need more than one, e.g., last 5
        // $latestData = Motorcycle::latest()->take(5)->get();

        return response()->json($latestData);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        mpu::create(['value'=>$request->value,'status'=>$request->status,]);

        return response()->json([
            'message' => 'succes created',
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
