(function () {
  const s = document.createElement("link").relList;
  if (s && s.supports && s.supports("modulepreload")) return;
  for (const e of document.querySelectorAll('link[rel="modulepreload"]')) o(e);
  new MutationObserver((e) => {
    for (const t of e)
      if (t.type === "childList")
        for (const i of t.addedNodes)
          i.tagName === "LINK" && i.rel === "modulepreload" && o(i);
  }).observe(document, { childList: !0, subtree: !0 });
  function a(e) {
    const t = {};
    return (
      e.integrity && (t.integrity = e.integrity),
      e.referrerPolicy && (t.referrerPolicy = e.referrerPolicy),
      e.crossOrigin === "use-credentials"
        ? (t.credentials = "include")
        : e.crossOrigin === "anonymous"
        ? (t.credentials = "omit")
        : (t.credentials = "same-origin"),
      t
    );
  }
  function o(e) {
    if (e.ep) return;
    e.ep = !0;
    const t = a(e);
    fetch(e.href, t);
  }
})();
const d = [
    {
      id: 1,
      name: "Atomic Habits",
      category: "Nobel",
      author: "James Clear",
      price: 615,
      stock: 20,
      description:
        "THE PHENOMENAL INTERNATIONAL BESTSELLER - 1 MILLION COPIES SOLDTransform your life with tiny changes in behaviour - starting now. People think that when you want to change your life, you need to think big.",
      image: "./assets/atomic.jpg",
    },
    {
      id: 2,
      name: "Lets Crack SSB Interview",
      category: "Education",
      author: "SSBCrack",
      price: 488,
      stock: 50,
      image: "./assets/ssb.jpg",
      description:
        "This SSB Interview book by SSBCrack.com is an insight to the procedure adapted at Service Selection Boards, for the selection into the Indian Armed Forces.",
    },
    {
      id: 3,
      name: "Breakout Trading Made Easy",
      category: "Magzine",
      author: "Sunil Gurjar",
      price: 249,
      stock: 30,
      image: "./assets/breaking-out.jpg",
      description:
        "Using his own trading experience, Gurjar reveals the power of classical chart patterns in a strategy that has not only multiplied his capital but also shielded it during static or erratic market phases.",
    },
    {
      id: 4,
      name: "Karma",
      category: "Nobel",
      author: "Sadhguru",
      price: 225,
      stock: 40,
      image: "./assets/karma.jpg",
      description:
        "A Yogi's Guide to Crafting Your Destiny NEW YORK TIMES, USA TODAY, and PUBLISHERS WEEKLY BESTSELLER , must-read book on spirituality and self-improvement by Sadhguru",
    },
    {
      id: 5,
      name: "Crime, Grime and Gumption",
      category: "Education",
      author: "OP Singh",
      price: 364,
      stock: 30,
      image: "./assets/crime-grime.jpg",
      description:
        " Case Files of an Ips OfficerO.P. Singh had his first brush with law at an early age―soon, the house he and his mother were staying in, alone, was burgled",
    },
    {
      id: 6,
      name: "The Psychology of Money",
      category: "Magzine",
      author: "Morgan Housel",
      price: 303,
      stock: 50,
      image: "./assets/psychology.jpg",
      description:
        "Timeless lessons on wealth, greed, and happiness doing well with money isn?t necessarily about what you know. It?s about how you behave.",
    },
  ],
  n = document.querySelector("#cartValue"),
  c = (r) =>
    (n.innerHTML = `<i class="fa-solid fa-cart-shopping"></i> ${r.length}`),
  l = () => {
    let r = localStorage.getItem("productLSCart");
    return r ? ((r = JSON.parse(r)), c(r), r) : [];
  };
function p(r, s) {
  const a = document.createElement("div");
  a.classList.add("toast"),
    r === "add"
      ? (a.textContent = `Product with ID ${s} has been added.`)
      : (a.textContent = `Product with ID ${s} has been deleted.`),
    document.body.appendChild(a),
    setTimeout(() => {
      a.remove();
    }, 2e3);
}
export { l as g, d as p, p as s, c as u };
