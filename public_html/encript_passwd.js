// Function to copy the password to clipboard
function copyPassword() {
    const password = "Happy_New_Year";  // The actual password

    if (navigator.clipboard && navigator.clipboard.writeText) {
        // Using the Clipboard API for modern browsers
        navigator.clipboard.writeText(password).then(function() {
            // Success: Password copied to clipboard
            alert("Password copied to clipboard 00!");
        }).catch(function(error) {
            // Error handling if clipboard operation fails
            console.error("Failed to copy text: ", error);
            alert("Failed to copy password.");
        });
    } else {
        // Fallback method for older browsers
        const textArea = document.createElement("textarea");
        textArea.value = password;
        document.body.appendChild(textArea);
        textArea.select();
        try {
            document.execCommand('copy');
            alert("Password copied to clipboard 01!");
        } catch (err) {
            console.error("Failed to copy text: ", err);
            alert("Failed to copy password.");
        }
        document.body.removeChild(textArea);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Attach the function to the button
    const copyButton = document.querySelector('.copy-button');
    if (copyButton) {
        copyButton.addEventListener('click', copyPassword);
    }
});