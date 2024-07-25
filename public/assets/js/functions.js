// Function to toggle the custom amount input field
function toggleCustomAmount(enable) {
    const customAmountInput = document.getElementById("custom_amount");
    customAmountInput.disabled = !enable;
    if (!enable) {
        customAmountInput.value = "";
    }
}

// Function to format the input value as currency
function formatCurrency(input) {
    // Remove non-numeric characters
    let value = input.value.replace(/\D/g, "");

    // Format the value as currency
    let formattedValue = "";
    for (let i = 0; i < value.length; i++) {
        if (i > 0 && i % 3 === 0) {
            formattedValue = "." + formattedValue;
        }
        formattedValue = value.charAt(value.length - 1 - i) + formattedValue;
    }

    // Update the input value with formatted currency
    if (formattedValue) {
        input.value = "Rp. " + formattedValue;
    } else {
        input.value = "";
    }
}

// Function to initialize the accordion functionality
function initializeAccordion() {
    var acc = document.getElementsByClassName("accordion");

    for (var i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            // Toggle between adding and removing the "active" class
            this.classList.toggle("active");

            // Toggle between hiding and showing the active panel
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
}

// Ensure the DOM is fully loaded before initializing the accordion
document.addEventListener("DOMContentLoaded", initializeAccordion);
