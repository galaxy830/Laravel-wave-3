@extends('theme::layouts.app')


@section('content')

<section class="py-8">
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -m-4">
            <div class="w-full lg:w-1/2 p-4">
                <div class="bg-white rounded">
                    <div class="flex items-center py-5 px-6 border-b">
                        <h3 class="text-2xl font-bold">Dashboard</h3>
                        <div class="ml-auto inline-block py-2 px-3 border rounded text-xs text-gray-500">
                            <select class="pr-1" name="" id="">
                                <option value="1">1D</option>
                                <option value="1">1W</option>
                                <option value="1">1M</option>
                            </select>
                        </div>
                    </div>
                    <div class="pt-4 px-6">
                        <div class="flex flex-wrap -m-4 pb-16">
                            <div class="w-full md:w-1/2 p-4">
                                <div class="py-4 px-6 border rounded">
                                    <h4 class="text-xs text-gray-500">24h Portfolio Change</h4>
                                    <div class="flex items-center">
                                        <span class="mr-2 text-3xl font-bold">$ 1,258</span>
                                        <span
                                            class="py-1 px-2 bg-green-500 text-xs text-white rounded-full">+2.5%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 p-4">
                                <div class="py-4 px-6 border rounded">
                                    <h4 class="text-xs text-gray-500">Total Profit Loss</h4>
                                    <div class="flex items-center">
                                        <span class="mr-2 text-3xl font-bold">$95,422</span>
                                        <span
                                            class="py-1 px-2 bg-green-500 text-xs text-white rounded-full">+13.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chart" data-type="area"></div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 p-4">
                <div class="p-6 mb-8 bg-white shadow rounded">
                    <div class="flex mb-3 items-center justify-between">
                        <h3 class="text-gray-500">Total Balance</h3>
                        <button class="focus:outline-none">
                            <svg class="h-4 w-4 text-gray-200" viewbox="0 0 16 4" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 0.333344C7.67037 0.333344 7.34813 0.431092 7.07405 0.614228C6.79997 0.797363 6.58635 1.05766 6.4602 1.36221C6.33406 1.66675 6.30105 2.00186 6.36536 2.32516C6.42967 2.64846 6.5884 2.94543 6.82149 3.17852C7.05458 3.41161 7.35155 3.57034 7.67485 3.63465C7.99815 3.69896 8.33326 3.66596 8.63781 3.53981C8.94235 3.41366 9.20265 3.20004 9.38578 2.92596C9.56892 2.65188 9.66667 2.32965 9.66667 2.00001C9.66667 1.55798 9.49107 1.13406 9.17851 0.821499C8.86595 0.508939 8.44203 0.333344 8 0.333344ZM2.16667 0.333344C1.83703 0.333344 1.5148 0.431092 1.24072 0.614228C0.966635 0.797363 0.753014 1.05766 0.626868 1.36221C0.500722 1.66675 0.467717 2.00186 0.532025 2.32516C0.596334 2.64846 0.755068 2.94543 0.988156 3.17852C1.22124 3.41161 1.51822 3.57034 1.84152 3.63465C2.16482 3.69896 2.49993 3.66596 2.80447 3.53981C3.10902 3.41366 3.36931 3.20004 3.55245 2.92596C3.73559 2.65188 3.83333 2.32965 3.83333 2.00001C3.83333 1.55798 3.65774 1.13406 3.34518 0.821499C3.03262 0.508939 2.6087 0.333344 2.16667 0.333344ZM13.8333 0.333344C13.5037 0.333344 13.1815 0.431092 12.9074 0.614228C12.6333 0.797363 12.4197 1.05766 12.2935 1.36221C12.1674 1.66675 12.1344 2.00186 12.1987 2.32516C12.263 2.64846 12.4217 2.94543 12.6548 3.17852C12.8879 3.41161 13.1849 3.57034 13.5082 3.63465C13.8315 3.69896 14.1666 3.66596 14.4711 3.53981C14.7757 3.41366 15.036 3.20004 15.2191 2.92596C15.4023 2.65188 15.5 2.32965 15.5 2.00001C15.5 1.55798 15.3244 1.13406 15.0118 0.821499C14.6993 0.508939 14.2754 0.333344 13.8333 0.333344Z"
                                    fill="currentColor"></path>
                            </svg></button>
                    </div>
                    <div class="flex items-center mb-3">
                        <span class="text-4xl font-bold">$124,563.00</span>
                        <span
                            class="inline-block ml-2 py-1 px-2 bg-green-500 text-white text-xs rounded-full">+6.9%</span>
                    </div>
                    <div class="relative w-full h-1 mb-2 bg-gray-50 rounded">
                        <div class="absolute top-0 left-0 w-4/6 h-full bg-purple-500 rounded"></div>
                    </div>
                    <p class="text-xs text-gray-200">Yearly Goal</p>
                </div>
                <div class="p-6 bg-white shadow rounded">
                    <div class="flex mb-3 items-center justify-between">
                        <h3 class="text-gray-500">Crypto taxes</h3>
                        <button class="focus:outline-none">
                            <svg class="h-4 w-4 text-gray-200" viewbox="0 0 16 4" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 0.333344C7.67037 0.333344 7.34813 0.431092 7.07405 0.614228C6.79997 0.797363 6.58635 1.05766 6.4602 1.36221C6.33406 1.66675 6.30105 2.00186 6.36536 2.32516C6.42967 2.64846 6.5884 2.94543 6.82149 3.17852C7.05458 3.41161 7.35155 3.57034 7.67485 3.63465C7.99815 3.69896 8.33326 3.66596 8.63781 3.53981C8.94235 3.41366 9.20265 3.20004 9.38578 2.92596C9.56892 2.65188 9.66667 2.32965 9.66667 2.00001C9.66667 1.55798 9.49107 1.13406 9.17851 0.821499C8.86595 0.508939 8.44203 0.333344 8 0.333344ZM2.16667 0.333344C1.83703 0.333344 1.5148 0.431092 1.24072 0.614228C0.966635 0.797363 0.753014 1.05766 0.626868 1.36221C0.500722 1.66675 0.467717 2.00186 0.532025 2.32516C0.596334 2.64846 0.755068 2.94543 0.988156 3.17852C1.22124 3.41161 1.51822 3.57034 1.84152 3.63465C2.16482 3.69896 2.49993 3.66596 2.80447 3.53981C3.10902 3.41366 3.36931 3.20004 3.55245 2.92596C3.73559 2.65188 3.83333 2.32965 3.83333 2.00001C3.83333 1.55798 3.65774 1.13406 3.34518 0.821499C3.03262 0.508939 2.6087 0.333344 2.16667 0.333344ZM13.8333 0.333344C13.5037 0.333344 13.1815 0.431092 12.9074 0.614228C12.6333 0.797363 12.4197 1.05766 12.2935 1.36221C12.1674 1.66675 12.1344 2.00186 12.1987 2.32516C12.263 2.64846 12.4217 2.94543 12.6548 3.17852C12.8879 3.41161 13.1849 3.57034 13.5082 3.63465C13.8315 3.69896 14.1666 3.66596 14.4711 3.53981C14.7757 3.41366 15.036 3.20004 15.2191 2.92596C15.4023 2.65188 15.5 2.32965 15.5 2.00001C15.5 1.55798 15.3244 1.13406 15.0118 0.821499C14.6993 0.508939 14.2754 0.333344 13.8333 0.333344Z"
                                    fill="currentColor"></path>
                            </svg></button>
                    </div>
                    <div class="flex items-center mb-3">
                        <span class="text-4xl font-bold">$ 103</span>
                        <span
                            class="inline-block ml-2 py-1 px-2 bg-green-500 text-white text-xs rounded-full">+6.9%</span>
                    </div>
                    <div class="chart" data-type="columns-stacked"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-8">
    <div class="container px-4 mx-auto">
        <div class="pt-6 bg-white shadow rounded">
            <div class="px-6 border-b">
                <div class="flex flex-wrap items-center mb-6">
                    <h3 class="text-xl font-bold">My Crypto assets</h3>
                    <a class="ml-auto flex items-center py-2 px-3 text-xs text-white bg-indigo-500 hover:bg-indigo-600 rounded"
                        href="#">
                        <span class="mr-1">
                            <svg width="14" height="14" viewbox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 8.33337C12.6 8.33337 12.3333 8.60004 12.3333 9.00004V11.6667C12.3333 12.0667 12.0666 12.3334 11.6666 12.3334H2.33331C1.93331 12.3334 1.66665 12.0667 1.66665 11.6667V9.00004C1.66665 8.60004 1.39998 8.33337 0.99998 8.33337C0.59998 8.33337 0.333313 8.60004 0.333313 9.00004V11.6667C0.333313 12.8 1.19998 13.6667 2.33331 13.6667H11.6666C12.8 13.6667 13.6666 12.8 13.6666 11.6667V9.00004C13.6666 8.60004 13.4 8.33337 13 8.33337ZM4.79998 4.13337L6.33331 2.60004V9.00004C6.33331 9.40004 6.59998 9.66671 6.99998 9.66671C7.39998 9.66671 7.66665 9.40004 7.66665 9.00004V2.60004L9.19998 4.13337C9.46665 4.40004 9.86665 4.40004 10.1333 4.13337C10.4 3.86671 10.4 3.46671 10.1333 3.20004L7.46665 0.533374C7.19998 0.266707 6.79998 0.266707 6.53331 0.533374L3.86665 3.20004C3.59998 3.46671 3.59998 3.86671 3.86665 4.13337C4.13331 4.40004 4.53331 4.40004 4.79998 4.13337Z"
                                    fill="#AFABF1"></path>
                            </svg></span>
                        <span>Add Wallet</span>
                    </a>
                </div>
                <div><a class="inline-block px-4 pb-2 text-sm font-medium text-indigo-500 border-b-2 border-indigo-500"
                        href="#">Incoming</a><a
                        class="inline-block px-4 pb-2 text-sm font-medium text-gray-500 border-b-2 border-transparent"
                        href="#">Invoices</a></div>
            </div>
            <div>
                <table class="table-auto w-full">
                    <thead>
                        <tr class="text-xs text-gray-500 text-left">
                            <th class="flex items-center pl-6 py-4 font-medium">
                                <input class="mr-3" type="checkbox" name="" id=""><a class="flex items-center" href="#">
                                    <span>Name</span>
                                    <span class="ml-2">
                                        <svg width="9" height="12" viewbox="0 0 9 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.85957 7.52667L4.99957 10.3933L2.13957 7.52667C2.01403 7.40114 1.84377 7.33061 1.66623 7.33061C1.4887 7.33061 1.31843 7.40114 1.1929 7.52667C1.06736 7.65221 0.996837 7.82247 0.996837 8.00001C0.996837 8.17754 1.06736 8.3478 1.1929 8.47334L4.52623 11.8067C4.65114 11.9308 4.82011 12.0005 4.99623 12.0005C5.17236 12.0005 5.34132 11.9308 5.46623 11.8067L8.79957 8.47334C8.86173 8.41118 8.91103 8.33739 8.94467 8.25617C8.97831 8.17496 8.99563 8.08791 8.99563 8.00001C8.99563 7.9121 8.97831 7.82505 8.94467 7.74384C8.91103 7.66262 8.86173 7.58883 8.79957 7.52667C8.73741 7.46451 8.66361 7.41521 8.5824 7.38157C8.50118 7.34793 8.41414 7.33061 8.32623 7.33061C8.23833 7.33061 8.15128 7.34793 8.07007 7.38157C7.98885 7.41521 7.91506 7.46451 7.8529 7.52667H7.85957ZM2.13957 4.47334L4.99957 1.60667L7.85957 4.47334C7.98447 4.59751 8.15344 4.6672 8.32957 4.6672C8.50569 4.6672 8.67466 4.59751 8.79957 4.47334C8.92373 4.34843 8.99343 4.17946 8.99343 4.00334C8.99343 3.82722 8.92373 3.65825 8.79957 3.53334L5.46623 0.200006C5.40426 0.137521 5.33052 0.0879247 5.24928 0.0540789C5.16804 0.0202331 5.08091 0.00280762 4.9929 0.00280762C4.90489 0.00280762 4.81775 0.0202331 4.73651 0.0540789C4.65527 0.0879247 4.58154 0.137521 4.51957 0.200006L1.18623 3.53334C1.06158 3.65976 0.992254 3.83052 0.993504 4.00805C0.994754 4.18559 1.06648 4.35535 1.1929 4.48001C1.31932 4.60466 1.49008 4.67398 1.66761 4.67273C1.84515 4.67148 2.01491 4.59976 2.13957 4.47334Z"
                                                fill="#67798E"></path>
                                        </svg></span>
                                </a>
                            </th>
                            <th class="py-4 font-medium">
                                <a class="flex items-center" href="#">
                                    <span>Holdings</span>
                                    <span class="ml-2">
                                        <svg width="9" height="12" viewbox="0 0 9 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.85957 7.52667L4.99957 10.3933L2.13957 7.52667C2.01403 7.40114 1.84377 7.33061 1.66623 7.33061C1.4887 7.33061 1.31843 7.40114 1.1929 7.52667C1.06736 7.65221 0.996837 7.82247 0.996837 8.00001C0.996837 8.17754 1.06736 8.3478 1.1929 8.47334L4.52623 11.8067C4.65114 11.9308 4.82011 12.0005 4.99623 12.0005C5.17236 12.0005 5.34132 11.9308 5.46623 11.8067L8.79957 8.47334C8.86173 8.41118 8.91103 8.33739 8.94467 8.25617C8.97831 8.17496 8.99563 8.08791 8.99563 8.00001C8.99563 7.9121 8.97831 7.82505 8.94467 7.74384C8.91103 7.66262 8.86173 7.58883 8.79957 7.52667C8.73741 7.46451 8.66361 7.41521 8.5824 7.38157C8.50118 7.34793 8.41414 7.33061 8.32623 7.33061C8.23833 7.33061 8.15128 7.34793 8.07007 7.38157C7.98885 7.41521 7.91506 7.46451 7.8529 7.52667H7.85957ZM2.13957 4.47334L4.99957 1.60667L7.85957 4.47334C7.98447 4.59751 8.15344 4.6672 8.32957 4.6672C8.50569 4.6672 8.67466 4.59751 8.79957 4.47334C8.92373 4.34843 8.99343 4.17946 8.99343 4.00334C8.99343 3.82722 8.92373 3.65825 8.79957 3.53334L5.46623 0.200006C5.40426 0.137521 5.33052 0.0879247 5.24928 0.0540789C5.16804 0.0202331 5.08091 0.00280762 4.9929 0.00280762C4.90489 0.00280762 4.81775 0.0202331 4.73651 0.0540789C4.65527 0.0879247 4.58154 0.137521 4.51957 0.200006L1.18623 3.53334C1.06158 3.65976 0.992254 3.83052 0.993504 4.00805C0.994754 4.18559 1.06648 4.35535 1.1929 4.48001C1.31932 4.60466 1.49008 4.67398 1.66761 4.67273C1.84515 4.67148 2.01491 4.59976 2.13957 4.47334Z"
                                                fill="#67798E"></path>
                                        </svg></span>
                                </a>
                            </th>
                            <th class="py-4 font-medium">
                                <a class="flex items-center" href="#">
                                    <span>Price</span>
                                    <span class="ml-2">
                                        <svg width="9" height="12" viewbox="0 0 9 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.85957 7.52667L4.99957 10.3933L2.13957 7.52667C2.01403 7.40114 1.84377 7.33061 1.66623 7.33061C1.4887 7.33061 1.31843 7.40114 1.1929 7.52667C1.06736 7.65221 0.996837 7.82247 0.996837 8.00001C0.996837 8.17754 1.06736 8.3478 1.1929 8.47334L4.52623 11.8067C4.65114 11.9308 4.82011 12.0005 4.99623 12.0005C5.17236 12.0005 5.34132 11.9308 5.46623 11.8067L8.79957 8.47334C8.86173 8.41118 8.91103 8.33739 8.94467 8.25617C8.97831 8.17496 8.99563 8.08791 8.99563 8.00001C8.99563 7.9121 8.97831 7.82505 8.94467 7.74384C8.91103 7.66262 8.86173 7.58883 8.79957 7.52667C8.73741 7.46451 8.66361 7.41521 8.5824 7.38157C8.50118 7.34793 8.41414 7.33061 8.32623 7.33061C8.23833 7.33061 8.15128 7.34793 8.07007 7.38157C7.98885 7.41521 7.91506 7.46451 7.8529 7.52667H7.85957ZM2.13957 4.47334L4.99957 1.60667L7.85957 4.47334C7.98447 4.59751 8.15344 4.6672 8.32957 4.6672C8.50569 4.6672 8.67466 4.59751 8.79957 4.47334C8.92373 4.34843 8.99343 4.17946 8.99343 4.00334C8.99343 3.82722 8.92373 3.65825 8.79957 3.53334L5.46623 0.200006C5.40426 0.137521 5.33052 0.0879247 5.24928 0.0540789C5.16804 0.0202331 5.08091 0.00280762 4.9929 0.00280762C4.90489 0.00280762 4.81775 0.0202331 4.73651 0.0540789C4.65527 0.0879247 4.58154 0.137521 4.51957 0.200006L1.18623 3.53334C1.06158 3.65976 0.992254 3.83052 0.993504 4.00805C0.994754 4.18559 1.06648 4.35535 1.1929 4.48001C1.31932 4.60466 1.49008 4.67398 1.66761 4.67273C1.84515 4.67148 2.01491 4.59976 2.13957 4.47334Z"
                                                fill="#67798E"></path>
                                        </svg></span>
                                </a>
                            </th>
                            <th class="py-4 font-medium">
                                <a class="flex items-center" href="#">
                                    <span>1 Day</span>
                                    <span class="ml-2">
                                        <svg width="9" height="12" viewbox="0 0 9 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.85957 7.52667L4.99957 10.3933L2.13957 7.52667C2.01403 7.40114 1.84377 7.33061 1.66623 7.33061C1.4887 7.33061 1.31843 7.40114 1.1929 7.52667C1.06736 7.65221 0.996837 7.82247 0.996837 8.00001C0.996837 8.17754 1.06736 8.3478 1.1929 8.47334L4.52623 11.8067C4.65114 11.9308 4.82011 12.0005 4.99623 12.0005C5.17236 12.0005 5.34132 11.9308 5.46623 11.8067L8.79957 8.47334C8.86173 8.41118 8.91103 8.33739 8.94467 8.25617C8.97831 8.17496 8.99563 8.08791 8.99563 8.00001C8.99563 7.9121 8.97831 7.82505 8.94467 7.74384C8.91103 7.66262 8.86173 7.58883 8.79957 7.52667C8.73741 7.46451 8.66361 7.41521 8.5824 7.38157C8.50118 7.34793 8.41414 7.33061 8.32623 7.33061C8.23833 7.33061 8.15128 7.34793 8.07007 7.38157C7.98885 7.41521 7.91506 7.46451 7.8529 7.52667H7.85957ZM2.13957 4.47334L4.99957 1.60667L7.85957 4.47334C7.98447 4.59751 8.15344 4.6672 8.32957 4.6672C8.50569 4.6672 8.67466 4.59751 8.79957 4.47334C8.92373 4.34843 8.99343 4.17946 8.99343 4.00334C8.99343 3.82722 8.92373 3.65825 8.79957 3.53334L5.46623 0.200006C5.40426 0.137521 5.33052 0.0879247 5.24928 0.0540789C5.16804 0.0202331 5.08091 0.00280762 4.9929 0.00280762C4.90489 0.00280762 4.81775 0.0202331 4.73651 0.0540789C4.65527 0.0879247 4.58154 0.137521 4.51957 0.200006L1.18623 3.53334C1.06158 3.65976 0.992254 3.83052 0.993504 4.00805C0.994754 4.18559 1.06648 4.35535 1.1929 4.48001C1.31932 4.60466 1.49008 4.67398 1.66761 4.67273C1.84515 4.67148 2.01491 4.59976 2.13957 4.47334Z"
                                                fill="#67798E"></path>
                                        </svg></span>
                                </a>
                            </th>
                            <th class="py-4 font-medium">
                                <a class="flex items-center" href="#">
                                    <span>Descriptions</span>
                                    <span class="ml-2">
                                        <svg width="9" height="12" viewbox="0 0 9 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.85957 7.52667L4.99957 10.3933L2.13957 7.52667C2.01403 7.40114 1.84377 7.33061 1.66623 7.33061C1.4887 7.33061 1.31843 7.40114 1.1929 7.52667C1.06736 7.65221 0.996837 7.82247 0.996837 8.00001C0.996837 8.17754 1.06736 8.3478 1.1929 8.47334L4.52623 11.8067C4.65114 11.9308 4.82011 12.0005 4.99623 12.0005C5.17236 12.0005 5.34132 11.9308 5.46623 11.8067L8.79957 8.47334C8.86173 8.41118 8.91103 8.33739 8.94467 8.25617C8.97831 8.17496 8.99563 8.08791 8.99563 8.00001C8.99563 7.9121 8.97831 7.82505 8.94467 7.74384C8.91103 7.66262 8.86173 7.58883 8.79957 7.52667C8.73741 7.46451 8.66361 7.41521 8.5824 7.38157C8.50118 7.34793 8.41414 7.33061 8.32623 7.33061C8.23833 7.33061 8.15128 7.34793 8.07007 7.38157C7.98885 7.41521 7.91506 7.46451 7.8529 7.52667H7.85957ZM2.13957 4.47334L4.99957 1.60667L7.85957 4.47334C7.98447 4.59751 8.15344 4.6672 8.32957 4.6672C8.50569 4.6672 8.67466 4.59751 8.79957 4.47334C8.92373 4.34843 8.99343 4.17946 8.99343 4.00334C8.99343 3.82722 8.92373 3.65825 8.79957 3.53334L5.46623 0.200006C5.40426 0.137521 5.33052 0.0879247 5.24928 0.0540789C5.16804 0.0202331 5.08091 0.00280762 4.9929 0.00280762C4.90489 0.00280762 4.81775 0.0202331 4.73651 0.0540789C4.65527 0.0879247 4.58154 0.137521 4.51957 0.200006L1.18623 3.53334C1.06158 3.65976 0.992254 3.83052 0.993504 4.00805C0.994754 4.18559 1.06648 4.35535 1.1929 4.48001C1.31932 4.60466 1.49008 4.67398 1.66761 4.67273C1.84515 4.67148 2.01491 4.59976 2.13957 4.47334Z"
                                                fill="#67798E"></path>
                                        </svg></span>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-xs bg-gray-50">
                            <td class="flex items-center py-5 px-6 font-medium">
                                <input class="mr-3" type="checkbox" name="" id="">
                                <p>M063592DR2</p>
                            </td>
                            <td class="font-medium">08.04.2021</td>
                            <td class="font-medium">Code 5928MD01</td>
                            <td>
                                <span
                                    class="inline-block py-1 px-2 text-white bg-green-500 rounded-full">Completed</span>
                            </td>
                            <td>$2500.00</td>
                        </tr>
                        <tr class="text-xs">
                            <td class="flex items-center py-5 px-6 font-medium">
                                <input class="mr-3" type="checkbox" name="" id="">
                                <p>M063592DR2</p>
                            </td>
                            <td class="font-medium">08.04.2021</td>
                            <td class="font-medium">Code 5928MD01</td>
                            <td>
                                <span
                                    class="inline-block py-1 px-2 text-white bg-green-500 rounded-full">Completed</span>
                            </td>
                            <td>$2500.00</td>
                        </tr>
                        <tr class="text-xs bg-gray-50">
                            <td class="flex items-center py-5 px-6 font-medium">
                                <input class="mr-3" type="checkbox" name="" id="">
                                <p>M063592DR2</p>
                            </td>
                            <td class="font-medium">08.04.2021</td>
                            <td class="font-medium">Code 5928MD01</td>
                            <td>
                                <span
                                    class="inline-block py-1 px-2 text-white bg-green-500 rounded-full">Completed</span>
                            </td>
                            <td>$2500.00</td>
                        </tr>
                        <tr class="text-xs">
                            <td class="flex items-center py-5 px-6 font-medium">
                                <input class="mr-3" type="checkbox" name="" id="">
                                <p>M063592DR2</p>
                            </td>
                            <td class="font-medium">08.04.2021</td>
                            <td class="font-medium">Code 5928MD01</td>
                            <td>
                                <span
                                    class="inline-block py-1 px-2 text-white bg-green-500 rounded-full">Completed</span>
                            </td>
                            <td>$2500.00</td>
                        </tr>
                        <tr class="text-xs bg-gray-50">
                            <td class="flex items-center py-5 px-6 font-medium">
                                <input class="mr-3" type="checkbox" name="" id="">
                                <p>M063592DR2</p>
                            </td>
                            <td class="font-medium">08.04.2021</td>
                            <td class="font-medium">Code 5928MD01</td>
                            <td>
                                <span
                                    class="inline-block py-1 px-2 text-white bg-green-500 rounded-full">Completed</span>
                            </td>
                            <td>$2500.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection