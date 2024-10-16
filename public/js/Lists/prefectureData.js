// 各都道府県の県庁所在地リスト
const prefectureData = {
    'hokkaido': { id: '01', name: '北海道', lat: 43.06417, lng: 141.34694 },
    'aomori': { id: '02', name: '青森県', lat: 40.82444, lng: 140.74 },
    'iwate': { id: '03', name: '岩手県', lat: 39.70361, lng: 141.1525 },
    'miyagi': { id: '04', name: '宮城県', lat: 38.26889, lng: 140.87194 },
    'akita': { id: '05', name: '秋田県', lat: 39.71861, lng: 140.1025 },
    'yamagata': { id: '06', name: '山形県', lat: 38.24056, lng: 140.36333 },
    'fukushima': { id: '07', name: '福島県', lat: 37.75, lng: 140.46778 },
    'ibaraki': { id: '08', name: '茨城県', lat: 36.34139, lng: 140.44667 },
    'tochigi': { id: '09', name: '栃木県', lat: 36.56583, lng: 139.88361 },
    'gunma': { id: '10', name: '群馬県', lat: 36.39111, lng: 139.06083 },
    'saitama': { id: '11', name: '埼玉県', lat: 35.85694, lng: 139.64889 },
    'chiba': { id: '12', name: '千葉県', lat: 35.60472, lng: 140.12333 },
    'tokyo': { id: '13', name: '東京都', lat: 35.68944, lng: 139.69167 },
    'kanagawa': { id: '14', name: '神奈川県', lat: 35.44778, lng: 139.6425 },
    'niigata': { id: '15', name: '新潟県', lat: 37.90222, lng: 139.02361 },
    'toyama': { id: '16', name: '富山県', lat: 36.69528, lng: 137.21139 },
    'ishikawa': { id: '17', name: '石川県', lat: 36.59444, lng: 136.62556 },
    'fukui': { id: '18', name: '福井県', lat: 36.06528, lng: 136.22194 },
    'yamanashi': { id: '19', name: '山梨県', lat: 35.66389, lng: 138.56833 },
    'nagano': { id: '20', name: '長野県', lat: 36.65139, lng: 138.18111 },
    'gifu': { id: '21', name: '岐阜県', lat: 35.39111, lng: 136.72222 },
    'shizuoka': { id: '22', name: '静岡県', lat: 34.97694, lng: 138.38306 },
    'aichi': { id: '23', name: '愛知県', lat: 35.18028, lng: 136.90667 },
    'mie': { id: '24', name: '三重県', lat: 34.73028, lng: 136.50861 },
    'shiga': { id: '25', name: '滋賀県', lat: 35.00444, lng: 135.86833 },
    'kyoto': { id: '26', name: '京都府', lat: 35.02139, lng: 135.75556 },
    'osaka': { id: '27', name: '大阪府', lat: 34.68639, lng: 135.52 },
    'hyogo': { id: '28', name: '兵庫県', lat: 34.69, lng: 135.19556 },
    'nara': { id: '29', name: '奈良県', lat: 34.68528, lng: 135.83278 },
    'wakayama': { id: '30', name: '和歌山県', lat: 34.22611, lng: 135.1675 },
    'tottori': { id: '31', name: '鳥取県', lat: 35.50361, lng: 134.23833 },
    'shimane': { id: '32', name: '島根県', lat: 35.47222, lng: 133.05056 },
    'okayama': { id: '33', name: '岡山県', lat: 34.66167, lng: 133.935 },
    'hiroshima': { id: '34', name: '広島県', lat: 34.39639, lng: 132.45944 },
    'yamaguchi': { id: '35', name: '山口県', lat: 34.18583, lng: 131.47139 },
    'tokushima': { id: '36', name: '徳島県', lat: 34.06583, lng: 134.55944 },
    'kagawa': { id: '37', name: '香川県', lat: 34.34028, lng: 134.04333 },
    'ehime': { id: '38', name: '愛媛県', lat: 33.83917, lng: 132.76583 },
    'kochi': { id: '39', name: '高知県', lat: 33.55972, lng: 133.53111 },
    'fukuoka': { id: '40', name: '福岡県', lat: 33.60639, lng: 130.41806 },
    'saga': { id: '41', name: '佐賀県', lat: 33.24944, lng: 130.29889 },
    'nagasaki': { id: '42', name: '長崎県', lat: 32.74472, lng: 129.87361 },
    'kumamoto': { id: '43', name: '熊本県', lat: 32.78972, lng: 130.74167 },
    'oita': { id: '44', name: '大分県', lat: 33.23806, lng: 131.6125 },
    'miyazaki': { id: '45', name: '宮崎県', lat: 31.91111, lng: 131.42389 },
    'kagoshima': { id: '46', name: '鹿児島県', lat: 31.56028, lng: 130.55806 },
    'okinawa': { id: '47', name: '沖縄県', lat: 26.2125, lng: 127.68111 }
};

export default prefectureData;
