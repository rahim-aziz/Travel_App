function updateCity(event) {
  setInterval(function () {
    let cityTimeZone = event.target.value;
    let cityName = event.target.selectedOptions[0].innerHTML;
    if (cityTimeZone === "current") {
      cityTimeZone = moment.tz.guess();
      console.log(moment.tz.guess());
      cityName = cityTimeZone.replace("_", " ").split("/")[1];
    }
    let cityTime = moment().tz(cityTimeZone);
    let citiesElement = document.querySelector("#cities");
    citiesElement.innerHTML = `
  <div class="city"">
          <div>
            <h2>${cityName}</h2>

            <div class="date">${cityTime.format("MMM Do YYYY")}</div>
          </div>
          <div class="time">${cityTime.format(
            "h:mm:ss"
          )}<small>  ${cityTime.format("A")}</small></div>
        </div>
  `;
    function reloadPage() {
      window.location.reload();
    }

    let allCitiesElement = document.querySelector("#all-cities");
    allCitiesElement.addEventListener("click", reloadPage);
  }, 1000);
}

let citiesSelectElement = document.querySelector("#cities-select");
citiesSelectElement.addEventListener("change", updateCity);
