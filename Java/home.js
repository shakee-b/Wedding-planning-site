

function search() {
  const searchTerm = document.querySelector('.search-bar input').value;
 
}


function selectPackage(packageName) {
  const selectedPackage = document.getElementById('selected-package-name');
  const selectedPackagePrice = document.getElementById('selected-package-price');

  switch (packageName) {
    case 'gold':
      selectedPackage.innerHTML = 'Gold Package';
      selectedPackagePrice.innerHTML = 'Rs.500,000';
      break;
    case 'silver':
      selectedPackage.innerHTML = 'Silver Package';
      selectedPackagePrice.innerHTML = 'Rs.400,000';
      break;
    case 'bronze':
      selectedPackage.innerHTML = 'Bronze Package';
      selectedPackagePrice.innerHTML = 'Rs.350,000';
      break;
    default:
      break;
  }
}
