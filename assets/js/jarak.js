function getLocationConstant(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Your browser or device doesn't support Geolocation");
    }
}

// If we have a successful location update
function showPosition(position) {
    document.getElementById("Latitude").value = position.coords.latitude;
    document.getElementById("Longitude").value = position.coords.longitude;
    document.getElementById("location").submit();
    
}
// If something has gone wrong with the geolocation request
function showError(position) {
    alert("Error code " + position.code + ". " + position.message);
}

//window.FunctionName=getLocationConstant();{return false;};

getLocationConstant();




