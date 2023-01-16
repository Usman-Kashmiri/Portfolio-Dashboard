$('#asideDropdownToggler').click(() => {
    $('.dropdown-menu').slideToggle();
});

$('#updateDpField').change(function () {
    var src;
    var imgField = document.getElementById('updateDpField'); 
    const reader = new FileReader();
    const file = imgField.files[0];

    reader.addEventListener("load", () => {
        // convert image file to base64 string
        src = reader.result;
        $('#updateDP').html(`<img class="img-fluid rounded-2 my-3" src="${src}" alt="New Profile Picture">`);
      }, false);
    
      if (file) {
        reader.readAsDataURL(file);
      }
});