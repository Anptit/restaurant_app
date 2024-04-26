@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 container text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="list-group">
                                    <a href="" class="list-group-item list-group-item-action">
                                        <i class="fa-solid fa-bars"></i>
                                        Category
                                    </a>
                                    <a href="" class="list-group-item list-group-item-action">
                                        <i class="fa-solid fa-burger"></i>
                                        Menu</a>
                                    <a href="" class="list-group-item list-group-item-action">
                                        <i class="fa-solid fa-chair"></i>
                                        Table
                                    </a>
                                    <a href="" class="list-group-item list-group-item-action">
                                        <i class="fa-solid fa-users-gear"></i>    
                                        User
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <i class="fa-solid fa-bars"></i>
                                    Category
                                <a href="/management/category/create" class="btn btn-success btn-sm float-right">
                                    <i class="fas fa-plus"></i> 
                                    Create Category
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
