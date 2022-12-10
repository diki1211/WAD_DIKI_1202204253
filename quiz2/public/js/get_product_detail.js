const cards = document.querySelectorAll(".card");
cards.forEach((card) => {
  card.addEventListener("click", function () {
    const id = this.getAttribute("data-id");
    document.location.href = `http://localhost:8080/praktikum/quiz2/public/product/detail/${id}`;
  });
});
