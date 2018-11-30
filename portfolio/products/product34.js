(function() {
  btn.addEventListener('click', function() {
    result();
    overlay.classList.add('fadein');
    output.classList.add('fadein');
  });

  overlay.addEventListener('click', function() {
    output.classList.remove('fadein');
    overlay.classList.remove('fadein');
  });

  function result() {
    var index = Math.floor(Math.random() * 6);

    switch (index) {
      case 0:
        output.innerHTML = '<img src="../img/omikuji_daikichi.png">';
        break;
      case 1:
        output.innerHTML = '<img src="../img/omikuji_kichi.png">';
        break;
      case 2:
        output.innerHTML = '<img src="../img/omikuji_chuukichi.png">';
        break;
      case 3:
        output.innerHTML = '<img src="../img/omikuji_syoukichi.png">';
        break;
      case 4:
        output.innerHTML = '<img src="../img/omikuji_suekichi.png">';
        break;
      default:
        output.innerHTML = '<img src="../img/omikuji_kyou.png">';
        break;
    }
  }
})();
