// アイコンの色
const color = [
    '#ff8c00',
    '#b19777',
    '#000000',
    '#00c7cb',
    '#6500b7',
    '#188EDC'
]

const className = [
    'wi-day-sunny',
    'wi-day-cloudy',
    'wi-cloudy',
    'wi-snowflake-cold',
    'wi-thunderstorm'
];

// 天気に応じたアイコンの色を割り当てる
const iconColor = (cname) => {

    // 引数から必要な文字列のみ取り出す
    const cleanedClassName = cname.replace('daily-icon', '').replace('icon-hour', '').replace('wi', '').trim();
    switch (cleanedClassName) {
        case className[0]:
            return color[0]
        case className[1]:
            return color[1]
        case className[2]:
            return color[2]
        case className[3]:
            return color[3]
        case className[4]:
            return color[4]
        default:
            return color[5]
    }
}

export default iconColor;
