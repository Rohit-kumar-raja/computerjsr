<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrdersController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = DB::table('orders')->get();

        return view('livewire.admin.orders.index', ['data' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('orders')->insert($request->except('_token'));
        return redirect()->back()->with(["success" => "Data added Successfully"]);
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

    public function status($id)
    {
        $status =  DB::table('orders')->find($id);
        if ($status->status == 1) {
            DB::table('orders')->where('id', $id)->update(['status' => '0']);
        } else {

            DB::table('orders')->where('id', $id)->update(['status' => '1']);
        }
        if ($status->status == 1) {
            return redirect()->back()->with('status', 'Status Deactivated successfully');
        } else {
            return redirect()->back()->with('status1', 'Status activated successfully');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('orders')->find($id);
        $categories = DB::table('categories')->get();
        return view('livewire.admin.orders.update', ['data' => $data, 'categories' => $categories]);
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
        $result = DB::table('orders')
            ->where('id', $id)
            ->update($request->except(['_token', 'id']));
        return redirect()->route('admin.orders')->with('update', 'Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('orders')->delete($id);
        return redirect()->back()->with(['delete' => 'orders Delete successfully']);
    }
}
