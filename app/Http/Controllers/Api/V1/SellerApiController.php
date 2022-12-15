<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\SellerApiCollection;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::where('total', '>', 0)->orderBy('total', 'desc')->offset(0)->limit(5)->get();
        return $sellers;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        $post    = $request->all();

        $order   = $post['order'] ?? 'total';
        $by      = $post['by'] ?? 'asc';
        $offset  = $post['offset'] ?? 0;
        $limit   = $post['limit'] ?? 5;
        $load   = $post['load'] ?? [];

        $sellers = Seller::whereNotIn('wb_id', $load)->orderBy($order, $by)->offset($offset)->limit($limit)->get();

        if (!$sellers) {
            return response()->json(['success' => false, 'message' => 'Sellers does not exist']);
        }
        return response()->json(['success' => true, 'sellers' => SellerApiCollection::collection($sellers)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
