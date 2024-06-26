// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyBJ83EA5QYR3QXAUGvPPpIo1n4AiXCTmQk",
  authDomain: "portfolio-e45ef.firebaseapp.com",
  projectId: "portfolio-e45ef",
  storageBucket: "portfolio-e45ef.appspot.com",
  messagingSenderId: "771297121731",
  appId: "1:771297121731:web:88194a9b9b8d534577d976",
  measurementId: "G-VZTRS4VP2B"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);