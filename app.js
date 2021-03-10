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


function VolumeChoice() {
    let choice = document.getElementById('volumechoice').value

    if (choice == 1) {
        console.log("Cylinder")
        document.getElementById('CylinderDiv').style.display = "block"
        document.getElementById('SphereDiv').style.display = "none"
        document.getElementById('ConeDiv').style.display = "none"
        document.getElementById('CubeDiv').style.display = "none"
        document.getElementById('PrismDiv').style.display = "none"
        document.getElementById('TriangularPrismDiv').style.display = "none"

        document.getElementById('Cylinder-Radius').name = "Cylinder-Radius"
        document.getElementById('Cylinder-Height').name = "Cylinder-Height"
        document.getElementById('Sphere-Radius').name = ""
        document.getElementById('Cone-Radius').name = ""
        document.getElementById('Cone-Height').name = ""
        document.getElementById('Cube-Edge').name = ""
        document.getElementById('Prism-Base').name = ""
        document.getElementById('Prism-Height').name = ""
        document.getElementById('TriangularPrism-a-Base').name = ""
        document.getElementById('TriangularPrism-b-Base').name = ""
        document.getElementById('TriangularPrism-c-Base').name = ""
        document.getElementById('TriangularPrism-Height').name = ""
    }

    else if (choice == 2) {
        console.log("Sphere")
        document.getElementById('CylinderDiv').style.display = "none"
        document.getElementById('SphereDiv').style.display = "block"
        document.getElementById('ConeDiv').style.display = "none"
        document.getElementById('CubeDiv').style.display = "none"
        document.getElementById('PrismDiv').style.display = "none"
        document.getElementById('TriangularPrismDiv').style.display = "none"
        
        document.getElementById('Cylinder-Radius').name = ""
        document.getElementById('Cylinder-Height').name = ""
        document.getElementById('Sphere-Radius').name = "Sphere-Radius"
        document.getElementById('Cone-Radius').name = ""
        document.getElementById('Cone-Height').name = ""
        document.getElementById('Cube-Edge').name = ""
        document.getElementById('Prism-Base').name = ""
        document.getElementById('Prism-Height').name = ""
        document.getElementById('TriangularPrism-a-Base').name = ""
        document.getElementById('TriangularPrism-b-Base').name = ""
        document.getElementById('TriangularPrism-c-Base').name = ""
        document.getElementById('TriangularPrism-Height').name = ""
    }

    else if (choice == 3) {
        console.log("Cone")
        document.getElementById('CylinderDiv').style.display = "none"
        document.getElementById('SphereDiv').style.display = "none"
        document.getElementById('ConeDiv').style.display = "block"
        document.getElementById('CubeDiv').style.display = "none"
        document.getElementById('PrismDiv').style.display = "none"
        document.getElementById('TriangularPrismDiv').style.display = "none"
        
        document.getElementById('Cylinder-Radius').name = ""
        document.getElementById('Cylinder-Height').name = ""
        document.getElementById('Sphere-Radius').name = ""
        document.getElementById('Cone-Radius').name = "Cone-Radius"
        document.getElementById('Cone-Height').name = "Cone-Height"
        document.getElementById('Cube-Edge').name = ""
        document.getElementById('Prism-Base').name = ""
        document.getElementById('Prism-Height').name = ""
        document.getElementById('TriangularPrism-a-Base').name = ""
        document.getElementById('TriangularPrism-b-Base').name = ""
        document.getElementById('TriangularPrism-c-Base').name = ""
        document.getElementById('TriangularPrism-Height').name = ""
    }

    else if (choice == 4) {
        console.log("Cube")
        document.getElementById('CylinderDiv').style.display = "none"
        document.getElementById('SphereDiv').style.display = "none"
        document.getElementById('ConeDiv').style.display = "none"
        document.getElementById('CubeDiv').style.display = "block"
        document.getElementById('PrismDiv').style.display = "none"
        document.getElementById('TriangularPrismDiv').style.display = "none"
        
        document.getElementById('Cylinder-Radius').name = ""
        document.getElementById('Cylinder-Height').name = ""
        document.getElementById('Sphere-Radius').name = ""
        document.getElementById('Cone-Radius').name = ""
        document.getElementById('Cone-Height').name = ""
        document.getElementById('Cube-Edge').name = "Cube-Edge"
        document.getElementById('Prism-Base').name = ""
        document.getElementById('Prism-Height').name = ""
        document.getElementById('TriangularPrism-a-Base').name = ""
        document.getElementById('TriangularPrism-b-Base').name = ""
        document.getElementById('TriangularPrism-c-Base').name = ""
        document.getElementById('TriangularPrism-Height').name = ""
    }

    else if (choice == 5) {
        console.log("Prism")
        document.getElementById('CylinderDiv').style.display = "none"
        document.getElementById('SphereDiv').style.display = "none"
        document.getElementById('ConeDiv').style.display = "none"
        document.getElementById('CubeDiv').style.display = "none"
        document.getElementById('PrismDiv').style.display = "block"
        document.getElementById('TriangularPrismDiv').style.display = "none"
        
        document.getElementById('Cylinder-Radius').name = ""
        document.getElementById('Cylinder-Height').name = ""
        document.getElementById('Sphere-Radius').name = ""
        document.getElementById('Cone-Radius').name = ""
        document.getElementById('Cone-Height').name = ""
        document.getElementById('Cube-Edge').name = ""
        document.getElementById('Prism-Base').name = "Prism-Base"
        document.getElementById('Prism-Height').name = "Prism-Height"
        document.getElementById('TriangularPrism-a-Base').name = ""
        document.getElementById('TriangularPrism-b-Base').name = ""
        document.getElementById('TriangularPrism-c-Base').name = ""
        document.getElementById('TriangularPrism-Height').name = ""
    }

    else if (choice == 6) {
        console.log("Triangular Prism")
        document.getElementById('CylinderDiv').style.display = "none"
        document.getElementById('SphereDiv').style.display = "none"
        document.getElementById('ConeDiv').style.display = "none"
        document.getElementById('CubeDiv').style.display = "none"
        document.getElementById('PrismDiv').style.display = "none"
        document.getElementById('TriangularPrismDiv').style.display = "block"
        
        document.getElementById('Cylinder-Radius').name = ""
        document.getElementById('Cylinder-Height').name = ""
        document.getElementById('Sphere-Radius').name = ""
        document.getElementById('Cone-Radius').name = ""
        document.getElementById('Cone-Height').name = ""
        document.getElementById('Cube-Edge').name = ""
        document.getElementById('Prism-Base').name = ""
        document.getElementById('Prism-Height').name = ""
        document.getElementById('TriangularPrism-a-Base').name = "TriangularPrism-a-Base"
        document.getElementById('TriangularPrism-b-Base').name = "TriangularPrism-b-Base"
        document.getElementById('TriangularPrism-c-Base').name = "TriangularPrism-c-Base"
        document.getElementById('TriangularPrism-Height').name = "TriangularPrism-Height"
    }

    else if (choice == 0) {
        console.log("back to no view at all")
        document.getElementById('CylinderDiv').style.display = "none"
        document.getElementById('SphereDiv').style.display = "none"
        document.getElementById('ConeDiv').style.display = "none"
        document.getElementById('CubeDiv').style.display = "none"
        document.getElementById('PrismDiv').style.display = "none"
        document.getElementById('TriangularPrismDiv').style.display = "none"
        
        document.getElementById('Cylinder-Radius').name = ""
        document.getElementById('Cylinder-Height').name = ""
        document.getElementById('Sphere-Radius').name = ""
        document.getElementById('Cone-Radius').name = ""
        document.getElementById('Cone-Height').name = ""
        document.getElementById('Cube-Edge').name = ""
        document.getElementById('Prism-Base').name = ""
        document.getElementById('Prism-Height').name = ""
        document.getElementById('TriangularPrism-a-Base').name = ""
        document.getElementById('TriangularPrism-b-Base').name = ""
        document.getElementById('TriangularPrism-c-Base').name = ""
        document.getElementById('TriangularPrism-Height').name = ""
    }
}