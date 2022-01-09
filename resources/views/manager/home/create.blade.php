<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="row px-0 justify-content-center" style="">
                    <div class="shadow col-sm-8 col-lg-5 bg-white sm:rounded-lg text-center px-0 py-4 mt-3 mr-2 ">
                        <form method="post" action="{{(route('home.store'))}}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">نام ساختمان </label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">ادرس</label>
                                <textarea type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>



                </div>

        </div>
    </div>
</x-app-layout>
