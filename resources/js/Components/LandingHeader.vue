<template>
    <div class="top-0 py-1 lg:py-2 w-full bg-blue-900 lg:relative z-50 dark:bg-gray-900">
        <nav class="z-10 sticky top-0 left-0 right-0 max-w-4xl xl:max-w-5xl mx-auto px-5 py-2.5 lg:border-none lg:py-4 flex items-center relative">
            <!-- "Company" Section -->
            <button class="flex items-center space-x-2">
                <h2 class="text-white font-bold text-2xl">GradeQSlot</h2>
            </button>

            <!-- Centered Navigation Links -->
            <div class="flex-grow flex justify-center">
                <ul class="flex space-x-10 text-base font-bold text-white">
                    <li class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                        <a href="#">Home</a>
                    </li>
                    <li class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                        <a href="#">Our services</a>
                    </li>
                    <li class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                        <a href="#">About</a>
                    </li>
                    <li class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Login Button -->
            <button class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-gray-50 rounded-xl flex items-center gap-2 absolute right-0 mr-5">
                <!-- Heroicons - Login Solid -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span>Login</span>
            </button>
        </nav>
    </div>
</template>
