const weather = document.querySelector(".js-weather");

const API_KEY = "0b26460a2c807a24653fd97ef96978c9";
const COORDS = "coords"

function getWeather(lat, lng){
    fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lng}&appid=${API_KEY}&units=metric`
    ).then(function(data){
        return data.json();
    }).then(function(json){
        const temperature = json.main.temp;
        const place = json.name;
        weather.innerHTML = `${temperature} @ ${place}`;
    });
}

function saveCoords(coordObj){
    localStorage.setItem(COORDS, JSON.stringify(coordObj));
}

function askGeoSuccess(position){
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;
    const coordObj = {
        latitude,
        longitude
    };
    saveCoords(coordObj);
    getWeather(latitude, longitude);
}

function askGeoFail(){
    console.log("Cannot access geo location");
}

function askForCoords(){
    navigator.geolocation.getCurrentPosition(askGeoSuccess, askGeoFail)
}

function loadCoords(){
    const loadedCoords = localStorage.getItem(COORDS);
    if(loadedCoords === null){
        askForCoords();
    } else {
        const parsedCoords = JSON.parse(loadedCoords);
        getWeather(parsedCoords.latitude, parsedCoords.longitude); 
    }
}

function init(){
    loadCoords();
}

init();