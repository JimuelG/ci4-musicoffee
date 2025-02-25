document.addEventListener("DOMContentLoaded", function () {

    const exitButton = document.querySelector(".exit");
    const addItem = document.querySelector(".add-item");
    const itemModal = document.querySelector(".item-modal");

    addItem.addEventListener("click", function() {
        if (itemModal) {
            itemModal.classList.remove("hidden");
        }
    });


    if (exitButton){
        exitButton.addEventListener("click", function(){
            itemModal.classList.add("hidden");
        });
    }

});