<div class="mx-auto">
    {{-- In work, do what you enjoy. --}}


                    <form class="w-1/2 p-6 mx-auto" method="POST" enctype="multipart/form-data" action="{{route('service.store')}}">
                    	@if(session()->has('success')) 

  <div class="bg-green-200 text-gray-500 py-4 text-md">Successfully saved</div>
                    	@endif

    <h1 class="w-3/4 h1 my-4 font-bold text-teal-600">
ADD NEW SERVICE
    </h1>
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="service" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Service Name') }}:
                            </label>

                            <input wire:model="name" id="service" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('service') border-red-500 @enderror" name="service" value="{{ old('service') }}" required autocomplete="service" autofocus>

                            @error('service')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Service Description') }}:
                            </label>

                            <textarea wire:model="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror" name="description" required rows="5"></textarea>

                            @error('description')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>                        <div class="flex flex-wrap mb-6">
                            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Image Upload') }}:
                            </label>

                            <input wire:model="image" id="image" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image') border-red-500 @enderror" name="image" required>

                            @error('image')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <div class="flex flex-wrap items-center">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Create now') }}
                            </button>

                        </div>
                    </form>
</div>
