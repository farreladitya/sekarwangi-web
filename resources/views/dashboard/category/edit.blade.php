<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <title>Admin | Edit Category</title>

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
                                <ul>
                                    <li class="list text-xl font-bold">
                                        <a href="/dashboard">
                                        <span class="icon "><ion-icon name="analytics-outline"></ion-icon>
                                        </span>
                                        <span class="title">Product</span>
                                        </a>
                                    </li>
                                    <li class="list text-xl font-bold active">
                                        <a href="dashboard/category">
                                        <span class="icon "><ion-icon name="analytics-outline"></ion-icon>
                                        </span>
                                        <span class="title">Category</span>
                                        </a>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                        <div class="col-span-4 bg-center">
                            <div class="container">
                            <div class="flex flex-col">
                                   <div class="text-4xl py-1 mt-3 font-semibold">Category</div>
                                   <div class="py-3">
                                        <a href="/dashboard" class="text-black bg-def hover:bg-pink-300 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Back</a>
                                    </div>
                                    <div class="px-3 py-3">
                                        @foreach($categories as $c)
                                        <form action="/dashboard/category/update" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="" name="namamitra">
                                            <div class="mb-4">
                                                <label class="block mb-2 text-sm font-medium text-gray-900" for="username">
                                                  Name
                                                </label>
                                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  type="text" placeholder="Name" name="name" value="{{ $c->name }}" required="required">
                                              </div>
                                            <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Submit</button>
                                        </form>
                                        @endforeach
                                    </div>

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
