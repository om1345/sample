(function() {
'use strict';

  var start = document.getElementById('start');
  var stop = document.getElementById('stop');
  var result = document.getElementById('result');
  var startTime;
  //ゲームが始まっているかどうか
  var isStarted = false;

  //startボタンをクリックした時
  start.addEventListener('click', function() {
    if (isStarted === true) {
      return;
    }
    isStarted = true;
    //Date.now()関数は基準時間からの経過時間
    startTime = Date.now();
    this.className = 'pushed';
    stop.className = '';
    result.textContent = '0.000';
    result.className = 'standby';
  });

  //stopボタンをクリックした時
  stop.addEventListener('click', function() {
    //経過時間を意味する変数を設定
    var elapsedTime;
    //誤差判定用変数
    var diff;
    if (isStarted === false) {
      return;
    }
    isStarted = false;
    //現在時間-startボタンを押した時の時間 ミリ秒単位を秒単位に変換
    elapsedTime = (Date.now() - startTime) / 1000;
    //resultにelapsedTimeを代入 小数点三桁まで表示
    result.textContent = elapsedTime.toFixed(3);
    this.className = 'pushed';
    start.className = '';
    result.className = '';
    //elapsedTimeが5秒からどれだけ誤差があるか判定
    diff = elapsedTime - 5.0;
    //diffの絶対値が1未満
    if (Math.abs(diff) < 1.0) {
    //resultにperfectクラスを与える
      result.className = 'perfect';
    }

  });
})();
