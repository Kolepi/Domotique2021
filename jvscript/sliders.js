function EnableCursorsLight(color1,color2,color3) {
  // Color picker

  var resultElement = document.getElementById('result');
  var sliders = document.getElementsByClassName('sliders');
  var colors = [color1,color2,color3];

  [].slice.call(sliders).forEach(function (slider, index) {

    noUiSlider.create(slider, {
      start: colors[index],
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
}

function EnableCursorsVolume(volume){
  // Simples curseurs

  var volumeslider = document.getElementById('volume');

  noUiSlider.create(volumeslider, {
    start: parseInt(volume),
    connect: [true, false],
    direction: 'rtl',
    orientation: "vertical",
    range: {
      'min': 0,
      'max': 100
    }
  });
}