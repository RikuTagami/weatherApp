<!DOCTYPE html>
<html>

<head>
    <title>日本地図表示</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>

    <form id="weather-form" action="{{ route('show.submit') }}" method="POST">
        <h1 style="text-align: center">クリックして <select name="days" id="days" class="select-days">
                <option value="1">今日</option>
                <option value="2">明日</option>
                <option value="3">明後日</option>
                <option value="4">三日後</option>
                <option value="5">四日後</option>
                <option value="6">五日後</option>
                <option value="7">六日後</option>
            </select>の天気を調べましょう</h1>
        @csrf
        <input type="hidden" id="prefecture-input" name="address">
        <input type="hidden" id="latitude-input" name="lat">
        <input type="hidden" id="longitude-input" name="lng">
        <input type="hidden" id="dataId-input" name="dataId">
    </form>

    <div class="japan-map-container">
        {{-- SVG内容を直接ここに挿入 --}}
        {!! file_get_contents(public_path('images/japan-map.svg')) !!}
    </div>

    <script type="module" src="{{ asset('/js/home.js') }}"></script>
</body>

</html>
