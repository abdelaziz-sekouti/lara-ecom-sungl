@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Sign Out</h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Are you sure you want to sign out?
            </p>
        </div>
        
        <div class="mt-8 space-y-6">
            <div class="rounded-md shadow-sm -space-y-px">
                <div class="flex -space-x-px">
                    <form action="{{ route('logout') }}" method="POST" class="flex-1">
                        @csrf
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md rounded-r-none text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Yes, Sign Out
                        </button>
                    </form>
                    <a href="{{ route('home') }}" class="flex-1 flex justify-center py-2 px-4 border border-gray-300 rounded-md rounded-l-none text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection