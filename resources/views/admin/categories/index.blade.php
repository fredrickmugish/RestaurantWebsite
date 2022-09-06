<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        

<!----create------>
<div class="flex justify-end m-2 p-2">
    <a href="{{route('admin.categories.create')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Category</a>
</div>


<!-----Table------>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Image
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Description
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($categories as $category)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$category->name}}
                            </td>
                            
                            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <img src="{{Storage::url($category->image)}}" class="w-16 h-16 rounded">
                            </td>

                            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$category->description}}
                            </td>


                            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex space-x-3">
                                <a href="{{route('admin.categories.edit', $category->id)}}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
                                <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                method="POST"
                                action="{{route('admin.categories.destroy', $category->id)}}"
                                onsubmit="return confirm('Are you sure');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                                </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
<!------form---------->

<div class="m-2 p-2">

    
</div>

        </div>
    </div>
</x-admin-layout>
