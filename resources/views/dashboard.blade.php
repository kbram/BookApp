<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-2"
            style="text-shadow: 2px 2px rgb(110, 154, 204);font-weight:bold;font-family: monospace; -webkit-text-stroke: 0.4px #000;  color:white;font-size:20px;">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>
    <div id="ss-holder" class="ss-holder row" style=" display: block;height: 550px;position: relative;">
        <div id="effects" class="col">
            <article id="articlehold">

                {{ $i = 0 }}

                @foreach ($books as $book)
                    @php
                    $i++
                    @endphp
                    <section style="">
                        <div class="ss-row  go-anim">
                            <div class="ribbon" style="color:#38486E;"><i class="icon-time icon-large"></i><b>
                                    {{ $book->published_date }}</b>
                                <div class="seclevelribbon">
                                    <div class="thirdlevelribbon">
                                        <div class="ribbon-sec" style="color:#38486E;"><b>{{ $book->cost }} $</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hover-effect h-style">
                                <a href="images/{{ $book->file_path }}" rel="prettyPhotoImages[1]">
                                    <img src="images/{{ $book->file_path }}" class="clean-img">
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
    <input type="hidden" id="count" value="{{ $i }}">

    <div class="py-12 mt-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">
                <div>
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div>
                            <div class="flex-shrink-0 flex items-center">
                                <a href="{{ route('dashboard') }}">
                                    <img class="h-20 w-20" src="{{ asset('images/book.png') }}" />
                                </a>
                            </div>

                        </div>

                        <div class="mt-8 text-2xl">
                            Welcome to your Book Store application!
                        </div>

                        <div class="mt-6 text-gray-500">
                            The features of digital wallets bring value both for ordinary users and businesses. Here is
                            the list of the most significant ones.
                            Having all the necessary cards and other important data in an app, there is no need for
                            keeping dozens of cards and papers inside of a wallet, purse or backpack as well as for
                            wasting time searching for them. Everything you need is close at hand, easily managed, and
                            easy to use.Such an app allows the queues in the stores to move faster since the payment is
                            done in less than a minute. In case of online shopping, the digital wallet saves time on
                            entering the credit card details and identification because everything is already confirmed
                            within the app. Better expenses tracking. The information about all the transactions you do
                            is stored inside the app which allows you to analyze it after each week or month in order to
                            control the expenses better. If it is hard for you to stay in a budget, you can set up the
                            limits for particular categories of expenses that will prevent you from
                        </div>
                    </div>

                    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">

                                <i class="fa fa-money fa-2x" aria-hidden="true"></i>
                                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a
                                        href="/dashboard">Total Payment Details</a></div>
                            </div>

                            <div class="ml-12 ">
                                <div class="mt-2 text-sm text-gray-500" id="chart">

                                </div>


                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg> -->
                                <i class="fa fa-book fa-2x" aria-hidden="true"></i>
                                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a
                                        href="/dashboard">Book vise Report</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-sm text-gray-500" id="chart1">

                                </div>


                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 " align="center">
                            <div class="flex items-center">
                                <i class="fa fa-history fa-2x" aria-hidden="true"></i>
                                <div class=" text-lg text-gray-600 leading-7 font-semibold"><a href="/dashboard">
                                        Payment History</a></div>
                            </div>
                            <br>
                            <div class="text-center p-5">
                                <div class="ml-12" id="chart2">

                                </div>
                            </div>
                        </div>




                    </div>
                </div>
                <div class="row p-2">

                    <div class="card-body">
                        <div class="form-group has-feedback  ">

                            <label for="start_date" class="col-md-3 control-label">Stat Date</label>
                            <div class="col-md-9">
                                <div class="input-group">

                                    <input type="date" id="start_date" name="start_date" class="form-control"
                                        placeholder="Stat Date" />
                                </div>

                            </div>
                        </div>

                        <div class="form-group has-feedback  ">

                            <label for="end_date" class="col-md-3 control-label">End Date</label>
                            <div class="col-md-9">
                                <div class="input-group">

                                    <input type="date" id="end_date" name="end_date" class="form-control"
                                        placeholder="End Date" />
                                </div>

                            </div>
                        </div>

                        <input type="button" id="search" name="end_date" class="btn btn-success col-2" value="Search" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <canvas id="myChart" width="400" height="400"></canvas>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    </script>
</x-app-layout>
