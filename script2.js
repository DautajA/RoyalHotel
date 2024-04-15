
    document.addEventListener("DOMContentLoaded", function() {
        var contactus = document.getElementById("kuti");
        var infoContact = document.getElementById("permbajtjaKontakt");
        var closeButton = document.getElementById("mbyllja");
    
        if (!contactus || !infoContact || !closeButton) {
            console.error("Some elements could not be found!");
            return; // Exit if elements are not found
        }
    
        contactus.addEventListener("click", function () {
            infoContact.style.display = "block";
        });
    
        closeButton.addEventListener("click", function() {
            infoContact.style.display = "none";
        });
    
        // Correctly handle clicking outside the contact info
        window.addEventListener("click", function(event) {
            if (!infoContact.contains(event.target) && event.target !== contactus) {
                infoContact.style.display = "none";
            }
        });
    
        window.addEventListener("keydown", function(event) {
            if (event.key === "Escape" && infoContact.style.display === "block") {
                infoContact.style.display = "none";
            }
        });
    });


