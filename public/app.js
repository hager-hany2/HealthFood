var inputs = document.querySelectorAll(".input-field");
inputs.forEach((inp) => {
    inp.addEventListener("focus", () => {
        inp.classList.add("active");
    });
    inp.addEventListener("blur", () => {
        if (inp.value != "") return;
        inp.classList.remove("active");
    });
});

/*-------------------------------------start view update ----------------------------------------*/
// console.log(document.URL)
if (document.URL.split('product')[1]) {
    let inputs = document.querySelectorAll('form .simulated')
    for (let input of inputs) {
        input.onkeyup = function () {
            // console.log(event.target.value)
            let input_name = event.target.getAttribute('name');
            let written_el = document
                .querySelector('.simulation .info span[related_to="' + input_name + '"]')
            // console.log(written_el);
            written_el.innerHTML = event.target.value;

        }
    }
    //image input
    let simulation_images = document.querySelector('.simulation .images ')
    document.querySelector('form input[type=file]').onchange = function () {
        simulation_images.innerHTML = '';
        // console.log(event.target.files)//print array
        for (let file of event.target.files) {
            let img = document.createElement('img');
            img.src = URL.createObjectURL(file);
            simulation_images.append(img);
        }
    }
}
/*-------------------------------------end view update ----------------------------------------*/
