import iconColor from './Functions/iconColor.js';

// アイコンの要素を取得
const dailyIcon = document.getElementById('daily-icon');
const weatherName = document.getElementById('weather-daily');
// 天気に応じた色を割り当て
dailyIcon.style.color = iconColor(dailyIcon.className);
weatherName.style.color = iconColor(dailyIcon.className);

// 時間毎のアイコンを取得
for (let i = 0;i <24;i++) {
    const hourlyIcon = document.getElementById(`td-${i}`);
    hourlyIcon.style.color = iconColor(hourlyIcon.className);
}
