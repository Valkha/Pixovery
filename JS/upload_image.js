const image_input = document.querySelector("#image_input");
let uploaded_image = "";
let uploaded_image_path = "";


image_input.addEventListener("change", function() {
    const image =
})

const image = `
<a class="image" href="${uploaded_image_path}" data-lg-size="1920-1200">
                        <div class="zoom">
                            <picture>
                                <source srcset="assets/images/PORTFOLIO/2-beseen.webp" media="(min-width: 800px)">
                                <img src="assets/images/PORTFOLIO/2-beseen.webp" alt="">
                            </picture>
                        </div>
                    </a>
`

document.querySelector('.gallery').insertAdjacentHTML('beforeend', image);