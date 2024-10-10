// 背景の画像リスト
const weatherImage = [
    'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh95rO-PDdWDclBiauoMyn8_pn5VdCNiBujHVzTegPhE9u8FKK5T8KyFbAsIOUXcubRSqKg4lhGg9zBSVDeubWy0a1j61KuzqJjiPQVn2LgDz_tndZBnbNlPihlRjvQdir-NgL0uB09IH-x/s200/window01_hare.png',
    'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh3c89__LzVY8prMxewHPyV_3t_RApQpFp2r0xkxwiz7F5YNa9Z6ixxwgfCvTYdGOpRKey1G_f8Ht2syXlIjcst1doXBbYPKRfMc_0cDFZA5DGlfZ-ZcflEOb-bPJUbqJSm0tET1jnRxqhj/s200/window02_aozora.png',
    'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhtfb8NpABUrECR6uwJAykqVsQbO79Jjj0UyjHwSjzloFD_VhcwyHlwwdklWecPUNDd_DPiKuPEVdQbADFdVebskOoMC0GPcS_qA8I28ihHZGdui0qfUnKRA5QNB9T-tgV5FbZEtcinmQOA/s200/window05_kumori.png',
    'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjMlMl_h2y9D6gk6tudf5VubPQDVGoVpOihCgxc4PWH1FmrGld1iFcK7GT3auW0PPvrO-btateyKlWQpWG8dZjR_6hqGC10Qt_6BI3KLHMnJ2HgSSkgGUCgEKJJ80BO0toHEqekwyPOJprM/s200/window08_yuki.png',
    'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiCt_lDHBycBJn54IbfBosMqn_0p64Qn90BXBlxhTyGrEqal3KX0xZOwz7ufVTwcSbrKpIgQOFlFqxi0ei9UQtANOfVkL1R6zgs6Gqas-nx9l_P2mSZQrzliiUXcEt9Ke0D2a_YXWRXQMXR/s200/window10_arashi.png',
    'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEicD8OhArJ_mh1nOEwIE9EsKGFSTiXv_Uu99y43jsTuEM5oxsOJ4DPLT5RHMFpsjC6An_0HeZolgmJ1hQzVIohGPSSU_zOnZya16RmzH5LTJwhMsN-cOaCJJTDB9B5xFduVR5gXW-4ycwd_/s200/window06_ame.png',
]

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
