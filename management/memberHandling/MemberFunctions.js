
    $(document).ready(function () {
        // Initialize datepicker
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true
        });

        // Add validation for tweet URL
        $('#addMemberForm').submit(function () {
            var tweetUrl = $('#MemberTweet').val();
            if (tweetUrl && !isValidUrl(tweetUrl)) {
                alert('Please enter a valid Tweet URL.');
                return false; // PrMember form submission
            }
        });

        function isValidUrl(url) {
            // Basic URL validation, you can enhance this based on your requirements
            var urlRegex = /^(https?:\/\/)?([\w\d.-]+)\.([a-z]{2,})(\/\S*)?$/i;
            return urlRegex.test(url);
        }
    });

function addMember() {
    // Get form data
    var formData = {
        MemberName: $('#MemberName').val(),
        MemberDate: $('#MemberDate').val(),
        MemberDescription: $('#MemberDescription').val(),
        MemberTweet: $('#MemberTweet').val(),
        MemberImage: $('#MemberImage').val(),
        MemberButtonText: $('#MemberButtonText').val()
    };

    // Perform AJAX request to add Member
    $.ajax({
        type: 'POST',
        url: 'add_Member.php', // Replace with the actual PHP script to handle adding Members
        data: formData,
        success: function(response) {
            // Handle success, e.g., close the modal, refresh the table, etc.
            $('#addMemberModal').modal('hide');
            console.error('Success');

            // You may want to refresh the table or perform other actions after adding the Member
        },
        error: function(error) {
            // Handle error, e.g., display an error message
            console.error('Error adding Member:', error);
        }
    });
}
function confirmDelete(MemberId) {
    var confirmation = confirm("Are you sure you want to delete this Member?");
    if (confirmation) {
        // If the user confirms, submit the form
        document.getElementById('deleteForm_' + MemberId).submit();
    }
}


function deleteMember(MemberId) {
    // Use AJAX to send a request to delete_Member.php (create this file)
    fetch('localhost/VCWebsite/management/MemberHandling/delete_Member.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'MemberId=' + MemberId,
    })
    .then(response => response.text())
    .then(data => {
        // Handle the response as needed
        if (data === 'success') {
            // If deletion was successful, remove the row from the table
            $('#MemberRow_' + MemberId).remove();
            console.log('success');
        } else {
            // Handle errors or display a message
            alert('Failed to delete Member.');
            console.error('fail');
        }
    })
    .catch(error => {
        console.error('Error deleting Member:', error);
    });
}


function editMember(MemberId) {
    // Hide the row with Member details
    $('#MemberRow_' + MemberId).hide();
    
    // Show the edit form
    $('#editForm_' + MemberId).show();
}

function cancelEdit(MemberId) {
    // Hide the edit form
    $('#editForm_' + MemberId).hide();

    // Show the row with Member details
    $('#MemberRow_' + MemberId).show();
}

function saveMember(MemberId) {
    // Use AJAX to send a request to update_Member.php (create this file)
    $.ajax({
        url: 'update_Member.php',
        method: 'POST',
        data: $('#MemberForm_' + MemberId).serialize(),
        success: function(response) {
            // Handle the response as needed
            if (response === 'success') {
                // Reload the page or update the specific row with the updated data
                // You may choose to reload the page or update the row using JavaScript
                location.reload();
            } else {
                // Handle errors or display a message
                alert('Failed to update Member.');
            }
        }
    });
}
