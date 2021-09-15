<div
    x-data="{chart:null}"
    x-init="chart = new Chartisan({
                el: '#login-chart',
                url: '@chart('login_chart')',
              hooks: new ChartisanHooks()
                .datasets('line')
                .legend()
                .tooltip(),
        });"
    class="mt-10 p-2">
    <div>
        <button x-on:click="chart.update({background:true})" type="button">Refresh chart</button>
    </div>
    <div class="p-10">
        <div id="login-chart" style="height: 300px;"></div>
    </div>
</div>

@push('scripts')
    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
@endpush
