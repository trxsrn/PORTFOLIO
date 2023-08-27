function displayDate() {
    const currentDate = new Date();
    const dateElement = document.getElementById("date");
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    dateElement.textContent = currentDate.toLocaleDateString(undefined, options);
}

// Function to display current time
function displayTime() {
    const currentTime = new Date();
    const timeElement = document.getElementById("time");
    const options = { hour: 'numeric', minute: 'numeric', second: 'numeric' };
    timeElement.textContent = currentTime.toLocaleTimeString(undefined, options);
}

// Function to update time every second
function updateTime() {
    displayTime();
    setTimeout(updateTime, 1000); // Update every 1 second
}

// Call the functions to display date and time
displayDate();
updateTime();