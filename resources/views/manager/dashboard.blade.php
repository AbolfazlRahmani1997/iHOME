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
                        @if(count($home)==0)
                            <h1 class="mt-3">شما هنوز ساختمانی اضافه نکردید </h1>
                            <button class="btn-danger btn btn-sm mt-4">اضافه کردن</button>
                        @else
                            <div class="home_list px-0 ">
                                @foreach($home as $item)

                                    <div class="col-6   rounded mx-3 justify-content-center align-content-center d-flex"
                                         style="text-align: right; direction: rtl; height: 300px;background-color: rgba(124,141,168,0.2);">

                                      <div class=" col-12 text-center align-content-center d-block justify-content-center mt-4">
                                        <h1 class="fw-bold">   <label for=""> ساختمان</label> {{$item->name}}</h1>
                                        <h1 class="fw-bold"><label for="">تعداد واحد های فعال: </label>{{$item->cells_count}}</h1>

                                          <div class="d-block mt-5 align-items-end row d-flex justify-content-center">
                                              <div class="counter ">
                                                  <div class="counter-icon">
                                                      <i class="fa fa-chart-line-down"></i>
                                                      <h5>{{$item->cell_request_count}}</h5>
                                                  </div>
                                                  <h3>درخواست </h3>

                                              </div>
                                              <div class="counter mx-0 pink ">
                                                  <div class="counter-icon">
                                                      <i class="fa fa-globe"></i>
                                                  </div>
                                                  <h3>اعلانات</h3>

                                              </div>

                                              <div class="counter blue">
                                                  <a href="{{route('home.cell',$item->id)}} ">
                                                  <div class="counter-icon">
                                                      <i class="fa fa-globe"></i>
                                                  </div>
                                                  <h3> مشاهده واحد</h3>
                                                  </a>
                                              </div>

                                          </div>
                                      </div>

                                    </div>

                                @endforeach
                                <div class="shadow rounded mx-3 justify-content-center d-flex align-items-center"
                                     style="height: 300px;background-color: rgba(74,85,104,0.49);">
                                    <div class="justify-content-center text-center" ><h1 > اضافه کردن ساختمان</h1> <a href=""> <img class="text-center mt-2 mx-auto" src="/icon/plus.png" width="50px" alt=""></a> </div>


                                </div>
                            </div>

                        @endif

                    </div>
                    <div class="shadow col-sm-8 col-lg-4 bg-white sm:rounded-lg text-center px-0 py-4 mt-3">
                        @if(count($home)==0)
                            <h1 class="mt-3">شما هنوز ساختمانی اضافه نکردید </h1>
                            <button class="btn-danger btn btn-sm mt-4">اضافه کردن</button>
                        @else
                            <div class="home_list px-0">
                                @foreach($home as $item)
                                    <div class="shadow rounded mx-3 justify-content-center align-content-center d-flex"
                                         style="text-align: right; direction: rtl; height: 300px;background-color: rgba(74,85,104,0.49);">
                                      <div class="align-content-center d-block justify-content-center mt-4">
                                        <h1 class="fw-bold">   <label for="">نام ساختمان:</label> {{$item->name}}</h1>
                                        <h1 class="fw-bold"><label for="">تعداد واحد های فعال:</label>{{count($item->cells)}}</h1>
                                      </div>
                                      </div>
                                @endforeach
                                <div class="shadow rounded mx-3 justify-content-center  d-flex "
                                     style="height: 300px;background-color: rgba(74,85,104,0.49);"><h1>اضافه کردن</h1>
                                </div>
                            </div>

                        @endif

                    </div>

                </div>

        </div>
    </div>
</x-app-layout>
