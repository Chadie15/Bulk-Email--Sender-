
<x-layout>
    <div class="mt-5 text-gray-800 dark:text-slate-400 font-bold flex justify-center">
         Filled in and upload your excelsheets </div>
         <form action="{{ route('upload_file.import_excel')}}" method="POST">
            @csrf
            <button type="submit" 
            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 mt-3 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800"> Emails</a>
            </button>

        </form>
</x-layout>
    