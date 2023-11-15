
    $(document).ready(function () {
        // Initialize datepicker
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true
        });

        // Add validation for tweet URL
        $('#addEventForm').submit(function () {
            var tweetUrl = $('#eventTweet').val();
            if (tweetUrl && !isValidUrl(tweetUrl)) {
                alert('Please enter a valid Tweet URL.');
                return false; // Prevent form submission
            }
        });

        function isValidUrl(url) {
            // Basic URL validation, you can enhance this based on your requirements
            var urlRegex = /^(https?:\/\/)?([\w\d.-]+)\.([a-z]{2,})(\/\S*)?$/i;
            return urlRegex.test(url);
        }
    });

function addEvent() {
    // Get form data
    var formData = {
        eventName: $('#eventName').val(),
        eventDate: $('#eventDate').val(),
        eventDescription: $('#eventDescription').val(),
        eventTweet: $('#eventTweet').val(),
        eventImage: $('#eventImage').val(),
        eventButtonText: $('#eventButtonText').val()
    };

    // Perform AJAX request to add event
    $.ajax({
        type: 'POST',
        url: 'add_event.php', // Replace with the actual PHP script to handle adding events
        data: formData,
        success: function(response) {
            // Handle success, e.g., close the modal, refresh the table, etc.
            $('#addEventModal').modal('hide');
            console.error('Success');

            // You may want to refresh the table or perform other actions after adding the event
        },
        error: function(error) {
            // Handle error, e.g., display an error message
            console.error('Error adding event:', error);
        }
    });
}
function confirmDelete(eventId) {
    var confirmation = confirm("Are you sure you want to delete this event?");
    if (confirmation) {
        // If the user confirms, submit the form
        document.getElementById('deleteForm_' + eventId).submit();
    }
}


function deleteEvent(eventId) {
    // Use AJAX to send a request to delete_event.php (create this file)
    fetch('localhost/VCWebsite/management/eventHandling/delete_event.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'eventId=' + eventId,
    })
    .then(response => response.text())
    .then(data => {
        // Handle the response as needed
        if (data === 'success') {
            // If deletion was successful, remove the row from the table
            $('#eventRow_' + eventId).remove();
            console.log('success');
        } else {
            // Handle errors or display a message
            alert('Failed to delete event.');
            console.error('fail');
        }
    })
    .catch(error => {
        console.error('Error deleting event:', error);
    });
}


function editEvent(eventId) {
    // Hide the row with event details
    $('#eventRow_' + eventId).hide();
    
    // Show the edit form
    $('#editForm_' + eventId).show();
}

function cancelEdit(eventId) {
    // Hide the edit form
    $('#editForm_' + eventId).hide();

    // Show the row with event details
    $('#eventRow_' + eventId).show();
}

function saveEvent(eventId) {
    // Use AJAX to send a request to update_event.php (create this file)
    $.ajax({
        url: 'update_event.php',
        method: 'POST',
        data: $('#eventForm_' + eventId).serialize(),
        success: function(response) {
            // Handle the response as needed
            if (response === 'success') {
                // Reload the page or update the specific row with the updated data
                // You may choose to reload the page or update the row using JavaScript
                location.reload();
            } else {
                // Handle errors or display a message
                alert('Failed to update event.');
            }
        }
    });
}
