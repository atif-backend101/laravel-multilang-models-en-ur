<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(app()->getLocale() == "en")
                    <a href="{{ route('posts.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Add new post</a>
                    @else
                    <a href="{{ route('posts.create') }}" style="background:black;color:white;float:right;">{{__('Add new post')}}</a>
                    @endif
                    <div class="">
                      @if(app()->getLocale() == "en")
                         <table class="table table-striped" id="table-1" style="float:left;">                        
                    <thead>
                      <tr>
                        <th style="width:25px;">#</th>
                        <th style="width:200px;">title</th>
                        <th style="width:200px;">desc</th>
                      </tr>
                    </thead>    
                    <tbody>
                      @foreach($posts as $post)
                      <tr>
                        <td>1</td>
                        <td style="width:200px;">{{$post->title_en}} </td>
                        <td style="width:200px;">{{$post->full_text_en}}... </td>                                             
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @else
                  <table class="table table-striped" id="table-1" style="float:right;">                              
                    <thead>
                      <tr>
                        <th style="width:25px;">#</th>
                        <th style="width:200px;">title</th>
                        <th style="width:200px;">desc</th>                        
                      </tr>
                    </thead>    
                    <tbody>
                      @foreach($posts as $post)
                      <tr>
                        <td>1</td>
                        <td style="width:200px;">{{$post->title_en}} </td>
                        <td style="width:200px;">{{$post->full_text_en}} </td>                                             
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @endif 
                  
              </div>
          </div>
      </div>
  </div>
</div>
</x-app-layout>
