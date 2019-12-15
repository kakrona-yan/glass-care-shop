<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use Auth;
use App\Http\Requests\CustomerCreateRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\Http\Constants\UserRole;

class CustomersController extends Controller
{
    public function __construct(
        User $user,
        Customer $customer
    ) {
        $this->user = $user;
        $this->customer = $customer;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $customers  = $this->customer->filter($request);
            $genders = UserRole::USER_GANDER_TEXT_EN;
            return view('backends.customers.index', [
                'request' => $request,
                'customers' =>  $customers,
                'genders' => $genders
            ]);
        }catch (\ValidationException $e) {
            return exceptionError($e, 'customers.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            return view('backends.customers.create', [
                'request' => $request,
            ]);
        }catch (\ValidationException $e) {
            return exceptionError($e, 'customers.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerCreateRequest $request)
    {
        try {
            $customerRequest = $request->all();
            if ($request->exists('thumbnail') && !empty($customerRequest['thumbnail'])) {
                $customerRequest['thumbnail'] = uploadFile($customerRequest['thumbnail'], config('upload.customer'));
            }
            $customerRequest['dob'] = date('Y-m-d', strtotime($customerRequest['dob']));
            $this->customer->create($customerRequest);
            return \Redirect::route('customer.index')
                ->with('success',__('flash.store'));
        }catch (\ValidationException $e) {
            return exceptionError($e, 'customers.index');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, int $id)
    {
        try {
            $customer = $this->customer->available($id);
            if (!$customer) {
                return response()->view('errors.404', [], 404);
            }
            return view('customers.show', [
                'customer' => $customer,
            ]);
        } catch (\ValidationException $e) {
            return exceptionError($e, 'customers.show');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, int $id)
    {
        try {
            $customer = $this->customer->available($id);
            if (!$customer) {
                return response()->view('errors.404', [], 404);
            }
            return view('customers.edit', [
                'request' => $request,
                'customer' => $customer,
            ]);
        } catch (\ValidationException $e) {
            return exceptionError($e, 'customers.edit');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerUpdateRequest $request, $id)
    {
        try {
            $customerRequest = $request->all();
            $customer = $this->customer->available($id);
            if (!$customer) {
                return response()->view('errors.404', [], 404);
            }
            if (!empty($request->thumbnail)) {
                $customerRequest['thumbnail'] = uploadFile($request->thumbnail, config('upload.customer'));
            }
            $customerRequest['dob'] = date('Y-m-d', strtotime($customerRequest['dob']));
            $customer->update($customerRequest);
            return \Redirect::route('customer.index')
                ->with('warning',__('flash.update'));
        } catch (\ValidationException $e) {
            return exceptionError($e, 'customers.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $id = $request->customer_id;
            $customer = $this->customer->available($id);
            if (!$customer) {
                return response()->view('errors.404', [], 404);
            }
            $customer->remove();
            return redirect()->route('customer.index')
                ->with('danger',__('flash.destroy'));
        } catch (\ValidationException $e) {
            return exceptionError($e, 'customers.index');
        }
    }
}