<nav class="bg-[#850000] fixed w-full z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center">
            <h1 class="text-white text-3xl">
                Sketring
            </h1>
        </a>
        <div class="flex items-center md:order-2">
            @if(Auth::check())
                <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                </button>
                <div class="z-50 hidden my-5 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
                    <div class="px-4 py-3 flex flex-row">
                        <div class="w-25">
                            tes
                        </div>
                        <div>
                            <span class="block text-sm text-gray-900 text-[#c0c0c0]">{{auth()->user()->Nama}}</span>
                            <span class="block text-sm text-gray-500 truncate dark:text-gray-400">{{auth()->user()->Email}}</span>
                        </div>

                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="/profileToko" class="block px-4 py-2 text-sm text-[#c0c0c0] hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil Toko</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-[#c0c0c0] hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                {{-- <input type="submit" value="Logout" class="block w-full px-4 py-2 text-sm text-[#c0c0c0] hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"> --}}
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-[#c0c0c0] hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Logout
                                </button>
                                {{-- <a type="submit">Log Out</a> --}}
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a href="/login" class="btn bg-white px-10 py-2 font-light rounded-md text-[#850000]">
                    Login
                </a>
            @endif
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                <li>
                    <a href="/umkm" class="block py-2 px-4 pr-4 text-white
                                md:bg-transparent md:text-white-700
                                underline" aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="/dashboard" class="block py-2 px-4 pr-4 text-white
                                md:bg-transparent md:text-white-700
                                ">Produk Saya</a>
                </li>
                <li>
                    <a href="/pesananumkm" class="block py-2 px-4 pr-4 text-white
                                md:bg-transparent md:text-white-700
                                ">Pesanan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
