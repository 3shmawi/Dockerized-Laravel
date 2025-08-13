<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-xl font-bold text-gray-900">MyApp</h1>
                    </div>
                    <div class="hidden md:ml-6 md:flex md:space-x-8">
                        <a href="#" class="text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-blue-500 text-sm font-medium">
                            Dashboard
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">
                            Projects
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">
                            Settings
                        </a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    @auth
                    <span class="text-gray-700">Welcome, {{ auth()->user()->name }}!</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-2 rounded-md text-sm font-medium">
                            Logout
                        </button>
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Login</a>
                    <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">Sign up</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Page Header -->
        <div class="px-4 py-6 sm:px-0">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
                <p class="mt-2 text-gray-600">Welcome to your simple, clean Laravel application.</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Total Users</dt>
                                    <dd class="text-lg font-medium text-gray-900">1,234</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Revenue</dt>
                                    <dd class="text-lg font-medium text-gray-900">$12,345</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Completed Tasks</dt>
                                    <dd class="text-lg font-medium text-gray-900">89</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Messages</dt>
                                    <dd class="text-lg font-medium text-gray-900">56</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Recent Activity -->
                <div class="lg:col-span-2">
                    <div class="bg-white shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Recent Activity</h3>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-3">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                            <span class="text-blue-600 text-sm font-medium">JS</span>
                                        </div>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <p class="text-sm text-gray-900">
                                            <span class="font-medium">John Smith</span> created a new project
                                        </p>
                                        <p class="text-sm text-gray-500">2 hours ago</p>
                                    </div>
                                </div>

                                <div class="flex items-start space-x-3">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                            <span class="text-green-600 text-sm font-medium">AD</span>
                                        </div>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <p class="text-sm text-gray-900">
                                            <span class="font-medium">Alice Doe</span> completed a task
                                        </p>
                                        <p class="text-sm text-gray-500">4 hours ago</p>
                                    </div>
                                </div>

                                <div class="flex items-start space-x-3">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                            <span class="text-purple-600 text-sm font-medium">MB</span>
                                        </div>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <p class="text-sm text-gray-900">
                                            <span class="font-medium">Mike Brown</span> uploaded new files
                                        </p>
                                        <p class="text-sm text-gray-500">1 day ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="lg:col-span-1">
                    <div class="bg-white shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Quick Actions</h3>
                            <div class="space-y-3">
                                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    Create New Project
                                </button>

                                <button class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-md text-sm font-medium flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                                    </svg>
                                    Invite Team Member
                                </button>

                                <button class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-md text-sm font-medium flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    Import Data
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- System Status -->
                    <div class="bg-white shadow rounded-lg mt-6">
                        <div class="px-4 py-5 sm:p-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">System Status</h3>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">API Status</span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Online
                                    </span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">Database</span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        Warning
                                    </span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">Storage</span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Healthy
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>