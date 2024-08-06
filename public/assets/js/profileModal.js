// Get references to the modal and buttons
const openModalButton = document.getElementById("openModalButton");
const closeModalButton = document.getElementById("closeModalButton");
const modal = document.getElementById("myModal");

// Open the modal below the button when the "Open Modal" button is clicked
openModalButton.addEventListener("click", function () {
    const buttonRect = openModalButton.getBoundingClientRect();
    modal.style.top = buttonRect.bottom + "px";
    modal.style.left = buttonRect.left + "px";
    modal.style.display = "block";
});

// Close the modal when the "×" button is clicked
closeModalButton.addEventListener("click", function () {
    modal.style.display = "none";
});

// Close the modal when clicking outside of it
window.addEventListener("click", function (event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});
