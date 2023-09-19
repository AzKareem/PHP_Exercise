const wrapper = document.getElementById("button-wrapper");
const submitBtn = document.querySelector(".submit");
submitBtn.addEventListener("click", animate);

function animate(){
    const wrapperClasses = wrapper.classList;
    if(!wrapperClasses.contains('checked')){
        wrapperClasses.add('checked');
        setTimeout(function(){
            wrapperClasses.remove('checked')
        }, 4000)
    }
}