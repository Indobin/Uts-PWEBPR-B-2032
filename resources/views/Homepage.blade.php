<x-app>
    <x-slot name="heading">
        Home Page
    </x-slot>
    <h1>coba h1</h1>
    <p>coba p?</p>
    <div>
     {{-- @dd($contacts) --}}
     <table border="2" class="border">
      <thead class="border">
       <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Phone</th>
       </tr>
      </thead>
      <tbody>
       @foreach ($contacts as $data)
   
       <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data['name']}}</td>
        <td>{{$data['email']}}</td>
        <td>{{$data['phone']}}</td>
       </tr>
               
       @endforeach
      </tbody>
     </table>
    </div>
</x-app>