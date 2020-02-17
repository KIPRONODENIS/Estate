<div>
    {{-- In work, do what you enjoy. --}}

    @if($success=="true")
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert" wire:transition.fade>
  <strong class="font-bold">Thanks</strong>
  <span class="block sm:inline">You have Ordered {{$service['name']}}.</span>
  <button class="absolute top-0 bottom-0 right-0 px-4 py-3" >
    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </button>

</div>
    @endif
    <div class="bg-white shadow p-5 w-1/3 mx-auto mt-5"><form class="w-full max-w-sm" wire:submit.prevent="submit">
	<div class="h-10"></div>

	    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Order From
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username"  value="{{$user['name']}}" disabled>
    </div>

  <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
     Service:
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username"  value="{{$service['name']}}" disabled>
    </div>

  <div class="flex items-center border-b border-b-2 border-teal-500 py-4">
    <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" name="date" type="date" placeholder="Jane Doe" wire:model="date" aria-label="Full name">

                            @error('date')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror

  </div>
    <div class="flex items-center border-b border-b-2 border-teal-500 py-4">
    <input name="estate" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Which Estate Do you live?" aria-label="Full name" wire:model="estate">
                                @error('estate')
                                <p class=" text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
    <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
      Order Now
    </button>



  </div>

</form>
<div class="h-10"></div>
</div>
</div>
