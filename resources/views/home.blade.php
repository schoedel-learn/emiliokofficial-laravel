<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faith & Flourishing - CBT for Teens</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-blue-600">Faith & Flourishing</h1>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-700 hover:text-blue-600">Home</a>
                    <a href="/about" class="text-gray-700 hover:text-blue-600">About</a>
                    <a href="/resources" class="text-gray-700 hover:text-blue-600">Resources</a>
                    <a href="/login" class="text-gray-700 hover:text-blue-600">Login</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center">
            <!-- Hero Image -->
            <div class="mb-8 flex justify-center">
                <img 
                    src="{{ asset('images/community-hero.jpg') }}" 
                    alt="Diverse community of support - loving adults, teens, people with disabilities, saints and angels together"
                    class="rounded-2xl shadow-2xl max-w-4xl w-full h-auto"
                    onerror="this.style.display='none'"
                />
            </div>

            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                You Are Not Alone
            </h2>
            <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                Combining Catholic faith and proven cognitive-behavioral therapy to help teens overcome anxiety, 
                depression, and distorted thinking patterns.
            </p>
            <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                <div class="rounded-md shadow">
                    <a href="/register" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg md:px-10">
                        Get Started
                    </a>
                </div>
                <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                    <a href="/about" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h3 class="text-3xl font-extrabold text-gray-900">
                    Tools for Your Journey
                </h3>
                <p class="mt-4 text-lg text-gray-500">
                    Faith-based cognitive-behavioral therapy designed specifically for teens
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Feature 1 -->
                    <div class="text-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white mx-auto text-2xl">
                            🧠
                        </div>
                        <h4 class="mt-5 text-lg font-medium text-gray-900">Identify Distortions</h4>
                        <p class="mt-2 text-base text-gray-500">
                            Learn to recognize cognitive distortions like all-or-nothing thinking, catastrophizing, and more.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="text-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white mx-auto text-2xl">
                            ✝️
                        </div>
                        <h4 class="mt-5 text-lg font-medium text-gray-900">Faith Integration</h4>
                        <p class="mt-2 text-base text-gray-500">
                            Ground your healing in Catholic teaching, prayer, and the wisdom of saints.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="text-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white mx-auto text-2xl">
                            📝
                        </div>
                        <h4 class="mt-5 text-lg font-medium text-gray-900">Track Progress</h4>
                        <p class="mt-2 text-base text-gray-500">
                            Journal your thoughts, track your growth, and see how far you've come.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-blue-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Ready to start your journey?</span>
                <span class="block text-blue-200">Create your free account today.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="/register" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="text-center text-gray-400">
                <p>&copy; 2025 Faith & Flourishing. Supporting teen mental health through faith and science.</p>
                <p class="mt-2 text-sm">
                    <a href="/crisis" class="text-blue-400 hover:text-blue-300">Crisis Resources</a> | 
                    <a href="/privacy" class="text-blue-400 hover:text-blue-300 ml-4">Privacy Policy</a>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>

