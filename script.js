$(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
        e.preventDefault(); // Prevent form from submitting normally

        const formData = $(this).serializeArray();
        let formattedData = '<ul>';
        formData.forEach(item => {
            formattedData += `<li><strong>${item.name}:</strong> ${item.value}</li>`;
        });
        formattedData += '</ul>';

        $('#output').html(formattedData).removeClass('hidden');
        $('#successMessage').removeClass('hidden');
    });
});
