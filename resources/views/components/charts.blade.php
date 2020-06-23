<div class="lg:flex mb-4">
    <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-2xl shadow-xl bg-white rounded-lg mx-auto p-6 lg:w-3/5 mb-2">
        {!! $earnings_chart->container() !!}

        {!! $earnings_chart->script() !!}
    </div>
    <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-2xl shadow-xl bg-white rounded-lg mx-auto p-6 lg:ml-4 lg:w-2/5">
        {!! $statics_chart->container() !!}

        {!! $statics_chart->script() !!}
    </div>
</div>
