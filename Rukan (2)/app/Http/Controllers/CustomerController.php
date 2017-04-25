<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use DB;
use Auth;
use Session;
/**
 * Class CustomerController
 *
 * @author  The scaffold-interface created at 2016-08-29 04:11:50pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CustomerController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index() {
        // $customers = Customer::all();
        if (Auth::check()) {
            $customers = DB::table('customers')->orderBy('id', 'desc')->paginate(5);
            return view('customer.index', compact('customers'));
        } else {
            return view('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create() {

        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request) {
       $validator = Validator::make($request->all(), [

                        'name' => 'required|min:2',
                        'email' => 'required|unique:customers',
                        'mobile' => 'required',
                        
            ]);
       if ($validator->fails()) {
            return redirect('index') ->withInput()->withErrors($validator);
        } else {
        $customer = new Customer();


        $customer->name = $request->name;


        $customer->email = $request->email;


        $customer->mobile = $request->mobile;



        $customer->save();
                Session::flash('flash_message', 'thanks ,successfully');

        return redirect('index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param        \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id, Request $request) {
        if (Auth::check()) {
            if ($request->ajax()) {
                return URL::to('customer/' . $id);
            }

            $customer = Customer::findOrfail($id);
            return view('customer.show', compact('customer'));
        } else {
            return view('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @param        \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id, Request $request) {
        if (Auth::check()) {
            if ($request->ajax()) {
                return URL::to('customer/' . $id . '/edit');
            }
            $customer = Customer::findOrfail($id);
            return view('customer.edit', compact('customer'));
        } else {
            return view('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id, Request $request) {
        if (Auth::check()) {
            $customer = Customer::findOrfail($id);

            $customer->name = $request->name;

            $customer->email = $request->email;

            $customer->mobile = $request->mobile;


            $customer->save();

            return redirect('customer');
        } else {
            return view('home');
        }
    }

    /**
     * Delete confirmation message by Ajaxis
     *
     * @link  https://github.com/amranidev/ajaxis
     * @param        \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id, Request $request) {
        // $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/customer/'. $id . '/delete/');
        $msg = Ajaxis::MtDeleting('Warning!!', 'Would you like to remove This?', '/customer/destroy/' . $id);

        if ($request->ajax()) {
            return $msg;
        }
//        $customer = Customer::findOrfail($id);
//     	$customer->delete();
//        return URL::to('customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id) {
        //$customer = DB::table('customers')->where('id', $id)->get();
        $customer = Customer::findOrfail($id);
        $customer->delete();
        //return URL::to('customer');
        return redirect('customer');
    }

    public function export() {
        $data = Customer::all();
        // Excel::create("hey");
        $filename = 'customer' . date("F j, Y, g:i a");
        //$filename='customer'.date("D M j G:i:s T Y");
        \Excel::create($filename, function($excel) use($data) {

            $excel->sheet('Sheetname', function($sheet) use($data) {

                $sheet->fromArray($data);
            });
        })->export('xls');
    }
 public function home() {
     return view('index');
 }
}
