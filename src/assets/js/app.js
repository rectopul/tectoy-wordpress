

// Shorthand for $( document ).ready()
$(function() {
    $('#parentalModal').modal('show')
});

alert('olá')

/**
 * Login
 */
fetch(`/wp-json/login`, {
    method: 'POST',
    headers: {
        'content-type': 'application/json',
    },
    body: JSON.stringify({username: `admin`, password: `admin`}),
})
    .then(r => r.json())
    .then(console.log)
    .catch(console.log)