// document.getElementById("search-box").addEventListener("input", function() {
//     let searchValue = this.value.toLowerCase();
//     let books = document.querySelectorAll(".book");

//     books.forEach(function(book) {
//         let title = book.getAttribute("data-title").toLowerCase();
//         if (title.includes(searchValue)) {
//             book.style.display = "block";
//         } else {
//             book.style.display = "none";
//         }
//     });
// });


document.getElementById("search-box").addEventListener("input", function () {
    let searchValue = this.value.toLowerCase();
    let books = document.querySelectorAll(".book");
    let suggestions = document.getElementById("suggestions");

    suggestions.innerHTML = ""; // Limpa sugestões anteriores

    if (searchValue.trim() === "") {
        suggestions.style.display = "none";
        return;
    }

    books.forEach(function (book) {
        let title = book.getAttribute("data-title").toLowerCase();
        if (title.includes(searchValue)) {
            // Cria uma sugestão na lista
            let suggestionItem = document.createElement("li");
            suggestionItem.textContent = book.getAttribute("data-title");
            suggestionItem.addEventListener("click", function () {
                document.getElementById("search-box").value = book.getAttribute("data-title");
                suggestions.style.display = "none"; // Esconde a lista após a escolha
            });

            suggestions.appendChild(suggestionItem);
        }
    });

    if (suggestions.children.length > 0) {
        suggestions.style.display = "block";
    } else {
        suggestions.style.display = "none";
    }
});

