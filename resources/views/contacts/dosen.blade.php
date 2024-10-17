@extends('components.app')

@section('title', 'Dosen')

    @section('content')
            <h1 class="text-3xl mb-6 font-bold tracking-tight text-gray-900 mt-16">Contacts Dosen</h1>
            <div class="flex items-center mb-4">
             <input type="text" placeholder="Search..." class="border border-gray-300 px-4 py-2 rounded-md w-1/3 mr-4" />
             <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Add Data</a>
         </div>
     <div class="overflow-y-auto max-h-96">
        <table class="min-w-full table-auto border-collapse border border-gray-300 text-left text-gray-700 bg-white">
          <thead class="bg-gray-800 text-white sticky top-0">
            <tr>
              <th class="px-4 py-2 border-b border-blue-400">No</th>
              <th class="px-4 py-2 border-b border-blue-400">Nama</th>
              <th class="px-4 py-2 border-b border-blue-400">Email</th>
              <th class="px-4 py-2 border-b border-blue-400">Phone</th>
              <th class="px-4 py-2 border-b border-blue-400">Nidn</th>
              <th class="px-4 py-2 border-b border-blue-400">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contacts as $data)
            <tr class="hover:bg-blue-100">
              <td class="px-4 py-2 border-b border-gray-300">{{ $loop->iteration }}</td>
              <td class="px-4 py-2 border-b border-gray-300">{{ $data['name'] }}</td>
              <td class="px-4 py-2 border-b border-gray-300">{{ $data['email'] }}</td>
              <td class="px-4 py-2 border-b border-gray-300">{{ $data['phone'] }}</td>
              <td class="px-4 py-2 border-b border-gray-300">{{ $data['nidn'] }}</td>
              <td class="px-4 py-2 border-b border-gray-300">
                <button class="bg-green-400 hover:bg-green-500 text-white font-bold py-1 px-3 rounded">Edit</button>
                <button class="bg-red-400 hover:bg-red-500 text-white font-bold py-1 px-3 rounded">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
      
    @endsection