// JavaScript code to display a greeting message based on the time of day
const currentHour = new Date().getHours();
let greeting;

if (currentHour >= 12 && currentHour < 18) {
    greeting = "Good Afternoon";
} else if (currentHour >= 18 || currentHour < 5) {
    greeting = "Good Evening";
} else {
    greeting = "Good Morning";
}

// Display the greeting in the "greeting" paragraph
document.getElementById("greeting").textContent = greeting;
