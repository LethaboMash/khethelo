document.addEventListener("DOMContentLoaded", function () {
    const defaultItem = {
        title: "Product",
        imageUrl: "product.jpg", // Placeholder image
        description: "This is a sample product description.",
        link: "#"
    };

    const itemList = document.querySelector(".item_list");

    // Function to generate item block HTML dynamically
    function generateItemBlock(item) {
        const itemBlock = document.createElement("div");
        itemBlock.classList.add("item_blocks");

        const title = document.createElement("h2");
        title.textContent = item.title;
        itemBlock.appendChild(title);

        const img = document.createElement("img");
        img.src = item.imageUrl;
        img.alt = item.title;
        itemBlock.appendChild(img);

        const description = document.createElement("p");
        description.textContent = item.description;
        itemBlock.appendChild(description);

        const learnMore = document.createElement("a");
        learnMore.href = item.link;
        learnMore.textContent = "Buy Now";
        itemBlock.appendChild(learnMore);

        return itemBlock;
    }

    // Function to add a new item to the list
    function addItem(item) {
        const itemBlock = generateItemBlock(item);
        itemList.appendChild(itemBlock);
    }

    // Add 6 default items for demonstration
    for (let i = 0; i < 30; i++) {
        addItem(defaultItem);
    }
});