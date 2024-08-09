import { g as m, s as p, u as C, p as g } from "./showToast-Ccy9fW2B.js";
const S = (u, r, d) => {
  let l = document.querySelector(`#card${r}`).querySelector(".productQuantity"),
    t = parseInt(l.getAttribute("data-quantity")) || 1;
  return (
    u.target.className === "cartIncrement" &&
      (t < d ? ((t += 1), console.log(t)) : t === d && (t = d)),
    u.target.className === "cartDecrement" && t > 1 && (t -= 1),
    (l.textContent = t),
    console.log("productQuantity.textContent =", t),
    l.setAttribute("data-quantity", t.toString()),
    t
  );
};
m();
const q = (u, r, d) => {
    let n = m(),
      l = S(u, r, d);
    const t = document.querySelector(`#card${r}`);
    let c = t.querySelector(".productQuantity").innerText;
    c = Number(c);
    let o = t.querySelector(".productPrice").innerText;
    o = o.replace("₹", "");
    let i = n.find((a) => a.id === r);
    if (i && l > 1) {
      (c = Number(i.quantity) + c), (o = o * c);
      let a = { id: r, quantity: c, price: o };
      const e = n.map((s) => (console.log(a), s.id === r ? a : s));
      localStorage.setItem("productLSCart", JSON.stringify(e)), p("add", r);
    }
    if (i) return !1;
    (o = o * c),
      n.push({ id: r, quantity: c, price: o }),
      localStorage.setItem("productLSCart", JSON.stringify(n)),
      p("add", r),
      C(n);
  },
  y = document.querySelector("#productContainer"),
  f = document.querySelector("#productTemplate"),
  x = (u) => {
    if (!u) return !1;
    u.forEach((r) => {
      const {
          brand: d,
          category: n,
          description: l,
          id: t,
          image: c,
          name: o,
          price: i,
          stock: a,
        } = r,
        e = document.importNode(f.content, !0);
      e.querySelector("#cardValue").setAttribute("id", `card${t}`),
        (e.querySelector(".category").textContent = n),
        (e.querySelector(".productImage").src = c),
        (e.querySelector(".productImage").alt = o),
        (e.querySelector(".productName").textContent = o),
        (e.querySelector(".productPrice").textContent = `₹${i} `),
        (e.querySelector(".productActualPrice").textContent = `₹${Math.floor(
          i * 4
        )}`),
        (e.querySelector(".productStock").textContent = a),
        (e.querySelector(".productDescription").textContent = l),
        e.querySelector(".stockElement").addEventListener("click", (s) => {
          S(s, t, a);
        }),
        e
          .querySelector(".add-to-cart-button")
          .addEventListener("click", (s) => {
            q(s, t, a);
          }),
        y && y.appendChild(e);
    });
  };
x(g);
