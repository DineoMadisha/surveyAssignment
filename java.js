function validateForm() {
    var radios = document.querySelectorAll('input[type="radio"]');
    for (var i = 0; i < radios.length; i++) {
      if (!radios[i].checked) {
        alert("Please select a rating for all questions.");
        return false;
      }
    }
    return true;
  }