/* function getLocationConstant(){
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
    document.location.submit();
    //window.location.reload();

}
// If something has gone wrong with the geolocation request
function showError(position) {
    alert("Error code " + position.code + ". " + position.message);
}
 */
//window.FunctionName=getLocationConstant();{return false;};

//getLocationConstant();
/* var x = getLocationConstant();
console.log(x); */


    document.addEventListener('DOMContentLoaded', () => {
    pageLoad();
    });

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, positionError);
            
        }
    }

    function showPosition(position) {
        //console.log(position);
        document.getElementById("Latitude").value = position.coords.latitude;
        document.getElementById("Longitude").value = position.coords.longitude;
        //lon = document.getElementById('getlon').value;
        //lat = document.getElementById('getlat').value;
        //
        
        document.location.submit(); // here the form is submit
    }

    function positionError(error) {
        if (error.PERMISSION_DENIED) alert('Please accept geolocation');
        hideLoadingDiv();
        showError('Geolocation is not enabled. Please enable to use this feature');
    }

    function pageLoad() {
        getLocation();
    }
    //document.getElementById("location").submit();


