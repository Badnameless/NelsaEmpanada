@extends('layout')
@section('title', 'Productos')
@section('SiteName', 'Productos')
@section('selectedProduct', 'bg-gray-800 text-white')
@section('selectedSales', 'text-gray-400 hover:text-white hover:bg-gray-800')
@section('selectedConsult', 'text-gray-400 hover:text-white hover:bg-gray-800')
@section('content')
<div class="flex my-4 mx-8 space-x-5 justify-end">
  <div x-data="{ open: false }">
    <button @click="open = true" type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold
     text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 
    focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Agregar categoria
    </button>
    <div x-show="open" @click.away="open = false" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
      <div class="bg-white p-4 rounded shadow-md right-0">
          <!-- Contenido del modal -->
        <div class="flex mb-4">
          <p class="font-medium">Agregar categoria</p>
          <button @click="open = false" class="bg-transparent text-white ml-36"><i class="fa-solid fa-x text-black"></i></button>            
        </div>
        <p class="mb-4">Nombre de la categoria</p>
        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 bg-white/5 py-1 text-black shadow-sm ring-1 ring-inset ring-indigo-500 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-2 pl-1.5 mb-6">
      
        <button type="submit" class="mt-2 rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold
         text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 
          focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Agregar categoria
        </button>  
      </div>
  </div>
</div>

  <div x-data="{ open: false }">
    <!-- Botón para abrir el modal -->
    <button @click="open = true" type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold
     text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 
      focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Agregar Producto
    </button>

    <!-- Modal -->
    <div x-show="open" @click.away="open = false" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
        <div class="bg-white p-4 rounded shadow-md right-0">
            <!-- Contenido del modal -->
          <div class="flex mb-4">
            <p class="font-medium">Agregar producto</p>
            <button @click="open = false" class="bg-transparent text-white ml-36"><i class="fa-solid fa-x text-black"></i></button>            
          </div>
          <p class="mb-1">Nombre del producto</p>
          <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 bg-white/5 py-1 text-black shadow-sm ring-1 ring-inset ring-indigo-500 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-2 pl-1.5 mb-6">
            
          <p class="mb-1">Precio</p>
          <input type="number" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 bg-white/5 py-1 text-black shadow-sm ring-1 ring-inset ring-indigo-500 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-2 pl-1.5 mb-6">
          
          <p class="mb-1">Categoria</p>
          <select id="timezone" name="timezone" class="block w-full rounded-md border-0 bg-white/5 py-1 text-black shadow-sm ring-1 ring-inset ring-indigo-500 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 [&amp;_*]:text-black mb-6">
            <option>Pacific Standard Time</option>
            <option>Eastern Standard Time</option>
            <option>Greenwich Mean Time</option>
        </select>          
          <button type="submit" class="mt-2 rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold
           text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 
            focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Agregar producto
          </button>  
        </div>
    </div>
  </div>
</div>

 
 <div class=" flex flex-col mr-8 ml-8">
    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
        <div class="overflow-hidden ring-1 ring-white ring-opacity-5">
          <table class="min-w-full">
            <thead class="bg-gray-400">
              <tr>
                <th scope="col" class="bg-gray-800 text-center text-sm font-semibold text-white border-r border-b-1 border-gray-200">Nombre Producto</th>
                <th scope="col" class="bg-gray-800 text-center text-sm font-semibold text-white border-r border-b-1 border-gray-200">Precio</th>
                <th scope="col" class="bg-gray-800 text-center text-sm font-semibold text-white border-r border-b-1 border-gray-200">Categoria</th>
                <th scope="col" class="bg-gray-800 relative py-2 pl-3 pr-4  text-sm font-semibold text-white text-center border-gray-200">Acciones</th>
              </tr>
            </thead>
            <tbody id="tableBody" class="bg-gray-400">
                <td class="border-r border-b-1 border-gray-200 text-center">prueba 1</td>
                <td class="border-r border-b-1 text-center">prueba 2</td>
                <td class="border-r border-b- text-center">prueba 3</td>               
                <td class="py-1">
                  <div class="flex space-x-5 justify-center">
                    <div x-data="{ open: false }">
                      <button @click="open = true" type="submit"><i class="fa-solid fa-pencil text-white bg-indigo-500 p-2 rounded-full"></i></button>
                      <div x-show="open" @click.away="open = false" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
                        <div class="bg-white p-4 rounded shadow-md right-0">
                            <!-- Contenido del modal -->
                          <div class="flex mb-4">
                            <p class="font-medium">Modificar producto</p>
                            <button @click="open = false" class="bg-transparent text-white ml-36"><i class="fa-solid fa-x text-black"></i></button>            
                          </div>
                          <p class="mb-1">Nombre del producto</p>
                          <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 bg-white/5 py-1 text-black shadow-sm ring-1 ring-inset ring-indigo-500 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-2 pl-1.5 mb-6">
                            
                          <p class="mb-1">Precio</p>
                          <input type="number" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 bg-white/5 py-1 text-black shadow-sm ring-1 ring-inset ring-indigo-500 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-2 pl-1.5 mb-6">
                          
                          <p class="mb-1">Categoria</p>
                          <select id="timezone" name="timezone" class="block w-full rounded-md border-0 bg-white/5 py-1 text-black shadow-sm ring-1 ring-inset ring-indigo-500 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 [&amp;_*]:text-black mb-6">
                            <option>Pacific Standard Time</option>
                            <option>Eastern Standard Time</option>
                            <option>Greenwich Mean Time</option>
                        </select>          
                          <button type="submit" class="mt-2 rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold
                           text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 
                            focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Modificar Producto
                          </button>  
                        </div>
                    </div>
                    </div>
                    <div x-data="{ open: false }">
                      <button @click="open = true" type="submit"><i class="fa-solid fa-trash-can bg-red-500 p-2 rounded-full text-white"></i></button>
                      <div x-show="open" @click.away="open = false" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
                        <div class="bg-white p-4 rounded shadow-md right-0">
                            <!-- Contenido del modal -->
                          <div class="mb-4">
                            
                            <button @click="open = false" class="bg-transparent text-white ml-64"><i class="fa-solid fa-x text-black"></i></button>            
                            <p class="font-medium text-center mt-2">¿Desea eliminar este producto?</p>
                          </div>
                          <div class="flex space-x-5 justify-center">                                  
                          <button type="submit" class="mt-2 rounded-md bg-red-500 px-3 py-2 text-sm font-semibold
                           text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 
                            focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Si</button>

                            <button @click="open = false"   type="submit" class="mt-2 rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold
                           text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 
                            focus-visible:outline-offset-2 focus-visible:outline-indigo-500">No</button>
                          </div>
                        </div>
                    </div>
                    </div>
                  </div>
                  </td>
                      </div>
                    </div>
                  </div>                       
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
    <!-- Contenido específico de la página -->
@endsection






