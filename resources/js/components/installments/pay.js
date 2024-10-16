document.addEventListener("click", function (ev) {
  if (ev.target.closest("#installment-pay-btn")) {
    queryString("o", ev.target.dataset.orgId)
    queryString("s", ev.target.dataset.subId)
    queryString("i", ev.target.dataset.insId)

    modal_overlay("installment-pay-modal")
  }

  if (ev.target.closest("#installment-pay-modal input")) {

    document.querySelector("#installment-pay-form").action = `http://nio.com/installments/pay/${getQueryString("o")}/${getQueryString("s")}/${getQueryString("i")}`
  }

  if (ev.target.closest("#installment-pay-modal")) {
    modal_overlay("installment-pay-modal")
  }
})

function modal_overlay(id) {
  document.querySelector(`#${id}`)?.classList.toggle("hidden");
  document.querySelector("#modal-overlay").classList.toggle("hidden");
}

// build
function queryString(key, value) {
  const url = new URL(window.location)
  url.searchParams.set(key, value)
  history.pushState(null, '', url);
}

// get query string
function getQueryString(item) {
  const searchParams = new URLSearchParams(window.location.search);
  if (searchParams.has(item)) {
    return searchParams.get(item)
  }
}