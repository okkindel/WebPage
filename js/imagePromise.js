function getImage(url) {
    return new Promise(function (resolve, reject) {
        var img = new Image()
        img.onload = function () {
            resolve(url)
        }
        img.onerror = function () {
            reject(url)
        }
        img.src = url
    })
}

function onSuccess(url) { document.getElementById('photo').src = url; }
function onFailure(url) { console.log('Error loading ' + url) }
getImage('../assets/me.jpg').then(onSuccess, onFailure);