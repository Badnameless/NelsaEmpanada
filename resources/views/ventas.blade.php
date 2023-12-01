@extends('layout')
@section('title', 'Ventas')
@section('SiteName', 'Ventas')
@section('selectedProduct', 'text-gray-400 hover:text-white hover:bg-gray-800')
@section('selectedSales', 'bg-gray-800 text-white')
@section('selectedConsult', 'text-gray-400 hover:text-white hover:bg-gray-800')
@section('content')
    <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-6 border-b border-white/5 bg-gray-900 px-4 shadow-sm sm:px-6 lg:px-8">
        <div class="border-r-2 border-white/5 w-[69.6%] flex gap-x-4 self-stretch lg:gap-x-6">
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
        <label for="timezone" class="block text-sm font-medium leading-6 text-white">Categoria</label>
        <div class="mt-2">
            <select id="timezone" name="timezone" class="mb-2 block rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 [&amp;_*]:text-black">
                <option>Pacific Standard Time</option>
                <option>Eastern Standard Time</option>
                <option>Greenwich Mean Time</option>
            </select>
        </div>
    </div>
    <div class="grid grid-cols-3 items-start">
        <div class="grid grid-cols-2 col-span-2 w-full">
            <div class="mt-4 CardDiv ml-4 border border-white/5">
                <div>
                    <img src="img/Placeholder.webp" alt="" class="w-full h-full object-cover object-center">
                </div>
                <div class="grid grid-rows-2 items-center justify-center py-2">
                    <div class="text-base font-semibold leading-7 text-white border-white/5 border-b pb-2">
                        Empanada de pollo
                    </div>
                    <div class="text-base font-semibold leading-7 text-white">
                        25.00 RD$
                    </div>
                </div>
            </div>
            <div class="mt-4 CardDiv ml-4 border border-white/5">
                <div>
                    <img src="img/Placeholder.webp" alt="" class="w-full h-full object-cover object-center">
                </div>
                <div class="grid grid-rows-2 items-center justify-center py-2">
                    <div class="text-base font-semibold leading-7 text-white border-white/5 border-b pb-2">
                        Empanada de pollo
                    </div>
                    <div class="text-base font-semibold leading-7 text-white">
                        25.00 RD$
                    </div>
                </div>
            </div>
            <div class="mt-4 CardDiv ml-4 border border-white/5">
                <div>
                    <img src="img/Placeholder.webp" alt="" class="w-full h-full object-cover object-center">
                </div>
                <div class="grid grid-rows-2 items-center justify-center py-2">
                    <div class="text-base font-semibold leading-7 text-white border-white/5 border-b pb-2">
                        Empanada de pollo
                    </div>
                    <div class="text-base font-semibold leading-7 text-white">
                        25.00 RD$
                    </div>
                </div>
            </div>
            <div class="mt-4 CardDiv ml-4 border border-white/5">
                <div>
                    <img src="img/Placeholder.webp" alt="" class="w-full h-full object-cover object-center">
                </div>
                <div class="grid grid-rows-2 items-center justify-center py-2">
                    <div class="text-base font-semibold leading-7 text-white border-white/5 border-b pb-2">
                        Empanada de pollo
                    </div>
                    <div class="text-base font-semibold leading-7 text-white">
                        25.00 RD$
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky ml-4 border-b border-r border-l border-white/5 pl-6 pr-8 py-2">
            <div class="text-center text-xl font-semibold leading-7 text-white">
                Factura final
            </div>
            <div class="mt-3 border-white/5 border rounded-md text-center text-base font-semibold leading-7 text-white">
                Productos
            </div>
            <div>
                <textarea readonly class="resize-none outline-none mt-4 w-full pl-2 rounded-md border border-white/5 bg-transparent" name="" id="" cols="30" rows="10">
                </textarea>
            </div>
            <div class="mt-3 border-white/5 border rounded-md text-center text-base font-semibold leading-7 text-white">
                Total
                <div class="mb-1 border-t border-white/5 text-center text-xl font-semibold leading-7 text-white">
                    100.00
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-4 mb-3">
                <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Realizar venta
                </button>
                <button type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-400">
                    Cancelar venta
                </button>
            </div>
        </div>
    </div>
    <style>
        .CardDiv{
            display: grid;
            grid-template-columns: 125px 1fr;
        }
    </style>
@endsection