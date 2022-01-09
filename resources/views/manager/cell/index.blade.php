<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="row px-0 justify-content-center" style="">

                    @foreach($cells as $cell)
                            <div style="direction: rtl" class="card bg-gray-200 hover:bg-gray-50 shadow  col-3 mx-1">
                            <div  class="card-header">
                            <lable>
                                واحد:
                            </lable>
                                {{$cell->unit_number}}
                            </div>
                                <div class="card-body" >
                                نام مالک:{{$cell->user->name}}
                                </div>
                                <div class="card-footer">
                                <div class="row justify-content-center">
                                    <button class="btn-success btn-sm btn col-3"style="font-size: 7pt">حذف</button>
                                    <button class="btn-danger btn-sm btn col-3 mx-1" style="font-size: 7pt">کد ساختمان</button>
                                    <button class="btn-warning btn-sm btn col-3 ">حذف</button>
                                </div>
                                </div>
                            </div>
                        @endforeach
                        <div style="direction: rtl" class="card bg-gray-200 hover:bg-gray-50 shadow  col-3 mx-1">
                            <div  class="card-header">
                                <lable>
                                   اضافه کردن واحد به ساختمان
                                </lable>

                            </div>
                            <div class="card-body" >
                                <button class="btn-danger btn-sm btn col-3 mx-1" style="font-size: 7pt">افزودن</button>
                            </div>

                        </div>


                </div>

        </div>
    </div>
</x-app-layout>
