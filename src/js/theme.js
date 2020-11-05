;(function ($) {
    $('#parentalModal').modal('show')

    const util = (() => {
        //private var/functions
        function serialize(form) {
            const inputs = [...form.elements]

            const object = {}

            inputs.map((input, key) => {
                //console.dir(input)
                if (input.type == `radio`) {
                    if (input.checked) return (object[input.name] = input.value)
                    else return
                }

                if (input.name) object[input.name] = input.value
            })

            return object
        }

        function notify(type, message) {
            const alert = document.createElement('div')

            alert.classList.add('alert', 'alert-dismissible', 'fade', 'show')

            alert.setAttribute('role', 'alert')

            alert.innerHTML = `<span></span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>`

            const component = alert

            const classes = [
                'alert-primary',
                'alert-secondary',
                'alert-success',
                'alert-danger',
                'alert-warning',
                'alert-info',
                'alert-light',
                'alert-dark',
            ]

            if (!component) return

            component.classList.remove(classes.join(','))

            if (type == `success`) component.classList.add('alert-success')

            if (type == `warning`) component.classList.add('alert-warning')

            if (type == `error`) component.classList.add('alert-danger')

            component.querySelector('span').innerHTML = message

            document.body.append(component)

            setTimeout(() => {
                $(component).alert('close')
            }, 5000)
        }

        return {
            //public var/functions
            serialize,
            notify,
        }
    })()

    /**
     * Register new subscribers
     * Form: modal-login__form
     * Route: /wp-json/wp/v2/users/register
     */
    const user = (() => {
        //private var/functions

        //Register Request
        function handleRequestRegister(data) {
            return new Promise((resolve, reject) => {
                if (!data.username) data.username = data.name.replace(/\s+/g, '-').toLowerCase()

                data.password = btoa(data.whatsapp)

                fetch(`/wp-json/wp/v2/users/register`, {
                    method: 'POST',
                    headers: {
                        'content-type': 'application/json',
                    },
                    body: JSON.stringify(data),
                })
                    .then((r) => r.json())
                    .then((res) => {
                        if (res.error || res.code != 200) return reject(res)

                        return resolve(res)
                    })
                    .catch(reject)
            })
        }

        //Register
        function signUp(selector) {
            const form = document.querySelector(selector)

            if (!form) return

            form.addEventListener('submit', async function (e) {
                e.preventDefault()

                try {
                    // body
                    const data = util.serialize(form)

                    if (!data) return

                    const user = await handleRequestRegister(data)

                    const modal = form.closest('.modal')

                    $(modal).modal('hide')

                    $(modal).on('hidden.bs.modal', function (e) {
                        // do something...
                        util.notify(`success`, 'Usuário ' + user.message.user_email + ' criado com sucesso!')

                        $(this).off('hidden.bs.modal')
                    })
                } catch (error) {
                    util.notify(`warning`, error.message)
                    console.log(error)
                }
            })
        }

        return {
            //public var/functions
            signUp,
        }
    })()

    user.signUp(`.modal-login__form`)

    /**
     * Vote system
     * sistema de votos e ações do modal
     * video__show
     */
    const video = (() => {
        //private var/functions
        function handleVoting(id) {
            return new Promise((resolve, reject) => {
                const apiSettings = wpApiSettings

                var myHeaders = new Headers()
                myHeaders.append('Content-Type', 'application/json')
                myHeaders.append('x-wp-nonce', apiSettings.nonce)

                var requestOptions = {
                    method: 'GET',
                    headers: myHeaders,
                    redirect: 'follow',
                }

                fetch(`/wp-json/v1/voting/${id}`, requestOptions)
                    .then((r) => {
                        if (r.status !== 200) {
                            return r.json().then(reject)
                        }

                        return r.json()
                    })
                    .then(resolve)
                    .catch(reject)
            })
        }

        function btnVoting(selector) {
            const btn = document.querySelector(selector)

            if (!btn) return

            btn.addEventListener('click', async function (e) {
                e.preventDefault()

                try {
                    const id = btn.dataset.id

                    if (!id) return util.notify('warning', 'Nenhum video selecionado')

                    await handleVoting(id)

                    //btn.disabled = true

                    btn.classList.add('voted')

                    return util.notify('success', 'Obrigado pelo seu voto')
                } catch (error) {
                    console.log(error)
                    return util.notify('warning', error.message)
                }
            })
        }

        function openVoteModal(selector) {
            const item = [...document.querySelectorAll(selector)]

            const modal = document.querySelector('.modal-video .video__iframe')
            const modalTitle = document.querySelector('.modal-video .video__modal--insta')
            const modalName = document.querySelector('.modal-video .video__modal--name')
            const modalBtn = document.querySelector('.modal-video .btn-vote')

            if (!item) return

            item.forEach((video) => {
                video.addEventListener('click', function (e) {
                    e.preventDefault()

                    const id = video.dataset.id

                    if (!id) return

                    const content = video.closest('figure').querySelector('iframe').cloneNode()
                    const title = video.closest('.videos__item').querySelector('h5').innerText
                    const name = video.closest('.videos__item').querySelector('h4').innerText

                    modal.innerHTML = ``

                    modalBtn.dataset.id = id

                    modalBtn.classList.remove('voted')

                    modal.append(content)

                    modalTitle.innerHTML = title

                    modalName.innerHTML = name
                })
            })
        }

        return {
            //public var/functions
            openVoteModal,
            btnVoting,
        }
    })()

    video.btnVoting('.btn-vote')
    video.openVoteModal('.video__show')
})(jQuery)
