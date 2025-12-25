@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Admin Dashboard</h1>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-full">
                    <i class="fas fa-users text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Total Users</p>
                    <p class="text-2xl font-semibold">{{ $stats['total_users'] }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-full">
                    <i class="fas fa-shopping-cart text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Total Orders</p>
                    <p class="text-2xl font-semibold">{{ $stats['total_orders'] }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-full">
                    <i class="fas fa-box text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Total Products</p>
                    <p class="text-2xl font-semibold">{{ $stats['total_products'] }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-100 rounded-full">
                    <i class="fas fa-dollar-sign text-yellow-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Total Revenue</p>
                    <p class="text-2xl font-semibold">${{ number_format($stats['total_revenue'], 2) }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-red-100 rounded-full">
                    <i class="fas fa-clock text-red-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Pending Orders</p>
                    <p class="text-2xl font-semibold">{{ $stats['pending_orders'] }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mb-8">
        <a href="{{ route('admin.users') }}" class="bg-blue-600 text-white rounded-lg p-6 hover:bg-blue-700 transition">
            <i class="fas fa-users text-2xl mb-2"></i>
            <h3 class="font-semibold">Manage Users</h3>
            <p class="text-sm opacity-90">View and manage user accounts</p>
        </a>

        <a href="{{ route('admin.orders') }}" class="bg-green-600 text-white rounded-lg p-6 hover:bg-green-700 transition">
            <i class="fas fa-shopping-cart text-2xl mb-2"></i>
            <h3 class="font-semibold">Manage Orders</h3>
            <p class="text-sm opacity-90">View and update order status</p>
        </a>

        <a href="{{ route('admin.products.index') }}" class="bg-purple-600 text-white rounded-lg p-6 hover:bg-purple-700 transition">
            <i class="fas fa-box text-2xl mb-2"></i>
            <h3 class="font-semibold">Manage Products</h3>
            <p class="text-sm opacity-90">Add, edit, and remove products</p>
        </a>

        <a href="{{ route('admin.categories.index') }}" class="bg-orange-600 text-white rounded-lg p-6 hover:bg-orange-700 transition">
            <i class="fas fa-tags text-2xl mb-2"></i>
            <h3 class="font-semibold">Manage Categories</h3>
            <p class="text-sm opacity-90">Organize product categories</p>
        </a>

        <a href="{{ route('admin.reviews') }}" class="bg-teal-600 text-white rounded-lg p-6 hover:bg-teal-700 transition">
            <i class="fas fa-star text-2xl mb-2"></i>
            <h3 class="font-semibold">Manage Reviews</h3>
            <p class="text-sm opacity-90">Approve or reject customer reviews</p>
        </a>
    </div>

    <!-- Recent Orders -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-900">Recent Orders</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($recentOrders as $order)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <a href="{{ route('admin.orders.show', $order) }}" class="hover:text-blue-600">
                                    #{{ $order->id }}
                                </a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $order->user->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${{ number_format($order->total_amount, 2) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    @if($order->status == 'completed') bg-green-100 text-green-800
                                    @elseif($order->status == 'processing') bg-yellow-100 text-yellow-800
                                    @elseif($order->status == 'shipped') bg-blue-100 text-blue-800
                                    @elseif($order->status == 'cancelled') bg-red-100 text-red-800
                                    @else bg-gray-100 text-gray-800 @endif">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $order->created_at->format('M d, Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">No orders found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-gray-200">
            <a href="{{ route('admin.orders') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View all orders →</a>
        </div>
    </div>
</div>
@endsection