<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" id="demo">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<script src="https://js.pusher.com/7.0.3/pusher.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

<script>
    /*Echo.channel('events')
            .listen('RealTimeMessage', (e) => {
                setTimeout(() => {
                    console.log('RealTimeMessage: ', e.message);
                }, 7000);

                document.getElementById('demo').innerHTML = e.message;

            });*/


    Echo.private('App.Models.User.1')
        .notification((notification) => {
            console.log(notification.message);

            document.getElementById("demo").innerHTML = notification.message;
        });

</script>
