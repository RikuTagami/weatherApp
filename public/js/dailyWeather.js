import weatherImage from "./Lists/weatherImage.js";

// 背景画像の選択
const setImage = (url) => {
    document.body.style.backgroundImage = `url(${url})`;
}

document.addEventListener('DOMContentLoaded', function () {
    // h3要素を取得
    const weatherDaily = document.getElementById('weather-daily');
    switch (weatherDaily.innerText) {
        case '晴れ':
            setImage(weatherImage[0]);
            break;
        case '晴れ時々曇り':
            setImage(weatherImage[1]);
            break;
        case '曇り':
            setImage(weatherImage[2]);
            break;
        case '雪':
            setImage(weatherImage[3]);
            break;
        case '雷雨':
            setImage(weatherImage[4]);
            break;
        default:
            setImage(weatherImage[5]);
            break;
    }
});
