// Color picker

var resultElement = document.getElementById('result');
var sliders = document.getElementsByClassName('sliders');
var colors = [0, 0, 0];

[].slice.call(sliders).forEach(function (slider, index) {

  noUiSlider.create(slider, {
    start: 127,
    connect: [true, false],
    orientation: "vertical",
    range: {
      'min': 0,
      'max': 255
    }
  });

  // Bind the color changing function to the update event.
  slider.noUiSlider.on('update', function () {

    colors[index] = slider.noUiSlider.get();

    var color = 'rgb(' + colors.join(',') + ')';

    resultElement.style.background = color;
    resultElement.style.color = color;
  });
});

// End color picker

// Simples curseurs

var volumeslider = document.getElementById('volume');

noUiSlider.create(volumeslider, {
    start: 50,
    connect: [false, true],
    orientation: "vertical",
    range: {
      'min': 0,
      'max': 100
    }
  });