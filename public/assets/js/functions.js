

function toggleCustomAmount(enable) {
    const customAmountInput = document.getElementById('custom_amount');
    customAmountInput.disabled = !enable;
    if (!enable) {
        customAmountInput.value = '';
    }
}

function formatCurrency(input) {
    // Remove non-numeric characters
    let value = input.value.replace(/\D/g, '');
    
    // Format the value as currency
    let formattedValue = '';
    for (let i = 0; i < value.length; i++) {
        if (i > 0 && i % 3 === 0) {
            formattedValue = '.' + formattedValue;
        }
        formattedValue = value.charAt(value.length - 1 - i) + formattedValue;
    }
    
    // Update the input value with formatted currency
    input.value = 'Rp. ' + formattedValue;
}
