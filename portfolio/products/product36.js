(function() {
  'use strict';

  var slider = document.getElementById('slider');
  var label = document.getElementById('label');
  var btn = document.getElementById('btn');
  var result = document.getElementById('result');
  var upper = document.getElementById('upper');
  var number = document.getElementById('number');

 function getPassword(){
   var seed_lower = 'abcdefghijklmnopqrstuvwxyz';
   var seed_upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
   var seed_number = '0123456789';
   var seed;



   var len = slider.value;
   var pwd = '';

   seed = seed_lower;

   if (upper.checked) {
     seed += seed_upper;
   }
   if (number.checked) {
     seed += seed_number;
   }




   for (var i = 0; i < len; i++) {
     pwd += seed[Math.floor(Math.random() * seed.length)];
   }




   result.value = pwd;
 }
  slider.addEventListener('change', function() {
    label.innerHTML = this.value;
  });

  btn.addEventListener('click', function() {
    getPassword();
    //result.value = 'aieeee';
  });

  result.addEventListener('click', function() {
    this.select();
  });

  getPassword();

})();
