document.addEventListener("click", (ev) => {
  let id

  // join btn listing
  if (ev.target.closest("#join-organization-btn")) {

    id = ev.target.dataset.itemId;

    queryString(id)

    modal_overlay("join-organization-modal")
  }

  // join confirm
  if (ev.target.closest("#join-organization-form input")) {
    document.querySelector("#join-organization-form").action = `http://nio.com/organizations/${getQueryString('id')}/join`
  }

  if (ev.target.closest("#join-organization-modal")) {
    modal_overlay("join-organization-modal")
  }

})

function modal_overlay(id) {
  document.querySelector(`#${id}`)?.classList.toggle("hidden");
  document.querySelector("#modal-overlay").classList.toggle("hidden");
}

// build
function queryString(id) {
  const url = new URL(window.location)
  url.searchParams.set("id", id)
  history.pushState(null, '', url);
}

// get query string
function getQueryString(item) {
  const searchParams = new URLSearchParams(window.location.search);
  if (searchParams.has(item)) {
    return searchParams.get(item)
  }
}
