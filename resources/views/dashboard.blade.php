<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-2"  style="text-shadow: 2px 2px rgb(110, 154, 204);font-weight:bold;font-family: monospace; -webkit-text-stroke: 0.4px #000;  color:white;font-size:20px;"  >
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>
    <div id="ss-holder" class="ss-holder row" style=" display: block;height: 550px;position: relative;" >
        <div id="effects" class="col">
            <article id="articlehold">
        
            {{ $i=0}}

            @foreach($books as $book)
                @php
                    $i++
                @endphp 
                <section style="">
                    <div class="ss-row  go-anim">
                        <div class="ribbon" style="color:#38486E;"><i class="icon-time icon-large"></i><b>    {{$book->published_date}}</b>
                            <div class="seclevelribbon">
                                <div class="thirdlevelribbon">
                                    <div class="ribbon-sec" style="color:#38486E;"><b>{{$book->cost}} $</b></div>
                                </div>
                            </div>
                        </div>
                        <div class="hover-effect h-style">
                            <a href="images/{{$book->file_path}}" rel="prettyPhotoImages[1]">
                                <img src="images/{{$book->file_path}}" class="clean-img">
                                <div class="mask"><i class="icon-search"></i>
                                    <span class="img-rollover"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                @endforeach
            </article>
            <div class="ss-nav-arrows-next">
                <i id="next-arrow" class=" icon-angle-right " style="color:gray;"></i>
            </div>
            <div class="ss-nav-arrows-prev" style="">
                <i id="prev-arrow" class="icon-angle-left" style="color:gray;"></i>
            </div>
        </div>
    </div>
    <input type="hidden"  id="count" value="{{$i}}">
    
    <div class="py-12 mt-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 " >
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg " >   
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
