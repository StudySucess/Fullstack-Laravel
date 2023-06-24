
// Function to show the profile page and hide other pages
function showProfilePage() {
    document.getElementById("nav_favourites").style.display = "none";
    document.getElementById("nav_messages").style.display = "none";
    document.getElementById("nav_uploads").style.display = "none";
    document.getElementById("nav_profile").style.display = "block";
}

// Function to show the favourites page and hide other pages
function showFavouritesPage() {
    document.getElementById("nav_profile").style.display = "none";
    document.getElementById("nav_uploads").style.display = "none";
    document.getElementById("nav_messages").style.display = "none";
    document.getElementById("nav_favourites").style.display = "block";
}

// Function to show the uploads page and hide other pages
function showUploadsPage() {
    document.getElementById("nav_profile").style.display = "none";
    document.getElementById("nav_favourites").style.display = "none";
    document.getElementById("nav_messages").style.display = "none";
    document.getElementById("nav_uploads").style.display = "block";
}

// Function to show the messages page and hide other pages
function showMessagesPage() {
    document.getElementById("nav_profile").style.display = "none";
    document.getElementById("nav_favourites").style.display = "none";
    document.getElementById("nav_uploads").style.display = "none";
    document.getElementById("nav_messages").style.display = "block";
}

// Set the profile page as the default page on load
window.onload = showProfilePage;

// Add event listeners to the navigation links
document.getElementById("nav_profile_link").addEventListener("click", showProfilePage);
document.getElementById("nav_favourites_link").addEventListener("click", showFavouritesPage);
document.getElementById("nav_uploads_link").addEventListener("click", showUploadsPage);
document.getElementById("nav_messages_link").addEventListener("click", showMessagesPage);
