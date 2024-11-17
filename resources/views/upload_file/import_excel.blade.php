<x-layout>

    <div class="mt-5 text-gray-800 dark:text-slate-400 font-bold flex justify-center">
        Filled in and upload your excelsheets 
    </div>
        <div class="max-w-2xl mx-auto p-4 bg-slate-300 dark:bg-slate-900 rounded-lg">

            <form action="{{ route('excel.post')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="default-input" 
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
                    <input type="text" id="default-input" name="name"               
                    class=" bg-gray-50 border @error('name')
                              border-red-600
                             @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('name')
                        <span class="text-red-500 text=sm"> {{ $message }} </span>
                    @enderror
                </div> 
                <div class="mb-6">
                    <label for="default-input" 
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="default-input" name="email"               
                    class=" bg-gray-50 border @error('email')
                              border-red-600
                             @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('email')
                        <span class="text-red-500 text=sm"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="default-input" 
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Spreadsheet</label>
                    <input type="file" id="file" accept=".xlsx, .xls, .cvs" name="excel-file"               
                    class=" bg-gray-50 border @error('file_sheet')
                              border-red-600
                             @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('file_sheet')
                        <span class="text-red-500 text=sm"> {{ $message }} </span>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <button type="submit" 
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Process</button>
    
                </div>
            </form>
    
        </div>
      
    </x-layout>

