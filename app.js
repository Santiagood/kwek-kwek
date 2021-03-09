function tempChoice() {
    let choice = document.getElementById('tempchoice').value;
    if (choice == 1) {
        document.getElementById('tempForm').placeholder = "Celcius"
        document.getElementById('tempForm').name = "cel"
    }
    else if (choice == 2){
        document.getElementById('tempForm').placeholder = "Fahrenheit"
        document.getElementById('tempForm').name = "fah"
    }
    else {
        console.log("wala lang")
    }
}

function speedChoice() {
    let from_choice = document.getElementById('convertspeedselectFrom').value
    let to_choice = document.getElementById('convertspeedselectTo').value


    // ** Miles Per Hour **
    if (from_choice == 1 && to_choice == 5) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_MilesPerHour_To_MilesPerHour"
    }
    
    if (from_choice == 1 && to_choice == 6) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_MilesPerHour_To_FootPerSecond"
    } 

    if (from_choice == 1 && to_choice == 7) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_MilesPerHour_To_MeterPerSecond"
    } 

    if (from_choice == 1 && to_choice == 8) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_MilesPerHour_To_KilometerPerHour"
    }
    
    // ** Foot Per Second **
    if (from_choice == 2 && to_choice == 5) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_FootPerSecond_To_MilesPerHour"
    }
    
    if (from_choice == 2 && to_choice == 6) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_FootPerSecond_To_FootPerSecond"
    } 

    if (from_choice == 2 && to_choice == 7) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_FootPerSecond_To_MeterPerSecond"
    } 

    if (from_choice == 2 && to_choice == 8) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_FootPerSecond_To_KilometerPerHour"
    }

    // ** Meter Per Second **
    if (from_choice == 3 && to_choice == 5) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_MeterPerSecond_To_MilesPerHour"
    }
    
    if (from_choice == 3 && to_choice == 6) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_MeterPerSecond_To_FootPerSecond"
    } 

    if (from_choice == 3 && to_choice == 7) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_MeterPerSecond_To_MeterPerSecond"
    } 

    if (from_choice == 3 && to_choice == 8) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_MeterPerSecond_To_KilometerPerHour"
    }

    // ** Kilometer Per Hour **
    if (from_choice == 4 && to_choice == 5) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_KilometerPerHour_To_MilesPerHour"
    }
    
    if (from_choice == 4 && to_choice == 6) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_KilometerPerHour_To_FootPerSecond"
    } 

    if (from_choice == 4 && to_choice == 7) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_KilometerPerHour_To_MeterPerSecond"
    } 

    if (from_choice == 4 && to_choice == 8) {
        console.log("Yes")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_KilometerPerHour_To_KilometerPerHour"
    }

}




/*
function speedChoiceFrom() {
    let choice = document.getElementById('convertspeedselectFrom').value
    
    if (choice == 1) {
        console.log("Miles Per Hour")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_MilesPerHour"
    }

    else if (choice == 2) {
        console.log("Foot Per Second")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_FootPerSecond"
    }

    else if (choice == 3) {
        console.log("Meter Per Second")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_MeterPerSecond"
    }

    else if (choice == 4) {
        console.log("Kilometer Per Hour")
        document.getElementById('FromSpeedForm').placeholder="Enter value: "
        document.getElementById('FromSpeedForm').name = "From_KilometerPerHour"
    }

    else {
        console.log("Default")
        document.getElementById('FromSpeedForm').name = ""
        document.getElementById('FromSpeedForm').placeholder = ""
    }
}

function speedChoiceTo() {
    let choice = document.getElementById('convertspeedselectTo').value
    
    if (choice == 5) {
        console.log("Miles Per Hour2")
        document.getElementById('ToSpeedForm').placeholder="Enter value: "
        document.getElementById('ToSpeedForm').name = "To_MilesPerHour"
    }

    else if (choice == 6) {
        console.log("Foot Per Second2")
        document.getElementById('ToSpeedForm').placeholder="Enter value: "
        document.getElementById('ToSpeedForm').name = "To_FootPerSecond"
    }

    else if (choice == 7) {
        console.log("Meter Per Second2")
        document.getElementById('ToSpeedForm').placeholder="Enter value: "
        document.getElementById('ToSpeedForm').name = "To_MeterPerSecond"
    }

    else if (choice == 8) {
        console.log("Kilometer Per Hour2")
        document.getElementById('ToSpeedForm').placeholder="Enter value: "
        document.getElementById('ToSpeedForm').name = "To_KilometerPerHour"
    }

    else {
        console.log("Default")
        document.getElementById('ToSpeedForm').name = ""
        document.getElementById('ToSpeedForm').placeholder = ""
    }
}
*/