<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.min.css">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>天気情報</title>
</head>

<body>
    @if (isset($results) && is_array($results) && count($results) > 0)
        <div class="daily-container">
            <h1 class="prefecture-h1">{{ $results[0] }}</h1>
            <h2 class="date-h2">{{ $results[1] }}</h2>
            <div class="weather-daily">
                <h3 id="weather-daily" class="daily-h3">{{ $results[2][0] }}</h3>
                <i class='wi {{ $results[2][1] }} daily-icon'></i>
            </div>
        </div>


        <!-- 午前の天気データを表示 -->
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    @for ($i = 0; $i < 12; $i++)
                        <th>{{ $i }}時</th> <!-- 午前の時間 -->
                    @endfor
                </tr>
            </thead>
            <tbody>
                <tr>
                    @for ($i = 0; $i < 12; $i++)
                        <td><i class='wi {{ $results[3][$i][1] }} icon-hour'></i></td> <!-- 午前の天気アイコン -->
                    @endfor
                </tr>
            </tbody>
        </table>

        <!-- 午後の天気データを表示（午前の表との間にスペースを空ける） -->
        <div class="table-gap"></div>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    @for ($i = 12; $i < 24; $i++)
                        <th>{{ $i }}時</th> <!-- 午後の時間 -->
                    @endfor
                </tr>
            </thead>
            <tbody>
                <tr>
                    @for ($i = 12; $i < 24; $i++)
                        <td><i class='wi {{ $results[3][$i][1] }} icon-hour'></i></td> <!-- 午後の天気アイコン -->
                    @endfor
                </tr>
            </tbody>
        </table>
        <div class="daily-container">
            <a href="http://localhost/home" class="return-button">戻る</a>
        </div>
    @else
        <div class="daily-container">
            <h1 class="prefecture-h1">天気データがありません。</h1>
        </div>
    @endif
    <script src="{{ asset('/js/dailyWeather.js') }}"></script>
</body>

</html>
