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

const showPassword = (field_id, icon_id) => {
  if ($(field_id).attr('type') == 'password') {
    $(field_id).prop('type', 'text');
    $(icon_id).removeClass('fa-eye');
    $(icon_id).addClass('fa-eye-slash');
  } else {
    $(field_id).prop('type', 'password');
    $(icon_id).addClass('fa-eye');
    $(icon_id).removeClass('fa-eye-slash');
  }
}