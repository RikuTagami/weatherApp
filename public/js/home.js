import prefectureData from './Lists/prefectureData.js';

// クリックイベントを設定
document.querySelectorAll('.prefecture').forEach(prefecture => {
    prefecture.addEventListener('click', function () {
        const prefectureClass = this.getAttribute('class').split(' ')[0];
        const data = prefectureData[prefectureClass];

        // 選択された日数を取得
        const howManyDays = document.getElementById('days').value;
        // 本日の年月日を取得、選択された日数に応じてずらす
        const now = new Date();
        const todayTime =  now.toLocaleString("ja-JP", { timeZone: "Asia/Tokyo" });
        const today = todayTime.split(' ')[0].replaceAll('/', '-');
        // テーブル検索用のid
        const dataId = `${today}-${data.id}-${howManyDays}`;

        // 都道府県の情報をセットして送信
        if (data) {
            document.getElementById('prefecture-input').value = data.name;
            document.getElementById('latitude-input').value = data.lat;
            document.getElementById('longitude-input').value = data.lng;
            document.getElementById('dataId-input').value = dataId;
            document.getElementById('weather-form').submit();
        }
    });
});
