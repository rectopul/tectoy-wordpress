const tabsVotes = [...document.querySelectorAll('.widget__video--item')]

if (tabsVotes) {
    tabsVotes.forEach((tab) => {
        tab.addEventListener('click', function (e) {
            e.preventDefault()

            tab.classList.toggle('show')
        })
    })
}
