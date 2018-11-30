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
        output.textContent = '大吉です。';
        break;
      case 1:
        output.textContent = '吉です。';
        break;
      case 2:
        output.textContent = '中吉です。';
        break;
      case 3:
        output.textContent = '小吉です。';
        break;
      case 4:
        output.textContent = '末吉です。';
        break;
      default:
        output.textContent = '凶です。';
        break;
    }
  }
})();
