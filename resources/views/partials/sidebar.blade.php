<aside id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y">
                <ul class="pb-2 space-y-2">
                    <li>
                        <form action="#" method="GET" class="lg:hidden">
                            <label for="mobile-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                        </path>
                                    </svg>
                                </div>
                                <input type="text" name="email" id="mobile-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:ring-cyan-600 block w-full pl-10 p-2.5"
                                    placeholder="Search">
                            </div>
                        </form>
                    </li>
                    @if ( auth()->user()->role === "head")
                    <li>
                        <a href="/dashboard"
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                </path>
                            </svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    @endif
                    @if ( auth()->user()->role === "admin" || auth()->user()->role === "superior" )
                    <li>
                        <a href="/rent-car"
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 group ">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Book Car</span>

                        </a>
                    </li>
                    @endif
                    @if ( auth()->user()->role === "superior" || auth()->user()->role === "head" )
                    <li>
                        <button type="button"
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 group"
                            aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                </path>
                                <path
                                    d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                </path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap" sidebar-toggle-item>Manage Bookings</span>
                            <svg sidebar-toggle-item class="w-6 h-6 ml-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-example" class="hidden py-2 space-y-2">
                            <li>
                                <a href="/manage-rental/rental-request"
                                    class="flex items-center w-full p-1 pl-5 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="flex-shrink-0 w-4 h-4 text-gray-500 transition duration-75 group-hover:text-gray-900"
                                        viewBox="0 0 448 512">
                                        <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M438.6 150.6c12.5-12.5 12.5-32.8 0-45.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.7 96 32 96C14.3 96 0 110.3 0 128s14.3 32 32 32l306.7 0-41.4 41.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l96-96zm-333.3 352c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 416 416 416c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0 41.4-41.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3l96 96z" />
                                    </svg>
                                    <span class="ml-4 text-[15px]">
                                        Rental Requests
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/manage-rental/active-rental"
                                    class="flex items-center w-full p-1 pl-5 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="currentColor"
                                        class="flex-shrink-0 w-4 h-4 text-gray-500 transition duration-75 group-hover:text-gray-900">
                                        <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z" />
                                    </svg>
                                    <span class="ml-4 text-[15px]">
                                        Active Rental
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/manage-rental/cancelled-rental"
                                    class="flex items-center w-full p-1 pl-5 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                                        class="flex-shrink-0 w-4 h-4 text-gray-500 transition duration-75 group-hover:text-gray-900">
                                        <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M175 175C184.4 165.7 199.6 165.7 208.1 175L255.1 222.1L303 175C312.4 165.7 327.6 165.7 336.1 175C346.3 184.4 346.3 199.6 336.1 208.1L289.9 255.1L336.1 303C346.3 312.4 346.3 327.6 336.1 336.1C327.6 346.3 312.4 346.3 303 336.1L255.1 289.9L208.1 336.1C199.6 346.3 184.4 346.3 175 336.1C165.7 327.6 165.7 312.4 175 303L222.1 255.1L175 208.1C165.7 199.6 165.7 184.4 175 175V175zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z" />
                                    </svg>
                                    <span class="ml-4 text-[15px]">
                                        Cancelled Rental
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/manage-rental/completed-rental"
                                    class="flex items-center w-full p-1 pl-5 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100">

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                                        class="flex-shrink-0 w-4 h-4 text-gray-500 transition duration-75 group-hover:text-gray-900">
                                        <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z" />
                                    </svg>
                                    <span class="ml-4 text-[15px]">
                                        Compeleted Rental
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/manage-rental/all-rental"
                                    class="flex items-center w-full p-1 pl-5 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100">

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                                        class="flex-shrink-0 w-4 h-4 text-gray-500 transition duration-75 group-hover:text-gray-900">
                                        <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z" />
                                    </svg>
                                    <span class="ml-4 text-[15px]">
                                        All Rental History
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    <li>
                        <a href="/history"
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 group ">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                                fill="currentColor">
                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M75 75L41 41C25.9 25.9 0 36.6 0 57.9V168c0 13.3 10.7 24 24 24H134.1c21.4 0 32.1-25.9 17-41l-30.8-30.8C155 85.5 203 64 256 64c106 0 192 86 192 192s-86 192-192 192c-40.8 0-78.6-12.7-109.7-34.4c-14.5-10.1-34.4-6.6-44.6 7.9s-6.6 34.4 7.9 44.6C151.2 495 201.7 512 256 512c141.4 0 256-114.6 256-256S397.4 0 256 0C185.3 0 121.3 28.7 75 75zm181 53c-13.3 0-24 10.7-24 24V256c0 6.4 2.5 12.5 7 17l72 72c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-65-65V152c0-13.3-10.7-24-24-24z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">History</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</aside>