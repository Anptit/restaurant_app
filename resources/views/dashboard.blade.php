@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 container text-center">
                    <div class="" style="display:flex; justify-content: space-evenly;">
                        <div class="col-sm4">
                            <a href="/management">
                                <h4>Management</h4>
                                <img width="50px" src="{{ asset('images/clipboard.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-sm4">
                            <a href="/management">
                                <h4>Management</h4>
                                <img width="50px" src="{{ asset('images/cash-machine.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-sm4">
                            <a href="/management">
                                <h4>Management</h4>
                                <img width="50px" src="{{ asset('images/report.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
