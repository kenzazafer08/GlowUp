  <!-- component -->
  <div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="font-proza fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-pink-800 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
                <div class="flex items-center justify-center mt-8">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-columns-gap" viewBox="0 0 16 16">
                            <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
                        </svg>

                        <span class="text-white text-2xl mx-2 font-semibold">GlowUp</span>
                    </div>
                </div>

                <nav class="mt-10">
                    <a class="flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-200 hover:text-pink-100" href="<?= URLROOT ?>/pages/dashbord">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>

                        <span class="mx-3">Dashboard</span>
                    </a>

                    <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="<?= URLROOT ?>/pages/products">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                            </path>
                        </svg>

                        <span class="mx-3">Products</span>
                    </a>
                    <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="<?= URLROOT ?>/pages/categories">
                    <i class="fa fa-bars" aria-hidden="true"></i>

                        <span class="mx-3">Categories</span>
                    </a>
                </nav>
            </div>
            <div class="flex-1 flex flex-col overflow-hidden">
                <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-pink-800">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = true" class="text-[#080808] focus:outline-none lg:hidden">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="flex items-center">

                        <h5 class="text-base font-semibold text-[#080808] mr-2"></h5>
                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen" class="relative block h-12 w-12 rounded-full overflow-hidden shadow focus:outline-none">
                                <img class="h-full w-full object-cover" src="<?=URLROOT?>/public/img/GlowUp.png" alt="Your avatar">
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>

                            <div x-show="dropdownOpen" class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10" style="display: none;">
                                <a href="#" class="block px-4 py-2 text-sm text-[#080808] hover:bg-pink-800 hover:text-white">Admin</a>
                                <a href="<?=URLROOT?>" class="block px-4 py-2 text-sm text-[#080808] hover:bg-pink-800 hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>