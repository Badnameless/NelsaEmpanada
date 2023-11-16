@extends('layout')
@section('title', 'Ventas')
@section('SiteName', 'Ventas')
@section('selectedProduct', 'text-gray-400 hover:text-white hover:bg-gray-800')
@section('selectedSales', 'bg-gray-800 text-white')
@section('selectedConsult', 'text-gray-400 hover:text-white hover:bg-gray-800')
@section('content')
    <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-6 border-b border-white/5 bg-gray-900 px-4 shadow-sm sm:px-6 lg:px-8">
        <button type="button" class="-m-2.5 p-2.5 text-white xl:hidden">
            <span class="sr-only">Open sidebar</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z" clip-rule="evenodd"></path>
            </svg>
        </button>

        <div class="border-r-2 border-white/5 flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
            <form class="flex flex-1" action="#" method="GET">
            <label for="search-field" class="sr-only">Search</label>
            <div class="relative w-full">
                <svg class="pointer-events-none absolute inset-y-0 left-0 h-full w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd"></path>
                </svg>
                <input id="search-field" class="appearance-none outline-none block h-full w-full border-0 bg-transparent py-0 pl-8 pr-0 text-white focus:ring-0 sm:text-sm" placeholder="Buscar producto..." type="text" name="search">
            </div>
            </form>
        </div>
        <label for="timezone" class="block text-sm font-medium leading-6 text-white">Filtrar por categoria</label>
        <div class="mt-2">
            <select id="timezone" name="timezone" class="mb-2 block rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 [&amp;_*]:text-black">
                <option>Pacific Standard Time</option>
                <option>Eastern Standard Time</option>
                <option>Greenwich Mean Time</option>
            </select>
        </div>
    </div>
@endsection