function toggleCustomAmount(enable) {
    const customAmountInput = document.getElementById('custom_amount');
    customAmountInput.disabled = !enable; // Aktifkan atau nonaktifkan input

    if (!enable) {
        customAmountInput.value = ''; // Kosongkan input jika dinonaktifkan
        customAmountInput.classList.remove('active'); // Hapus kelas aktif
        customAmountInput.style.backgroundColor = '#e9ecef'; // Ubah warna latar belakang menjadi abu-abu
    } else {
        customAmountInput.classList.add('active'); // Tambahkan kelas aktif
        customAmountInput.style.backgroundColor = '#ffffff'; // Ubah warna latar belakang menjadi putih
    }
}

// Function to format the input value as currency
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
    if (formattedValue) {
        input.value = 'Rp. ' + formattedValue;
    } else {
        input.value = '';
    }
}

// Function to initialize the accordion functionality
function initializeAccordion() {
    var acc = document.getElementsByClassName('accordion');

    for (var i = 0; i < acc.length; i++) {
        acc[i].addEventListener('click', function () {
            // Toggle between adding and removing the "active" class
            this.classList.toggle('active');

            // Toggle between hiding and showing the active panel
            var panel = this.nextElementSibling;
            if (panel.style.display === 'block') {
                panel.style.display = 'none';
            } else {
                panel.style.display = 'block';
            }
        });
    }
}

// Ensure the DOM is fully loaded before initializing the accordion
document.addEventListener('DOMContentLoaded', initializeAccordion);

const apiUrl = 'https://api.npoint.io/5e1615d09655aeaabc92';

fetch(apiUrl)
    .then((response) => response.json())
    .then((data) => {
        const dropdownButton = document.querySelector('.dropdown-button');
        const dropdownContent = document.getElementById('countryDropdown');
        const countryCodeInput = document.getElementById('country_code');

        function displayCountries(countries) {
            dropdownContent.innerHTML = `
                <input type="text" class="search-input" id="searchInput" placeholder="Cari negara...">
                <div id="countryList"></div>
            `;

            const countryList = document.getElementById('countryList');

            countries.forEach((country) => {
                const countryDiv = document.createElement('div');
                countryDiv.className = 'country-option';
                countryDiv.innerHTML = `
                    <img src="${country.image}" alt="${country.name} flag" style="width: 20px; height: 15px; margin-right: 10px;">
                    ${country.name} (${country.dialCodes.join(', ')})
                `;
                countryDiv.onclick = () => {
                    dropdownButton.textContent = `${country.name} (${country.dialCodes.join(', ')})`;
                    countryCodeInput.value = `+${country.dialCodes[0]}`; // Store country code // Store country code
                    dropdownContent.style.display = 'none';
                };
                countryList.appendChild(countryDiv);
            });

            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', filterCountries);
        }

        function filterCountries() {
            const query = searchInput.value.toLowerCase();
            const countryDivs = dropdownContent.querySelectorAll('.country-option');
            countryDivs.forEach((div) => {
                const countryText = div.textContent.toLowerCase();
                div.style.display = countryText.includes(query) ? 'flex' : 'none';
            });
        }

        displayCountries(data);

        dropdownButton.onclick = () => {
            const isVisible = dropdownContent.style.display === 'block';
            dropdownContent.style.display = isVisible ? 'none' : 'block';
        };

        window.onclick = (event) => {
            if (!event.target.matches('.dropdown-button') && !event.target.closest('.dropdown-content')) {
                dropdownContent.style.display = 'none';
            }
        };
    })
    .catch((error) => console.error('Error fetching data:', error));
