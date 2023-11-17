
    $(document).ready(function () {
        // Initialize datepicker
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true
        });

        // Add validation for tweet URL
        $('#addSponsorForm').submit(function () {
            var tweetUrl = $('#SponsorTweet').val();
            if (tweetUrl && !isValidUrl(tweetUrl)) {
                alert('Please enter a valid Tweet URL.');
                return false; // PrSponsor form submission
            }
        });

        function isValidUrl(url) {
            // Basic URL validation, you can enhance this based on your requirements
            var urlRegex = /^(https?:\/\/)?([\w\d.-]+)\.([a-z]{2,})(\/\S*)?$/i;
            return urlRegex.test(url);
        }
    });

function addSponsor() {
    // Get form data
    var formData = {
        SponsorName: $('#SponsorName').val(),
        SponsorDate: $('#SponsorDate').val(),
        SponsorDescription: $('#SponsorDescription').val(),
        SponsorTweet: $('#SponsorTweet').val(),
        SponsorImage: $('#SponsorImage').val(),
        SponsorButtonText: $('#SponsorButtonText').val()
    };

    // Perform AJAX request to add Sponsor
    $.ajax({
        type: 'POST',
        url: 'add_Sponsor.php', // Replace with the actual PHP script to handle adding Sponsors
        data: formData,
        success: function(response) {
            // Handle success, e.g., close the modal, refresh the table, etc.
            $('#addSponsorModal').modal('hide');
            console.error('Success');

            // You may want to refresh the table or perform other actions after adding the Sponsor
        },
        error: function(error) {
            // Handle error, e.g., display an error message
            console.error('Error adding Sponsor:', error);
        }
    });
}
function confirmDelete(SponsorId) {
    var confirmation = confirm("Are you sure you want to delete this Sponsor?");
    if (confirmation) {
        // If the user confirms, submit the form
        document.getElementById('deleteForm_' + SponsorId).submit();
    }
}


function deleteSponsor(SponsorId) {
    // Use AJAX to send a request to delete_Sponsor.php (create this file)
    fetch('localhost/VCWebsite/management/SponsorHandling/delete_Sponsor.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'SponsorId=' + SponsorId,
    })
    .then(response => response.text())
    .then(data => {
        // Handle the response as needed
        if (data === 'success') {
            // If deletion was successful, remove the row from the table
            $('#SponsorRow_' + SponsorId).remove();
            console.log('success');
        } else {
            // Handle errors or display a message
            alert('Failed to delete Sponsor.');
            console.error('fail');
        }
    })
    .catch(error => {
        console.error('Error deleting Sponsor:', error);
    });
}


function editSponsor(SponsorId) {
    // Hide the row with Sponsor details
    $('#SponsorRow_' + SponsorId).hide();
    
    // Show the edit form
    $('#editForm_' + SponsorId).show();
}

function cancelEdit(SponsorId) {
    // Hide the edit form
    $('#editForm_' + SponsorId).hide();

    // Show the row with Sponsor details
    $('#SponsorRow_' + SponsorId).show();
}

function saveSponsor(SponsorId) {
    // Use AJAX to send a request to update_Sponsor.php (create this file)
    $.ajax({
        url: 'update_Sponsor.php',
        method: 'POST',
        data: $('#SponsorForm_' + SponsorId).serialize(),
        success: function(response) {
            // Handle the response as needed
            if (response === 'success') {
                // Reload the page or update the specific row with the updated data
                // You may choose to reload the page or update the row using JavaScript
                location.reload();
            } else {
                // Handle errors or display a message
                alert('Failed to update Sponsor.');
            }
        }
    });
}
