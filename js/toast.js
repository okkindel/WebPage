window.onload = function () {

    var url = new URL(window.location.href);
    var state = url.searchParams.get("status");
    var toast = document.getElementById("toast");

    switch (state) {
        case "done":
            toast.innerHTML = "Komentarz Umieszczony!\nDziękujemy!";
            toast.style.background = "rgba(225, 152, 24, 0.8)";
            toast.className = "show shadow";
            break;
        case "cpt_err":
            toast.innerHTML = "Błednie wpisana captcha.\nSpróbuj ponownie.";
            toast.style.background = "rgba(85, 93, 97, 0.8)";
            toast.className = "show shadow";
            break;
        case "unk_err":
            toast.innerHTML = "Wystąpił nieznany błąd.\nPrzepraszamy za utrudnienia.";
            toast.style.color = "rgb(0, 0, 0)";
            toast.style.background = "rgba(200, 200, 200, 0.8)";
            toast.className = "show shadow";
            break;
        default:
            break;
    }

    setTimeout(function () { toast.className = toast.className.replace("show shadow", ""); }, 3000);
}