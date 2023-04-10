
function logout() {
    axios.get('logout')
        .then(
            (response) => {
                window.location.pathname = "/admin"
            }
        )
        .catch(function (error) {
            console.log(error)
        })
}