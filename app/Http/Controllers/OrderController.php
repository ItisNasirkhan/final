<?php
namespace App\Http\Controllers;
use App\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        $data = $this->orderService->getAllOrders();
        return view('order.index', compact('data'));
    }

    public function create()
    {
        return view('order.create');
    }

    public function store(Request $request)
    {
        $response = $this->orderService->createOrder($request);
        Session::flash('message', $response['message']);
        Session::flash('alert-class', $response['success'] ? 'alert-success' : 'alert-danger');
        return redirect(route('order.index'));
    }

    public function edit($id)
    {
        $data = $this->orderService->editOrder($id);
        return view('order.create', compact('data'));
    }

    public function update(Request $request)
    {
        $response = $this->orderService->updateOrder($request);
        Session::flash('message', $response['message']);
        Session::flash('alert-class', $response['success'] ? 'alert-success' : 'alert-danger');
        return redirect(route('order.index'));
    }

    public function destroy($id)
    {
        $response = $this->orderService->deleteOrder($id);
        Session::flash('message', $response['message']);
        Session::flash('alert-class', $response['success'] ? 'alert-success' : 'alert-danger');
        return redirect(route('order.index'));
    }
}
