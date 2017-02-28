var value = document.getElementsByClassName('pie')[0].dataset.value,
    less50 = document.getElementsByClassName('less-than-50')[0],
    more50 = document.getElementsByClassName('more-than-50')[0],
    inBox = document.getElementById('in');

var prefix = (function() {
  var docEl = document.documentElement, s;
  if (docEl && (s = docEl.style)) {
      if (typeof s.MozRotate == "string") {
        return "-moz-";
      } else if (typeof s.WebkitRotate == "string") {
        return "-webkit-";
      } else if (typeof s.MsRotate == "string") {
        return "-ms-";
      }
    			return "";
  }
})();
console.log(prefix);

function drawPie() {
  if (value <=50) {
    var d = -180 + (value * (180/50));
    more50.style.display = 'none';
    less50.style.transform = prefix+"rotate("+d+"deg)";
  }

  if (value >50) {
    var d = (value * (180/50));
    more50.style.display = 'block';
    less50.style.transform = prefix+"rotate(0deg)";
    more50.style.transform = prefix+"rotate("+d+"deg)";
  }
}

drawPie();

inBox.onchange = function () {
  value = inBox.value;
  drawPie();
};