<?php
namespace App\Services;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderService
{
    public function getAllOrders()
    {
        return Order::all();
    }

    public function createOrder(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|max:255',
            'total_amount' => 'required|numeric',
            'status' => 'required|in:pending,completed,cancelled',
        ]);

        try {
            Order::create($request->all());
            return ['success' => true, 'message' => 'Order created successfully!'];
        } catch (\Exception $e) {
            Log::error('Order creation failed: ' . $e->getMessage());
            return ['success' => false, 'message' => 'Something went wrong. Please try again later.'];
        }
    }

    public function editOrder($id)
    {
        return Order::findOrFail($id);
    }

    public function updateOrder(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'customer_name' => 'required|max:255',
            'total_amount' => 'required|numeric',
            'status' => 'required|in:pending,completed,cancelled',
        ]);

        $order = Order::findOrFail($request->id);
        if ($order) {
            try {
                $order->update([
                    'customer_name' => $request->customer_name,
                    'total_amount' => $request->total_amount,
                    'status' => $request->status,
                ]);
                return ['success' => true, 'message' => 'Order updated successfully!'];
            } catch (\Exception $e) {
                Log::error('Update Failed: ' . $e->getMessage());
                return ['success' => false, 'message' => 'Something went wrong. Please try again later.'];
            }
        }
        return ['success' => false, 'message' => 'Invalid Order ID'];
    }

    public function deleteOrder($id)
    {
        $order = Order::findOrFail($id);
        try {
            $order->delete();
            return ['success' => true, 'message' => 'Order deleted successfully!'];
        } catch (\Exception $e) {
            Log::error('Delete operation failed: ' . $e->getMessage());
            return ['success' => false, 'message' => 'Something went wrong. Please try again later.'];
        }
    }
}
