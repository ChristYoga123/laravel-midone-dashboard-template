@extends('layouts.dashboard.app')

@section('content')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Datatable
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <button class="button text-white bg-theme-1 shadow-md mr-2">Add New Product</button>
        <div class="dropdown relative ml-auto sm:ml-0">
            <button class="dropdown-toggle button px-2 box text-gray-700">
                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
            </button>
            <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                <div class="dropdown-box__content box p-2">
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="file-plus" class="w-4 h-4 mr-2"></i> New Category </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> New Group </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BEGIN: Datatable -->
<div class="intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">PRODUCT NAME</th>
                <th class="border-b-2 text-center whitespace-no-wrap">IMAGES</th>
                <th class="border-b-2 text-center whitespace-no-wrap">REMAINING STOCK</th>
                <th class="border-b-2 text-center whitespace-no-wrap">STATUS</th>
                <th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">Nike Tanjun</div>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">Nike Tanjun</div>
                </td>
                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-12.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                        </div>
                    </div>
                </td>
                <td class="text-center border-b">108</td>
                <td class="w-40 border-b">
                    <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">Dell XPS 13</div>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">Dell XPS 13</div>
                </td>
                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-9.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-10.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-12.jpg">
                        </div>
                    </div>
                </td>
                <td class="text-center border-b">113</td>
                <td class="w-40 border-b">
                    <div class="flex items-center sm:justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">Samsung Galaxy S20 Ultra</div>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">Samsung Galaxy S20 Ultra</div>
                </td>
                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-5.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-3.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-12.jpg">
                        </div>
                    </div>
                </td>
                <td class="text-center border-b">70</td>
                <td class="w-40 border-b">
                    <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">Sony Master Series A9G</div>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">Sony Master Series A9G</div>
                </td>
                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-9.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                        </div>
                    </div>
                </td>
                <td class="text-center border-b">118</td>
                <td class="w-40 border-b">
                    <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">Nikon Z6</div>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">Nikon Z6</div>
                </td>
                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-10.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-15.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-14.jpg">
                        </div>
                    </div>
                </td>
                <td class="text-center border-b">50</td>
                <td class="w-40 border-b">
                    <div class="flex items-center sm:justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">Samsung Galaxy S20 Ultra</div>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">Samsung Galaxy S20 Ultra</div>
                </td>
                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-14.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-4.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-7.jpg">
                        </div>
                    </div>
                </td>
                <td class="text-center border-b">50</td>
                <td class="w-40 border-b">
                    <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">Sony A7 III</div>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">Sony A7 III</div>
                </td>
                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-6.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-3.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-13.jpg">
                        </div>
                    </div>
                </td>
                <td class="text-center border-b">55</td>
                <td class="w-40 border-b">
                    <div class="flex items-center sm:justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">Sony Master Series A9G</div>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">Sony Master Series A9G</div>
                </td>
                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-5.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-2.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-13.jpg">
                        </div>
                    </div>
                </td>
                <td class="text-center border-b">50</td>
                <td class="w-40 border-b">
                    <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">Nike Tanjun</div>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">Nike Tanjun</div>
                </td>
                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-15.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-2.jpg">
                        </div>
                    </div>
                </td>
                <td class="text-center border-b">50</td>
                <td class="w-40 border-b">
                    <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">Samsung Galaxy S20 Ultra</div>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">Samsung Galaxy S20 Ultra</div>
                </td>
                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-10.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-7.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                        </div>
                    </div>
                </td>
                <td class="text-center border-b">68</td>
                <td class="w-40 border-b">
                    <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- END: Datatable -->
@endsection