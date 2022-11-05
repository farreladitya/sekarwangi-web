<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <title>Admin | Sekarwangi Florist</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        {{-- Icon --}}
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </head>
    <body class="font-sans antialiased bg-def">
        <div class="px-10 py-10">
            <div class="bg-def-blur">
                <div class="container mx-auto">
                    <div class="grid grid-cols-6 ">
                        <div class="navigation">
                            <img  src="{{ asset('img/logo.png') }}" class="mb-10 px-2 py-2" alt="Sekarwangi Florist">
                            <ul>
                                <li class="list text-xl font-bold active">
                                    <a href="/dashboard">
                                    <span class="icon "><ion-icon name="analytics-outline"></ion-icon>
                                    </span>
                                    <span class="title">Product</span>
                                    </a>
                                </li>
                                <li class="list text-xl font-bold">
                                    <a href="/dashboard/category">
                                    <span class="icon "><ion-icon name="analytics-outline"></ion-icon>
                                    </span>
                                    <span class="title">Category</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-span-4 flex justify-center bg-center">
                            <div class="flex flex-col">
                                   <div><img  src="{{ asset('img/jumbotron-1.png') }}" class="px-2 py-2 mb-3" style="width: 750px" alt="Sekarwangi Florist"></div>
                                   <div class="py-1 text-4xl font-semibold">Product</div>
                                   <div class="py-3">
                                        <a href="/dashboard/tambah" class="text-black bg-def hover:bg-pink-300 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Add</a>
                                    </div>
                                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                                <tr>
                                                    <th scope="col" class="py-3 px-6">
                                                        Image
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        Name
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        Category
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        Price
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($products as $p)
                                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                                        <img  src="{{ url('/product_image/'.$p->image) }}" class="px-2 py-2 mb-3" style="width: 100px">
                                                    </th>
                                                    <td class="py-4 px-6">
                                                        {{ $p->name }}
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        {{ $p->category_id}}
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        @php
                                                        echo "Rp. " . number_format($p->price,0,",",".",);
                                                        @endphp
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        <a href="/dashboard/edit/{{ $p->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                        <a href="/dashboard/hapus/{{ $p->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                        </div>
                        <div class="flex justify-center bg-right">
                            <div class="flex flex-col">
                                    <div class="dropdown py-3">
                                        <button class="btn z-10 w-44 bg-def rounded divide-y divide-gray-100 shadow  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Hi, Admin
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="#">Main Menu</a></li>
                                          <form action="/logout" method="POST">
                                            @csrf
                                            <li><button type="submit" class="dropdown-item dropdown-item block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</button></li>
                                          </form>
                                        </ul>
                                      </div>

                              </div>
                        </div>
                      </div>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        export default {
            data() {
                return{
                    isOpen: false
                }
            }
        }
    </script>
    </body>
</html>
