async function createSlider() {
  // Create Slider element
  const sliderContainer = document.createElement("div");
  sliderContainer.id = "sliderContainer";
  const slider = document.createElement("div");
  slider.id = "slider";
  sliderContainer.insertAdjacentElement("beforeend", slider);

  // api call
  const apiCallResult = await fetch("https://picsum.photos/v2/list", {
    method: "get",
  }).then((response) => response.json().then((json) => json));

  // Insert images into slider
  for (let i = 0; i < apiCallResult.length; i++) {
    setTimeout(() => {
      slider.insertAdjacentElement(
        "beforeend",
        createSliderItem(apiCallResult[i])
      );
    }, i * 1000);
  }

  // Insert slider to dom
  document
    .querySelector("main")
    .insertAdjacentElement("beforeend", sliderContainer);

  // Auto scroll slider
  const interval = setInterval(function () {
    sliderContainer.scrollBy(
      slider.querySelector(".sliderImage").getBoundingClientRect().width,
      0
    );
  }, 10000);
  setTimeout(function () {
    clearInterval(interval);
  }, 10000 * apiCallResult.length);

  // returns one image element from the API
  function createSliderItem(pictureObject) {
    const image = document.createElement("img");
    image.className = "sliderImage";
    image.src = pictureObject.download_url;
    image.alt = `author: ${pictureObject.author}`;
    return image;
  }
}
if(window.screenX >= 768)
createSlider();
