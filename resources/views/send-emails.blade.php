
<x-layout>

    <div class="mt-5 text-gray-800 dark:text-slate-400 font-bold flex justify-center">
        <h1 class="mb-2"> Send Bulk Emails Once. Limits is 300/d </h1>
    </div>

        <div class="max-w-2xl mx-auto p-4 bg-slate-300 dark:bg-slate-900 rounded-lg">


            <form method="POST" action="{{ route('sendBulkEmails.post') }}" enctype="multipart/form-data}">

                @csrf
                    <div class="mb-3">

                        <label for="userEmailSelect" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">From:</label>
                        <select class="bg-gray-50 border @error('email')
                              border-red-600
                             @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            id="userEmailSelect" name="user_email_id">
                            
                            @foreach($users as $user )
                                <option value="{{ $user->id }}">{{ $user->email }}</option>
                            @endforeach
                        </select>
                        @error('email')
                            <span class="text-red-500 text=sm"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">

                        <label for="userNameSelect" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">To:</label>
                      
                            <section class=" border border-green-400 p-2 bg-slate-300 dark:bg-slate-700  ">
                            <table class="table table-bordered min-w-full rounded-lg shadow-md text-left ">
                                <thead class="">
                                    <tr class="">
                                        <th> ID</th>
                                        <th> Company Name</th>
                                        <th> Company Email</th>
                                        <th> Action</th>
        
                                    </tr>
                                </thead>
                                <tbody class="py-4 px-6 border border-green-100" >
                                    @foreach ($businesses as $item )

                                  <tr class="border border-gray-400">
                                    <td> {{$item->id}}</td>
                                    <td> {{$item->name}}</td>
                                    <td> {{$item->email}}</td>
                                    <td class="px-4">
                                        <a class="text-white bg-red-300 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-1 py-0 me-2 mb-4 dark:bg-red-400 dark:hover:bg-red-500 focus:outline-none dark:focus:ring-red-800 " href="{{url('remove_email', $item->id)}}">X</a>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
        
                            </table>
                        </section>
                            
                        
                    </div>
                    <div class="mb-2">
                        <label for="default-input" 
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                        <input type="text" id="subject" name="subject"               
                        class=" bg-gray-50 border @error('subject')
                                  border-red-600
                                 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Subject">
                        @error('subject')
                            <span class="text-red-500 text=sm"> {{ $message }} </span>
                        @enderror
                    </div> 
                    <div class="mb-2">   
                        <label for="message" 
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
                        <textarea id="message" rows="4" name="body"
                        class="@error('body')
                                 border-red-600
                               @enderror
                        block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Compose Email..."></textarea>
                       
                        @error('body')
                        <span class="text-red-500 text=sm"> {{ $message }} </span>
                    @enderror     
                   </div>
                

                <div class="mb-4">
                    <footer>
                        <table>
                            <tr>
                                <img src="{{asset('images/logo/Nf3-Logo-Blue.png')}}" alt="Knightf3 logo" style="width: 100px; height:auto"/>
                                    
                                </td>
                            </tr>
                            <tr> 
                                <td> 
                                    <p>Best Regards,</p>
                                    <p> Knighf3 Buisness Solutions</p>
                                    <p>Address: </p>
                                    <p>Email: info@knightf3.co.za</p>
                                </td>
                            </tr>
                        </table>
                    </footer>
                </div>
    
                <div class="mb-6">
                    <button type="submit" 
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Send Emails</button>
    
            </form>
    
        </div>
      
</x-layout>
