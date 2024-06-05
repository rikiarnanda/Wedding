<div>
    <div class="fixed left-0 flex h-screen flex-col justify-between border-e bg-white w-fit">
        <div class="px-4 py-6">
            <div>
                <h1 class="text-xl font-semibold">Wedding Organizer</h1>
            </div>

            <ul class="mt-6 space-y-1">
                <li>
                    <details class="group [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                            <span class="text-sm font-medium"> {{ __('Vendor') }} </span>

                            <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </summary>

                        <ul class="mt-2 space-y-1 px-4">
                            <li>
                                <a href="{{ route('vendor') }}" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    Daftar Vendor
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('vendor.create') }}" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    Tambah Vendor
                                </a>
                            </li>
                        </ul>
                    </details>
                </li>

                <li>
                    <details class="group [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                            <span class="text-sm font-medium"> {{ __('Crew') }} </span>

                            <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </summary>

                        <ul class="mt-2 space-y-1 px-4">
                            <li>
                                <a href="{{ route('crew') }}" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    Daftar Crew
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('crew.create') }}" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    Tambah Crew
                                </a>
                            </li>

                        </ul>
                    </details>
                </li>


                <li>
                    <details class="group [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                            <span class="text-sm font-medium"> {{ __('Paket') }} </span>

                            <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </summary>

                        <ul class="mt-2 space-y-1 px-4">
                            <li>
                                <a href="{{ route('paket') }}" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    Daftar Paket
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('paket.create') }}" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    Tambah Paket
                                </a>
                            </li>

                        </ul>
                    </details>
                </li>

                <li>
                    <details class="group [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                            <span class="text-sm font-medium"> {{ __('Testimoni') }} </span>

                            <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </summary>

                        <ul class="mt-2 space-y-1 px-4">
                            <li>
                                <a href="{{ route('testimoni') }}" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    Daftar Testimoni
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('testimoni.create') }}" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    Tambah Testimoni
                                </a>
                            </li>

                        </ul>
                    </details>
                </li>

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm font-medium flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-900 hover:bg-gray-100 hover:text-gray-700">
                            {{ __('Logout') }}
                        </button>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>