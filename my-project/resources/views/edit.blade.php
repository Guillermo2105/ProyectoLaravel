<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Formulario
                    <form method="post" action="{{route('products.update', ['id' => $product['product']->getId()])}}" class="w-full max-w-sm">
                        @csrf
                        @method('put')
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3"> <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name"> Nombre producto </label> </div>
                            <div class="md:w-2/3"> <input name="name" value="{{ $product['product']->getName() }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"> </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3"> <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password"> Descripcion </label> </div>
                            <div class="md:w-2/3"> <input name="description" value="{{ $product['product']->getDescription() }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-descripcion" type="text"> </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3"> <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password"> Precio </label> </div>
                            <div class="md:w-2/3"> <input name="price" value="{{ $product['product']->getPrice() }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-precio" type="number"> </div>
                        </div>
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3"> <button class="shadow bg-blue-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-Black font-bold py-2 px-4 rounded" type="submit"> Edit </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
</x-app-layout>